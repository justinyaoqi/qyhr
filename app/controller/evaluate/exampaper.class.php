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
class exampaper_controller extends evaluate_controller{ 
 
	function index_action(){ 	
		$M = $this->MODEL('evaluate'); 
		$examid = intval($_GET['titleid']); 
		$info=$M->GetExamBaseInfo(array('id'=>$examid));  
		$info['pic'] = $this->config['sy_weburl']."/".$info['pic'];  
		 
		$arr=array();
		$questions = $M->GetQuestions(array('gid'=>$examid));
		foreach($questions as $key=>$val){
			$questions[$key]['option']= unserialize($val['option']);
			$questions[$key]['score']= unserialize($val['score']);
			$questions[$key]['letters']=array('A','B','C','D','E','F','G');
			$arr[]=$val['id'];
 		}   
		$visits = $info['visits']+'1'; 
		$examid = intval($info['id']); 
		$M->UpdateExamBaseInfo(array('visits'=>$visits),array('id'=>$examid));	 
		 
		$recome = $M->GetExamList(array('keyid!=0','recommend'=>1),array('field'=>'id,keyid,name,visits','orderby'=>'','limit'=>'0,8')); 
		$examinee = $M->GetGrade(array("examid"=>$examid,"`uid`<>''"),array('orderby'=>'ctime desc','limit'=>'12')); 
		$data['exampaper']=$info['name'];		
		$this->data=$data;
		$this->yunset('arr',"['".@implode("','",$arr)."']");
		$this->yunset('examinee',$examinee);
		$this->yunset('info',$info);
		$this->yunset('questions',$questions);	
		$this->yunset('recome',$recome);
		$this->seo('exampaper');
		$this->evaluate_tpl('exampaper');
	}
	
