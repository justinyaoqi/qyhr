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
class model_config_controller extends common{
	function index_action(){
		$config=$this->obj->DB_select_all('admin_config');
        foreach($config as $v){
            $config_new[$v[0]]=$v[1];
        }
        $this->yunset('config',$config_new);
		$this->yuntpl(array('admin/admin_model_config'));
	}
	function save_action(){
 		if($_POST["config"]){
		    unset($_POST["config"]);
		    foreach($_POST as $key=>$v){
		        $config=$this->obj->DB_select_num("admin_config","`name`='$key'");
			    if($config==false){
				    $this->obj->DB_insert_once("admin_config","`name`='$key',`config`='".iconv("utf-8", "gbk", $v)."'");
			  	}else{
					$this->obj->DB_update_all("admin_config","`config`='".iconv("utf-8", "gbk", $v)."'","`name`='$key'");
				}
			}
			$this->web_config();
			$this->ACT_layer_msg("ģ�������޸ĳɹ���",9,1,2,1);
		}
	}
}

?>