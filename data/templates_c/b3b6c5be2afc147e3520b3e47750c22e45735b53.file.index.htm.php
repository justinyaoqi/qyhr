<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:03:55
         compiled from "D:\wamp\www\qyhr\app\template\hy\index\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:496655f968bbd53438-39039256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3b6c5be2afc147e3520b3e47750c22e45735b53' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\hy\\index\\index.htm',
      1 => 1442029704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '496655f968bbd53438-39039256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'job_index' => 0,
    'key' => 0,
    'v' => 0,
    'job_name' => 0,
    'job_type' => 0,
    'jobclassurl' => 0,
    'vv' => 0,
    'vvl' => 0,
    'vvv' => 0,
    'top_key' => 0,
    'lunbo' => 0,
    'hotjob' => 0,
    'hotjobs' => 0,
    'hjob' => 0,
    'job1' => 0,
    'jobl' => 0,
    'link1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f968bc0b9153_86817610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f968bc0b9153_86817610')) {function content_55f968bc0b9153_86817610($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\wamp\\www\\qyhr\\app\\include\\libs\\plugins\\function.url.php';
?><?php global $db,$db_config,$config;
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$time = time();
		$where = "`time_start`<$time AND `time_end`>$time";$order = " ORDER BY `sort` ";$sort = 'ASC';$limit=" LIMIT 4";$where.=$order.$sort;
        $Query = $db->query("SELECT * FROM $db_config[def]hotjob where ".$where.$limit);
		while($rs = $db->fetch_array($Query)){
			$hotjob[] = $rs;
			$ListId[] =  $rs[uid];
		}
		$jobwhere=1;
		if($config[sy_web_site]=="1"){
			if($config[cityid]>0 && $config[cityid]!=""){
				$jobwhere.=" and `cityid`='$config[cityid]'";
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$jobwhere.=" and `three_cityid`='$config[three_cityid]'";
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$jobwhere.=" and `hy`='".$config[hyclass]."'";
			}
		}
		$JobId = @implode(",",$ListId);
		$JobList=$db->select_all("company_job","`uid` IN ($JobId) and `edate`>'".mktime()."' and state=1 and r_status<>'2' and status<>'1' and $jobwhere");
		$statis=$db->select_all("company_statis","`uid` IN ($JobId)","`uid`,`comtpl`");
		if(is_array($ListId)){
			$cache_array = $db->cacheget();
			foreach($hotjob as $key=>$value){
				$i=0;
				if(is_array($JobList)){
					$hotjob[$key]["job"].="<div class=\"area_left\"> ";
					foreach($JobList as $k=>$v){
						if($value[uid]==$v[uid] && $i<5){
							$job_url = Url("job",array("c"=>"comapply","id"=>"$v[id]"),"1");
							$v[name] = mb_substr($v[name],0,10,"GBK");
							$hotjob[$key]["job"].="<a href='".$job_url."'>".$v[name]."</a>";
							$i++;
						}
					}
					foreach($statis as $v){
						if($value['uid']==$v['uid']){
							if($v['comtpl'] && $v['comtpl']!="default"){
								$jobs_url = Url("company",array("c"=>"show","id"=>$value[uid]))."#job";
							}else{
								$jobs_url = Url("company",array("c"=>"show","id"=>$value[uid]));
							}
						}
					}
					$com_url = Url("company",array("c"=>"show","id"=>$value[uid]));
					$beizhu=mb_substr($value['beizhu'],0,50,"GBK")."...";
					$hotjob[$key]["job"].="</div><div class=\"area_right\"><a href='".$com_url."'>".$value["username"]."</a>".$beizhu."</div><div class=\"area_left_bot\"><a href='".$jobs_url."'>全部职位</a></div><div class='area_right_bot'><a href='".$com_url."'>公司详情</a></div>";
					$hotjob[$key]["url"]=$com_url;
				}
			}
		} ?>
<?php global $db,$db_config,$config;
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$time = time();
		$where = "`time_start`<$time AND `time_end`>$time";$order = " ORDER BY `sort` ";$sort = 'ASC';$limit=" LIMIT 11";$where.=$order.$sort;
        $Query = $db->query("SELECT * FROM $db_config[def]hotjob where ".$where.$limit);
		while($rs = $db->fetch_array($Query)){
			$hotjobs[] = $rs;
			$ListId[] =  $rs[uid];
		}
		$jobwhere=1;
		if($config[sy_web_site]=="1"){
			if($config[cityid]>0 && $config[cityid]!=""){
				$jobwhere.=" and `cityid`='$config[cityid]'";
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$jobwhere.=" and `three_cityid`='$config[three_cityid]'";
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$jobwhere.=" and `hy`='".$config[hyclass]."'";
			}
		}
		$JobId = @implode(",",$ListId);
		$JobList=$db->select_all("company_job","`uid` IN ($JobId) and `edate`>'".mktime()."' and state=1 and r_status<>'2' and status<>'1' and $jobwhere");
		$statis=$db->select_all("company_statis","`uid` IN ($JobId)","`uid`,`comtpl`");
		if(is_array($ListId)){
			$cache_array = $db->cacheget();
			foreach($hotjobs as $key=>$value){
				$i=0;
				if(is_array($JobList)){
					$hotjobs[$key]["job"].="<div class=\"area_left\"> ";
					foreach($JobList as $k=>$v){
						if($value[uid]==$v[uid] && $i<5){
							$job_url = Url("job",array("c"=>"comapply","id"=>"$v[id]"),"1");
							$v[name] = mb_substr($v[name],0,10,"GBK");
							$hotjobs[$key]["job"].="<a href='".$job_url."'>".$v[name]."</a>";
							$i++;
						}
					}
					foreach($statis as $v){
						if($value['uid']==$v['uid']){
							if($v['comtpl'] && $v['comtpl']!="default"){
								$jobs_url = Url("company",array("c"=>"show","id"=>$value[uid]))."#job";
							}else{
								$jobs_url = Url("company",array("c"=>"show","id"=>$value[uid]));
							}
						}
					}
					$com_url = Url("company",array("c"=>"show","id"=>$value[uid]));
					$beizhu=mb_substr($value['beizhu'],0,50,"GBK")."...";
					$hotjobs[$key]["job"].="</div><div class=\"area_right\"><a href='".$com_url."'>".$value["username"]."</a>".$beizhu."</div><div class=\"area_left_bot\"><a href='".$jobs_url."'>全部职位</a></div><div class='area_right_bot'><a href='".$com_url."'>公司详情</a></div>";
					$hotjobs[$key]["url"]=$com_url;
				}
			}
		} ?>
<?php global $db,$db_config,$config;
		$time = time();
		
        eval('$paramer=array("rec"=>"1","limit"=>"14","comlen"=>"15","namelen"=>"13","item"=>"\'hjob\'","key"=>"\'key\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
        if($config[sy_web_site]=="1"){
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}
		if($paramer[sdate]){
			$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `edate`>'$time' and `state`=1";
		}else{
			$where = "`edate`>'$time' and `state`=1";
		}
		if($paramer[uid]){
			$where .= " AND `uid` = '$paramer[uid]'";
		}
		if($paramer[rec]){
			$where.=" AND `rec_time`>".time();
		}
		if($paramer['cert']){
			$company=$db->select_all("company","`yyzz_status`=1","`uid`");
			if(is_array($company)){
				foreach($company as $v){
					$job_uid[]=$v['uid'];
				}
			}
			$where.=" and `uid` in (".@implode(",",$job_uid).")";
		}
		if($paramer[noid]){
			$where.= " and `id`<>$paramer[noid]";
		}
		if($paramer[r_status]){
			$where.= " and `r_status`=2";
		}else{
			$where.= " and `r_status`<>2";
		}
		if($paramer[status]){
			$where.= " and `status`=1";
		}else{
			$where.= " and `status`<>1";
		}
		if($paramer[pr]){
			$where .= " AND `pr` =$paramer[pr]";
		}
		if($paramer['hy']){
			$where .= " AND `hy` = $paramer[hy]";
		}
		if($paramer[mun]){
			$where .= " AND `mun` = $paramer[mun]";
		}
		if($paramer[job1]){
			$where .= " AND `job1` = $paramer[job1]";
		}
		if($paramer[job1_son])
		{
			$where .= " AND `job1_son` = $paramer[job1_son]";
		}
		if($paramer[job_post])
		{
			$where .= " AND (`job_post` IN ($paramer[job_post]))";
		}
		if($paramer['jobwhere']){
			$where .=" and ".$paramer['jobwhere'];
		}
		if($paramer['jobids'])
		{
			$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
		}
		if($paramer['jobin']){
			$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
		}
		if($paramer[provinceid]){
			$where .= " AND `provinceid` = $paramer[provinceid]";
		}
		if($paramer['cityid']){
			$where .= " AND (`cityid` IN ($paramer[cityid]))";
		}
		if($paramer['three_cityid']){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		if($paramer['cityin']){
			$where .= " AND `three_cityid` IN ($paramer[cityin])";
		}
		if($paramer[edu]){
			$where .= " AND `edu` = $paramer[edu]";
		}
		if($paramer[exp]){
			$where .= " AND `exp` = $paramer[exp]";
		}
		if($paramer[type]){
			$where .= " AND `type` = $paramer[type]";
		}
		if($paramer[sex]){
			$where .= " AND `sex` = $paramer[sex]";
		}
		if($paramer[salary]){
			$where .= " AND `salary` = $paramer[salary]";
		}
		if($paramer[cityin]){
			$where .= " AND( AND `provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
		}
		if($paramer[urgent]){
			$where.=" AND `urgent_time`>".time();
		}
		if($paramer[uptime]){
			$uptime = $time-$paramer[uptime]*86400;
			$where.=" AND `lastupdate`>$uptime";
		}
		if($paramer[comname]){
			$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
		}
		if($paramer[com_pro]){
			$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
		}
		if($paramer[keyword]){
			$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
			$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
			include PLUS_PATH."/city.cache.php";
			foreach($city_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$cityid[]=$k;
				}
			}
			if(is_array($cityid)){
				foreach($cityid as $value){
					$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
				}
				$where1[]=@implode(" or ",$class);
			}
			$where.=" AND (".@implode(" or ",$where1).")";
		}
		if($paramer["job"]){
			$where.=" AND `job_post` in ($paramer[job])";
		}
		if($paramer[order] && $paramer[order]!="lastdate"){
			$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
		}else{
			$order = " ORDER BY `lastupdate` ";
		}
		if($paramer[sort]){
			$sort = $paramer[sort];
		}else{
			$sort = " DESC";
		}
		if($paramer['orderby']=="rec"){
			$nowtime=time();
			$where.=" ORDER BY if(rec_time>$nowtime,rec_time,lastupdate)  desc";
		}else{
			$where.=$order.$sort;
		}
		if($paramer[where]){
			$where = $paramer[where];
		}
		if($paramer[limit]){
			$limit = " limit ".$paramer[limit];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[limit]?$paramer[limit]:"6",$_smarty_tpl);
            $_smarty_tpl->tpl_vars["firmurl"]=new Smarty_Variable;
			$_smarty_tpl->tpl_vars["firmurl"]->value = $config['sy_weburl']."/index.php?m=job".$ParamerArr[firmurl];
		}
		$hjob = $db->select_all("company_job",$where.$limit);
		if(is_array($hjob)){
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($hjob as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						$r_uid[$value['uid']] = $value['yyzz_status'];
					}
				}
			}
			include PLUS_PATH."/comrating.cache.php";
			foreach($hjob as $key=>$value){
				$hjob[$key] = $db->array_action($value,$cache_array);
				$hjob[$key][stime] = date("Y-m-d",$value[sdate]);
				$hjob[$key][etime] = date("Y-m-d",$value[edate]);
				$hjob[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);

				$hjob[$key][yyzz_status] =$r_uid[$value['uid']]['yyzz_status'];
				$time=time()-$value['lastupdate'];

				if($time>86400 && $time<604800){
					$hjob[$key]['time'] = ceil($time/86400)."天前";
				}elseif($time>3600 && $time<86400){
					$hjob[$key]['time'] = ceil($time/3600)."小时前";
				}elseif($time>60 && $time<3600){
					$hjob[$key]['time'] = ceil($time/60)."分钟前";
				}elseif($time<60){
					$hjob[$key]['time'] = "刚刚";
				}else{
					$hjob[$key]['time'] = date("Y-m-d",$value['lastupdate']);
				}
				if(is_array($hjob[$key]['welfare'])&&$hjob[$key]['welfare']){
					foreach($hjob[$key]['welfare'] as $val){
						$hjob[$key]['welfarename'][]=$cache_array['comclass_name'][$val];
					}

				}
				if($paramer[comlen]){
					$hjob[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"GBK");
				}
				if($paramer[namelen]){
					if($value['rec_time']>time()){
						$hjob[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"GBK")."</font>";
					}else{
						$hjob[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"GBK");
					}
				}else{
					if($value['rec_time']>time()){
						$hjob[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
					}
				}
				$hjob[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
				$hjob[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
				foreach($comrat as $k=>$v){
					if($value[rating]==$v[id]){
						$hjob[$key][color] = str_replace("#","",$v[com_color]);
						$hjob[$key][ratlogo] = $v[com_pic];
						$hjob[$key][ratname] = $v[name];
					}
				}
				if($paramer[keyword]){
					$hjob[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
					$hjob[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
					$hjob[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$hjob[$key][name_n]);
					$hjob[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$hjob[$key][com_n]);
					$hjob[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
					$hjob[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
				}
			}
			if(is_array($hjob)){
				if($paramer[keyword]!=""&&!empty($hjob)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		} ?>
<?php global $db,$db_config,$config;
		$time = time();
		
        eval('$paramer=array("limit"=>"14","comlen"=>"15","namelen"=>"13","item"=>"\'jobl\'","key"=>"\'key\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
        if($config[sy_web_site]=="1"){
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}
		if($paramer[sdate]){
			$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `edate`>'$time' and `state`=1";
		}else{
			$where = "`edate`>'$time' and `state`=1";
		}
		if($paramer[uid]){
			$where .= " AND `uid` = '$paramer[uid]'";
		}
		if($paramer[rec]){
			$where.=" AND `rec_time`>".time();
		}
		if($paramer['cert']){
			$company=$db->select_all("company","`yyzz_status`=1","`uid`");
			if(is_array($company)){
				foreach($company as $v){
					$job_uid[]=$v['uid'];
				}
			}
			$where.=" and `uid` in (".@implode(",",$job_uid).")";
		}
		if($paramer[noid]){
			$where.= " and `id`<>$paramer[noid]";
		}
		if($paramer[r_status]){
			$where.= " and `r_status`=2";
		}else{
			$where.= " and `r_status`<>2";
		}
		if($paramer[status]){
			$where.= " and `status`=1";
		}else{
			$where.= " and `status`<>1";
		}
		if($paramer[pr]){
			$where .= " AND `pr` =$paramer[pr]";
		}
		if($paramer['hy']){
			$where .= " AND `hy` = $paramer[hy]";
		}
		if($paramer[mun]){
			$where .= " AND `mun` = $paramer[mun]";
		}
		if($paramer[job1]){
			$where .= " AND `job1` = $paramer[job1]";
		}
		if($paramer[job1_son])
		{
			$where .= " AND `job1_son` = $paramer[job1_son]";
		}
		if($paramer[job_post])
		{
			$where .= " AND (`job_post` IN ($paramer[job_post]))";
		}
		if($paramer['jobwhere']){
			$where .=" and ".$paramer['jobwhere'];
		}
		if($paramer['jobids'])
		{
			$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
		}
		if($paramer['jobin']){
			$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
		}
		if($paramer[provinceid]){
			$where .= " AND `provinceid` = $paramer[provinceid]";
		}
		if($paramer['cityid']){
			$where .= " AND (`cityid` IN ($paramer[cityid]))";
		}
		if($paramer['three_cityid']){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		if($paramer['cityin']){
			$where .= " AND `three_cityid` IN ($paramer[cityin])";
		}
		if($paramer[edu]){
			$where .= " AND `edu` = $paramer[edu]";
		}
		if($paramer[exp]){
			$where .= " AND `exp` = $paramer[exp]";
		}
		if($paramer[type]){
			$where .= " AND `type` = $paramer[type]";
		}
		if($paramer[sex]){
			$where .= " AND `sex` = $paramer[sex]";
		}
		if($paramer[salary]){
			$where .= " AND `salary` = $paramer[salary]";
		}
		if($paramer[cityin]){
			$where .= " AND( AND `provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
		}
		if($paramer[urgent]){
			$where.=" AND `urgent_time`>".time();
		}
		if($paramer[uptime]){
			$uptime = $time-$paramer[uptime]*86400;
			$where.=" AND `lastupdate`>$uptime";
		}
		if($paramer[comname]){
			$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
		}
		if($paramer[com_pro]){
			$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
		}
		if($paramer[keyword]){
			$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
			$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
			include PLUS_PATH."/city.cache.php";
			foreach($city_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$cityid[]=$k;
				}
			}
			if(is_array($cityid)){
				foreach($cityid as $value){
					$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
				}
				$where1[]=@implode(" or ",$class);
			}
			$where.=" AND (".@implode(" or ",$where1).")";
		}
		if($paramer["job"]){
			$where.=" AND `job_post` in ($paramer[job])";
		}
		if($paramer[order] && $paramer[order]!="lastdate"){
			$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
		}else{
			$order = " ORDER BY `lastupdate` ";
		}
		if($paramer[sort]){
			$sort = $paramer[sort];
		}else{
			$sort = " DESC";
		}
		if($paramer['orderby']=="rec"){
			$nowtime=time();
			$where.=" ORDER BY if(rec_time>$nowtime,rec_time,lastupdate)  desc";
		}else{
			$where.=$order.$sort;
		}
		if($paramer[where]){
			$where = $paramer[where];
		}
		if($paramer[limit]){
			$limit = " limit ".$paramer[limit];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[limit]?$paramer[limit]:"6",$_smarty_tpl);
            $_smarty_tpl->tpl_vars["firmurl"]=new Smarty_Variable;
			$_smarty_tpl->tpl_vars["firmurl"]->value = $config['sy_weburl']."/index.php?m=job".$ParamerArr[firmurl];
		}
		$jobl = $db->select_all("company_job",$where.$limit);
		if(is_array($jobl)){
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($jobl as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						$r_uid[$value['uid']] = $value['yyzz_status'];
					}
				}
			}
			include PLUS_PATH."/comrating.cache.php";
			foreach($jobl as $key=>$value){
				$jobl[$key] = $db->array_action($value,$cache_array);
				$jobl[$key][stime] = date("Y-m-d",$value[sdate]);
				$jobl[$key][etime] = date("Y-m-d",$value[edate]);
				$jobl[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);

				$jobl[$key][yyzz_status] =$r_uid[$value['uid']]['yyzz_status'];
				$time=time()-$value['lastupdate'];

				if($time>86400 && $time<604800){
					$jobl[$key]['time'] = ceil($time/86400)."天前";
				}elseif($time>3600 && $time<86400){
					$jobl[$key]['time'] = ceil($time/3600)."小时前";
				}elseif($time>60 && $time<3600){
					$jobl[$key]['time'] = ceil($time/60)."分钟前";
				}elseif($time<60){
					$jobl[$key]['time'] = "刚刚";
				}else{
					$jobl[$key]['time'] = date("Y-m-d",$value['lastupdate']);
				}
				if(is_array($jobl[$key]['welfare'])&&$jobl[$key]['welfare']){
					foreach($jobl[$key]['welfare'] as $val){
						$jobl[$key]['welfarename'][]=$cache_array['comclass_name'][$val];
					}

				}
				if($paramer[comlen]){
					$jobl[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"GBK");
				}
				if($paramer[namelen]){
					if($value['rec_time']>time()){
						$jobl[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"GBK")."</font>";
					}else{
						$jobl[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"GBK");
					}
				}else{
					if($value['rec_time']>time()){
						$jobl[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
					}
				}
				$jobl[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
				$jobl[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
				foreach($comrat as $k=>$v){
					if($value[rating]==$v[id]){
						$jobl[$key][color] = str_replace("#","",$v[com_color]);
						$jobl[$key][ratlogo] = $v[com_pic];
						$jobl[$key][ratname] = $v[name];
					}
				}
				if($paramer[keyword]){
					$jobl[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
					$jobl[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
					$jobl[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$jobl[$key][name_n]);
					$jobl[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$jobl[$key][com_n]);
					$jobl[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
					$jobl[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
				}
			}
			if(is_array($jobl)){
				if($paramer[keyword]!=""&&!empty($jobl)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		} ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/hy.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/index.css" type="text/css">
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png,.pagination li a');
<?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layer/layer.min.js" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lazyload.min.js" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/reg_ajax.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/index.js" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/search.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/slides.jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
</head>
<body class="index_body_box">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo '<script'; ?>
>
    $(document).ready(function(){       
        $('.index_header_seach_find').delegate('#search_name','click',function(){$(this).next().show();});
		$("img.lazy").lazyload();
    });
		$(document).ready(function(){
	$(".index_post_ul").find("li").bind("click",function(){var id=$(this).attr("tab_name");$(".index_new_job").hide();$(".index_post_ul_cur").removeClass("index_post_ul_cur");$(this).addClass("index_post_ul_cur");$("#"+id).show();});
	});
<?php echo '</script'; ?>
> 
<!--content  start-->

<div class="index_cont">
<div class="w980"> 
  <!--leftnav-->
  <div class="left_sidebar"> 

    <div id="sidebar">
      <div class="mainNavs"> 
        <!--放上去current--> 
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <div class="menu_box" aid="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="jobclass<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
          <div class="menu_main">
            <h2><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 <span ></span></h2>

            <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['v']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?> <a href="<?php echo $_smarty_tpl->tpl_vars['jobclassurl']->value;?>
job1=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&job1_son=<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['vv']->value];?>
 </a> <?php } ?> </div>
          <div class="menu_sub dn" style="top: 0px;<?php if (count($_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['v']->value])<3) {?>height:550px;<?php }?>" id="jobclass_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"> <?php  $_smarty_tpl->tpl_vars['vvl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['v']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvl']->key => $_smarty_tpl->tpl_vars['vvl']->value) {
$_smarty_tpl->tpl_vars['vvl']->_loop = true;
?>
            <dl class="reset">
              <dt>
             
              		<a href="<?php echo $_smarty_tpl->tpl_vars['jobclassurl']->value;?>
job1=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&job1_son=<?php echo $_smarty_tpl->tpl_vars['vvl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['vvl']->value];?>
 </a>
              
              </dt>
              <dd> 
              <?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['vvl']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?> 
            
              <a href="<?php echo $_smarty_tpl->tpl_vars['jobclassurl']->value;?>
job1=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&job1_son=<?php echo $_smarty_tpl->tpl_vars['vvl']->value;?>
&job_post=<?php echo $_smarty_tpl->tpl_vars['vvv']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['vvv']->value];?>
 </a> 
              <?php } ?> </dd>
            </dl>
            <?php } ?> </div>
        </div>
        <?php } ?> </div>
      <div class="subscribe"> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/index.php?m=subscribe" target="_blank" rel="nofollow"> <span>订阅职位</span></a> </div>
    </div>
  </div>
  <!--    index right-->
  <div class="index_right_sidebar">
    <div class="index_search fr mt20">
      <div class="search_box">
        <div class="select_wrap fl"> <span class="search_type_selected f18">职位</span> <span class="search_type_keyword"></span>
          <div class="select_wrap_list" style="display:none"><span class="search_type_list f18" aid="job">职位</span><span class="search_type_list f18" aid="company" cid="search">公司</span></div>
        </div>
        <form method="get" action="index.php" onsubmit="return search_keyword(this);">
          <input type="hidden" name="m" id="m" value="job" />
          <input type="text" name="keyword" value="请输入职位名称，如：产品经理" onclick="if(this.value==window.KeywordTip.split('|')[0]||this.value==window.KeywordTip.split('|')[1]){this.value=''}" onblur="if(this.value==''){this.value=$('#m').val()=='job'?window.KeywordTip.split('|')[0]:window.KeywordTip.split('|')[1];}" placeholder="请输入职位名称，如：产品经理" class="index_search-input fl" >
          <input type="submit" value=" 搜索" class="index_search-bth fr">
        </form>
      </div>
      <div class="index_search_tag c6  mt15">热门：<?php  $_smarty_tpl->tpl_vars['top_key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top_key']->_loop = false;
global $config;eval('$paramer=array("limit"=>"6","recom"=>"1","item"=>"\'top_key\'","nocache"=>"")
;');$list=array();
	
		if($paramer[recom]){
			$tuijian = 1;
		}
		if($paramer[type]){
			$type = $paramer[type];
		}
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=20;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){ 
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='一句话招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='微简历';					
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='一句话招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='微简历';	
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					 
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['top_key']->key => $_smarty_tpl->tpl_vars['top_key']->value) {
$_smarty_tpl->tpl_vars['top_key']->_loop = true;
?> <a href="<?php echo $_smarty_tpl->tpl_vars['top_key']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['top_key']->value['key_name'];?>
</a><?php } ?> </div>
    </div>
    <div class="clear"></div>
    <div class="index_right_cont">
      <div class="slideCon">
        <div class="Projector">
          <div class="Projector_img">
            <div id="slides" class="s_lb">
              <div class="slides_container"> <?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[3];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 0;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0')&&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars["lunbo"]->key => $_smarty_tpl->tpl_vars["lunbo"]->value) {
$_smarty_tpl->tpl_vars["lunbo"]->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars["lunbo"]->key;
?>
                <div class="slide"><?php echo $_smarty_tpl->tpl_vars['lunbo']->value['html'];?>
</div>
                <?php } ?> </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
        <div class="index_Switching"><span class="index_Switching_icon fl"></span>名企招聘</div>
        <div class="index_Switching_cont">
          <div class="index_Switching_cont_box"> <?php  $_smarty_tpl->tpl_vars['hotjob'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hotjob']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$hotjob = $hotjob; if (!is_array($hotjob) && !is_object($hotjob)) { settype($hotjob, 'array');}
foreach ($hotjob as $_smarty_tpl->tpl_vars['hotjob']->key => $_smarty_tpl->tpl_vars['hotjob']->value) {
$_smarty_tpl->tpl_vars['hotjob']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['hotjob']->key;
?>
            <div class="index_Switching_ban fl"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['hotjob']->value['uid']),$_smarty_tpl);?>
"><img  src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['hotjob']->value['hot_pic'];?>
" width="170" height="90"></a></div>
            <?php } ?>
            
            <?php  $_smarty_tpl->tpl_vars['hotjobs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hotjobs']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$hotjobs = $hotjobs; if (!is_array($hotjobs) && !is_object($hotjobs)) { settype($hotjobs, 'array');}
foreach ($hotjobs as $_smarty_tpl->tpl_vars['hotjobs']->key => $_smarty_tpl->tpl_vars['hotjobs']->value) {
$_smarty_tpl->tpl_vars['hotjobs']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['hotjobs']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['key']->value>4) {?>
            <div class="index_Switching_ban index_Switching_ban_w111 fl"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>$_smarty_tpl->tpl_vars['hotjobs']->value['uid']),$_smarty_tpl);?>
"><img  src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['hotjobs']->value['hot_pic'];?>
" width="109" height="109"></a></div>
            <?php }?>
            <?php } ?> </div>
        </div>
        <div class="clear"></div>
        <ul class="index_post_ul">
          <li class="index_post_ul_cur" tab_name="latest">推荐职位 </li>
          <li tab_name="introself"> 最新职位</li>
        </ul>
        <ul class="index_new_job mt10" id="latest">
          <?php  $_smarty_tpl->tpl_vars['hjob'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hjob']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$hjob = $hjob; if (!is_array($hjob) && !is_object($hjob)) { settype($hjob, 'array');}
foreach ($hjob as $_smarty_tpl->tpl_vars['hjob']->key => $_smarty_tpl->tpl_vars['hjob']->value) {
$_smarty_tpl->tpl_vars['hjob']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['hjob']->key;
?>
          <li class="">
            <div class="index_new_job_tit fl"><a href="<?php echo $_smarty_tpl->tpl_vars['hjob']->value['job_url'];?>
" class="index_new_job_name fl f16"><?php echo $_smarty_tpl->tpl_vars['hjob']->value['name_n'];?>
</a> <span class="index_new_job_city fl">[<?php echo $_smarty_tpl->tpl_vars['hjob']->value['job_city_one'];?>
]</span><em class="index_new_job_date fr"><?php echo $_smarty_tpl->tpl_vars['hjob']->value['time'];?>
</em></div>
            <div class="index_new_job_tit fl mt15"> <span class="index_new_job_bt">薪资：</span> <span class="index_new_job_xz cf6"><?php echo $_smarty_tpl->tpl_vars['hjob']->value['job_salary'];?>
</span> <span class="index_new_job_bt index_new_job_bt_l30">经验：</span> <span class="index_new_job_xz "><?php echo $_smarty_tpl->tpl_vars['hjob']->value['job_exp'];?>
 </span> <span class="index_new_job_bt index_new_job_bt_l30">最低学历：</span> <span class="index_new_job_xz "><?php echo $_smarty_tpl->tpl_vars['hjob']->value['job_edu'];?>
 </span> <a href="<?php echo $_smarty_tpl->tpl_vars['hjob']->value['com_url'];?>
" class="cblue  index_new_job_bt_l30"><?php echo $_smarty_tpl->tpl_vars['hjob']->value['com_n'];?>
</a> </div>
          </li>
          <?php } ?>
        </ul>
        <ul class="index_new_job mt10" style="display:none;" id="introself">
          <?php  $_smarty_tpl->tpl_vars['jobl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jobl']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$jobl = $jobl; if (!is_array($jobl) && !is_object($jobl)) { settype($jobl, 'array');}
foreach ($jobl as $_smarty_tpl->tpl_vars['jobl']->key => $_smarty_tpl->tpl_vars['jobl']->value) {
$_smarty_tpl->tpl_vars['jobl']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['jobl']->key;
?>
          <li class="">
            <div class="index_new_job_tit fl"><a href="<?php echo $_smarty_tpl->tpl_vars['job1']->value['job_url'];?>
" class="index_new_job_name fl f16"><?php echo $_smarty_tpl->tpl_vars['jobl']->value['name_n'];?>
</a> <span class="index_new_job_city fl">[<?php echo $_smarty_tpl->tpl_vars['hjob']->value['job_city_one'];?>
]</span><em class="index_new_job_date fr"><?php echo $_smarty_tpl->tpl_vars['jobl']->value['time'];?>
</em></div>
            <div class="index_new_job_tit fl mt15"> <span class="index_new_job_bt">薪资：</span> <span class="index_new_job_xz cf6"><?php echo $_smarty_tpl->tpl_vars['jobl']->value['job_salary'];?>
</span> <span class="index_new_job_bt index_new_job_bt_l30">经验：</span> <span class="index_new_job_xz "><?php echo $_smarty_tpl->tpl_vars['jobl']->value['job_exp'];?>
 </span> <span class="index_new_job_bt index_new_job_bt_l30">最低学历：</span> <span class="index_new_job_xz "><?php echo $_smarty_tpl->tpl_vars['jobl']->value['job_edu'];?>
 </span> <a href="<?php echo $_smarty_tpl->tpl_vars['job1']->value['com_url'];?>
" class="cblue  index_new_job_bt_l30"><?php echo $_smarty_tpl->tpl_vars['jobl']->value['com_n'];?>
</a> </div>
          </li>
          <?php } ?>
        </ul>
        <div class="clear"></div>
        <div class="index_Switching"><span class="index_Switching_icon fl"></span>友情链接</div>
        <div class="index_link fl"> <?php  $_smarty_tpl->tpl_vars['link1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link1']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $config;
		//跨域名使用范围
		$domain='';
		if($config["cityid"]!="" || $config["hyclass"]!=""){
			include(PLUS_PATH."/domain_cache.php");
			$host_url=$_SERVER['HTTP_HOST'];
			foreach($site_domain as $v){
				if($v['host']==$host_url){
					$domain=$v['id'];
				}
			}
		}$tem_type = 2;
        include PLUS_PATH."/link.cache.php";
		if(is_array($link)){$linkList=array();
			$i=0;
			foreach($link as $key=>$value)
			{
				if($config["did"]!=0 && $value["did"]!=$config["did"])
				{
					continue;
				}elseif(is_numeric('2') && $value['tem_type']!='2' && $value['tem_type']!='1'){
					continue;

				}elseif((!is_numeric('2') || '2'=='1') && $value['tem_type']!='1'){

					continue;
				}elseif(!$config["did"] && $value["did"]>0){
					continue;
				}
				if(is_numeric('1') && $value['link_type']!='1')
				{
					continue;
				}
				if(is_numeric('') && intval('')<=$i)
				{
					break;
				}
				$value[picurl] = $config[sy_weburl]."/".$value[pic];
				$linkList[] = $value;
				$i++;
			}
		}$linkList = $linkList; if (!is_array($linkList) && !is_object($linkList)) { settype($linkList, 'array');}
foreach ($linkList as $_smarty_tpl->tpl_vars['link1']->key => $_smarty_tpl->tpl_vars['link1']->value) {
$_smarty_tpl->tpl_vars['link1']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['link1']->key;
?>
          <?php if ($_smarty_tpl->tpl_vars['key']->value>0) {?><span>|</span><?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['link1']->value['link_url'];?>
" target="_blank" class="index_link_a"><?php echo $_smarty_tpl->tpl_vars['link1']->value['link_name'];?>
</a> <?php } ?> </div>
      </div>
    </div>
  </div>
</div>

<?php echo '<script'; ?>
>

$(document).ready(function(){
	$(".index_new_job li").hover(function(){
		var aid=$(this).attr("aid");
		$("#joblist"+aid).addClass("index_new_job_hover");	
	},function(){
		var aid=$(this).attr("aid");
		$("#joblist"+aid).removeClass("index_new_job_hover");	
	})   
	
	$(".menu_box").hover(function(){
		var aid=$(this).attr("aid");
		var ftop=Number($(this).offset().top); 
		var sheight=Number($("#jobclass_"+aid).height());  
		if(aid=='0'){ 
			$("#jobclass_"+aid).css("top","0px"); 
		}else if(sheight>ftop){ 
			$("#jobclass_"+aid).css("top","0px"); 
		}else if(ftop>sheight&&Number(sheight)<250){  
			var isIE6=!window.XMLHttpRequest;
			if (isIE6){
				var top=Number(ftop)-Number(99);
			}else if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.match(/9./i)=="9."){
				var top=Number(ftop)-Number(94);
			}else{ 
				var top=Number(ftop)-Number(94);
			}  
			$("#jobclass_"+aid).css("top",top+"px"); 
 		}else if(Number(sheight)>250){ 
			var top=Number(ftop)-Number(220);
			$("#jobclass_"+aid).css("top",top+"px"); 
		} 
		$("#jobclass"+aid).addClass("current");	
		$("#jobclass_"+aid).attr("class","menu_sub db");
	},function(){
		var aid=$(this).attr("aid");
		$("#jobclass"+aid).removeClass("current");	
		$("#jobclass_"+aid).attr("class","menu_sub dn");	
	})  
	$(".select_wrap").hover(function(){
		$(".select_wrap_list").show();
	},function(){
		$(".select_wrap_list").hide();
	})  
	window.KeywordTip='请输入职位名称，如：飞行签派员|请输入公司名称，如：国际航空';
	$(".search_type_list").click(function(){
		var aid=$(this).attr("aid");
		var cid=$(this).attr("cid")
		var name=$(this).html();
		$("#m").val(aid);		
		if(cid){
			$('#m').append('<input type="hidden" value="'+cid+'">');			
		}
		$(".search_type_selected").html(name);
		$(".select_wrap_list").hide();
		$('input[name=keyword]').val(window.KeywordTip.split('|')[$(this).index()%2]);
		$('input[name=keyword]').attr('placeholder',window.KeywordTip.split('|')[$(this).index()%2]);
	});
	$("#slides").slides({
		preload: true,
		preloadImage: '<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/loading.gif',
		play: 5000,
		pause: 2500,
		hoverPause: true
	});

})
function search_keyword(myform){
	var keyword=myform.keyword.value;
	var placeholder=myform.keyword.placeholder;
	if(placeholder==keyword&&keyword){
		myform.keyword.value='';
	}
}
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }} ?>