	function grade_action(){
		$M=$this->MODEL('evaluate');
		if($_POST['examid']){
			$uid = $this->uid;
			$uname = $this->username;
			$gid = $_POST['hidGid'];
			$examid = (int)$_POST['examid'];
			$questions = $M->GetQuestions(array('gid'=>$examid)); 
			$info=$M->GetExamBaseInfo(array('id'=>$examid));
			$score=$pid=array();
			foreach($questions as $val){
				$pid[]=$val['id'];
				$score['q'.$val['id']]= unserialize($val['score']);
			}  
			$scores=0;
			foreach($pid as $val){  
				$scores+=$score['q'.$val][$_POST['q'.$val]]; 
			}  
			if($this->uid &&$this->username){
				$uid=$this->uid;
				$type='uid';
			}else if($_COOKIE['nuid']){ 
				$uid=$_COOKIE['nuid']; 
				$type='nuid';
			}else{
				$uid=$this->create_uuid();
				$type='nuid';
				setcookie("nuid",$uid,time()+3600); 
			}
			$result = $M->GetGradeOne(array($type=>$uid,'examid'=>$examid));
			if($result['id']){
				$M->SaveGrade(array('grade'=>$scores,'ctime'=>time()),array('id'=>$result['id']));
			}else{
				$result['id']=$M->SaveGrade(array($type=>$uid,'examid'=>$examid,'grade'=>$scores,'ctime'=>time()));
			} 
			$url=url("evaluate",array('c'=>"exampaper","a"=>'gradeshow',"id"=>$result['id']));
			header("location:".$url);  
		}else{ 	 
			header("location:".$this->config['sy_weburl']); 
		}
	}
	function gradeshow_action(){ 
		$M=$this->MODEL('evaluate');
		$FriendM=$this->MODEL('friend');
		$id=(int)$_GET['id']; 
		if($this->uid &&$this->username){
			$uid=$this->uid;
			$info=$M->GetGradeOne(array("id"=>$id,"uid"=>$uid));
		}else{
			$uid=$_COOKIE['nuid'];
			$info=$M->GetGradeOne(array("id"=>$id,"nuid"=>$uid));
		}
		
		if($info['id']==''){
			$this->ACT_msg($this->config['sy_weburl'],"�Ƿ�������");
		}
		$exambase=$M->GetExamBaseInfo(array('id'=>$info['examid']));
		$comment = $this->getComment($exambase,$info['grade']);
		$recom = $M->GetExamList(array('keyid!=0','recommend'=>1),array('limit'=>'8'));  
		$examinee = $M->GetGrade(array("examid"=>$info['examid'],"`uid`<>''"),array('orderby'=>'ctime desc','limit'=>'12'));  
		$page_url=array("c"=>$_GET['c'],"a"=>$_GET['a'],"id"=>$_GET['id']); 
		$page_url['page'] = "{{page}}"; 
		$pageurl=Url('evaluate',$page_url);
		$rows = $M->get_page("evaluate_leave_message","`examid`='".$info['examid']."' order by `id` desc",$pageurl,"6"); 
		$uid=array();
		foreach($rows['rows'] as $key=>$val){
			if(in_array($val['uid'],$uid)==false&&$val['usertype']){$uid[]=$val['uid'];}
			$rows['rows'][$key]['pic']=$this->config['sy_weburl'].'/'.$this->config['sy_friend_icon'];
		}  
		$friend=$FriendM->GetFriendAll(array("`uid` in(".pylode(',',$uid).")"),array("field"=>"`uid`,`pic`,`nickname`")); 
		foreach($rows['rows'] as $key=>$val){
			foreach($friend as $v){
				if($val['uid']==$v['uid']){
					if($v['pic']){$rows['rows'][$key]['pic']=$v['pic'];}
					$rows['rows'][$key]['name']=$v['nickname'];
				}
			}
		}
		if($this->uid){
			$list=$M->GetGrade(array("uid"=>$this->uid),array("orderby"=>"`id` desc","limit"=>8)); 
		}else if($_COOKIE['nuid']){
			$list=$M->GetGrade(array("nuid"=>$_COOKIE['nuid']),array("orderby"=>"`id` desc","limit"=>8));
		}
		if(count($list)&&$list){
			$examid=array();
			foreach($list as $val){
				$examid[]=$val['examid'];
			}
			$groups=$M->GetExamList(array("`id` in (".pylode(',',$examid).")"),array("field"=>"`id`,`name`"));
			foreach($list as $key=>$val){
				foreach($groups as $v){
					if($val['examid']==$v['id']){
						$list[$key]['name']=$v['name'];
					}
				}
			}
		}   
		$data['exampaper']=$exambase['name'];		
		$this->data=$data;
		$this->seo('gradeshow');
		$this->yunset($rows); 
		$this->yunset('list',$list); 
		$this->yunset('exambase',$exambase); 
		$this->yunset('examinee',$examinee); 
		$this->yunset('recom',$recom); 
		$this->yunset('comment',$comment);
		$this->yunset('info',$info);
		$this->evaluate_tpl('gradeshare');
	}
	function message_action(){
		if($_POST['submit']){
			$examid=(int)$_POST['examid'];
			$message=trim($_POST['message']);
			if($message==''){
				$this->ACT_layer_msg("�������ݲ���Ϊ�գ�",8,$_SERVER['HTTP_REFERER']);
			}
			$M=$this->MODEL('evaluate');
			$usertype='';
			if($this->uid &&$this->username){
				$uid=$this->uid;
				$usertype=$_COOKIE['usertype'];
			}else{
				$uid=$_COOKIE['nuid'];
			}
			$nid=$M->SaveMessage(array("uid"=>$uid,'usertype'=>$usertype,"examid"=>$examid,"message"=>$message,"ctime"=>time()));
			$nid?$this->ACT_layer_msg("���۳ɹ���",9,$_SERVER['HTTP_REFERER']):$this->ACT_layer_msg("����ʧ�ܣ�",8,$_SERVER['HTTP_REFERER']);
		} 
	}
	 
	function getComment($examBaseInfo,$grade){
		$comment = '';
		
		$examBaseInfo['fromscore'] = unserialize($examBaseInfo['fromscore']);
		$examBaseInfo['toscore'] = unserialize($examBaseInfo['toscore']);
		$examBaseInfo['comment'] = unserialize($examBaseInfo['comment']);
		for($i=0; $i<count($examBaseInfo['fromscore']); $i++){
			if($examBaseInfo['fromscore'][$i]<=$grade && $grade<= $examBaseInfo['toscore'][$i]){
				$comment = $examBaseInfo['comment'][$i];
				brake;
			}
		}
		return $comment;
	} 
}
?>