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
class com_controller extends company
{
	function index_action()
	{
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action();
		$statis = $this->company_satic();
		$urlarr=array("c"=>"com","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		if($statis['vip_etime']>time())
		{
			$statis['vip_time'] = date("Y��m��d��",$statis['vip_etime']);
		}else{
			$statis['vip_time'] = "�ѹ���";
		}
		$statis[integral]=number_format($statis[integral]);
		$this->yunset("statis",$statis);
		$rows = $this->get_page("company_order","uid='".$this->uid."' and `type`='1' order by id desc",$pageurl,"10");
		$this->yunset("rows",$rows);
		$allprice=$this->obj->DB_select_once("company_pay","`com_id`='".$this->uid."' and `type`='1' and `order_price`<0","sum(order_price) as allprice");
		if($allprice['allprice']==''){$allprice['allprice']='0';}
		$this->yunset("integral",number_format(str_replace("-","", $allprice['allprice'])));
		$this->yunset("js_def",4);
		$this->com_tpl('com');
	}
}
?>