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
class resumeshare_controller extends resume_controller{
	function index_action(){
		if($_POST){
			if($_POST['femail']=="" || $_POST['myemail']=="" || $_POST['authcode']==""){
				echo "��������д��Ϣ��";die;
			}
			session_start();
			if(md5($_POST['authcode'])!=$_SESSION['authcode']){
				unset($_SESSION['authcode']);echo "��֤�벻��ȷ��";die;
			}
			if($_COOKIE["sendresume"]==$_POST['id']){
				echo "�벻ҪƵ�������ʼ���ͬһ�������ͼ��Ϊ�����ӣ�";die;
			}
			if($this->config["sy_smtpserver"]=="" || $this->config["sy_smtpemail"]=="" ||	$this->config["sy_smtpuser"]==""){
				echo "��վ�ʼ�������������!";die;
			}
			if($this->CheckRegEmail(trim($_POST['femail']))==false){echo "�����ʽ����";die;}
			$contents=file_get_contents($this->config[sy_weburl]."/resume/index.php?c=sendresume&id=".$_POST['id']);
 			$smtp = $this->email_set();
			$smtpusermail =$this->config['sy_smtpemail'];
			$myemail = $this->stringfilter($_POST['myemail']);
			$sendid = $smtp->sendmail($_POST['femail'],$smtpusermail,"���ĺ���".$myemail."�����Ƽ��˼�����",$contents,"HTML","","","",$myemail);
			if($sendid){
				echo 1;
			}else{
				echo "�ʼ����ʹ��� ԭ��1���䲻���� 2��վ�ر��ʼ�����";die;
			}
			SetCookie("sendresume",$_POST['id'],time() + 120, "/");
			die;
		}
		if($_GET['id']){
			$M=$this->MODEL('resume');
			$id=(int)$_GET['id'];
			$user=$M->resume_select($id);
			$this->yunset("Info",$user);
			$data['resume_username']=$user['username_n'];
			$data['resume_city']=$user['city_one'].",".$user['city_two'];
			$data['resume_job']=$user['hy'];
			$this->data=$data;
		}

		$this->seo("resume_share");
		$this->yun_tpl(array('resume_share'));
    }
}
?>