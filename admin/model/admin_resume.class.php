<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2015 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class admin_resume_controller extends common{
	function set_search(){
		include PLUS_PATH."/user.cache.php";
        foreach($userdata['user_type'] as $k=>$v){
            $ltarr[$v]=$userclass_name[$v];
        }
        foreach($userdata['user_salary'] as $k=>$v){
            $ltar[$v]=$userclass_name[$v];
        }
        foreach($userdata['user_report'] as $k=>$v){
            $ltarry[$v]=$userclass_name[$v];
        }
		$uptime=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$adtime=array('1'=>'今天','3'=>'最近三天','7'=>'最近七天','15'=>'最近半月','30'=>'最近一个月');
		$this->yunset("adtime",$adtime);
		$this->yunset("uptime",$uptime);
		$search_list[]=array("param"=>"type","name"=>'工作性质',"value"=>$ltarr);
		$search_list[]=array("param"=>"salary","name"=>'待遇要求',"value"=>$ltar);
		$search_list[]=array("param"=>"report","name"=>'到岗时间',"value"=>$ltarry);
		$search_list[]=array("param"=>"uptime","name"=>'更新时间',"value"=>$uptime);
		$search_list[]=array("param"=>"adtime","name"=>'添加时间',"value"=>$adtime);
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$this->set_search();
		$wheres="1";
		$time = time();
        $UrlParams=array('id','hy','job1','job1_son','job_post','provinceid','cityid','three_cityid','salary','type','number','exp','report','sex','edu','marriage');
        foreach($UrlParams as $v){
            if($_GET[$v]){
                $where .= " AND `$v` = '".$_GET[$v]."' ";
			    $urlarr[$v]=$_GET[$v];
            }else{
                unset($urlarr[$v]);
                unset($_GET[$v]);
            }
        }
        if($_GET['keyword']){
			$wheres .= " AND `name` like '%".$_GET['keyword']."%' ";
			$urlarr['keyword']=$_GET['keyword'];
		}
		$where="`height_status`=0";
		if($_GET['search']){
			extract($_GET);
			if ($keyword!=""){
				$where.=" and `name` like '%".$keyword."%'";
				$urlarr['keyword']=$_GET['keyword'];
			}
			$urlarr['search']=$_GET['search'];
		}
		if($_GET['adtime']){
			if($_GET['adtime']=='1'){
				$where .=" and `ctime`>'".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where .=" and `ctime`>'".strtotime('-'.intval($_GET['adtime']).' day')."'";
			}
			$urlarr['adtime']=$_GET['adtime'];
		}
		if($_GET['uptime']){
			if($_GET['uptime']=='1'){
				$where .=" and `lastupdate`>'".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where .=" and `lastupdate`>'".strtotime('-'.intval($_GET['uptime']).' day')."'";
			}
			$urlarr['uptime']=$_GET['uptime'];
		}
		if($_GET['rec_resume']){
			$rec_resume=$_GET['rec_resume']==1?1:0;
			$where .= " AND `rec_resume` = '".$rec_resume."' ";
			$urlarr['rec_resume']=$_GET['rec_resume'];
		}
		if($_GET['id'])
		{
			$where.=" and `id`='".$_GET['id']."'";
			$urlarr['id']=$_GET['id'];
		}

		if($_GET['order']){
			if($_GET['t']=="time"){
				$where.=" order by `lastupdate` ".$_GET['order'];
			}else{
				$where.=" order by ".$_GET['t']." ".$_GET['order'];
			}
		}else{
			$where.=" order by `id` desc";
		}
		$urlarr['order']=$_GET['order'];
		if($_GET['searchid']){
			$where = "`id` in (".$_GET['searchid'].")";
			$urlarr['searchid']=$_GET['searchid'];
		}
		if($_GET['advanced']){
			$where = $wheres;
			$urlarr['advanced']=$_GET['advanced'];
		}

		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
        $CacheM=$this->MODEL('cache');
		$rows=$this->get_page('resume_expect',$where,$pageurl,$this->config['sy_listnum']);

        $CacheList=$CacheM->GetCache(array('city','job','user'));
        $this->yunset($CacheList);
        extract($CacheList);
		if(is_array($rows)){
			foreach($rows as $k=>$v){
			    $rows[$k]['edu_n']=$userclass_name[$v['edu']];
				$rows[$k]['exp_n']=$userclass_name[$v['exp']];
				$rows[$k]['cityid_n']=$city_name[$v['cityid']];
				$rows[$k]['salary_n']=$userclass_name[$v['salary']];
				$rows[$k]['report_n']=$userclass_name[$v['report']];
				$rows[$k]['type_n']=$userclass_name[$v['type']];
				$job_classid=@explode(",",$v['job_classid']);
				$job_class_name=array();
				if(is_array($job_classid)){
					$i=0;
					foreach($job_classid as $key=>$val){
						$jobname[$key]=$val;
						if($val!=""){
							$i=$i+1;
						}
						$job_class_name[]=$job_name[$val];
					}
					$rows[$k]['jobnum']=$i;
					$rows[$k]['job_post_n']=$job_name[$jobname[0]];
				}
				if($v['topdate']>$time){
					$rows[$k]['top_day'] = ceil(($v['topdate']-$time)/86400);
				}else{
					$rows[$k]['top_day'] = "0";
				}
				$rows[$k]['job_class_name']=@implode('、',$job_class_name);
			}
		}

		$this->yunset(array('get_type'=>$_GET,'rows'=>$rows));
		$this->yuntpl(array('admin/admin_resume'));
	}
	function refresh_action(){
		if($_GET['id']){
			$data['lastupdate']=time();
			$where['id']=(int)$_GET['id'];
			$nid=$this->obj->update_once("resume_expect",$data,$where);
			$nid?$this->layer_msg('刷新简历(ID:'.$_GET[id].')成功！',9,0,$_SERVER['HTTP_REFERER']):$this->layer_msg('刷新失败！',8,0,$_SERVER['HTTP_REFERER']);
		}
	}
	function refreshs_action()
	{
		if($_POST['ids'])
		{
			$ids=@explode(",",$_POST['ids']);
			foreach($ids as $v)
			{
				$id_arr[] = (int)$v;
			}
		}
		$this->obj->DB_update_all("resume_expect","`lastupdate`='".time()."'","`id` in (".@implode(",",$id_arr).")");
		$this->admin_log("刷新简历(ID:".$_POST['ids'].")成功！");
	}

	function del_action(){
		$this->check_token();
	    if($_GET['del']){
	    	$del=$_GET['del'];
	    	if($del){
	    		if(is_array($del)){
			    	foreach($del as $v){
			    	   $this->del_member($v);
			    	}
					$layer_type='1';
					$del=implode(",",$del);
		    	}else{
		    		 $this->del_member($del);
					 $layer_type='0';
		    	}
				$this->layer_msg("简历(ID:".$del.")删除成功！",9,$layer_type,$_SERVER['HTTP_REFERER'],2,1);
	    	}else{
				$this->layer_msg("请选择您要删除的信息！",8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }
	}
	function del_member($id)
	{
		$id_arr = @explode("-",$id);

		if($id_arr[0])
		{
			$result=$this->obj->DB_delete_all("resume_expect","`id`='".$id_arr[0]."'" );
			$del_array=array("resume_cert","resume_edu","resume_other","resume_project","resume_skill","resume_training","resume_work","resume_doc","user_resume","resume_show","down_resume","userid_job");
			$show=$this->obj->DB_select_all("resume_show","`eid`='".$id_arr[0]."' and `picurl`<>''","`picurl`");
			if(is_array($show))
			{
				foreach($show as $v)
				{
					unlink_pic(".".$show['picurl']);
				}
			}
			foreach($del_array as $v){
				$this->obj->DB_delete_all($v,"`eid`='".$id_arr[0]."'");
			}
			$this->obj->DB_update_all("member_statis","`resume_num`=`resume_num`-1","`uid`='".$id_arr[1]."'");
		}
		return $result;
	}

	function addresume_action(){
		if($_POST['next']){
			if($_POST['uid']){
				$this->obj->update_once('resume',array('name'=>trim($_POST['resume_name']),'sex'=>$_POST['sex'],'birthday'=>$_POST['birthday'],'living'=>$_POST['living'],'edu'=>$_POST['edu'],'exp'=>$_POST['exp'],'telphone'=>trim($_POST['moblie']),'email'=>trim($_POST['email']),'description'=>trim($_POST['description'])),array('uid'=>$_POST['uid']));
				$this->obj->update_once('member',array('email'=>trim($_POST['email']),'moblie'=>trim($_POST['moblie'])),array('uid'=>$_POST['uid']));
				echo "<script type='text/javascript'>window.location.href='index.php?m=admin_resume&c=saveresume&uid=".$_POST['uid']."'</script>";die;
			}else{
				if($this->config["sy_uc_type"]=="uc_center"){
					$this->uc_open();
					$user = uc_get_user($_POST['username']);
				}else{
					$user = $this->obj->DB_select_once("member","`username`='".$_POST['username']."'","`uid`");
				}
				$password=trim($_POST['password']);
				if(is_array($user)){
					$this->ACT_layer_msg("该会员已经存在！",8,"index.php?m=user_member&c=add",2);die;
				}else{
					$time = time();
					$ip = fun_ip_get();
					if($this->config["sy_uc_type"]=="uc_center"){
						$uid=uc_user_register($_POST['username'],$password,$_POST['email']);
						if($uid<0){
							$this->obj->get_admin_msg("index.php?m=com_member&c=add","该邮箱已存在！");
						}else{
							list($uid,$username,$email,$password,$salt)=uc_get_user($_POST['username'],$password);
							$value = "`username`='".$_POST['username']."',`password`='$password',`email`='".$_POST['email']."',`usertype`='1',`salt`='$salt',`moblie`='".$_POST['moblie']."',`reg_date`='$time',`reg_ip`='$ip'";
						}
					}else{
						$salt = substr(uniqid(rand()), -6);
						$pass = md5(md5($password).$salt);
						$value = "`username`='".$_POST['username']."',`password`='$pass',`email`='".$_POST['email']."',`usertype`='1',`status`='1',`salt`='$salt',`moblie`='".$_POST['moblie']."',`reg_date`='$time',`reg_ip`='$ip'";
					}
					$nid = $this->obj->DB_insert_once("member",$value);
					if($nid>0){
						$this->obj->DB_insert_once("resume","`uid`='$nid',`email`='".$_POST['email']."',`telphone`='".$_POST['moblie']."',`name`='".$_POST['resume_name']."',`description`='".$_POST['description']."',`sex`='".$_POST['sex']."',`living`='".$_POST['living']."',`exp`='".$_POST['exp']."',`edu`='".$_POST['edu']."',`birthday`='".$_POST['birthday']."'");
						$this->obj->DB_insert_once("member_statis","`uid`='$nid'");
						$this->obj->DB_insert_once("friend_info","`uid`='$nid',`nickname`='".$_POST['resume_name']."',`usertype`='1'");
						echo "<script type='text/javascript'>window.location.href='index.php?m=admin_resume&c=saveresume&uid=".$nid."'</script>";die;
					}else{
						$this->ACT_layer_msg("会员添加失败，请重试！",8,"index.php?m=user_member&c=add",2);die;
					}
				}
			}
		}else{
			$this->yunset($this->MODEL('cache')->GetCache(array('user')));
			$row=$this->obj->DB_select_once("resume","`uid`='".$_GET['uid']."'");
			$this->yunset("row",$row);
			$this->yuntpl(array('admin/admin_addresume'));
		}
	}
	function saveresume_action(){
		$arr=$this->MODEL('cache')->GetCache(array('user','city','job','hy'));
		$this->yunset($arr);
		if($_GET['e']){
			$eid=(int)$_GET['e'];
			$row=$this->obj->DB_select_once("resume_expect","id='".$eid."' AND `uid`='".$_GET['uid']."'");

			if(!is_array($row) || empty($row))
			{
				$this->ACT_msg("index.php?c=resume","无效的简历！");
			}
			$job_classid=@explode(",",$row['job_classid']);
			if(is_array($job_classid)){
				foreach($job_classid as $key){
					$job_classname[]=$arr['job_name'][$key];
				}
				$this->yunset("job_classname",pylode(' ',$job_classname));
			}
			$this->yunset("job_classid",$job_classid);
			$this->yunset("row",$row);
			$skill = $this->obj->DB_select_all("resume_skill","`eid`='".$eid."' AND `uid` = '".$_GET['uid']."'");
			$this->yunset("skill",$skill);
			$work = $this->obj->DB_select_all("resume_work","`eid`='".$eid."' AND `uid` = '".$_GET['uid']."'");
			$this->yunset("work",$work);
			$project = $this->obj->DB_select_all("resume_project","`eid`='".$eid."' AND `uid` = '".$_GET['uid']."'");
			$this->yunset("project",$project);
			$edu = $this->obj->DB_select_all("resume_edu","`eid`='".$eid."' AND `uid` = '".$_GET['uid']."'");
			$this->yunset("edu",$edu);
			$training = $this->obj->DB_select_all("resume_training","`eid`='".$eid."' AND `uid` = '".$_GET['uid']."'");
			$this->yunset("training",$training);
			$cert = $this->obj->DB_select_all("resume_cert","`eid`='".$eid."' AND `uid` = '".$_GET['uid']."'");
			$this->yunset("cert",$cert);
			$other = $this->obj->DB_select_all("resume_other","`eid`='".$eid."' AND `uid` = '".$_GET['uid']."'");
			$this->yunset("other",$other);
		}
		$resume=$this->obj->DB_select_once("resume","`uid`='".$_GET['uid']."'");
		$this->yunset("resume",$resume);
		$this->yunset("uid",$_GET['uid']);
		if($_GET['return_url']){
			$this->yunset("return_url",'myresume');
		}else{
			$this->yunset("return_url",'resume');
		}
		$this->yuntpl(array('admin/admin_saveresume'));
	}
	function saveexpect_action(){
		if($_POST['submit']){
			$eid=(int)$_POST['eid'];
			unset($_POST['submit']);
			unset($_POST['eid']);
			unset($_POST['pytoken']);
			unset($_POST['urlid']);
			$_POST['name'] = iconv("utf-8", "gbk", $_POST['name']);
			$where['id']=$eid;
			$where['uid']=$_POST['uid'];
			$_POST['lastupdate']=time();
			$_POST['height_status']="0";
			$_POST['integrity']=55;
			if($eid==""){
				$_POST['receive_status']='1';
				$resume_num=$this->obj->DB_select_num("resume_expect","`uid`='".$_POST['uid']."'","id");
				if($resume_num>=$this->config['user_number']){echo 1;die;}
				$resume = $this->obj->DB_select_once("resume","`uid`='".$_POST['uid']."'");
				$expectDate = array(
				"lastupdate"	=>	time(),
				"height_status"	=>	0,
				"uid"			=>	$_POST['uid'],
				"defaults"		=>	$resume_num<=0?1:0,
				"ctime"			=>	time(),
				"name"			=>	$_POST['name'],
				"hy"			=>	$_POST['hy'],
				"job_classid"	=>	$_POST['job_classid'],
				"salary"		=>	$_POST['salary'],
				"provinceid"	=>	$_POST['provinceid'],
				"cityid"		=>	$_POST['citysid'],
				"three_cityid"	=>	$_POST['three_cityid'],
				"type"			=>	$_POST['type'],
				"report"		=>	$_POST['report'],
				"jobstatus"		=>	$_POST['jobstatus'],
				"integrity"		=>	55,
				"edu"=>$resume['edu'],
				"exp"=>$resume['exp'],
				"uname"=>$resume['name'],
				"sex"=>$resume['sex'],
				"birthday"=>$resume['birthday'],
				"idcard_status"=>$resume['idcard_status'],
				"status"=>$resume['status'],
				"r_status"=>$resume['r_status'],
				"photo"=>$resume['photo']
				);
				$nid=$this->obj->insert_into("resume_expect",$expectDate);
				if ($nid){
					if($resume_num==0){
						$this->obj->update_once('resume',array('def_job'=>$nid),array('uid'=>$_POST['uid']));
					}
					$data['uid'] = $_POST['uid'];
					$data['eid'] = $nid;
					$this->obj->insert_into("user_resume",$data);
					$this->obj->DB_update_all('member_statis',"`resume_num`=`resume_num`+1","`uid`='".$_POST['uid']."'");
					$state_content = "发布了 <a href=\"".$this->config['sy_weburl']."/index.php?m=resume&id=$nid\" target=\"_blank\">新简历</a>。";
					$fdata['uid']	  = $_POST['uid'];
					$fdata['content'] = $state_content;
					$fdata['ctime']   = time();
					$this->obj->insert_into("friend_state",$fdata);
					$this->admin_log("添加简历(ID:".$nid.")");
				}
				$eid=$nid;
			}else{
				$nid=$this->obj->update_once("resume_expect",$_POST,$where);
				$this->admin_log("修改简历(ID:".$eid.")");
			}
			$row=$this->obj->DB_select_once("user_resume","`expect`='1'","`eid`='$eid'");
			$this->obj->update_once('user_resume',array('expect'=>1),array('eid'=>$eid,'uid'=>$_POST['uid']));
			if($nid){
				$resume_row=$this->obj->DB_select_once("user_resume","`eid`='".$eid."'");
				$resume=$this->obj->DB_select_once("resume_expect","`id`='".$eid."'");
 				include PLUS_PATH."/user.cache.php";
				include PLUS_PATH."/job.cache.php";
				include PLUS_PATH."/city.cache.php";
				include PLUS_PATH."/industry.cache.php";
				$resume['report']=$userclass_name[$resume['report']];
				$resume['hy']=$industry_name[$resume['hy']];
				$resume['city']=$city_name[$resume['provinceid']]." ".$city_name[$resume['cityid']]." ".$city_name[$resume['three_cityid']];
				$resume['salary']=$userclass_name[$resume['salary']];
				$resume['type']=$userclass_name[$resume['type']];
				if($resume['job_classid']!=""){
					$job_classid=@explode(",",$resume['job_classid']);
					foreach($job_classid as $v){
						$job_classname[]=$job_name[$v];
					}
					$resume['job_classname']=pylode(" ",$job_classname);
				}
				$resume['three_cityid']=$city_name[$resume['three_cityid']];

				if(is_array($resume)){
					foreach($resume as $k=>$v)
					{
						$arr[$k]=iconv("gbk","utf-8",$v);
					}
				}
				echo json_encode($arr);die;
			}else{
				echo 0;die;
			}
		}
	}
	function skill_action(){
		$this->resume("resume_skill","skill","expect","填写项目经验");
	}
	function work_action()
	{
		$this->resume("resume_work","work","expect","填写项目经验");
	}
	function project_action()
	{
		$this->resume("resume_project","project","edu","填写教育经历");
	}
	function edu_action()
	{
		$this->resume("resume_edu","edu","training","填写培训经历");
	}
	function training_action()
	{
		$this->resume("resume_training","training","cert","填写证书");
	}
	function cert_action()
	{
		$this->resume("resume_cert","cert","other","填写其它");
	}
	function other_action()
	{
		$this->resume("resume_other","other","resume","返回简历管理");
	}
	function resume($table,$url,$nexturl,$name=""){
       if($_POST["submit"]){
			$eid=(int)$_POST['eid'];
			$id=(int)$_POST['id'];
			$this->uid=$_POST['uid'];
			unset($_POST['submit']);
			unset($_POST['id']);
			unset($_POST['table']);
			if($_POST['name'])$_POST['name'] = iconv("utf-8", "gbk", $_POST[name]);
			if($_POST['content'])$_POST['content'] = iconv("utf-8", "gbk", $_POST['content']);
			if($_POST['title'])$_POST['title'] = iconv("utf-8", "gbk", $_POST['title']);
			if($_POST['department'])$_POST['department'] = iconv("utf-8", "gbk", $_POST['department']);
			if($_POST['sys'])$_POST['sys'] = iconv("utf-8", "gbk", $_POST['sys']);
			if($_POST['specialty'])$_POST['specialty'] = iconv("utf-8", "gbk", $_POST['specialty']);
			if($_POST['sdate']){
				$_POST['sdate']=strtotime($_POST['sdate']);
			}
			if($_POST['edate']){
				$_POST['edate']=strtotime($_POST['edate']);
			}
			if(!$id){
				$nid=$this->obj->insert_into($table,$_POST);
				$this->obj->DB_update_all("user_resume","`$url`=`$url`+1","`eid`='$eid' and `uid`='".$this->uid."'");
				if($nid){
					$resume_row=$this->obj->DB_select_once("user_resume","`eid`='".$eid."'");
					$this->select_resume($table,$nid,$numresume);
				}else{
					echo 0;die;
				}
			}else{
				unset($_POST['uid']);
				$where['id']=$id;
				$nid=$this->obj->update_once($table,$_POST,$where);
				if($nid){
					$this->select_resume($table,$id);
				}else{
					echo 0;die;
				}
			}
		}
		$rows=$this->obj->DB_select_all($table,"`eid`='".$_GET['e']."'");
		$this->yunset("rows",$rows);
	}
	function select_resume($table,$id,$numresume=""){
		include PLUS_PATH."/user.cache.php";
		$info=$this->obj->DB_select_once($table,"`id`='".$id."'");
		$info['skillval']=$userclass_name[$info['skill']];
		$info['ingval']=$userclass_name[$info['ing']];
		$info['sdate']=date("Y-m-d",$info['sdate']);
		$info['edate']=date("Y-m-d",$info['edate']);
		$info['numresume']=$numresume;
		if(is_array($info))
		{
			foreach($info as $k=>$v){
				$arr[$k]=iconv("gbk","utf-8",$v);
			}
		}
		echo json_encode($arr);die;
	}
	function resume_ajax_action(){
		include PLUS_PATH."/user.cache.php";
		$table="resume_".$_POST['type'];
		$id=(int)$_POST['id'];
		$info=$this->obj->DB_select_once($table,"`id`='".$id."'");
		$info['skillval']=$userclass_name[$info['skill']];
		$info['ingval']=$userclass_name[$info['ing']];
		$info['sdate']=date("Y-m-d",$info['sdate']);
		$info['edate']=date("Y-m-d",$info['edate']);
		if(is_array($info)){
			foreach($info as $k=>$v){
				$arr[$k]=iconv("gbk","utf-8",$v);
			}
		}
		echo json_encode($arr);die;
	}
	function resume_del_action()
	{
		if($_POST['id']&&$_POST['table'])
		{
			$tables=array("skill","work","project","edu","training","cert","other");
			if(in_array($_POST['table'],$tables))
			{
				$table = "resume_".$_POST['table'];
				$eid=(int)$_POST['eid'];
				$id=(int)$_POST['id'];
				$uid=(int)$_POST['uid'];
				$url = $_POST['table'];
				$nid=$this->obj->DB_delete_all($table,"`id`='".$id."' and `uid`='".$uid."'");
				$this->obj->DB_update_all("user_resume","`".$url."`=`".$url."`-1","`eid`='".$eid."' and  `uid`='".$uid."'");
				$resume=$this->obj->DB_select_once("user_resume","`eid`='".$eid."'");
				$resume[$url];
				if($nid){
					$this->admin_log("删除简历(ID:".$eid.")");
					$resume_row=$this->obj->DB_select_once("user_resume","`eid`='".$eid."'");
					$numresume=$this->complete($resume_row);
					echo $numresume."##".$resume[$url];;die;
				}else{
					echo 0;die;
				}
			}else{
				echo 0;die;
			}
		}
	}

	function recommend_action(){
		if($_GET['type']){
			if($_GET['type']=="rec_resume"){
				$nid=$this->obj->DB_update_all("resume_expect","`".$_GET['type']."`='".$_GET['rec']."'","`id`='".$_GET['id']."'");
				$this->admin_log("推荐简历(ID:".$_GET['id'].")");
			}else{
				$nid=$this->obj->DB_update_all("resume_expect","`top`='0',`topdate`='0'","`id`='".$_GET['id']."'");
				$this->admin_log("置顶简历(ID:".$_GET['id'].")");
			}
			echo $nid?1:0;die;
		}else{
			if(intval($_POST['addday'])<1&&$_POST['s']==''){$this->ACT_layer_msg("置顶天数不能为空！",8);}
			$_POST['s']?$value="`top`='0',`topdate`='0'":$value="`top`='1',`topdate`='".strtotime("+".intval($_POST['addday'])." day")."'";
			$eid=@explode(",",$_POST['eid']);
			foreach($eid as $v)
			{
				$arrid[]=(int)$v;
			}
			$eid=@implode(",",$arrid);
			$where="`id` in (".@implode(",",$arrid).")";
			$nid=$this->obj->DB_update_all("resume_expect",$value,$where);
			if($nid){
				$this->admin_log("简历置顶(ID:".$eid.")");
				$this->ACT_layer_msg("简历置顶(ID:".$eid.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
			}else{
				$this->ACT_layer_msg("简历置顶(ID:".$eid.")设置失败！",8,$_SERVER['HTTP_REFERER']);
			}
		}
	}
	function rec_action(){
		if($_POST['ids']){
			$ids=@explode(",",$_POST['ids']);
			foreach($ids as $v)
			{
				$arrid[]=(int)$v;
			}
			$this->obj->DB_update_all("resume_expect","`".$_POST['type']."`='".$_POST['status']."'","`id` in (".@implode(",",$arrid).")");
			echo 1;die;
		}else{
			echo 0;die;
		}
	}
	function check_username_action(){
		$username=iconv("utf-8", "gbk", $_POST['username']);
		$member=$this->obj->DB_select_once("member","`username`='".$username."'","`uid`");
		echo $member['uid'];die;
	}
}
?>