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
		$files=$_FILES['fileToUpload'];
		move_uploaded_file($files['tmp_name'],"../../data/web_img/water.png");
		echo "{";
		echo		"url: 'dddddd',\n";
		echo		"s_thumb: 'dddddddddd'\n";
		echo "}";

?>