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
class comcert_controller extends common
{
	function set_search(){
		$search_list[]=array("param"=>"status","name"=>'���״̬',"value"=>array("3"=>"δ���","1"=>"�����","2"=>"δͨ��"));
		$ad_time=array('1'=>'����','3'=>'�������','7'=>'�������','15'=>'�������','30'=>'���һ����');
		$search_list[]=array("param"=>"end","name"=>'����ʱ��',"value"=>$ad_time);
		$this->yunset("search_list",$search_list);
	}
	function index_action()
	{
		$this->set_search();
		$where="`type`='3'";
        if($_GET['status']){
			if($_GET['status']=='3'){
				$where .= " and `status`='0'";
				$urlarr['status']='0';
			}else{
				$where .= " and `status`='".$_GET['status']."'";
				$urlarr['status']=$_GET['status'];
			}
        }
		if($_GET['keyword']){
			$cwhere.="`name` like '%".$_GET['keyword']."%'";
			$urlarr['keyword']=$_GET['keyword'];
		}else{
			$cwhere=1;
		}
		$com=$this->obj->DB_select_all("company",$cwhere,"`uid`,`name`");
		if(is_array($com)){
			foreach($com as $val){
				$comids[]=$val['uid'];
			}
		}
		$where.=" and `uid` in(".@implode(',',$comids).")";
		if($_GET['end']){
			if($_GET['end']=='1'){
				$where.=" and `ctime` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `ctime` >= '".strtotime('-'.(int)$_GET['end'].'day')."'";
			}
			$urlarr['end']=$_GET['end'];
		}
		if($_GET['order'])
		{
			$where.=" order by `".$_GET['t']."` ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by `id` desc";
		}
		$urlarr['page']="{{page}}";
		$urlarr=Url($_GET['m'],$urlarr,'admin');
		$rows = $this->get_page("company_cert",$where,$urlarr,$this->config['sy_listnum']);
		if($rows && is_array($rows)){
			foreach($rows as $k => $v){
				foreach($com as $val){
					if($v['uid'] == $val['uid']){
						$rows[$k]['name'] = $val['name'];
					}
				}
			}
		}
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_com_cert'));
	}
	function sbody_action(){
		$userinfo = $this->obj->DB_select_once("company_cert","`type`='3' and `uid`='".$_POST['uid']."'","`statusbody`");
		echo $userinfo['statusbody'];die;
	}
	function status_action()
	{
		if($_POST['uid'])
		{
			$uid=$_POST['uid'];
			if($_POST['status']!="1"){
				$yyzz_status=0;
			}else{
				$yyzz_status=1;
				if (is_array($uid) && !empty($uid)){
					$comlist=$this->obj->DB_select_all("company_pay","`com_id` in (".@implode(",",$uid)
						.") and 	`pay_remark`='��֤Ӫҵִ��'","`com_id`");
					foreach($comlist as $k => $v){						
						if(in_array($v, $uid))
							unset($uid[$k]);
					}
					foreach($uid as $v){
						$this->get_integral_action($v,"integral_comcert","��֤Ӫҵִ��");
					}
				}
				elseif($uid != ""){
					$num = $this->obj->DB_select_num("company_pay","`com_id` = '$uid' 
						 and `pay_remark`='��֤Ӫҵִ��'");
					if($num < 1)
						$this->get_integral_action($uid,"integral_comcert","��֤Ӫҵִ��");
				}
			}
			$this->obj->DB_update_all("company","`yyzz_status`='".$yyzz_status."'","`uid` in (".$uid.")");
			$this->obj->DB_update_all("friend_info","`iscert`='".$_POST['status']."'","`uid` in (".$uid.")");
			$id=$this->obj->DB_update_all("company_cert","`status`='".$_POST['status']."',`statusbody`='".$_POST['statusbody']."'","`uid` in (".$uid.") and `type`='3'");
			$company=$this->obj->DB_select_all("company","`uid` in (".$uid.")","uid,name,linkmail");
			if($this->config['sy_smtpserver']!="" && $this->config['sy_smtpemail']!="" && $this->config['sy_smtpuser']!=""){
				if(is_array($company))
				{
					foreach($company as $v)
					{
						if($this->config['sy_email_comcert']=='1' && $_POST['status']>0){
							if($_POST['statusbody']=='')
							{
								if($_POST['status']=='1')
								{
									$_POST['statusbody'] = 'Ӫҵִ�����ͨ����';
								}else{
									$_POST['statusbody'] = 'Ӫҵִ�����δͨ����';
								}
							}
							$this->send_msg_email(array("email"=>$v['linkmail'],"certinfo"=>$_POST['statusbody'],"comname"=>$v['name'],'uid'=>$v['uid'],'name'=>$v['name'],"type"=>"comcert"));
						}
					}
				}
			}
			if($id)
			{
				$this->ACT_layer_msg("��ҵ��֤���(UID:".$uid.")���óɹ���",9,$_SERVER['HTTP_REFERER'],2,1);
			}else{
				$this->ACT_layer_msg("����ʧ�ܣ�",8,$_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->ACT_layer_msg("�Ƿ�������",8,$_SERVER['HTTP_REFERER']);
		}
	}
	function del_action()
	{
		if(is_array($_POST['del'])){
			$linkid=@implode(',',$_POST['del']);
			$type=1;
		}else{
			$this->check_token();
			$linkid=$_GET['uid'];
			$type=0;
		}
		if($linkid==""){
			$this->layer_msg('��ѡ����Ҫɾ�������ݣ�',8,1,$_SERVER['HTTP_REFERER']);
		}
		$this->obj->DB_update_all("company","`yyzz_status`='0'","`uid` in (".$linkid.")");
		$this->obj->DB_update_all("friend_info","`iscert`='0'","`uid` in (".$linkid.")");
	    $cert=$this->obj->DB_select_all("company_cert","`uid` in (".$linkid.") and `type`='3'","`check`");
	    if(is_array($cert))
	    {
	     	foreach($cert as $v)
	     	{
	     		unlink_pic("../".$v['check']);
	     	}
	    }
		$delid=$this->obj->DB_delete_all("company_cert","`uid` in (".$linkid.")  and `type`='3'","");
		$delid?$this->layer_msg('��ҵ��֤(UID:'.$linkid.')ɾ���ɹ���',9,$type,$_SERVER['HTTP_REFERER']):$this->layer_msg('ɾ��ʧ�ܣ�',8,$type,$_SERVER['HTTP_REFERER']);
	}
}

?>