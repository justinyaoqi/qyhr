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
class recharge_controller extends common{
	function index_action(){
		
		extract($_POST);
		if(isset($_POST['insert'])){
			$userarr=@explode(',',trim($userarr));
			if(is_array($userarr)){
				$uidarr=array();
				foreach($userarr as $k=>$v){
					$userarr=$this->obj->DB_select_once("member","`username`='".trim($v)."'");
					if(is_array($userarr)){
						$uidarr[$k]['uid']=$userarr['uid'];
						$uidarr[$k]['usertype']=$userarr['usertype'];
						$uids[]=$userarr['uid'];
					}
				}
			}
			unset($_POST['userarr']);
			unset($_POST['type']);
			unset($_POST['fs']);
			unset($_POST['price_int']);
			unset($_POST['order_price']);
			unset($_POST['insert']);
			unset($_POST['remark']); 
			$num=$price_int;
			$msg=$price_int.$this->config['integral_pricename']; 
			$fsmsg=$fs==1?"��ֵ":"�۳�";
			if(is_array($uidarr)){
				foreach($uidarr as $v){ 
					if($v['usertype']=="1"){
						$table="member_statis";
					}elseif($v['usertype']=="2"){
						$table="company_statis";
					}
					if($fs==2){
						$statis=$this->obj->DB_select_once($table,"`uid`='".$v['uid']."'","pay,integral");
						if($statis['integral']<$num){
							$num=$statis['integral'];
						} 
					}
					$nid=$this->pay_member($table,$v['uid'],$num,$remark,$v['usertype'],$fs);
				}
			}
			$nid?$this->ACT_layer_msg("��Ա(ID:".@implode(',',$uids).")".$fsmsg.$msg."�ɹ���",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg($fsmsg."ʧ�ܣ�",8,$_SERVER['HTTP_REFERER']);
		}
		$this->yuntpl(array('admin/admin_recharge'));
	}
	function pay_member($table,$uid="",$num,$remark,$usertype,$fs){
		$dingdan=mktime().rand(10000,99999);
		if($fs==1){
			$type=true;
			$integral_v="`integral`=`integral`+$num";
			$_POST['order_type']="adminpay";
		}else{
			$type=false;
			$integral_v="`integral`=`integral`-$num";
			$_POST['order_type']="admincut";
		}
		$_POST['order_id']=$dingdan;
		$_POST['order_price']=$num;
		$_POST['order_time']=mktime();
		$_POST['order_state']="2";
		$_POST['order_remark']=$remark;
		$_POST['uid']=$uid; 
		$_POST['type']=2; 
		$nid=$this->obj->DB_update_all($table,$integral_v,"`uid`='".$uid."'"); 
		if($fs==2)$_POST['type']=5;
		if($nid){
			$this->insert_company_pay($num,2,$uid,$remark,1,'',$type); 
			$nid=$this->obj->insert_into("company_order",$_POST);
		}
		return $nid;
	}
	function ajax_viptype_action(){
		extract($_POST);
		$vip = $this->obj->DB_select_once("company_rating","`id`='$id'");
		if(is_array($vip)){
			if($vip['service_price']==""){
				$vip['service_price']="0";
			}
			echo $vip['service_price'];
		}
	}
}
?>