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
class friend_model extends model{
    function GetFriendInfo($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        $row=$this->DB_select_once('friend_info',$WhereStr,$FormatOptions['field']);
		if($row['pic']==''){
			$row['pic']=$row['pic_big']=$this->config['sy_weburl'].'/'.$this->config['sy_friend_icon'];
		}else{
			$row['pic'] = str_replace("../",$this->config['sy_weburl']."/",$row['pic']);
			$row['pic_big'] = str_replace("../",$this->config['sy_weburl']."/",$row['pic_big']);
		}
		return $row;
    }
	function RecomFriendAll($Where=array(),$Options=array()){
		if($Where['uid']){
			$atn=$this->DB_select_all("atn","`uid`='".$Where['uid']."'","`sc_uid`");
			if($atn&&is_array($atn)){
				$uids=array();
				foreach($atn as $val){
					$uids[]=$val['sc_uid'];
				}
				$uids[]=$Where['uid'];
				unset($Where['uid']);
				$Where[]=" `uid` not in (".@implode(',',$uids).")";
			}else{

				$Where[]="`uid`<>'".$Where['uid']."'";
				unset($Where['uid']);
			}
		}
		return $this->GetFriendAll($Where,$Options);
	}
    function GetFriendAll($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('friend_info',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function SaveFriendInfo($Values=array(),$Where=array()){
    	if(empty($Where)){
	        $ValuesStr=$this->FormatValues($Values);
	        return $this->DB_insert_once('friend_info',$ValuesStr);
    	}else{
	        $WhereStr=$this->FormatWhere($Where);
	        $ValuesStr=$this->FormatValues($Values);
	        return $this->DB_update_all('friend_info',$ValuesStr,$WhereStr);
    	}
    }
    function GetStateAll($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('friend_state',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function GetStatePage($Where=array(),$Options=array("limit"=>11)){
        $WhereStr=$this->FormatWhere($Where);
        $num=$this->DB_select_num('friend_state',$WhereStr);
        return ceil($num/$Options['limit']);
    }
    function InsertFriendState($Values=array()){
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_insert_once('friend_state',$ValuesStr);
    }
    function GetFriendReplyAll($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('friend_reply',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function GetFriendReplyOne($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('friend_reply',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function InsertFriendReply($Values=array()){
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_insert_once('friend_reply',$ValuesStr);
    }
    function GetFriendFoot($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('friend_foot',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function GetFriendFootOne($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('friend_foot',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function SaveFriendFoot($Values=array(),$Where=array()){
    	if(empty($Where)){
	        $ValuesStr=$this->FormatValues($Values);
	        return $this->DB_insert_once('friend_foot',$ValuesStr);
    	}else{
	        $WhereStr=$this->FormatWhere($Where);
	        $ValuesStr=$this->FormatValues($Values);
	        return $this->DB_update_all('friend_foot',$ValuesStr,$WhereStr);
    	}
    }
    function InsertFriendMessage($Values=array()){
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_insert_once('friend_message',$ValuesStr);
    }
    function GetMessageList($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('friend_message',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function GetMessagePage($Where=array(),$Options=array("limit"=>11)){
        $WhereStr=$this->FormatWhere($Where);
        $num=$this->DB_select_num('friend_message',$WhereStr);
        return ceil($num/$Options['limit']);
    }
    function DeleteFriendInfo($Where=array(),$Options=array()){
        if(!in_array($Options['table'],array("info","foot","message","reply","state"))){
            return null;
        }
        $TableName = "friend_".$Options['table'];
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all($TableName,$WhereStr,"");
    }
	function DeleteMessage($Where=array()){
		$info=$this->DB_select_once("friend_message","(`uid`='".$Where['uid']."' or `fid`='".$Where['uid']."') and `pid`='0' and `id`='".$Where['id']."'");
		if($info['id']){
			return $this->DB_delete_all("friend_message","`id`='".$info['id']."' or `pid`='".$info['id']."'","");
		}
	}
}
?>