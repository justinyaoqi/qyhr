<?php
/* *
* $Author ��PHPYUN�����Ŷ�
*
* ����: http://www.phpyun.com
*
* ��Ȩ���� 2009-2015 ��Ǩ�γ���Ϣ�������޹�˾������������Ȩ����
*
* ���������δ����Ȩǰ���£�����������ҵ��Ӫ�����ο����Լ��κ���ʽ���ٴη�����
*/
class info_controller extends user{
	
	function index_action(){
		$row=$this->obj->DB_select_once("resume","`uid`='".$this->uid."'");
		$this->yunset("row",$row);
		if($_POST['submitBtn']){
			$_POST=$this->post_trim($_POST);
			$is_exist_email=$this->obj->DB_select_num("member","`uid`<>'".$this->uid."' and `email`='".$_POST['email']."'","`uid`");
			if($is_exist_email){
				$this->ACT_layer_msg("�����Ѵ��ڣ�",2);
			}
            $is_exist_mobile=$this->obj->DB_select_once("member","`uid`<>'".$this->uid."' and `moblie`='".$_POST['telphone']."'","`uid`");
			if($is_exist_mobile){
				$this->ACT_layer_msg("�ֻ��Ѵ��ڣ�",2);
			}
			if($_POST['name']==""){
				$this->ACT_layer_msg("��������Ϊ�գ�",2);
			}
			if($_POST['sex']==""){
				$this->ACT_layer_msg("�Ա���Ϊ�գ�",2);
			}
			
			if($_POST['living']==""){
				$this->ACT_layer_msg("�־�ס�ز���Ϊ�գ�",2);
			}
			unset($_POST['submitBtn']);
			delfiledir("../data/upload/tel/".$this->uid);
			$where['uid']=$this->uid;
			$nid=$this->obj->update_once('resume',$_POST,$where);
			$this->obj->update_once("resume_expect",array("edu"=>$_POST['edu'],"exp"=>$_POST['exp'],"uname"=>$_POST['name'],"sex"=>$_POST['sex'],"birthday"=>$_POST['birthday']),$where);

			$this->obj->update_once('member',array('email'=>$_POST['email'],'moblie'=>$_POST['telphone']),$where);

			$member_statis=$this->obj->DB_select_once("member_statis","`uid`='".$this->uid."'","`resume_num`");
			if($member_statis['resume_num']<1){
				$url="index.php?c=expect&add=".$this->uid;
			}else{
				$url=$_SERVER['HTTP_REFERER'];
			}
			if($nid){
				$this->obj->member_log("�޸Ļ�����Ϣ",7);
				
				if($row['name']==""||$row['living']==""){
					
					$this->company_invtal($this->uid,$this->config['integral_userinfo'],true,"�״���д��������",true,2,'integral',25);
				}
				$this->ACT_layer_msg("��Ϣ���³ɹ���",9,$url);
			}else{
				$this->ACT_layer_msg("��Ϣ����ʧ�ܣ�",8,$url);
			}
		}
		$this->public_action();
		$this->city_cache();
		$this->user_cache();
		$this->user_tpl('info');
	}
}
?>