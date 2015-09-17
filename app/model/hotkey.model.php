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
class hotkey_model extends model{
    function GetHotkeyNum($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_select_num('hot_key',$WhereStr);
    }
    function GetHotkeyOne($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('hot_key',$WhereStr,$FormatOptions['field']);
    }
    function GetHotkeyList($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options); 
        return $this->DB_select_all('hot_key',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function UpdateHotkey($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('hot_key',$ValuesStr,$WhereStr);
    }
}
?>