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
class integral_controller extends company{
	
	function index_action(){
		
		
		$baseInfo			= false;	
		$logo				= false;	
		$emailChecked		= false;	
		$phoneChecked		= false;	
		
		
		$map				= false;	
		$banner				= false;	
		$yyzz				= false;	
		
		
		$row = $this->obj->DB_select_once("company",'`uid` = '.$this->uid,
			"`name`,`hy`,
			`logo`,`email_status`,`moblie_status`,
			`x`,`y`,
			`firmpic`,
			`yyzz_status`");
		
		if(is_array($row) && !empty($row)){
			if($row['name'] != '' && $row['hy'] != '' )
				$baseInfo = true;
			
			if($row['logo'] != '') $logo = true;
			if($row['email_status'] != 0) $emailChecked = true;
			if($row['moblie_status'] != 0) $phoneChecked = true;
			if($row['x'] != 0 && $row['y'] != 0) $map = true;
			if($row['firmpic'] != 0) $banner = true;
			if($row['yyzz_status'] != 0) $yyzz = true;
			
		}
		$statusList = array(
			'baseInfo'		=>$baseInfo,
			'logo'			=>$logo,
			'emailChecked'	=>$emailChecked,
			'phoneChecked'	=>$phoneChecked,
			
			'map'			=> $map,	
			'banner'		=> $banner,	
			'yyzz'			=> $yyzz	
		);
		
		$this->yunset("statusList",$statusList);
		
		
		$this->yunset("js_def",4);
		$this->com_tpl('integral');
	}
	
}
?>