<?php

class index_controller extends common{
	function index_action(){
		$this->seo("index");

		$this->yuntpl(array('mobile/index'));
	}
	function loginout_action(){
		$this->unset_cookie();
		
		$this->wapheader('index.php');
	}
	
}
?>