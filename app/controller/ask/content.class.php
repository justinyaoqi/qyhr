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
class content_controller extends ask_controller{
	function index_action(){
		$M=$this->MODEL('ask');
        $UserInfoM=$this->MODEL('userinfo');
		$FriendM=$this->MODEL('friend');
        $ID=(int)$_GET['id'];
		$show=$M->GetQuestionOne(array("id"=>$ID));
		if(empty($show)){
 			$this->ACT_msg($_SERVER['HTTP_REFERER'],"�ʴ𲻴��ڻ�ɾ����");
		}
		if($_GET['orderby']){
			$order=" order by support desc";
		}
		$pageurl=Url('ask',array("c"=>$_GET['c'],'id'=>$ID,'orderby'=>$_GET['orderby'],"page"=>"{{page}}"));
		$rows=$M->get_page("answer","`qid`='".$ID."'".$order,$pageurl,"10");
		$this->yunset($rows);
		$answer=$M->GetAnswerList($rows['rows']);
        $Userinfo=$FriendM->GetFriendInfo(array('uid'=>$show['uid']));
		if($this->uid){
			$atten_ask=$M->GetAttentionList(array('uid'=>$this->uid,'type'=>1));
			$atn=$M->GetAtnList(array('uid'=>$this->uid),array('field'=>'sc_uid'));
			$myinfo=$FriendM->GetFriendInfo(array('uid'=>$this->uid),array('field'=>'`nickname`,`description`,`pic`,`uid`'));
			if($myinfo['pic']==''){
				$myinfo['pic']=$this->config['sy_friend_icon'];
			}
		}else{
			$myinfo['pic']=$this->config['sy_friend_icon'];
		}


		if(!empty($answer)){
			foreach($answer as $key=>$val){
				if($val['uid']==$this->uid){
					$answer[$key]['is_atn']='2';
				}else{
					foreach($atn as $a_v){
						if($a_v['sc_uid']==$val['uid']){
							$answer[$key]['is_atn']='1';
						}
					}
				}
				if($val['pic']){
					$answer[$key]['pic']=str_replace("..",$this->config['sy_weburl'],$val['pic']);
				}else{
					$answer[$key]['pic']=$this->config['sy_weburl'].'/'.$this->config['sy_friend_icon'];
				}
			}
		}
		if($Userinfo['uid']==$this->uid){
			$Userinfo['useratn']='2';
			$show['qatn']='2';
		}else if(!empty($atn)){
			foreach($atn as $val){
				if($Userinfo['uid']==$val['sc_uid']){
					$Userinfo['useratn']='1';
				}
			}
		}
		if($atten_ask&&is_array($atten_ask)&&$show['qatn']==''){
			$ids=explode(',',rtrim($atten_ask['ids'],','));
			if(in_array($show['id'],$ids)){
				$show['qatn']='1';
			}
		}
        $CacheM=$this->MODEL('cache');
        $reason=$CacheM->GetCache('reason');
        $M->AddQuestionHits(array("id"=>(int)$_GET['id']));
		$show['pic']?$show['pic']=str_replace("..",$this->config['sy_weburl'],$show['pic']):$this->config['sy_weburl'].'/'.$this->config['sy_friend_icon'];
 		$this->yunset("userinfo",$Userinfo);
 		$this->yunset("myinfo",$myinfo);
        $this->yunset(array("reason"=>$reason,"show"=>$show,"uid"=>$this->uid,"answer"=>$answer,"title"=>$show['title'].' - '.$this->config['sy_webname'],"c"=>"index"));
		$this->ask_tpl('content');
	}
}
?>