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
class order_controller extends appadmin
{
	function list_action()//�߼��˲��б�
	{
		$where="1";
		$page=$_POST['page'];
		$limit=$_POST['limit'];
		$order=$_POST['order'];
		$keyword=$this->stringfilter($_POST['keyword']);
		if($keyword)//�ؼ���
		{
			$where.=" and (`order_id` LIKE '%".$keyword."%' or `order_remark` LIKE '%".$keyword."%')";
		}
		if($_POST['status'])
		{
			if($_POST['status']=="4")
			{
				$where.=" and `order_state`='0'";
			}else{
				$where.=" and `order_state` in('".(int)$_POST['status']."')";
			}
	    }
		if($order){//����
			$where.=" order by ".$order;
		}else{
			$where.=" order by id desc";
		}
		$limit=!$limit?10:$limit;
		if($page){//��ҳ
			$pagenav=($page-1)*$limit;
			$where.=" limit $pagenav,$limit";
		}else{
			$where.=" limit $limit";
		}
		$rows=$this->obj->DB_select_all("company_order",$where);
		if(!empty($rows))
		{
			include (APP_PATH."/config/db.data.php");
			foreach($rows as $k=>$v)
			{
				$uid[]=$v['uid'];
				$company=$this->obj->DB_select_all("company","`uid` in (".pylode(",",$uid).")","`uid`,`name`");
				$member=$this->obj->DB_select_all("member","`uid` in (".pylode(",",$uid).")","`uid`,`username`");
				foreach($rows as $key=>$val)
				{
					foreach($member as $value)
					{
						if($val['uid']==$value['uid'])
						{
							$list[$k]['name']=iconv("gbk","UTF-8",$value['username']);
						}
					}
					foreach($company as $value)
					{
						if($val['uid']==$value['uid'])
						{
							$list[$k]['name']=iconv("gbk","UTF-8",$value['name']);
						}
					}
				}
				$list[$k]['order_state']=$v['order_state'];
				$list[$k]['status']=$v['order_state'];
				$list[$k]['order_type']=iconv("gbk","UTF-8",$arr_data['pay'][$v['order_type']]);
				$list[$k]['id']=$v['id'];
				$list[$k]['order_id']=$v['order_id'];
				$list[$k]['type']=$v['type'];
				$list[$k]['order_time']=$v['order_time'];
				$list[$k]['order_price']=$v['order_price']; 
			}
			$data['error']=1;
			foreach($list as $k=>$v){
				if(is_array($v)){
					foreach($v as $key=>$val){
						$list[$k][$key]=isset($val)?$val:'';
					}
				}else{
					$list[$k]=isset($v)?$v:'';
				}
			}
			$data['list']=$list;
			echo json_encode($data);die;
		}else{
			$this->return_appadmin_msg(2,"û�л����Ϣ");
		}
	}
	function show_action()
	{
		if(!$_POST['id'])
		{
			$this->return_appadmin_msg(2,"��������");
		}
		$id=(int)$_POST['id'];
		$row=$this->obj->DB_select_once("company_order","`id`='".$id."'");
		if(!empty($row))
		{
			$member=$this->obj->DB_select_once("member","`uid`='".$row['uid']."'","username");
			include (APP_PATH."/config/db.data.php");
			$list['id']		=$row['id'];
			$list['order_type']	=iconv("gbk","UTF-8",$arr_data['pay'][$row['order_type']]);
			$list['order_id']	=$row['order_id'];
			$list['order_price']=$row['order_price'];
			$list['order_time']	=$row['order_time']; 
			$list['order_remark']=iconv("gbk","UTF-8",$row['order_remark']);
			$list['username']=iconv("gbk","UTF-8",$member['username']);
			$list['uid']=$row['uid'];
			$list['type']=$row['type'];
			$list['order_state']=$row['order_state'];
			$list['status']=$row['order_state'];
			 
			foreach($list as $k=>$v){
				if(is_array($v)){
					foreach($v as $key=>$val){
						$list[$k][$key]=isset($val)?$val:'';
					}
				}else{
					$list[$k]=isset($v)?$v:'';
				}
			}
			$data['list']=$list;
			$data['error']=1;
			echo json_encode($data);die;
		}else{
			$this->return_appadmin_msg(2,"û�л����Ϣ");
		}
	}
	function save_action()//�޸Ķ���
	{
		if(!$_POST['order_price']||!$_POST['order_remark']||!$_POST['id'])
		{
			$this->return_appadmin_msg(2,"��������");
		}
		$values="`order_price`='".$_POST['order_price']."',";
		$values.="`order_remark`='".$this->stringfilter($_POST['order_remark'])."',";
		$r_id=$this->obj->DB_update_all("company_order",$values,"id='".(int)$_POST['id']."'"); 
		$this->write_appadmin_log("��ֵ��¼(ID:".$_POST['id'].")�޸ĳɹ���");
		$data['error']=1;
		echo json_encode($data);die;
	}
	function setpay_action()//��ֵ����ȷ��
	{
		if(!$_POST['id'])
		{
			$this->return_appadmin_msg(2,"��������");
		}
		$del=(int)$_POST['id'];
		$row=$this->obj->DB_select_once("company_order","`id`='".$del."'");
		if($row['order_state']=='1'||$row['order_state']=='3')
		{
            
			$nid=$this->upuser_statis($row);
			if($nid)
			{
				$this->write_appadmin_log("��ֵ��¼(ID:".$del.")ȷ�ϳɹ���");
				$data['error']=1;
				echo json_encode($data);die;
			}else{
				$this->return_appadmin_msg(2,"ȷ��ʧ��,���������ԣ�");
			}
		}else{
			$this->return_appadmin_msg(2,"������ȷ�ϣ������ظ�������");
		}
	}
	function del_action()//ɾ��
	{
		if(!$_POST['ids'])
		{
			$this->return_appadmin_msg(2,"��������");
		}
		$company_order=$this->obj->DB_select_all("company_order","`id` in (".$_POST['ids'].")","`order_id`");
		if($company_order&&is_array($company_order))
		{
			foreach($company_order as $val)
			{
				$order_ids[]=$val['order_id'];
			} 
			$this->obj->DB_delete_all("company_order","`id` in(".$_POST['ids'].")","");
		}
		$this->write_appadmin_log("��ֵ��¼(ID:".$_POST['ids'].")ɾ���ɹ���");
		$data['error']=1;
		echo json_encode($data);die;
	}
}
?>