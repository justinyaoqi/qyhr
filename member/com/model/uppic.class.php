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
class uppic_controller extends company
{
	function index_action(){

		$this->public_action();
		$company=$this->obj->DB_select_once("company","`uid`='".$this->uid."'","`logo`");
		if($company['logo']){
			$company['logo']=$this->config['sy_weburl'].str_replace("./","/",$company['logo']);
		}else{
			$company['logo']=$this->config['sy_weburl']."/".$this->config['sy_unit_icon'];
		} 
		$this->yunset("company",$company);
		$this->yunset("js_def",2);
		$this->com_tpl('uppic');
	}
	function uppath(){
		$upload_path = "../data/upload/company/com_big/";
		return $upload_path;
	}


	function ajaxfileupload_action(){

			if($_FILES['image']['tmp_name'])
			{
				$upload=$this->upload_pic("../data/upload/company/com_big",false,$this->config['com_pickb']);
				$pictures=$upload->picture($_FILES['image']);
				$picMsg = $this->picmsg($pictures,$_SERVER['HTTP_REFERER'],"ajax");
				if($picMsg)
				{
					$imginfo=$this->getInfo($pictures);
					if($imginfo['width']<185 || $imginfo['height']<75){
						unlink_pic($pictures);
						$res['s_thumb'] = iconv('gbk','utf-8','�ϴ�LOGO�ߴ�̫С');
					}else{
						$s_thumb=$upload->makeThumb($pictures,240,300,'_S_');
						unlink_pic($pictures);
						$res["url"] = $s_thumb;
					}
					echo json_encode($res);
				}
			}else{
				$res["s_thumb"] = iconv('gbk','utf-8','��ѡ���ϴ�ͼƬ');
				echo json_encode($res);
			}
	}

	function getInfo($file){
		$data=getimagesize($file);
		$imageInfo["width"]	= $data[0];
		$imageInfo["height"]= $data[1];
		$imageInfo["type"]	= $data[2];
		$imageInfo["name"]	= basename($file);
		$imageInfo["size"]  = filesize($file);
		return $imageInfo;
	}

	function savethumb_action(){

		$upload_path = $this->uppath();
		$upload_path=ltrim($upload_path,'.');
		if(stripos(trim($_POST['img1']),$upload_path)===false){
			$this->ACT_layer_msg("�Ƿ�������",8,$_SERVER['HTTP_REFERER']);
		}
		include(LIB_PATH."sizer.class.php");
		$sizer=new Sizer("../data/upload/company/".date('Ymd').'/');
		$t_name = $sizer->sizeIt();
		
		$company=$this->obj->DB_select_once("company","`uid`='".$this->uid."'","`logo`");
		
		
		if($company['logo'] )
		{
			if($company['logo'] != './'.$this->config['sy_unit_icon'])
			{
				unlink_pic('.'.$company['logo']);
			}
		}else{
			$this->get_integral_action($this->uid,"integral_avatar","�ϴ�ͷ��");
		}
		

		$ref=$this->obj->update_once("company",array('logo'=>str_replace("../data/upload/company/","./data/upload/company/",$t_name[1])),array('uid'=>$this->uid));
		if($ref){echo 1;}else{echo 2;}
	}
}
?>