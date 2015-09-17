<?php
/*
* $Author ��PHPYUN�����Ŷ�
*
* ����: http://www.phpyun.com
*
* ��Ȩ���� 2009-2015 ��Ǩ�γ���Ϣ�������޹�˾������������Ȩ����
*
* ���������δ����Ȩǰ���£�����������ҵ��Ӫ�����ο����Լ��κ���ʽ���ٴη�����
 */
class index_controller extends common
{
	function index_action()
	{
		if($_COOKIE['uid']!=""&&$_COOKIE['username']!="")
		{
			if($_GET['type']=="out")
			{
				if($this->config['sy_uc_type']=="uc_center")
				{
					$M=$this->MODEL();
					$M->uc_open();
					$logout = uc_user_synlogout();
				}elseif($this->config['sy_pw_type']){
					include(APP_PATH."/api/pw_api/pw_client_class_phpapp.php");
					$username=$_SESSION['username'];
					$pw=new PwClientAPI($username,"","");
					$logout=$pw->logout();
					$this->unset_cookie();
				}else{
					$this->unset_cookie();
				}
			}else{
				$this->ACT_msg("index.php", "���Ѿ���¼�ˣ�");
			}
		}

		if($_GET['backurl']=='1')
		{
			setCookie("backurl",$_SERVER['HTTP_REFERER'],time()+60);
		}
		if(!$_GET['usertype'])
		{
			$_GET['usertype']=1;
		}
		
		$this->yunset("usertype",$_GET['usertype']);
		$this->yunset("loginname",$_COOKIE['loginname']);
		$this->seo("login");
		$this->yun_tpl(array('index'));
	}

