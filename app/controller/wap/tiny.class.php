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
class tiny_controller extends common{
	function index_action(){
		$this->rightinfo();
		if($this->config['sy_wjl_web']=="2"){
			$data['msg']='�ܱ�Ǹ����ģ���ѹرգ�';
			$data['url']='index.php';
			$this->yunset("layer",$data);
		}
        $this->yunset($this->MODEL('cache')->GetCache('user'));
		$this->get_moblie();
		//������΢��jssdk
		
                $jssdk = new JSSDK();
                $WxData = $jssdk->getSignPackage();
                $this->yunset("wxAppid",$WxData['appId']);
                $this->yunset('wxNonceStr',$WxData['nonceStr']);
                $this->yunset('wxTimestamp',$WxData['timestamp']);
                $this->yunset('wxSignature',$WxData['signature']);


		//΢��jssdk����

		$this->seo("tiny");
		$this->yunset("headertitle","΢����");
		$this->yuntpl(array('wap/tiny'));
	}
	function add_action(){
		$this->rightinfo();
		if($this->config['sy_wjl_web']=="2"){
			$data['msg']='�ܱ�Ǹ����ģ���ѹرգ�';
			$data['url']='index.php';
			$this->yunset("layer",$data);
		}
		$this->get_moblie();
        $TinyM=$this->MODEL('tiny');

		if($_GET['id']){
			$row=$TinyM->GetTinyresumeOne(array('id'=>$_GET[id]));
			$this->yunset("row",$row);
		}
		if($_POST['submit']){
			$_POST['status']=$this->config['user_wjl'];
			$_POST['time']=time();
			$_POST['username']=yun_iconv('utf-8','gbk',trim($_POST['username']));
			$_POST['production']=yun_iconv('utf-8','gbk',trim($_POST['production']));
			$_POST['job']=yun_iconv('utf-8','gbk',trim($_POST['job']));
			$password=md5(trim($_POST['password']));
			$type=trim($_POST['type']);
			unset($_POST['submit']);
			unset($_POST['type']);
			$id=intval($_POST['id']);
			if(!isset($_POST['id'])){
				$_POST['password']=$password;
				$nid=$this->obj->insert_into("resume_tiny",$_POST);
				$nid?$data['msg']='�����ɹ���':$data['msg']='����ʧ�ܣ�';
				$data['url']='index.php?c=tiny';
			}else{
				$arr=$TinyM->GetTinyresumeOne(array('id'=>$id,'password'=>$password));
				if($arr['id']){
					if($_POST['id']){
						unset($_POST['id']);
						$nid=$TinyM->UpdateTinyresume($_POST,array("id"=>$arr['id']));
					}else{
						$_POST['password']=$password;
						$nid=$TinyM->AddTinyresume($_POST);
					}
					$nid?$data['msg']='�����ɹ���':$data['msg']='�����ɹ���';
					$data['url']='index.php?c=tiny';
				}else{
					$data['msg']='�������';
					$data['url']='1';
				}
			}
            $data=yun_iconv('gbk','utf-8',$data);
            echo json_encode($data);die;
		}
		//������΢��jssdk
		
                $jssdk = new JSSDK();
                $WxData = $jssdk->getSignPackage();
                $this->yunset("wxAppid",$WxData['appId']);
                $this->yunset('wxNonceStr',$WxData['nonceStr']);
                $this->yunset('wxTimestamp',$WxData['timestamp']);
                $this->yunset('wxSignature',$WxData['signature']);


		//΢��jssdk����
		/*
		$CacheList=$this->MODEL('cache')->GetCache('user');print_r($CacheList);
        $this->yunset($CacheList);*/
		$this->user_cache();
		$this->yunset(array("layer"=>$data,"headertitle"=>"΢����"));
		$this->yunset("title","���΢����");
		$this->yuntpl(array('wap/tiny_add'));
	}
	function show_action(){
		$this->rightinfo();
		if($this->config['sy_wjl_web']=="2"){
			$data['msg']='�ܱ�Ǹ����ģ���ѹرգ�';
			$data['url']='index.php';
			$this->yunset("layer",$data);
		}
		$this->get_moblie();
		$this->yunset("headertitle","΢����");
		$CacheList=$this->MODEL('cache')->GetCache('user');
        $this->yunset($CacheList);
        $TinyM=$this->MODEL('tiny');
        $TinyM->UpdateTinyresume(array("`hits`=`hits`+1"),array('id'=>$_GET[id]));
		$row=$TinyM->GetTinyresumeOne(array('id'=>$_GET[id]));
		
		//������΢��jssdk
		
                $jssdk = new JSSDK();
                $WxData = $jssdk->getSignPackage();
                $this->yunset("wxAppid",$WxData['appId']);
                $this->yunset('wxNonceStr',$WxData['nonceStr']);
                $this->yunset('wxTimestamp',$WxData['timestamp']);
                $this->yunset('wxSignature',$WxData['signature']);


		
		//΢��jssdk����

		
		$this->data=array('tiny_username'=>$row['username'],'tiny_job'=>$row['job'],'tiny_desc'=>$row['production']);
		$this->seo('tiny_cont');
		$this->yunset("row",$row);
		$this->yuntpl(array('wap/tiny_show'));
	}
}
?>