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
class mobile_controller extends common{ 
	function waplayer_msg($msg,$url='1',$tm=2){
		$msg = preg_replace('/\([^\)]+?\)/x',"",str_replace(array("��","��"),array("(",")"),$msg));
		$layer_msg['msg']=$this->yun_iconv("gbk","utf-8",$msg); 
		$layer_msg['url']=$url;
		$layer_msg['tm']=$tm;
		$msg = json_encode($layer_msg);
		echo $msg;die;
	}
	
	function yun_iconv($in_charset,$out_charset,$str){
	    if(function_exists('mb_convert_encoding')){
	        return mb_convert_encoding($str,$out_charset,$in_charset);
	    }else if(function_exists('mb_convert_encoding')){
	        return iconv($in_charset,$out_charset,$str);
	    }else{
	        return $str;
	    }
	}
	function member_log($content,$opera='',$type=''){
		if($_COOKIE['uid']){
			$value="`uid`='".(int)$_COOKIE['uid']."',";
			$value.="`usertype`='".(int)$_COOKIE['usertype']."',";
			$value.="`content`='".$content."',";
			$value.="`opera`='".$opera."',";
			$value.="`type`='".$type."',";
			$value.="`ip`='".fun_ip_get()."',";
			$value.="`ctime`='".time()."'";
			$this->obj->DB_insert_once("member_log",$value);
		}
	}
}
?>