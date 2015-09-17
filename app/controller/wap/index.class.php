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
class index_controller extends common{
	function index_action(){
		$this->get_moblie();
		$this->seo("index");
		//这里是微信jssdk
		
                $jssdk = new JSSDK();
                $WxData = $jssdk->getSignPackage();
                $this->yunset("wxAppid",$WxData['appId']);
                $this->yunset('wxNonceStr',$WxData['nonceStr']);
                $this->yunset('wxTimestamp',$WxData['timestamp']);
                $this->yunset('wxSignature',$WxData['signature']);


		//微信jssdk结束
		$this->yuntpl(array('wap/index'));
	}
	function loginout_action(){
		$this->unset_cookie();
		//这里是微信jssdk
		
                $jssdk = new JSSDK();
                $WxData = $jssdk->getSignPackage();
                $this->yunset("wxAppid",$WxData['appId']);
                $this->yunset('wxNonceStr',$WxData['nonceStr']);
                $this->yunset('wxTimestamp',$WxData['timestamp']);
                $this->yunset('wxSignature',$WxData['signature']);


		
		//微信jssdk结束
		$this->wapheader('index.php');
	}
	
}
?>