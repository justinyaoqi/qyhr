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
class admin_nav_controller extends common
{
	function index_action(){
		$menurows=$this->obj->DB_select_all("admin_navigation","display <>1 order by sort desc");
		$i=0;$j=0;$a=0;$b=0;
		if(is_array($menurows)){
			foreach($menurows as $key=>$v){
				if($v['keyid']==0){
					$navigation[$i]['id']=$v['id'];
					$navigation[$i]['name']=$v['name'];
					$navigation[$i]['classname']=$v['classname'];
					$navigation[$i]['sort']=$v['sort'];
					$i++;
				}
				if($v[menu]==2){
					$menu[$j]['id']=$v['id'];
					$menu[$j]['name']=$v['name'];
					$menu[$j]['classname']=$v['classname'];
					$menu[$j]['url']=$v['url'];
					$j++;
				}
			}
		}
		if(is_array($navigation)){
			foreach($navigation as $va){
				if(is_array($menurows)){
					foreach($menurows as $key=>$v){
						if($v['keyid']==$va['id']){
							if(!is_array($one_menu[$va['id']]))$a=0;
							$one_menu[$va['id']][$a]['id']=$v['id'];
							$one_menu[$va['id']][$a]['name']=$v['name'];
							$one_menu[$va['id']][$a]['classname']=$v['classname'];

							$one_menu[$va['id']][$a]['sort']=$v['sort'];
							$a++;
							foreach($menurows as $key=>$vaa){
								if($vaa["keyid"]==$v['id']){
									if(!is_array($two_menu[$v['id']]))$b=0;
									$two_menu[$v['id']][$b]['id']=$vaa['id'];
									$two_menu[$v['id']][$b]['name']=$vaa['name'];
									$two_menu[$v['id']][$b]['classname']=$vaa['classname'];
									$two_menu[$v['id']][$b]['url']=$vaa['url'];
									$two_menu[$v['id']][$b]['sort']=$vaa['sort'];
									$two_menu[$v['id']][$b]['menu']=$vaa['menu'];
									$two_menu[$v['id']][$b]['display']=$vaa['display'];
									$b++;
								}
							}
						}
					}
				}
			}
		}
		$this->yunset("one_menu",$one_menu);
		$this->yunset("two_menu",$two_menu);
		$this->yunset("navigation",$navigation);
		$this->yuntpl(array('admin/admin_navigation'));
	}
	function add_action(){
		$value.="`keyid`='".$_POST['keyid']."',";
		$value.="`name`='".$_POST['name']."',";
		$value.="`url`='".$_POST['url']."',";
		$value.="`classname`='".$_POST['classname']."',";
		$value.="`display`='".$_POST['display']."',";
		$tatal=$_POST['sort']==""?"0":$_POST['sort'];
		$value.="`sort`='".$tatal."'";
		$id=$this->obj->DB_insert_once("admin_navigation",$value);
		$id=mysql_insert_id();
		if($id){
		echo "<script>alert('��ӳɹ�');location.href='index.php?m=admin_nav';</script>";
		}else{echo "<script>alert('���ʧ��');location.href='index.php?m=admin_nav';</script>";}
	}
	function edit_action(){
		if($_POST['update_nav']){
		$value.="`name`='".$_POST['name']."',";
		$value.="`url`='".$_POST['url']."',";
		$value.="`menu`='".$_POST['menu']."',";
		$value.="`classname`='".$_POST['classname']."',";
		$value.="`display`='".$_POST['display']."',";
		$tatal=$_POST['sort']==""?"0":$_POST['sort'];
		$value.="`sort`='".$tatal."'";
		$id=$this->obj->DB_update_all("admin_navigation",$value,"`id`='".$_POST['id']."'");
		if($id){
		echo "<script>alert('���³ɹ�');location.href='index.php?m=admin_nav';</script>";
		}else{echo "<script>alert('����ʧ��');location.href='index.php?m=admin_nav';</script>";}
		}
		if($_POST['del_nav']){
		$id=$this->obj->DB_delete_all("admin_navigation","`id`='".$_POST['id']."'");
			if($id){
				echo "<script>alert('ɾ���ɹ�');location.href='index.php?m=admin_nav';</script>";
			}else{
				echo "<script>alert('ɾ��ʧ��');location.href='index.php?m=admin_nav';</script>";
			
			}
		}
	}
}

?>