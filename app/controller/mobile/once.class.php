<?php

class once_controller extends common{
	function index_action(){
		$this->rightinfo();
		if($this->config['sy_wzp_web']=="2"){
			$data['msg']='�ܱ�Ǹ����ģ���ѹرգ�';
			$data['url']='index.php';
			$this->yunset("layer",$data);
		}
		

		$this->seo("once");
		$this->yunset("headertitle","΢��Ƹ");
		$this->yuntpl(array('mobile/once'));
	}
	function add_action(){
		$this->rightinfo();
		if($this->config['sy_wzp_web']=="2"){
			$data['msg']='�ܱ�Ǹ����ģ���ѹرգ�';
			$data['url']='index.php';
			$this->yunset("layer",$data);
		}
		
		$TinyM=$this->MODEL('once');

		if($_GET['id']){
            $row=$TinyM->GetOncejobOne(array('id'=>$_GET[id]));
			$row['edate']=round(($row['edate']-$row['ctime'])/3600/24) ;
			$this->yunset("row",$row);
		}
		if($_POST['submit']){

			$_POST=$this->post_trim($_POST);
			$_POST['mans'] = (int)$_POST['mans'];
			$_POST = yun_iconv('utf-8','gbk',$_POST);
			$_POST['status']=$this->config['com_fast_status'];
			$_POST['ctime']=time();
			$_POST['edate']=strtotime("+".(int)$_POST['edate']." days");
			$password=md5(trim($_POST['password']));
			unset($_POST['submit']);
			$id=intval($_POST['id']);
			if($id<1){
				$_POST['password']=$password;
				$nid=$TinyM->AddOncejob($_POST);
				$nid?$data['msg']='�����ɹ���':$data['msg']='����ʧ�ܣ�';
				$data['url']='index.php?c=once';
			}else{
				$arr=$TinyM->GetOncejobOne(array('id'=>$id,'password'=>$password));
				if($arr['id']){
					if($_POST['id']){
						unset($_POST['id']);
						unset($_POST['password']);
						$nid=$TinyM->UpdateOncejob($_POST,array("id"=>$arr['id']));
					}else{
						$_POST['password']=$password;
						$nid=$TinyM->AddOncejob($_POST);
					}
					$nid?$data['msg']='�����ɹ���':$data['msg']='�����ɹ���';
					$data['url']='index.php?c=once';
				}else{
					$data['msg']='�������';
					$data['url']='1';
				}
			}
            $data=yun_iconv('gbk','utf-8',$data);
            echo json_encode($data);die;
		}
		$CacheList=$this->MODEL('cache')->GetCache('user');

        $this->yunset($CacheList);
		$this->yunset("layer",$data);
		$this->yunset("headertitle","΢��Ƹ");
		$this->yunset("title","����΢��Ƹ");
		$this->yuntpl(array('mobile/once_add'));
	}
	function show_action(){
		if($this->config['sy_wzp_web']=="2"){
			$data['msg']='�����ʵĲ���������';
			$data['url']='index.php';
			$this->yunset("layer",$data);
		}

		
		$this->yunset("headertitle","΢��Ƹ");
        $TinyM=$this->MODEL('once');
		$TinyM->UpdateOncejob(array("`hits`=`hits`+1"),array('id'=>$_GET[id]));
		$row=$TinyM->GetOncejobOne(array('id'=>$_GET[id]));
		$row['ctime']=date("Y-m-d",$row[ctime]);
		$this->yunset("row",$row);
		$data['once_job']=$row['title'];
		$data['once_name']=$row['companyname']; 
		$description=$row['require'];
		$data['once_desc']=$this->GET_content_desc($description);
		$this->data=$data;
		$this->seo('once_show');
		$this->yuntpl(array('mobile/once_show'));
	}
}
?>