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
class integral_controller extends user{
	
	function index_action(){
		
		$baseInfo			= false;	
		$photo				= false;	
		$emailChecked		= false;	
		$phoneChecked		= false;	
		
		
		$identification		= false;	
		
		$row = $this->obj->DB_select_once("resume",'`uid` = '.$this->uid,
			"`name`,`sex`,`birthday`,`telphone`,`email`,`edu`,`exp`,`living`,
			`photo`,`email_status`,`moblie_status`,`idcard_status`");
		
		if(is_array($row) && !empty($row)){
			if($row['name'] != '' && $row['sex'] != '' && $row['birthday'] != '' && $row['telphone'] != '' 
				&& $row['email'] != '' && $row['edu'] != '' && $row['exp'] != '' && $row['living'] != '')
				$baseInfo = true;
			
			if($row['photo'] != '') $photo = true;
			if($row['email_status'] != 0) $emailChecked = true;
			if($row['moblie_status'] != 0) $phoneChecked = true;
			if($row['idcard_status'] != 0) $identification = true;
		}
		$statusList = array(
			'baseInfo'		=>$baseInfo,
			'photo'			=>$photo,
			'emailChecked'	=>$emailChecked,
			'phoneChecked'	=>$phoneChecked,
			'identification'=>$identification
		);
	
		$this->yunset("statusList",$statusList);
		$this->user_tpl('integral');
	}
}
?>