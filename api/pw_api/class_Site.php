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
!defined('P_W') && exit('Forbidden');
//api mode 9

class Site {

	var $base;
	var $db;

	function Site($base) {
		$this->base = $base;
		$this->db = $base->db;
	}

	function connect() {
		return new ApiResponse(1);
	}
}
?>