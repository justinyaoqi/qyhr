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
class com_controller extends zph_controller{ 
	function index_action(){ 
		$this->Zphpublic_action();
		$id=(int)$_GET['id'];
		$M=$this->MODEL('zph');
		$Job=$this->MODEL('job');
		$UserinfoM=$this->MODEL('userinfo');
		$row=$M->GetZphOnce(array("id"=>$id));  
		$urlarr["c"]=$_GET['c'];
		$urlarr["id"]=$_GET['id'];
		$urlarr["page"]="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,"1");
		$rows=$M->get_page("zhaopinhui_com","`zid`='".(int)$_GET['id']."' and status='1'  order by id desc",$pageurl,"13");
		if(is_array($rows['rows'])&&$rows['rows']){
			foreach($rows['rows'] as $v){
				$uid[]=$v['uid'];
			}	 
			$com=$M->GetZphComInfo($UserinfoM,array("uid in(".@implode(",",$uid).")"),array("field"=>"`uid`,name"));			
			foreach($rows['rows'] as $key=>$v){
				foreach($com as $val){
					if($v['uid']==$val['uid']){
						$rows['rows'][$key]['comname']=$val['name'];
						if($val['comtpl'] && $val['comtpl']!="default"){
							$rows['rows'][$key]['url']=Url('company',array("id"=>$v[uid]))."#job";
						}else{
							$rows['rows'][$key]['url']=Url('company',array("id"=>$v[uid]));
						}
					}
				}   
				$rows['rows'][$key]['job']=$Job->GetComjobList(array("`id` in (".$v['jobid'].") and `uid`='".$v['uid']."' and `status`<>'1' and `r_status`<>'2'"),array('field'=>"name,id")); 
			}
		}
		$this->yunset($rows);
		$this->yunset("row",$row);
		$data['zph_title']=$row['title'];
		$data['zph_desc']=$this->GET_content_desc($row['body']);
		$this->data=$data;
		$this->seo("zph_com");
		$this->zph_tpl('zphcom'); 
	} 
}
?>