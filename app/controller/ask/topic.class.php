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
class topic_controller extends ask_controller{  
	function index_action(){ 
		$M=$this->MODEL('ask'); 
		$recom=$M->RecomFriend(array('iscert'=>'1',"`pic`<>''","uid"=>$this->uid),array('orderby'=>'rand()','limit'=>12,"field"=>"`uid`,`nickname`,`pic`"));
		$this->yunset("navtype","topic"); 
		$this->yunset("recom",$recom);
		$this->seo("ask_topic");
		$this->ask_tpl('topic');
	}


}
?>