	function loginsave_action()
	{
		$username=yun_iconv("utf-8","gbk",$_POST['username']);

		if($this->uid > 0 && $_COOKIE['username']!="")
		{
			if($_COOKIE['usertype']=='1')
			{
				$this->ajaxlogin("�������Ǹ��˻�Ա��¼״̬��");
			}elseif($_COOKIE['usertype']=='2'){
				$this->ajaxlogin("����������ҵ��Ա��¼״̬��");
			}
		}

		if($_POST['path']!="index")
		{
			if(strstr($this->config['code_web'],'ǰ̨��½'))
			{
				session_start();
				if(md5($_POST['authcode'])!=$_SESSION['authcode'])
				{
					unset($_SESSION['authcode']);
					$this->ajaxlogin("��֤�����!");
				}
			}
		}
		if(!$this->CheckRegUser($username) && !$this->CheckRegEmail($username))
		{
			$this->ajaxlogin("��Ч���û���!");
		}
		if($username!="")
		{
			$Member=$this->MODEL("userinfo");
			if($this->config['sy_uc_type']=="uc_center")
			{
				$this->uc_open();
				$uname = $username;
				list($uid, $username, $password, $email) = uc_user_login($username, $_POST['password']);

				if($uid<1)
				{
					$user = $Member->GetMemberOne(array("username"=>$uname),array("field"=>"username,email,uid,password,salt"));
					$pass = md5(md5($_POST['password']).$user['salt']);
					if($pass==$user['password'])
					{
						$uid = $user['uid'];
						uc_user_register($user['username'],$_POST['password'],$user['email']);
						list($uid, $username, $password, $email) = uc_user_login($uname, $_POST['password']);

					}else{
						$this->ajaxlogin("�˻����������");
					}
				}else if($uid > 0) {
					$ucsynlogin=uc_user_synlogin($uid);
					$msg =  '��¼�ɹ���';
					$user = $Member->GetMemberOne(array("username"=>$username),array("field"=>"`uid`,`usertype`,`email_status`"));
					if(!empty($user))
					{
						 if (session_id() == ""){session_start();}
						if($_SESSION['qq']['openid'])
						{
							$Member->UpdateMember(array("qqid"=>$_SESSION['qq']['openid']),array("username"=>$username));
							unset($_SESSION['qq']);
						}
						if($_SESSION['wx']['openid'])
						{
							$udate = array('wxopenid'=>$_SESSION['wx']['openid']);
							
							if($_SESSION['wx']['unionid'])
							{
								$udate['unionid']  = $_SESSION['wx']['unionid'];
							}
							$Member->UpdateMember($udate,array("username"=>$username));
							unset($_SESSION['wx']);
						}
						if($_SESSION['sina']['openid'])
						{
							
							$Member->UpdateMember(array("sinaid"=>$_SESSION['sina']['openid']),array("username"=>$username));
							unset($_SESSION['sina']);
						}
						if(!$user['usertype']){
							$this->unset_cookie();
							$this->addcookie("username",$username,time()+3600);
							$this->addcookie("password",$_POST['password'],time()+3600);
							$this->ajaxlogin($ucsynlogin,Url("login",array("c"=>"utype"),"1"),'3');
						}
						if($this->config['user_status']=="1"){
							if($user['email_status']!="1"){
								$this->ajaxlogin("�����˻���δ������ȼ���!",Url("activate",'',"1"));
								die;
							}
						}
						if($_POST['loginname']){
							setcookie("loginname",$username,time()+8640000);
						}
						$this->autoupjob($user['uid'],$user['usertype']);

					}else{
						$this->unset_cookie();
						$this->addcookie("username",$username,time()+3600);
						$this->addcookie("password",$_POST['password'],time()+3600);
						$this->ajaxlogin($ucsynlogin,Url("login",array("c"=>"utype"),"1"),'3');
					}
					$this->ajaxlogin($ucsynlogin,$this->config['sy_weburl']."/member",'2');
					
				} elseif($uid == -1) {

					$msg =  '�û�������,���߱�ɾ��';
				} elseif($uid == -2) {
					$msg =  '�������';
				} else {
					$msg = '���û�δ����!';
				}
				$this->ajaxlogin($ucsynlogin,Url("login",array("c"=>"utype"),"1"),'3');
			}else{
				$user = $Member->GetMemberOne(array("username"=>$username),array("field"=>"`pw_repeat`,`pwuid`,`uid`,`username`,`salt`,`email`,`password`,`usertype`,`status`,`email_status`"));
				if($this->config['sy_pw_type']=="pw_center")
				{
					if($user['pw_repeat']!="1")
					{
						include(APP_PATH."/api/pw_api/pw_client_class_phpapp.php");
						$pw=new PwClientAPI($username,$_POST['password'],"");
						$pwuser =$pw->user_login();
						if($pwuser['uid']>0){
							if(empty($user)){
								$user = $this->newuser($Member,$pwuser['username'],$pwuser['password'],$pwuser['email'],$user['usertype'],$pwuser['uid'],$qqid);
							}else if($pwuser['uid']==$user['pwuid']){
								$pwrows=$pw->login($pwuser['uid']);
								$this->add_cookie($user['uid'],$user['username'],$user['salt'],$user['email'],$user['password'],$user['usertype'],$_POST['loginname']);
								$time=strtotime(date("Y-m-d"));
								$row=$Member->GetPayinfoOne(array("`com_id`='".$user['uid']."' and `pay_time`>'".$time."' and `pay_remark`='��Ա��¼'"));
								if(empty($row))
								{
									$this->get_integral_action($user['uid'],"integral_login","��Ա��¼");
								}
								$this->ajaxlogin('��¼�ɹ�','','2');
							}else{
								$Member->UpdateMember(array("pw_repeat"=>"1"),array("uid"=>$user['uid']));
							}
						}
					}
				}

				if(is_array($user)){

					$pass = md5(md5($_POST['password']).$user['salt']);
					if($user['password']==$pass)
					{
						if($user['status']=="2")
						{
							$this->ajaxlogin("�����˺��ѱ�����!",Url("register",array("c"=>"ok","type"=>2),"1"));
						}
						if($user['usertype']=="2" && $this->config['com_status']!="1"&&$user['status']!="1"){
							$this->ajaxlogin("����û��ͨ�����!",Url("register",array("c"=>"ok","type"=>3),"1"));
						}
						if($this->config['user_status']=="1" && $user['usertype']=="1"&&$user['email_status']!="1"){
							$this->ajaxlogin("�����˻���δ������ȼ��",Url("activate",'',"1"));
						}
						if (session_id() == ""){session_start();}
						if($_SESSION['qq']['openid'])
						{
							$Member->UpdateMember(array("qqid"=>$_SESSION['qq']['openid']),array("username"=>$username));
							unset($_SESSION['qq']);
						}
						if($_SESSION['wx']['openid'])
						{
							$udate = array('wxopenid'=>$_SESSION['wx']['openid']);
							
							if($_SESSION['wx']['unionid'])
							{
								$udate['unionid']  = $_SESSION['wx']['unionid'];
							}
							$Member->UpdateMember($udate,array("username"=>$username));
							unset($_SESSION['wx']);
						}
						if($_SESSION['sina']['openid'])
						{
							
							$Member->UpdateMember(array("sinaid"=>$_SESSION['sina']['openid']),array("username"=>$username));
							unset($_SESSION['sina']);
						}

						$time = time();
						$ip = fun_ip_get();
						$Member->UpdateMember(array("login_ip"=>$ip,"login_date"=>$time,"login_hits"=>"`login_hits`+1"),array("uid"=>$user['uid']));
						$this->unset_cookie();
						$this->add_cookie($user['uid'],$user['username'],$user['salt'],$user['email'],$user['password'],$user['usertype'],$_POST['loginname']);
						$time=strtotime(date("Y-m-d"));

						$row=$Member->GetPayinfoOne(array("`com_id`='".$user['uid']."' and `pay_time`>'".$time."' and `pay_remark`='��Ա��¼'"));

						if(empty($row))
						{
							$this->get_integral_action($user['uid'],"integral_login","��Ա��¼");
						}
						if($qqid)
						{
							$Member->UpdateMember(array("qqid"=>$qqid,"username"=>$username),array("uid"=>$user['uid']));
						}
						if($user['usertype']=='1'){
							$Resume=$this->MODEL("resume");
							$info=$Resume->SelectResumeOne(array("uid"=>$user['uid']),"`name`,`birthday`");
						}else if($user['usertype']=='2'){ 
							$Company=$this->MODEL("company");
							$info=$Company->GetCompanyInfo(array("uid"=>$user['uid']),array("field"=>'name'));
							$this->autoupjob($user['uid'],$user['usertype']);
						}
						if($info['name']){
							$this->ajaxlogin('��¼�ɹ�',$this->config['sy_weburl']."/member",'1');
						}else if($info['name']==''){
							$this->ajaxlogin('��¼�ɹ�',$this->config['sy_weburl']."/member/index.php?c=info",'1');
						}
					}else{
						$this->ajaxlogin("���벻��ȷ��");
					}
				}else{
					$this->ajaxlogin("���û������ڣ�");
				}
			}
		}else{
			$this->ajaxlogin("�û�������Ϊ�գ�");
		}
	}
	function newuser($Member,$username,$password,$email,$usertype,$pwuid,$qqid='')
	{
		$salt = substr(uniqid(rand()), -6);
		$pass = md5($password.$salt);
		$mdata['username']=$username;
		$mdata['password']=$pass;
		$mdata['email']=$email;
		$mdata['usertype']=$usertype;
		$mdata['status']=$this->config['user_status'];
		$mdata['salt']=$salt;
		$mdata['reg_date']=time();
		$mdata['reg_ip']=fun_ip_get();
		$mdata['pwuid']=$pwuid;
		$Member->AddMember($mdata);
		$this->unset_cookie();
		$new_info = $Member->GetMemberOne(array("username"=>$username));
		$userid = $new_info['uid'];
		if($this->config['sy_pw_type']=="pw_center")
		{
			$Member->UpdateMember(array("pwuid"=>$pwuid),array("uid"=>$userid));
		}
		$this->add_cookie($userid,$username,$salt,$email,$pass,$usertype);
		if($usertype=="1")
		{
			$table = "member_statis";
			$table2 = "resume";
			$data['uid']=$userid;
			$data2['uid']=$userid;
			$data2['email']=$email;
		}elseif($usertype=="2"){
			$table = "company_statis";
			$table2 = "company";
			$data=$Member->FetchRatingInfo(array("uid"=>$userid));
			$data2['uid']=$userid;
			$data2['linkmail']=$email;
		}
		if($qqid)
		{
			$Member->UpdateMember(array("qqid"=>$qqid),array("uid"=>$userid));
		}
		$Member->InsertReg($table,$data);
		$Member->InsertReg($table2,$data2);
		return $new_info;
	}
	function ajaxlogin($msg='',$url='',$error=0)
	{
		if($msg)
		{
			$msg = iconv("gbk","utf-8",$msg);
		}

		echo json_encode(array("msg"=>$msg,"url"=>$url,"error"=>$error));

		die;

	}
	function rest_action()
	{
		$this->unset_cookie();
		$url = Url("login",array("usertype"=>"1"),"1");
		header("Location: ".$url);
	}

