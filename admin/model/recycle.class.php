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
class recycle_controller extends common
{
	function set_search(){
		$lo_time=array('1'=>'����','3'=>'�������','7'=>'�������','15'=>'����֮��','30'=>'һ����֮��','90'=>'������֮��','180'=>'����֮��');
		$search_list[]=array("param"=>"ctime","name"=>'ɾ��ʱ��',"value"=>$lo_time);
		$this->yunset("search_list",$search_list);
	}
	function index_action(){
		$this->set_search();
		$where=1;
		extract($_GET);
		if (trim($keyword)){
			if ($type=='1'){
					$where .=" and `username` like '%".$keyword."%'";
			}elseif ($type=='2'){
					$where .=" and `body` like '%".$keyword."%'";
			}elseif ($type=='3'){
					$where .=" and `tablename`='".$keyword."'";
			}
			$urlarr['type']=$type;
			$urlarr['keyword']=$keyword;
		}
		if($_GET['ctime']){
			if($_GET['ctime']=='1'){
				$where.=" and `ctime` >= '".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where.=" and `ctime` >= '".strtotime('-'.(int)$_GET['ctime'].'day')."'";
			}
			$urlarr['ctime']=$_GET['ctime'];
		}
		if($_GET['order'])
		{
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by id desc";
		}
		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
        $M=$this->MODEL();
		$PageInfo=$M->get_page("recycle",$where,$pageurl,$this->config['sy_listnum']);
        $this->yunset($PageInfo);
        $rows=$PageInfo['rows'];
		$this->yunset("get_type", $_GET);
		$this->yunset("rows",$rows);
		$this->yuntpl(array('admin/admin_recycle'));
	}
	function show_action(){
		$rows=$this->obj->DB_select_once("recycle","`id`='".$_GET['id']."'");
		$this->yunset("rows",unserialize($rows[body]));
		$this->yuntpl(array('admin/admin_recycle_show'));
	}
	function recover_action(){
		$_GET['id']=(int)$_GET['id'];
		if($_GET['id']){
			$rows=$this->obj->DB_select_once("recycle","`id`='".$_GET['id']."'");
			$body=unserialize($rows['body']);
			$this->obj->insert_into($rows['tablename'],$body);
			$this->obj->DB_delete_all("recycle","`id`='".$_GET['id']."'","");
			$this->layer_msg($rows['tablename']."(ID:".$_GET['id'].")�ָ��ɹ�!",9,0,$_SERVER['HTTP_REFERER']);
		}
	}
	function del_action(){
		$this->check_token();
		if($_GET['id']=="alldel"){
			$this->db->Query("TRUNCATE `".$this->def."recycle`");
			$this->layer_msg( "����ջ���վɾ���ɹ���",9,0,$_SERVER['HTTP_REFERER']);
		}else if($_GET['del']){
	    	$del=$_GET['del'];
	    	if(is_array($del)){
				$this->obj->DB_delete_all("recycle","`id` in(".@implode(',',$del).")","");
				$this->layer_msg( "����վ����(ID:".@implode(',',$del).")ɾ���ɹ���",9,1,$_SERVER['HTTP_REFERER']);
	    	}else{
				$this->layer_msg( "��ѡ����Ҫɾ������Ϣ��",8,1,$_SERVER['HTTP_REFERER']);
	    	}
	    }else if(isset($_GET['id'])){
			$result=$this->obj->DB_delete_all("recycle","`id`='".$_GET['id']."'" );
			isset($result)?$this->layer_msg('����վ����(ID:'.$_GET['id'].')ɾ���ɹ���',9,0,$_SERVER['HTTP_REFERER']):$this->layer_msg('ɾ��ʧ�ܣ�',8);
		}else if($_GET['time']){
			$time=strtotime($_GET['time']);
			$this->obj->DB_delete_all("recycle","`ctime`<'".$time."'","");
			$this->layer_msg('����ɾ���ɹ���',9,0,$_SERVER['HTTP_REFERER']);
		}else{
			$this->layer_msg('�Ƿ�������',3);
		}
	}
}
?>