<?php
/*
 * ְλ����
 * ----------------------------------------------------------------------------
 * �ֱ�� ְλ����Ӧ��Ƹ��˾����˾������ҵ������֤�ȼ���������
 *
 * ============================================================================
*/
function smarty_function_jobsimple($paramer,&$smarty){
	global $db,$db_config,$config;
	$time = time();
	if($config[sy_web_site]=="1")
	{
		if($config[cityid]>0)
		{
			if($paramer[type]=="urgent")
			{
				$sitesql = "AND b.cityid='$config[cityid]'";

			}else{

				$sitesql = "AND `cityid`='$config[cityid]'";
			}

		}

	}
	if($paramer[limit])
	{
		$limit = "limit ".$paramer[limit];

	}
	if($paramer[type]=="urgent"){

		$query=$db->query("SELECT * FROM $db_config[def]company_job where urgent='1' order by `id` desc $limit");

	}elseif($paramer[type]=="com"){

		$query=$db->query("SELECT * FROM $db_config[def]company order by `uid` desc $limit");

	}elseif($paramer[type]=="job"){

		$query=$db->query("SELECT * FROM $db_config[def]company_job WHERE `edate`>='$time' AND `sdate`<='$time' AND `state`='1' AND `status`!='1' $sitesql order by 'lastupdate' DESC $limit");

	}elseif($paramer[type]=="logo"){

		$query=$db->query("SELECT * FROM $db_config[def]company WHERE `logo`!='' order by `uid` desc limit 4");//������ҵ��Ƹ

	}elseif($paramer[type]=="hits"){

		$query=$db->query("SELECT * FROM $db_config[def]company_job WHERE `edate`>='$time' AND `sdate`<='$time' AND `state`='1' AND `status`!='1' $sitesql order by 'hits' DESC limit 3");
	}

	while($rs = $db->fetch_array($query)){
		$list[] = $rs;
	}

	$smarty->assign("$paramer[assign_name]",$list);
}