	function autoupjob($uid,$usertype){
		if($usertype=='2'){
			$Job=$this->Model("job");
			$Job->UpdateComjob(array("lastupdate"=>time()),array("`uid`='".$uid."' AND `autotype`='2' AND `autotime`>'".time()."'"));
		}
	}
	function utype_action()
	{
		if($this->uid)
		{
			header("Location:".Url('member'));
		}
		$this->seo("login");
		$this->yun_tpl(array('utype'));
	}

	function setutype_action(){		
		if($_COOKIE['username'] && $_COOKIE['password'] && ($this->CheckRegUser($_COOKIE['username']) OR $this->CheckRegEmail($_COOKIE['username'])))
		{
			$Member=$this->MODEL("userinfo");
			$user = $Member->GetMemberOne(array("username"=>$_COOKIE['username']),array("field"=>"uid,username,password,salt,usertype"));
			
			$pass = md5(md5($_COOKIE['password']).$user['salt']);
			$userid = $user['uid'];

			if(!$user['usertype'])
			{
				if($pass==$user['password'] && $user['password']!='')
				{
					$usertype = (int)$_GET['usertype'];
					if($usertype=='1')
					{
						$table = "member_statis";
						$table2 = "resume";
						$data1=array("uid"=>$userid);
						$data2=array("uid"=>$userid);
						
					}elseif($usertype=='2')
					{
						
						$table = "company_statis";
						$table2 = "company";
						$data1=$Member->FetchRatingInfo(array("uid"=>$userid));
						$data2['uid']=$userid;

					}
					$Member->UpdateMember(array("usertype"=>$usertype),array("uid"=>$userid));
					$Member->InsertReg($table,$data1);
					$Member->InsertReg($table2,$data2);
					$Member->InsertReg("friend_info",array('uid'=>$userid,'nickname'=>$_COOKIE['username']));
					$this->add_cookie($userid,$user['username'],$user['salt'],$user['email'],$user['password'],$usertype);
					header("Location:".Url('member'));
				}else{
					echo "����ʧ��";
				}
			}else{
				echo "����ʧ��";
			}
		}else{
			header("Location:".Url('index'));
		}
	}
}
