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
class tiny_model extends model{
    function GetTinyresumeNum($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_select_num('resume_tiny',$WhereStr);
    }
    function GetTinyresumeOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('resume_tiny',$WhereStr,$FormatOptions['field']);
    }
    function UpdateTinyresume($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('resume_tiny',$ValuesStr,$WhereStr);
    }
    function AddTinyresume($Values=array()){
        return $this->insert_into('resume_tiny',$Values);
    }
    function DeleteTinyresume($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('resume_tiny',$WhereStr);
    }    
}
?>