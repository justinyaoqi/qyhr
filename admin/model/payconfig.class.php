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
class payconfig_controller extends common
{
	function index_action(){
		$this->yunset("config",$this->config);
		$this->yuntpl(array('admin/admin_pay_config'));
	}
	function alipay_action(){
		extract($_POST);
		if($pay_config){
		   $alipaya['sy_weburl']=$this->config['sy_weburl'];
		   $alipaya['sy_alipayid']=iconv("utf-8","gbk",trim($_POST['sy_alipayid']));
		   $alipaya['alipaytype']=iconv("utf-8","gbk",trim($_POST['alipaytype']));
		   $alipaya['sy_alipaycode']=iconv("utf-8","gbk",trim($_POST['sy_alipaycode']));
		   $alipaya['sy_alipayemail']=iconv("utf-8","gbk",trim($_POST['sy_alipayemail']));
		   $alipaya['sy_alipayname']=trim($_POST['sy_alipayname']);
		   if($alipaytype=="1")
		   {
				$dir = "alipay";
		   }elseif($alipaytype=="2"){
		   		$dir = "alipaydual";
		   		$alipaya['receive_address']=$this->config['sy_webadd'];
		   		$alipaya['receive_phone']=$this->config['receive_phone'];
		   		$alipaya['receive_mobile']=$this->config['receive_mobile'];
		   }elseif($alipaytype=="3"){
				$dir = "alipayescow";
		   }
		   $alipay_v = $this->obj->DB_select_once("admin_config","`name`='alipaytype'");
		   if(empty($alipay_v))
		   {
			 $this->obj->DB_insert_once("admin_config","`config`='$alipaytype',`name`='alipaytype'");
		   }else{
			 $this->obj->DB_update_all("admin_config","`config`='$alipaytype'","`name`='alipaytype'");
		   }
		   $this->web_config();
		  
		   made_web(APP_PATH."api/".$dir."/alipay_data.php",ArrayToString($alipaya),"alipaydata");
		  $this->ACT_layer_msg( "֧�������óɹ���",9,$_SERVER['HTTP_REFERER'],2,1);
		}
		if($this->config['alipaytype']=="1")
		{
				$dir = "alipay";
		}elseif($this->config['alipaytype']=="2"){
		   		$dir = "alipaydual";
		}elseif($this->config['alipaytype']=="3"){
		   		$dir = "alipayescow";
		}
		@include(APP_PATH."/api/".$dir."/alipay_data.php");
		$this->yunset("alipaydata",$alipaydata);
		$this->yuntpl(array('admin/admin_alipay_config'));
	}
	function tenpay_action(){
		extract($_POST);
		if($pay_config){
 			$tenpay['sy_weburl']=$this->config['sy_weburl'];
	   		$tenpay['sy_tenpayid']=iconv("utf-8","gbk",trim($_POST['sy_tenpayid']));
	   		$tenpay['sy_tenpaycode']=iconv("utf-8","gbk",trim($_POST['sy_tenpaycode']));
		    made_web("../api/tenpay/tenpay_data.php",ArrayToString($tenpay),"tenpaydata");
			$this->ACT_layer_msg( "�Ƹ�ͨ���óɹ���",9,$_SERVER['HTTP_REFERER'],2,1);
		}
		@include(APP_PATH."/api/tenpay/tenpay_data.php");
		$this->yunset("tenpaydata",$tenpaydata);
		$this->yuntpl(array('admin/admin_tenpay_config'));
	}
	function bank_action(){
		extract($_POST);
		if($pay_bank){
			$value="`name`='$sy_bankuser',";
			$value.="`bank_name`='$sy_bankname',";
			$value.="`bank_number`='$sy_bankdnumber',";
			$value.="`bank_address`='$sy_bankdeposit'";
			if(!$bankid){
				$bank=$this->obj->DB_insert_once("bank",$value);
				$this->ACT_layer_msg( "���п�(ID:".$bankid.")��ӳɹ���",9,"index.php?m=payconfig&c=bank",2,1);
			}else{
				$bank=$this->obj->DB_update_all("bank",$value,"`id`='$bankid'");
				$this->ACT_layer_msg( "���п�(ID:".$bankid.")�޸ĳɹ���",9,"index.php?m=payconfig&c=bank",2,1);
			}
		}
		if($_GET['id']){
			$bankone=$this->obj->DB_select_once("bank","id='".$_GET['id']."'");
			$this->yunset("bankone",$bankone);
		}
		$bankrows=$this->obj->DB_select_all("bank");
		$this->yunset("bankrows",$bankrows);
		$this->yuntpl(array('admin/admin_bank_config'));
	}
	function save_action(){
		if($_POST['config']){
			unset($_POST['config']);
			foreach($_POST as $key=>$v){
				$config=$this->obj->DB_select_num("admin_config","`name`='".$key."'");
				if($config==false){
					$this->obj->DB_insert_once("admin_config","`name`='".$key."',`config`='".iconv("utf-8", "gbk", $v)."'");
				}else{
					$this->obj->DB_update_all("admin_config","`config`='".iconv("utf-8", "gbk", $v)."'","`name`='".$key."'");
				}
			}
			$this->web_config();
			$this->ACT_layer_msg( "�޸ĳɹ���",9,$_SERVER['HTTP_REFERER'],2,1);
		}
	}
	function del_action(){
		$this->check_token();
		$this->obj->DB_delete_all("bank","`id`='".$_GET['id']."'");
		$this->layer_msg( "���п�(ID:".$_GET['id'].")ɾ���ɹ���",9,0,"index.php?m=payconfig&c=bank");
	}
}
?>