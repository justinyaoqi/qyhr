<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:04:21
         compiled from "D:\wamp\www\qyhr\app\template\yun3.2\index\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:3275455f968d5a68382-25984654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34aad72e04a2bd5a2a6bf6a2439da1477f2b2dee' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\yun3.2\\index\\index.htm',
      1 => 1442377206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3275455f968d5a68382-25984654',
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
    'lunbo' => 0,
    'gonggao' => 0,
    'key' => 0,
    'alist' => 0,
    'gonggao1' => 0,
    'flist' => 0,
    'adlists' => 0,
    'urgentjoblist' => 0,
    'urgentitem' => 0,
    'adlist_39' => 0,
    'hotjoblist' => 0,
    'job_list' => 0,
    'jlist' => 0,
    'adlist_13' => 0,
    'adlist_14' => 0,
    'adlist_15' => 0,
    'hot' => 0,
    'ulist' => 0,
    'userclass_name' => 0,
    'adlist_user_r' => 0,
    'arcgroupright' => 0,
    'indexnews' => 0,
    'arcitem' => 0,
    'linklist' => 0,
    'linklist2' => 0,
    'footer_ad' => 0,
    'left_ad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f968d5e609b1_04365203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f968d5e609b1_04365203')) {function content_55f968d5e609b1_04365203($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\wamp\\www\\qyhr\\app\\include\\libs\\plugins\\function.url.php';
?><?php $gonggao=array();$time=time();eval('$paramer=array("t_len"=>"18","limit"=>"8","item"=>"\'gonggao\'","name"=>"\'gonggaolist1\'","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = 1;
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		} 
		if($paramer[order]){
			$where.="  ORDER BY `".$paramer[order]."`";
		}else{
			$where.="  ORDER BY `datetime`";
		}
		if($paramer[sort]){
			$where.=" ".$paramer[sort];
		}else{
			$where.=" DESC";
		}
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"admin_announcement",$where,$Purl,"",0,$_smarty_tpl);
		}
		$gonggao=$db->select_all("admin_announcement",$where.$limit);
		if(is_array($gonggao)){
			foreach($gonggao as $key=>$value){
				if($paramer[t_len]){
					$gonggao[$key][title_n] = mb_substr($value['title'],0,$paramer[t_len],"GBK");
				}
				$gonggao[$key][time]=date("Y-m-d",$value[datetime]);
				$gonggao[$key][url] = Url("announcement",array("id"=>$value[id]),"1");
			}
		} ?>
<?php global $db,$db_config,$config;include PLUS_PATH.'/group.cache.php';$alist=array();$rs=null;$nids=null;eval('$paramer=array("item"=>"\'alist\'","t_len"=>"15","limit"=>"8","key"=>"\'key\'","name"=>"\'newlist1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr['arr'];
		$Purl =  $ParamerArr['purl'];
        if($paramer[cache]){
			$Purl="{{page}}.html";
		}
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }$where=1;
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		} 
		include PLUS_PATH."/group.cache.php";
		if(is_array($paramer)){
			if($paramer['nid']!=""){
				$where .=" AND `nid` in ($paramer[nid])";
				$nids = @explode(',',$paramer['nid']);$paramer['nid']=$paramer['nid'];
			}else if($paramer['rec']!=""){
				$nids=array();if(is_array($group_rec)){
					foreach($group_rec as $key=>$value){
						if($key<=2){
							$nids[]=$value;
						}
					}
					$paramer[nid]=@implode(',',$nids);
				}
			}
			if($paramer['nid']){
				$nid_s = @explode(',',$paramer[nid]);				
				foreach($nid_s as $v){
					if($group_type[$v]){
						$paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
					}
				}
			}			
			if($paramer['type']){
				$type = str_replace("\"","",$paramer[type]);
				$type_arr =	@explode(",",$type);
				if(is_array($type_arr) && !empty($type_arr))
				{
					foreach($type_arr as $key=>$value)
					{
						$where .=" AND FIND_IN_SET('".$value."',`describe`)";
						if(count($nids)>0)
						{
							$picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
						}
					}
				}
			}
			if($paramer['pic']!=""){
				$where .=" AND `newsphoto`<>''";
			}
			if($paramer['order']!=""){
				$order = str_replace("'","",$paramer['order']);
				$where .=" ORDER BY $order";
			}else{
				$where .=" ORDER BY `datetime`";
			}
			if($paramer['sort']){
				$where.=" ".$paramer[sort];
			}else{
				$where.=" DESC";
			}
			if(intval($paramer['limit'])>0){
				$limit = intval($paramer['limit']);
				$limit = " limit ".$limit;
			}
			if($paramer['ispage']){
				$limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
			}
		}
		if(!intval($paramer['ispage']) && count($nids)>0){
			$where = " and nid IN ($paramer[nid])";
			if($paramer['pic']){
				if(!$paramer['piclimit']){
					$piclimit = 1;
				}else{
					$piclimit = $paramer['piclimit'];
				}
				$db->query("set @f=0,@n=0");
				$query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE `nid` IN ($paramer[nid]) AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
				while($rs = $db->fetch_array($query)){
					if(intval($paramer[t_len])>0){
						$len = intval($paramer[t_len]);
						if($rs[color]){
							$rs[title] = "<font color='".$rs[color]."'>".mb_substr($rs[title],0,$len,"GBK")."</font>";
						}else{
							$rs[title] = mb_substr($rs[title],0,$len,"GBK");
						}
					}
					if(intval($paramer[d_len])>0)
					{
						$len = intval($paramer[d_len]);
						$rs[description] = mb_substr($rs[description],0,$len,"GBK");
					}
					$rs['name'] = $group_name[$rs['nid']];
					if($config[sy_news_rewrite]=="2"){
						$rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
					}else{
						$rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
					}
					$rs[time]=date("Y-m-d",$rs[datetime]);
					$rs['datetime']=date("m-d",$rs[datetime]);
					$alist[$rs['nid']]['pic'][] = $rs;
				}
			}
			
            $db->query("set @f=0,@n=0");
            $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE `nid` IN ($paramer[nid]) order by nid asc,datetime desc) a where aid <=$paramer[limit]");

            while($rs = $db->fetch_array($query)){
                if(intval($paramer[t_len])>0){
                    $len = intval($paramer[t_len]);
                    if($rs[color]){
                        $rs[title] = "<font color='".$rs[color]."'>".mb_substr($rs[title],0,$len,"GBK")."</font>";
                    }else{
                        $rs[title] = mb_substr($rs[title],0,$len,"GBK");
                    }
                }
                if(intval($paramer[d_len])>0){
                    $len = intval($paramer[d_len]);
                    $rs[description] = mb_substr($rs[description],0,$len,"GBK");
                }
                $rs['name'] = $group_name[$rs['nid']];
                if($config[sy_news_rewrite]=="2"){
                    $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
                }else{
                    $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
                }
                $rs[time]=date("Y-m-d",$rs[datetime]);
                $rs[datetime]=date("m-d",$rs[datetime]);
                $alist[$rs['nid']]['arclist'][] = $rs;
            }
		}else{
			$query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
			while($rs = $db->fetch_array($query)){
                if(intval($paramer[t_len])>0)
                {
                    $len = intval($paramer[t_len]);
                    $rs[title] = mb_substr($rs[title],0,$len,"GBK");
                }
                if(intval($paramer[d_len])>0)
                {
                    $len = intval($paramer[d_len]);
                    $rs[description] = mb_substr($rs[description],0,$len,"GBK");
                }
                $rs['name'] = $group_name[$rs['nid']];
                if($config[sy_news_rewrite]=="2"){
                    $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
                }else{
                    $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
                }
                $rs[time]=date("Y-m-d",$rs[datetime]);
                $rs[datetime]=date("m-d",$rs[datetime]);
                $alist[] = $rs;
            }
		} ?>
<?php $gonggao1=array();$time=time();eval('$paramer=array("t_len"=>"18","limit"=>"8","item"=>"\'gonggao1\'","name"=>"\'gonggaolist1\'","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = 1;
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		} 
		if($paramer[order]){
			$where.="  ORDER BY `".$paramer[order]."`";
		}else{
			$where.="  ORDER BY `datetime`";
		}
		if($paramer[sort]){
			$where.=" ".$paramer[sort];
		}else{
			$where.=" DESC";
		}
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"admin_announcement",$where,$Purl,"",0,$_smarty_tpl);
		}
		$gonggao1=$db->select_all("admin_announcement",$where.$limit);
		if(is_array($gonggao1)){
			foreach($gonggao1 as $key=>$value){
				if($paramer[t_len]){
					$gonggao1[$key][title_n] = mb_substr($value['title'],0,$paramer[t_len],"GBK");
				}
				$gonggao1[$key][time]=date("Y-m-d",$value[datetime]);
				$gonggao1[$key][url] = Url("announcement",array("id"=>$value[id]),"1");
			}
		} ?>
<?php $flist=array();$time=time();eval('$paramer=array("len"=>"19","limit"=>"8","item"=>"\'flist\'","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "1";
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		} 
		$time = date("Y-m-d",time());
	
		if($paramer[state]=='1'){
			$where .=" AND `starttime`>'$time'";
		}elseif($paramer[state]=='2'){
			$where .=" AND `starttime`<'$time' AND `endtime`>'$time'";
		}elseif($paramer[state]=='3'){
			$where .=" AND `endtime`<'$time'";
		}else{
			$where .=" AND `endtime`>'$time'";
		}
		
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order] ";
		}else{
			$where .= " ORDER BY `starttime` ";
		}
		if($paramer[sort]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " DESC ";
		}
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"zhaopinhui",$where,$Purl,"",6,$_smarty_tpl);
		}
		$flist=$db->select_all("zhaopinhui",$where.$limit);
		if(is_array($flist)){
			foreach($flist as $key=>$v){
				$array_zid[]=$v[id];
			}
			$rows=$db->select_all("zhaopinhui_com","`zid` in (".implode(',',$array_zid).") and status=1","`uid`,`zid`,`jobid`");
			foreach($rows as $key=>$v){
				$jobarr=explode(',',$v[jobid]);
				$zph_com[$v[zid]][comnum]++;
				$zph_com[$v[zid]][jobnum]=$zph_com[$v[zid]][jobnum]+count($jobarr);
			}
			
			foreach($flist as $key=>$v){
				$flist[$key]["stime"]=strtotime($v[starttime])-mktime();
				$comnum=$zph_com[$v[id]][comnum]?$zph_com[$v[id]][comnum]:0;
				$jobnum=$zph_com[$v[id]][jobnum]?$zph_com[$v[id]][jobnum]:0;
				$flist[$key]["comnum"]=$comnum;
				$flist[$key]["jobnum"]=$jobnum;
				
				$flist[$key]["etime"]=strtotime($v[endtime])-mktime();
				if($paramer[len]){
					$flist[$key]["title"]=mb_substr($v['title'],0,$paramer[len],"GBK");
				}
				$flist[$key]["url"]=Url("zph",array("c"=>'show',"id"=>$v['id']),"1");
				 $weekarray=array("��","һ","��","��","��","��","��",);            
                $flist[$key]["week"] = $weekarray[date('w',strtotime($v['starttime']))];		
			}
		} ?>
<?php global $db,$db_config,$config;
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$time = time();
		$where = "`time_start`<$time AND `time_end`>$time";$order = " ORDER BY `sort` ";$sort = 'ASC';$limit=" LIMIT 15";$where.=$order.$sort;
        $Query = $db->query("SELECT * FROM $db_config[def]hotjob where ".$where.$limit);
		while($rs = $db->fetch_array($Query)){
			$hotjoblist[] = $rs;
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
			foreach($hotjoblist as $key=>$value){
				$i=0;
				if(is_array($JobList)){
					$hotjoblist[$key]["job"].="<div class=\"area_left\"> ";
					foreach($JobList as $k=>$v){
						if($value[uid]==$v[uid] && $i<5){
							$job_url = Url("job",array("c"=>"comapply","id"=>"$v[id]"),"1");
							$v[name] = mb_substr($v[name],0,10,"GBK");
							$hotjoblist[$key]["job"].="<a href='".$job_url."'>".$v[name]."</a>";
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
					$hotjoblist[$key]["job"].="</div><div class=\"area_right\"><a href='".$com_url."'>".$value["username"]."</a>".$beizhu."</div><div class=\"area_left_bot\"><a href='".$jobs_url."'>ȫ��ְλ</a></div><div class='area_right_bot'><a href='".$com_url."'>��˾����</a></div>";
					$hotjoblist[$key]["url"]=$com_url;
				}
			}
		} ?>
<?php $ulist=array();global $db,$db_config,$config;eval('$paramer=array("item"=>"\'ulist\'","post_len"=>"10","limit"=>"20","key"=>"\'key\'","name"=>"\'userlist1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];extract($paramer);
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
        include PLUS_PATH."/job.cache.php";
		$where = "status<>'2' and `r_status`<>'2' and `job_classid`<>'' and `open`='1' and `defaults`=1";
		if($config['sy_web_site']=="1"){
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$paramer['hy']=$config['hyclass'];
			}
		}
		if($paramer[where_uid]){
			$where .=" AND `uid` in (".$paramer['where_uid'].")";
		}
		if($paramer[idcard]){
			$where .=" AND `idcard_status`='1'";
		}
		if($paramer[height_status]){
			$where .=" AND height_status=".$paramer[height_status];
		}else{
			$where .=" AND height_status<>'2'";
		}
		if($paramer[rec]){
			$where .=" AND rec=1";
		}
		if($paramer[rec_resume]){
			$where .=" AND `rec_resume`=1";
		}
		if($paramer[work]){
			$show=$db->select_all("resume_show","1 group by eid","`eid`");
			if(is_array($show))
			{
				foreach($show as $v)
				{
					$eid[]=$v['eid'];
				}
			}
			$where .=" AND id in (".@implode(",",$eid).")";
		}
		if($paramer[cid]){
			$where .= " AND (cityid=$paramer[cid] or three_cityid=$paramer[cid])";
		}
		if($paramer[keyword]){
			$where1[]="`uname` LIKE '%$paramer[keyword]%'";
			foreach($job_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$jobid[]=$k;
				}
			}
			if(is_array($jobid))
			{
				foreach($jobid as $value)
				{
					$class[]="FIND_IN_SET('".$value."',job_classid)";
				}
				$where1[]=@implode(" or ",$class);
			}
			include PLUS_PATH."/city.cache.php";
			foreach($city_name as $k=>$v)
			{
				if(strpos($v,$paramer[keyword])!==false)
				{
					$cityid[]=$k;
				}
			}
			if(is_array($cityid))
			{
				foreach($cityid as $value)
				{
					$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
				}
				$where1[]=@implode(" or ",$class);
			}
			$where.=" AND (".@implode(" or ",$where1).")";
		}
		if($paramer[pic]=="0"||$paramer[pic]){
			$where .=" AND photo<>''";
		}
		if($paramer[name]=="0"){
			$where .=" AND uname<>''";
		}
		if($paramer[hy]=="0"){
			$where .=" AND hy<>''";
		}elseif($paramer[hy]!=""){
			$where .= " AND (`hy` IN (".$paramer['hy']."))";
		}
		$job_classid="";
		if($paramer[jobids]){
			$joball=explode(",",$paramer[jobids]);
			foreach(explode(",",$paramer[jobids]) as $v){
				if($job_type[$v]){
					$joball[]=@implode(",",$job_type[$v]);
				}
			}
			$job_classid=implode(",",$joball);
		}
		if($paramer[job1]){
			$joball=$job_type[$paramer[job1]];
			foreach($job_type[$paramer[job1]] as $v)
			{
				$joball[]=@implode(",",$job_type[$v]);
			}
			$job_classid=@implode(",",$joball);
		}
		if($paramer[job1_son]){
			$joball=$job_type[$paramer[job1_son]];
			foreach($job_type[$paramer[job1_son]] as $v)
			{
				$joball[]=@implode(",",$v);
			}
			$job_classid=@implode(",",$joball);
		}
		if(!empty($job_classid)){
			$classid=@explode(",",$job_classid);
			foreach($classid as $value){
				$class[]="FIND_IN_SET('".$value."',job_classid)";
			}
			$classid=@implode(" or ",$class);
			$where .= " AND ($classid)";
		}
		if($paramer[job_post]){
			$where .=" AND FIND_IN_SET('".$paramer[job_post]."',job_classid)";
		}
		if($paramer[provinceid]){
			$where .= " AND provinceid = $paramer[provinceid]";
		}
		if($paramer[cityid]){
			$where .= " AND (`cityid` IN ($paramer[cityid]))";
		}
		if($paramer[three_cityid]){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		if($paramer[cityin]){
			$where .= " AND( AND provinceid IN ($paramer[cityin]) OR cityid IN ($paramer[cityin]) OR three_cityid IN ($paramer[cityin]))";
		}
		if($paramer[exp]){
			$where .=" AND exp=$paramer[exp]";
		}else{
			$where .=" AND exp>0";
		}
		if($paramer[edu]){
			$where .=" AND edu=$paramer[edu]";
		}else{
			$where .=" AND edu>0";
		}
		if($paramer[sex]){
			$where .=" AND sex=$paramer[sex]";
		}
		if($paramer[report]){
			$where .=" AND report=$paramer[report]";
		}
		if($paramer[salary]){
			$where .=" AND salary=$paramer[salary]";
		}
		if($paramer[type]){
			$where .= " AND type=$paramer[type]";
		}
		if($paramer[uptime]){
			$time=time();
			$uptime = $time-($paramer[uptime]*86400);
			$where.=" AND lastupdate>$uptime";
		}
		if($paramer[adtime]){
			$time=time();
			$adtime = $time-($paramer[adtime]*86400);
			$where.=" AND status_time>$adtime";
		}
		if($paramer[order] && $paramer[order]!="lastdate"){
			if($paramer[order]=='ant_num'){
				$order = " ORDER BY `ant_num`";
			}elseif($paramer[order]=='topdate'){
				$nowtime=time();
				$order = " ORDER BY if(topdate>$nowtime,topdate,lastupdate)";
			}else{
				$order = " ORDER BY `".str_replace("'","",$paramer[order])."`";
			}
		}else{
			$order = " ORDER BY lastupdate ";
		}
		$sort = $paramer[sort]?$paramer[sort]:'DESC';
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}
		$where.=$order.$sort;
		if($paramer[where]){
			$where = $paramer[where];
		}
		if($paramer[ispage]){
			if($paramer["height_status"]){
				$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"","3",$_smarty_tpl);
			}else{
				$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",'0',$_smarty_tpl);
			}
		}

		$ulist=$db->select_all("resume_expect",$where.$limit,"*,uname as username");

		if(is_array($ulist)){
			$cache_array = $db->cacheget();
			$userclass_name = $cache_array["user_classname"];
			$city_name      = $cache_array["city_name"];
			$job_name		= $cache_array["job_name"];
			$industry_name	= $cache_array["industry_name"];
			$my_down=array();
			if($_COOKIE['usertype']=='2'&&$config['sy_usertype_1']=='1'){
				$my_down=$db->select_all("down_resume","`comid`='".$_COOKIE['uid']."'","uid");
			}
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($ulist as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			foreach($ulist as $key=>$value){
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);

			foreach($ulist as $k=>$v)
			{
				$time=time()-$v['lastupdate'];
				if($time>86400 && $time<259300){
					$ulist[$k]['time'] = ceil($time/86400)."��ǰ";
				}elseif($time>3600 && $time<86400){
					$ulist[$k]['time'] = ceil($time/3600)."Сʱǰ";
				}elseif($time>60 && $time<3600){
					$ulist[$k]['time'] = ceil($time/60)."����ǰ";
				}elseif($time<60){
					$ulist[$k]['time'] = "�ո�";
				}else{
					$ulist[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				}
				if($v['photo']==''){
					$ulist[$k]['photo']=$v['photo']=$config['sy_member_icon'];
				}else{
					$ulist[$k]['ispic']=1;
				}
				if($config['sy_usertype_1']=='1'&&$v['photo']){
					if(!empty($my_down)){
						foreach($my_down as $m_k=>$m_v){
							$my_down_uid[]=$m_v['uid'];
						}
						if(in_array($v['uid'],$my_down_uid)==false){
							$ulist[$k]['photo']='./'.$config['sy_member_icon'];
						}
					}else{
						$ulist[$k]['photo']='./'.$config['sy_member_icon'];
					}
				}
				if($config["user_name"]==3)
				{
					$ulist[$k]["username_n"] = "NO.".$v["id"];
				}elseif($config["user_name"]==2){
					if($userclass_name[$v['sex']]=='��'){
						$ulist[$k]["username_n"] = mb_substr($v["username"],0,1,'GBK')."����";
					}else{
						$ulist[$k]["username_n"] = mb_substr($v["username"],0,1,'GBK')."Ůʿ";
					}
				}else{
					$ulist[$k]["username_n"] = $v["username"];
				}
				if($v[birthday])
				{
					$a=date('Y',strtotime($ulist[$k]['birthday']));
					$ulist[$k]['age']=date("Y")-$a;
				}else{
					$ulist[$k]['age']="����";
				}
				$ulist[$k]['sex_n']=$userclass_name[$v['sex']];
				$ulist[$k]['edu_n']=$userclass_name[$v['edu']];
				$ulist[$k]['exp_n']=$userclass_name[$v['exp']];
				$ulist[$k]['job_city_one']=$city_name[$v['provinceid']];
				$ulist[$k]['job_city_two']=$city_name[$v['cityid']];
				$ulist[$k]['job_city_three']=$city_name[$v['three_cityid']];
				$ulist[$k]['salary_n']=$userclass_name[$v['salary']];
				$ulist[$k]['report_n']=$userclass_name[$v['report']];
				$ulist[$k]['type_n']=$userclass_name[$v['type']];
				$ulist[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);

				$ulist[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$ulist[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$ulist[$k]['m_name']=$m_name[$v['uid']];
					$ulist[$k]['user_url']=Url("ask",array("c"=>"friend","uid"=>$v['uid']));
				}
				$job_classid=@explode(",",$v['job_classid']);
				if(is_array($job_classid))
				{
					foreach($job_classid as $val)
					{
						$jobname[]=$job_name[$val];
					}
				}
				$ulist[$k]['job_post']=@implode(",",$jobname);
				if($paramer['post_len'])
				{
					$postname[$k]=@implode(",",$jobname);
					$ulist[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"GBK");
				}
				if($paramer['keyword'])
				{
					$ulist[$k]['username']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username']);
					$ulist[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$ulist[$k]['job_post']);
					$ulist[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$ulist[$k]['job_post_n']);
					$ulist[$k]['job_city_one']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$city_name[$v['provinceid']]);
					$ulist[$k]['job_city_two']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$city_name[$v['cityid']]);
				}
				$jobname=array();
			}
			if($paramer['keyword']!=""&&!empty($ulist)){
				addkeywords('5',$paramer['keyword']);
			}
		} ?>
<?php global $db,$db_config,$config;include PLUS_PATH.'/group.cache.php';$indexnews=array();$rs=null;$nids=null;eval('$paramer=array("rec"=>"1","limit"=>"8","pic"=>"1","t_len"=>"18","d_len"=>"24","type"=>"\'t\'","urlstatic"=>"1","item"=>"\'indexnews\'","name"=>"\'newlist2\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr['arr'];
		$Purl =  $ParamerArr['purl'];
        if($paramer[cache]){
			$Purl="{{page}}.html";
		}
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }$where=1;
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		} 
		include PLUS_PATH."/group.cache.php";
		if(is_array($paramer)){
			if($paramer['nid']!=""){
				$where .=" AND `nid` in ($paramer[nid])";
				$nids = @explode(',',$paramer['nid']);$paramer['nid']=$paramer['nid'];
			}else if($paramer['rec']!=""){
				$nids=array();if(is_array($group_rec)){
					foreach($group_rec as $key=>$value){
						if($key<=2){
							$nids[]=$value;
						}
					}
					$paramer[nid]=@implode(',',$nids);
				}
			}
			if($paramer['nid']){
				$nid_s = @explode(',',$paramer[nid]);				
				foreach($nid_s as $v){
					if($group_type[$v]){
						$paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
					}
				}
			}			
			if($paramer['type']){
				$type = str_replace("\"","",$paramer[type]);
				$type_arr =	@explode(",",$type);
				if(is_array($type_arr) && !empty($type_arr))
				{
					foreach($type_arr as $key=>$value)
					{
						$where .=" AND FIND_IN_SET('".$value."',`describe`)";
						if(count($nids)>0)
						{
							$picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
						}
					}
				}
			}
			if($paramer['pic']!=""){
				$where .=" AND `newsphoto`<>''";
			}
			if($paramer['order']!=""){
				$order = str_replace("'","",$paramer['order']);
				$where .=" ORDER BY $order";
			}else{
				$where .=" ORDER BY `datetime`";
			}
			if($paramer['sort']){
				$where.=" ".$paramer[sort];
			}else{
				$where.=" DESC";
			}
			if(intval($paramer['limit'])>0){
				$limit = intval($paramer['limit']);
				$limit = " limit ".$limit;
			}
			if($paramer['ispage']){
				$limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
			}
		}
		if(!intval($paramer['ispage']) && count($nids)>0){
			$where = " and nid IN ($paramer[nid])";
			if($paramer['pic']){
				if(!$paramer['piclimit']){
					$piclimit = 1;
				}else{
					$piclimit = $paramer['piclimit'];
				}
				$db->query("set @f=0,@n=0");
				$query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE `nid` IN ($paramer[nid]) AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
				while($rs = $db->fetch_array($query)){
					if(intval($paramer[t_len])>0){
						$len = intval($paramer[t_len]);
						if($rs[color]){
							$rs[title] = "<font color='".$rs[color]."'>".mb_substr($rs[title],0,$len,"GBK")."</font>";
						}else{
							$rs[title] = mb_substr($rs[title],0,$len,"GBK");
						}
					}
					if(intval($paramer[d_len])>0)
					{
						$len = intval($paramer[d_len]);
						$rs[description] = mb_substr($rs[description],0,$len,"GBK");
					}
					$rs['name'] = $group_name[$rs['nid']];
					if($config[sy_news_rewrite]=="2"){
						$rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
					}else{
						$rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
					}
					$rs[time]=date("Y-m-d",$rs[datetime]);
					$rs['datetime']=date("m-d",$rs[datetime]);
					$indexnews[$rs['nid']]['pic'][] = $rs;
				}
			}
			
            $db->query("set @f=0,@n=0");
            $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE `nid` IN ($paramer[nid]) order by nid asc,datetime desc) a where aid <=$paramer[limit]");

            while($rs = $db->fetch_array($query)){
                if(intval($paramer[t_len])>0){
                    $len = intval($paramer[t_len]);
                    if($rs[color]){
                        $rs[title] = "<font color='".$rs[color]."'>".mb_substr($rs[title],0,$len,"GBK")."</font>";
                    }else{
                        $rs[title] = mb_substr($rs[title],0,$len,"GBK");
                    }
                }
                if(intval($paramer[d_len])>0){
                    $len = intval($paramer[d_len]);
                    $rs[description] = mb_substr($rs[description],0,$len,"GBK");
                }
                $rs['name'] = $group_name[$rs['nid']];
                if($config[sy_news_rewrite]=="2"){
                    $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
                }else{
                    $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
                }
                $rs[time]=date("Y-m-d",$rs[datetime]);
                $rs[datetime]=date("m-d",$rs[datetime]);
                $indexnews[$rs['nid']]['arclist'][] = $rs;
            }
		}else{
			$query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
			while($rs = $db->fetch_array($query)){
                if(intval($paramer[t_len])>0)
                {
                    $len = intval($paramer[t_len]);
                    $rs[title] = mb_substr($rs[title],0,$len,"GBK");
                }
                if(intval($paramer[d_len])>0)
                {
                    $len = intval($paramer[d_len]);
                    $rs[description] = mb_substr($rs[description],0,$len,"GBK");
                }
                $rs['name'] = $group_name[$rs['nid']];
                if($config[sy_news_rewrite]=="2"){
                    $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
                }else{
                    $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
                }
                $rs[time]=date("Y-m-d",$rs[datetime]);
                $rs[datetime]=date("m-d",$rs[datetime]);
                $indexnews[] = $rs;
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
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/yun_index.css" type="text/css" />
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
        $("#slides").slides({preload:true,preloadImage:'<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/loading.gif',play:5000,pause:2500,hoverPause:true});
        $('.index_header_seach_find').delegate('#search_name','click',function(){$(this).next().show();});
		$("img.lazy").lazyload();
    });
<?php echo '</script'; ?>
> 
<!--content  start-->
<div class="yun_content">
  <div class="index_logoin_box">
    <div id="index_login">
      <div class="index_logoin">
        <input type="hidden" value="index" name="path" id="path">
        <input type="hidden" value="1" name="usertype" id="usertype">
        <div class="index_logoin_h1">�û���¼ </div>
        <div class="index_logoin_t">
          <div class="index_logoin_re">
            <input type="text" id="username" name="username" placeholder="�������û���" class="index_logoin_inp" value="">
            <div class="index_logoin_msg" id="show_name" style="display:none">
              <div class="index_logoin_msg_tx">����д�û���</div>
              <div class="index_logoin_msg_icon"></div>
            </div>
          </div>
          <div class="index_logoin_re_m">
            <input type="password" placeholder="��������������" class="index_logoin_inp" name="password" value="" id="password">
            <div class="index_logoin_msg" style="display:none" id="show_pass">
              <div class="index_logoin_msg_tx">����д����</div>
              <div class="index_logoin_msg_icon"></div>
            </div>
          </div>
        </div>
        <div class="index_logoin_r">
          <input type="submit" value="" class="index_logoin_bth2" onclick="check_login('<?php echo smarty_function_url(array('m'=>'login','c'=>'loginsave'),$_smarty_tpl);?>
');" >
        </div>
        <ul class="index_logoin_cont">
          <li>
            <input type="checkbox" class="index_logoin_check" value="1" name="loginname">
            <em class="index_l_jz">��ס��¼״̬</em><a href="<?php echo smarty_function_url(array('m'=>'forgetpw'),$_smarty_tpl);?>
">��������?</a></li>
          <li class=""> <a id="reg_url_2" href="<?php echo smarty_function_url(array('m'=>'register','usertype'=>2),$_smarty_tpl);?>
" class="index_logoin_submit2">��Ƹ��ע��</a> <a id="reg_url_1" href="<?php echo smarty_function_url(array('m'=>'register','usertype'=>1),$_smarty_tpl);?>
" class="index_logoin_submit2">��ְ��ע��</a> </li>
          <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1||$_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1||$_smarty_tpl->tpl_vars['config']->value['sy_wxlogin']==1) {?>
          <li class="index_logoin_Coop" style="margin-top:12px;"> <em style="float:left">��ݵ�¼��</em> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/yun_qq.png" class="png"><a href="<?php echo smarty_function_url(array('m'=>'qqconnect','c'=>'qqlogin'),$_smarty_tpl);?>
">QQ��¼</a> <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/yun_sina.png" class="png"><a href="<?php echo smarty_function_url(array('m'=>'sinaconnect'),$_smarty_tpl);?>
">����</a> <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wxlogin']==1) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/yun_wx.png" class="png"><a href="<?php echo smarty_function_url(array('m'=>'wxconnect'),$_smarty_tpl);?>
">΢��</a> <?php }?> </li>
          <?php }?>
        </ul>
      </div>
    </div>
  </div>
<?php echo '<script'; ?>
>
$(document).ready(function(){
	$.post("index.php?m=ajax&c=DefaultLoginIndex",{},function(data){
		$("#index_login").html(data);
	});
});
<?php echo '</script'; ?>
> 
  <div class="cont_Projector">
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
            <div class="slide"> <?php echo $_smarty_tpl->tpl_vars['lunbo']->value['html'];?>
 </div>
            <?php } ?> </div>
        </div>
      </div>
      <div class="yun_Announcement">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['gonggao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gonggao']->_loop = false;
$gonggao = $gonggao; if (!is_array($gonggao) && !is_object($gonggao)) { settype($gonggao, 'array');}
foreach ($gonggao as $_smarty_tpl->tpl_vars['gonggao']->key => $_smarty_tpl->tpl_vars['gonggao']->value) {
$_smarty_tpl->tpl_vars['gonggao']->_loop = true;
?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['gonggao']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['gonggao']->value['title_n'];?>
</a></li>
          <?php } ?>
        </ul>
      </div>
      <?php echo '<script'; ?>
>marquee("2000",".yun_Announcement ul");<?php echo '</script'; ?>
> 
    </div>
  </div>
  <div class="yuin_index_r">
    <div class="yuin_index_r_h1">
      <ul class="yun_index_h1_list">
        <li class="yun_index_h1_cur"><span>������Ѷ</span>&#160;</li>
        <li><span>��վ����</span>&#160;</li>
        <li style="border:none;" ><span>��Ƹ��</span>&#160;</li>
      </ul>
    </div>
    <div class="yun_index_cont" style="display:block">
      <ul class="yun_in_news">
        <?php  $_smarty_tpl->tpl_vars['alist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alist']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$alist = $alist; if (!is_array($alist) && !is_object($alist)) { settype($alist, 'array');}
foreach ($alist as $_smarty_tpl->tpl_vars['alist']->key => $_smarty_tpl->tpl_vars['alist']->value) {
$_smarty_tpl->tpl_vars['alist']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['alist']->key;
?>
        <li><span <?php if ($_smarty_tpl->tpl_vars['key']->value<3) {?>class="yun_in_news_span yun_in_news_span_cur"<?php } else { ?>class="yun_in_news_span "<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['alist']->value['url'];?>
" class="yun_in_news_a" target="_blank"><?php echo $_smarty_tpl->tpl_vars['alist']->value['title'];?>
</a></li>
        <?php } ?>
      </ul>
    </div>
    <div class="yun_index_cont" style="display:none">
      <ul class="index_latest_news">
        <?php  $_smarty_tpl->tpl_vars['gonggao1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gonggao1']->_loop = false;
$gonggao1 = $gonggao1; if (!is_array($gonggao1) && !is_object($gonggao1)) { settype($gonggao1, 'array');}
foreach ($gonggao1 as $_smarty_tpl->tpl_vars['gonggao1']->key => $_smarty_tpl->tpl_vars['gonggao1']->value) {
$_smarty_tpl->tpl_vars['gonggao1']->_loop = true;
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['gonggao1']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['gonggao1']->value['title_n'];?>
</a></li>
        <?php } ?>
      </ul>
    </div>
    <div class="yun_index_cont" style="display:none">
      <ul class="index_latest_news">
        <?php  $_smarty_tpl->tpl_vars['flist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flist']->_loop = false;
$flist = $flist; if (!is_array($flist) && !is_object($flist)) { settype($flist, 'array');}
foreach ($flist as $_smarty_tpl->tpl_vars['flist']->key => $_smarty_tpl->tpl_vars['flist']->value) {
$_smarty_tpl->tpl_vars['flist']->_loop = true;
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['flist']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['flist']->value['title'];?>
</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="clear"></div>
  <div class="index_banner_top"><?php  $_smarty_tpl->tpl_vars['adlists'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlists']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[6];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 1;$length = 0;
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlists']->key => $_smarty_tpl->tpl_vars['adlists']->value) {
$_smarty_tpl->tpl_vars['adlists']->_loop = true;
echo $_smarty_tpl->tpl_vars['adlists']->value['html'];
} ?></div>
  <div class="clear"></div>
  <div class="index_Emergency_job">
    <div class="Emergency_index_cont">
      <div class="Latest_talent_h1 "><b >������Ƹ<span class="index_Emergency_span">Urgent Jobs</span></b><a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'search','urgent'=>1),$_smarty_tpl);?>
" class="index_more" target="_blank">����>></a></div>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['urgentjoblist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['urgentjoblist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("limit"=>"24","urgent"=>"1","comlen"=>"18","joblen"=>"11","jobnum"=>"1","item"=>"\'urgentjoblist\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];extract($paramer);
		$Purl =  $ParamerArr[purl];
		if($config['sy_web_site']=="1"){
			if($config['cityid']>0 && $config['cityid']!=""){
				$cityid=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$three_cityid = $config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$hy=$config['hyclass'];
			}
		}
		$time = time();
		$where = "`sdate`<$time AND `edate`>$time and  `state`='1' and `r_status`<>'2' and `status`<>'1'";
		if($paramer[urgent]){
			$where.=" AND `urgent_time`>$time";
		}
		if($hy){
			$where.=' AND `hy`='.$hy;
		}
		if($cityid){
			$where.=' AND `cityid`='.$cityid;
		}
		if($three_cityid){
			$where.=" AND `three_cityid`=$three_cityid";
		}
		if($paramer[rec]){
			$where.=" AND `rec_time`>$time";
		}
		if($paramer['limit']){
			$limit=" limit ".$paramer['limit'];
		}
		include PLUS_PATH."/city.cache.php";
		include PLUS_PATH."/comrating.cache.php";
		$query = $db->query("select count(*) as num,uid,provinceid,cityid,three_cityid,lastupdate from $db_config[def]company_job where  $where GROUP BY uid ORDER BY lastupdate desc $limit");
		$uids=array();$ComList=array();
        while($rs = $db->fetch_array($query)){
			if($citylen){
				$one_city[$rs['uid']]	= mb_substr($city_name[$rs['cityid']],0,$citylen);
				$two_city[$rs['uid']] = mb_substr($city_name[$rs['three_cityid']],0,$citylen);
			}else{
				$one_city[$rs['uid']]	= $city_name[$rs['cityid']];
				$two_city[$rs['uid']] = $city_name[$rs['three_cityid']];
			}
			if($one_city[$rs['uid']]==''){
				$one_city[$rs['uid']]=$city_name[$rs['provinceid']];
			}
			$lasttime[$rs['uid']] = date('Y-m-d',$rs['lastupdate']);
			$uids[] = $rs['uid'];
		}
		if(!empty($uids)){
			$comids = @implode(',',$uids);
			$joblist = $db->select_all("company_job","$where AND `uid` IN ($comids) ORDER BY lastupdate desc");
			$job_list=array();
			foreach($joblist as $value){
				if(!$jobnum || count($job_list[$value['uid']])<$jobnum){
					if($joblen){
						$value['name_n'] = mb_substr($value['name'],0,$joblen,'gbk');
					}
					$value['url'] = Url("job",array("c"=>"comapply","id"=>$value['id']),"1");
					$job_list[$value['uid']][] = $value;
				}
				$comname[$value['uid']] = $value['com_name'];
			}
			$statis = $db->select_all("company_statis","`uid` in (".@implode(",",$uids).")","`uid`,`rating`");
			foreach($uids as $key=>$value){
				foreach($statis as $v){
					foreach($comrat as $val){
						if($value==$v[uid] && $val[id]==$v[rating])
						{
							$ComList[$key][color]=$val[com_color];
							$ComList[$key][ratlogo]=$val[com_pic];
						}
					}
				}
				$ComList[$key]['curl']     =  Url("company",array("c"=>"show","id"=>$value));
				$ComList[$key]['uid']     = $value;
				$ComList[$key]['name']	  = $comname[$value];
				$ComList[$key]['one_city']	  = $one_city[$value];
				$ComList[$key]['two_city']	  = $two_city[$value];
				$ComList[$key]['lasttime']     = $lasttime[$value];
				if($comlen){
					$ComList[$key]['name_n'] = mb_substr($comname[$value],0,$comlen,'gbk');
				}
				$ComList[$key]['joblist'] =$job_list[$value];
			}
		}$ComList = $ComList; if (!is_array($ComList) && !is_object($ComList)) { settype($ComList, 'array');}
foreach ($ComList as $_smarty_tpl->tpl_vars['urgentjoblist']->key => $_smarty_tpl->tpl_vars['urgentjoblist']->value) {
$_smarty_tpl->tpl_vars['urgentjoblist']->_loop = true;
?>
        <li class="Emergency_list"> <a href="<?php echo $_smarty_tpl->tpl_vars['urgentjoblist']->value['curl'];?>
" class="index_Emergency_com_name" target="_blank"><?php echo $_smarty_tpl->tpl_vars['urgentjoblist']->value['name_n'];?>
</a> <?php  $_smarty_tpl->tpl_vars['urgentitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['urgentitem']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['urgentjoblist']->value['joblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['urgentitem']->key => $_smarty_tpl->tpl_vars['urgentitem']->value) {
$_smarty_tpl->tpl_vars['urgentitem']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['urgentitem']->key;
?> <a href="<?php echo $_smarty_tpl->tpl_vars['urgentitem']->value['url'];?>
" target="_blank" class="index_Emergency_post_name"><?php echo $_smarty_tpl->tpl_vars['urgentitem']->value['name_n'];?>
</a> <?php } ?> </li>
        <?php } ?>
      </ul>
    </div>
    <div class="index_buildPic">
      <div class="index_buildPic_cont">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['adlist_39'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_39']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[39];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 10;$length = 0;
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_39']->key => $_smarty_tpl->tpl_vars['adlist_39']->value) {
$_smarty_tpl->tpl_vars['adlist_39']->_loop = true;
?>
          <li> <?php echo $_smarty_tpl->tpl_vars['adlist_39']->value['html'];?>
</li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="w980">
    <div class="Famous_recruitment">
      <div class="Latest_talent_h1 "><b >������Ƹ<span class="index_Emergency_span">Famous Enterprise </span></b></div>
      <div class="Famous_recruitment_cont">
        <div class="index_left15560">
          <div id="mainids"> <?php  $_smarty_tpl->tpl_vars['hotjoblist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hotjoblist']->_loop = false;
$hotjoblist = $hotjoblist; if (!is_array($hotjoblist) && !is_object($hotjoblist)) { settype($hotjoblist, 'array');}
foreach ($hotjoblist as $_smarty_tpl->tpl_vars['hotjoblist']->key => $_smarty_tpl->tpl_vars['hotjoblist']->value) {
$_smarty_tpl->tpl_vars['hotjoblist']->_loop = true;
?>
            <div class="tlogo">
              <ul>
                <li onmouseover="showDiv2(this)" onmouseout="showDiv2(this)"><a href="<?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['url'];?>
" target="_blank"><img width="185" height="75" border="1" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['hot_pic'];?>
" class="on"/></a>
                  <div class="show">
                    <div class="area"><?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['job'];?>
</div>
                  </div>
                </li>
              </ul>
            </div>
            <?php } ?> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="index_Emergency_job">
    <div class="Latest_talent_h1 "><b >�Ƽ�ְλ<span class="index_Emergency_span">Recommend Jobs</span></b><a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'search','rec'=>1),$_smarty_tpl);?>
" class="index_more" target="_blank">����>></a></div>
    <div class="Recommended_jobs_cont">
      <ul>
        <?php  $_smarty_tpl->tpl_vars['job_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("limit"=>"30","rec"=>"1","comlen"=>"12","joblen"=>"8","jobnum"=>"1","item"=>"\'job_list\'","key"=>"\'key\'","name"=>"\'comjoblist1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];extract($paramer);
		$Purl =  $ParamerArr[purl];
		if($config['sy_web_site']=="1"){
			if($config['cityid']>0 && $config['cityid']!=""){
				$cityid=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$three_cityid = $config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$hy=$config['hyclass'];
			}
		}
		$time = time();
		$where = "`sdate`<$time AND `edate`>$time and  `state`='1' and `r_status`<>'2' and `status`<>'1'";
		if($paramer[urgent]){
			$where.=" AND `urgent_time`>$time";
		}
		if($hy){
			$where.=' AND `hy`='.$hy;
		}
		if($cityid){
			$where.=' AND `cityid`='.$cityid;
		}
		if($three_cityid){
			$where.=" AND `three_cityid`=$three_cityid";
		}
		if($paramer[rec]){
			$where.=" AND `rec_time`>$time";
		}
		if($paramer['limit']){
			$limit=" limit ".$paramer['limit'];
		}
		include PLUS_PATH."/city.cache.php";
		include PLUS_PATH."/comrating.cache.php";
		$query = $db->query("select count(*) as num,uid,provinceid,cityid,three_cityid,lastupdate from $db_config[def]company_job where  $where GROUP BY uid ORDER BY lastupdate desc $limit");
		$uids=array();$ComList=array();
        while($rs = $db->fetch_array($query)){
			if($citylen){
				$one_city[$rs['uid']]	= mb_substr($city_name[$rs['cityid']],0,$citylen);
				$two_city[$rs['uid']] = mb_substr($city_name[$rs['three_cityid']],0,$citylen);
			}else{
				$one_city[$rs['uid']]	= $city_name[$rs['cityid']];
				$two_city[$rs['uid']] = $city_name[$rs['three_cityid']];
			}
			if($one_city[$rs['uid']]==''){
				$one_city[$rs['uid']]=$city_name[$rs['provinceid']];
			}
			$lasttime[$rs['uid']] = date('Y-m-d',$rs['lastupdate']);
			$uids[] = $rs['uid'];
		}
		if(!empty($uids)){
			$comids = @implode(',',$uids);
			$joblist = $db->select_all("company_job","$where AND `uid` IN ($comids) ORDER BY lastupdate desc");
			$job_list=array();
			foreach($joblist as $value){
				if(!$jobnum || count($job_list[$value['uid']])<$jobnum){
					if($joblen){
						$value['name_n'] = mb_substr($value['name'],0,$joblen,'gbk');
					}
					$value['url'] = Url("job",array("c"=>"comapply","id"=>$value['id']),"1");
					$job_list[$value['uid']][] = $value;
				}
				$comname[$value['uid']] = $value['com_name'];
			}
			$statis = $db->select_all("company_statis","`uid` in (".@implode(",",$uids).")","`uid`,`rating`");
			foreach($uids as $key=>$value){
				foreach($statis as $v){
					foreach($comrat as $val){
						if($value==$v[uid] && $val[id]==$v[rating])
						{
							$ComList[$key][color]=$val[com_color];
							$ComList[$key][ratlogo]=$val[com_pic];
						}
					}
				}
				$ComList[$key]['curl']     =  Url("company",array("c"=>"show","id"=>$value));
				$ComList[$key]['uid']     = $value;
				$ComList[$key]['name']	  = $comname[$value];
				$ComList[$key]['one_city']	  = $one_city[$value];
				$ComList[$key]['two_city']	  = $two_city[$value];
				$ComList[$key]['lasttime']     = $lasttime[$value];
				if($comlen){
					$ComList[$key]['name_n'] = mb_substr($comname[$value],0,$comlen,'gbk');
				}
				$ComList[$key]['joblist'] =$job_list[$value];
			}
		}$ComList = $ComList; if (!is_array($ComList) && !is_object($ComList)) { settype($ComList, 'array');}
foreach ($ComList as $_smarty_tpl->tpl_vars['job_list']->key => $_smarty_tpl->tpl_vars['job_list']->value) {
$_smarty_tpl->tpl_vars['job_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['job_list']->key;
?>
        <li> <em class="Recommended_jobs_cont_li"> <span class="Recommended_jobs_pin">Ƹ��</span><?php  $_smarty_tpl->tpl_vars['jlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_list']->value['joblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jlist']->key => $_smarty_tpl->tpl_vars['jlist']->value) {
$_smarty_tpl->tpl_vars['jlist']->_loop = true;
?> <a href="<?php echo $_smarty_tpl->tpl_vars['jlist']->value['url'];?>
" class="Recommended_jobs_name_cor" target="_blank"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['name_n'];?>
</a> <?php } ?> </em> <em class="Recommended_jobs_name"> <a href="<?php echo $_smarty_tpl->tpl_vars['job_list']->value['curl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['name_n'];?>
</a><?php if ($_smarty_tpl->tpl_vars['job_list']->value['ratlogo']) {?><img data-original="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['job_list']->value['ratlogo'];?>
" width="16" height="16" class="lazy" src=""/><?php }?> </em> </li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="w980">
    <div class="index_banner_cont "> <?php  $_smarty_tpl->tpl_vars['adlist_13'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_13']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[13];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 2;$length = 0;
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_13']->key => $_smarty_tpl->tpl_vars['adlist_13']->value) {
$_smarty_tpl->tpl_vars['adlist_13']->_loop = true;
?>
      <?php echo $_smarty_tpl->tpl_vars['adlist_13']->value['html'];?>

      <?php } ?>
      <?php  $_smarty_tpl->tpl_vars['adlist_14'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_14']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[14];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 6;$length = 0;
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_14']->key => $_smarty_tpl->tpl_vars['adlist_14']->value) {
$_smarty_tpl->tpl_vars['adlist_14']->_loop = true;
?>
      <?php echo $_smarty_tpl->tpl_vars['adlist_14']->value['html'];?>

      <?php } ?>
      <?php  $_smarty_tpl->tpl_vars['adlist_15'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_15']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[15];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 10;$length = 0;
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_15']->key => $_smarty_tpl->tpl_vars['adlist_15']->value) {
$_smarty_tpl->tpl_vars['adlist_15']->_loop = true;
?>
      <?php echo $_smarty_tpl->tpl_vars['adlist_15']->value['html'];?>

      <?php } ?> </div>
  </div>
  <div class="index_Emergency_job">
    <div class="Featured_Jobs_bg1">
      <div class="Latest_talent_h1"><b>����ְλ<span class="index_Emergency_span">New Jobs</span></b><a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
" class="index_more">����>></a></div>
      <div class="Featured_Jobs">
        <div class="Featured_Jobs_list"> <?php  $_smarty_tpl->tpl_vars['hot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hot']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("limit"=>"32","comlen"=>"13","joblen"=>"5","jobnum"=>"3","item"=>"\'hot\'","key"=>"\'key\'","name"=>"\'comjoblist2\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];extract($paramer);
		$Purl =  $ParamerArr[purl];
		if($config['sy_web_site']=="1"){
			if($config['cityid']>0 && $config['cityid']!=""){
				$cityid=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$three_cityid = $config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$hy=$config['hyclass'];
			}
		}
		$time = time();
		$where = "`sdate`<$time AND `edate`>$time and  `state`='1' and `r_status`<>'2' and `status`<>'1'";
		if($paramer[urgent]){
			$where.=" AND `urgent_time`>$time";
		}
		if($hy){
			$where.=' AND `hy`='.$hy;
		}
		if($cityid){
			$where.=' AND `cityid`='.$cityid;
		}
		if($three_cityid){
			$where.=" AND `three_cityid`=$three_cityid";
		}
		if($paramer[rec]){
			$where.=" AND `rec_time`>$time";
		}
		if($paramer['limit']){
			$limit=" limit ".$paramer['limit'];
		}
		include PLUS_PATH."/city.cache.php";
		include PLUS_PATH."/comrating.cache.php";
		$query = $db->query("select count(*) as num,uid,provinceid,cityid,three_cityid,lastupdate from $db_config[def]company_job where  $where GROUP BY uid ORDER BY lastupdate desc $limit");
		$uids=array();$ComList=array();
        while($rs = $db->fetch_array($query)){
			if($citylen){
				$one_city[$rs['uid']]	= mb_substr($city_name[$rs['cityid']],0,$citylen);
				$two_city[$rs['uid']] = mb_substr($city_name[$rs['three_cityid']],0,$citylen);
			}else{
				$one_city[$rs['uid']]	= $city_name[$rs['cityid']];
				$two_city[$rs['uid']] = $city_name[$rs['three_cityid']];
			}
			if($one_city[$rs['uid']]==''){
				$one_city[$rs['uid']]=$city_name[$rs['provinceid']];
			}
			$lasttime[$rs['uid']] = date('Y-m-d',$rs['lastupdate']);
			$uids[] = $rs['uid'];
		}
		if(!empty($uids)){
			$comids = @implode(',',$uids);
			$joblist = $db->select_all("company_job","$where AND `uid` IN ($comids) ORDER BY lastupdate desc");
			$job_list=array();
			foreach($joblist as $value){
				if(!$jobnum || count($job_list[$value['uid']])<$jobnum){
					if($joblen){
						$value['name_n'] = mb_substr($value['name'],0,$joblen,'gbk');
					}
					$value['url'] = Url("job",array("c"=>"comapply","id"=>$value['id']),"1");
					$job_list[$value['uid']][] = $value;
				}
				$comname[$value['uid']] = $value['com_name'];
			}
			$statis = $db->select_all("company_statis","`uid` in (".@implode(",",$uids).")","`uid`,`rating`");
			foreach($uids as $key=>$value){
				foreach($statis as $v){
					foreach($comrat as $val){
						if($value==$v[uid] && $val[id]==$v[rating])
						{
							$ComList[$key][color]=$val[com_color];
							$ComList[$key][ratlogo]=$val[com_pic];
						}
					}
				}
				$ComList[$key]['curl']     =  Url("company",array("c"=>"show","id"=>$value));
				$ComList[$key]['uid']     = $value;
				$ComList[$key]['name']	  = $comname[$value];
				$ComList[$key]['one_city']	  = $one_city[$value];
				$ComList[$key]['two_city']	  = $two_city[$value];
				$ComList[$key]['lasttime']     = $lasttime[$value];
				if($comlen){
					$ComList[$key]['name_n'] = mb_substr($comname[$value],0,$comlen,'gbk');
				}
				$ComList[$key]['joblist'] =$job_list[$value];
			}
		}$ComList = $ComList; if (!is_array($ComList) && !is_object($ComList)) { settype($ComList, 'array');}
foreach ($ComList as $_smarty_tpl->tpl_vars['hot']->key => $_smarty_tpl->tpl_vars['hot']->value) {
$_smarty_tpl->tpl_vars['hot']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['hot']->key;
?>
          <dl>
            <dd>
              <div class="Featured_Jobs_t1"><a href="<?php echo $_smarty_tpl->tpl_vars['hot']->value['curl'];?>
" class="Featured_Jobs_name fl" target="_blank"><?php echo $_smarty_tpl->tpl_vars['hot']->value['name_n'];?>
</a> <em class="fr Featured_Jobs_date"><?php echo $_smarty_tpl->tpl_vars['hot']->value['lasttime'];?>
</em> </div>
              <div class="Featured_Jobs_t2"> <?php  $_smarty_tpl->tpl_vars['jlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hot']->value['joblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jlist']->key => $_smarty_tpl->tpl_vars['jlist']->value) {
$_smarty_tpl->tpl_vars['jlist']->_loop = true;
?> <a href="<?php echo $_smarty_tpl->tpl_vars['jlist']->value['url'];?>
" target="_blank" class="Featured_Jobs_name_c"><?php echo $_smarty_tpl->tpl_vars['jlist']->value['name_n'];?>
</a> <?php } ?> </div>
            </dd>
          </dl>
          <?php } ?> </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="index_Emergency_job">
    <div class="Latest_talent_h1 "><b>�����˲�<span class="index_Emergency_span">New talent</span></b><a href="<?php echo smarty_function_url(array('m'=>'resume'),$_smarty_tpl);?>
" class="index_more" >����>></a></div>
    <div class="Latest_talent_cont">
      <ul class="Latest_talent_list">
        <li class="Latest_talent_list_a">����</li>
        <li class="Latest_talent_list_b">����</li>
        <li class="Latest_talent_list_c">ѧ��</li>
        <li class="Latest_talent_list_d">��ְ����</li>
      </ul>
      <ul class="Latest_talent_list">
        <li class="Latest_talent_list_a">����</li>
        <li class="Latest_talent_list_b">����</li>
        <li class="Latest_talent_list_c">ѧ��</li>
        <li class="Latest_talent_list_d">��ְ����</li>
      </ul>
      <?php  $_smarty_tpl->tpl_vars['ulist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ulist']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$ulist = $ulist; if (!is_array($ulist) && !is_object($ulist)) { settype($ulist, 'array');}
foreach ($ulist as $_smarty_tpl->tpl_vars['ulist']->key => $_smarty_tpl->tpl_vars['ulist']->value) {
$_smarty_tpl->tpl_vars['ulist']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ulist']->key;
?>
      <ul class="Latest_talent_list Latest_talent_list2">
        <li class="Latest_talent_list_a"><img width="14" height="14" class="png" src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/<?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['ulist']->value['sex']]=='Ů') {?>yun_girl.png<?php } else { ?>yun_boy.png<?php }?>"/><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$ulist.id`'),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['ulist']->value['username_n'];?>
</a></li>
        <li class="Latest_talent_list_b"><?php if ($_smarty_tpl->tpl_vars['ulist']->value['age']==0) {?>����<?php } else {
echo $_smarty_tpl->tpl_vars['ulist']->value['age'];
}?></li>
        <li class="Latest_talent_list_c"><?php echo $_smarty_tpl->tpl_vars['ulist']->value['edu_n'];?>
</li>
        <li class="Latest_talent_list_d"><?php echo $_smarty_tpl->tpl_vars['ulist']->value['job_post_n'];?>
</li>
      </ul>
      <?php } ?> </div>
    <div class="right_banner"> <?php  $_smarty_tpl->tpl_vars['adlist_user_r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_user_r']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[12];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 5;$length = 0;
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_user_r']->key => $_smarty_tpl->tpl_vars['adlist_user_r']->value) {
$_smarty_tpl->tpl_vars['adlist_user_r']->_loop = true;
?>
      <?php echo $_smarty_tpl->tpl_vars['adlist_user_r']->value['html'];?>
 
      <?php } ?> </div>
  </div>
  <div class="clear"></div>
  <div class="w980">
    <div class="index_news">
      <div class="index_News_h1"> <b>ְ����Ѷ<span class="index_Emergency_span">Workplace information</span></b> <u><?php  $_smarty_tpl->tpl_vars['arcgroupright'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arcgroupright']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("rec"=>"1","item"=>"\'arcgroupright\'","urlstatic"=>"1","key"=>"\'key\'","len"=>"4","pt_len"=>"12","pd_len"=>"40","t_len"=>"15","name"=>"\'newclasslist1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
		include PLUS_PATH."/group.cache.php";
		if($paramer['classid']){
			$classid = @explode(',',$paramer['classid']);
			if(is_array($classid)){
				foreach($classid as $key=>$value)
				{
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}else if($paramer['rec']){
			if(is_array($group_rec)){
				foreach($group_rec as $key=>$value)
				{
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}else if($paramer['r_news']){
			if(is_array($group_recnews)){
				foreach($group_recnews as $key=>$value)
				{
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}else{
			if(is_array($group_index)){
				foreach($group_index as $key=>$value)
				{
					$Info['id']   = $value;
					$Info['name'] = $group_name[$value];
					$group[] = $Info;
				}
			}
		}
		if(is_array($group))
		{
			foreach($group as $key=>$value)
			{
				if(intval($paramer[len])>0)
				{
					$len = intval($paramer[len]);
					$group[$key][name] = mb_substr($value[name],0,$len,"GBK");
				}
				if($group_type[$value['id']])
				{
					$nids = $value['id'].",".@implode(',',$group_type[$value['id']]);
				}else{
					$nids = $value['id'];
				}
				if($config[sy_news_rewrite]=="2"){
					$group[$key][url] = $config['sy_weburl']."/news/".$value[id]."/";
				}else{
					 $group[$key][url] = Url('article',array('c'=>'list',"nid"=>$value[id]),"1");
				}
				if($config[did]){
					$newswhere=" and `did`=$config[did]";
				}
				if($paramer[arcpic])
				{
					$query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE `nid`='$value[id]' AND `newsphoto`<>'' $newswhere  ORDER BY `sort` DESC,`datetime` DESC limit $paramer[arcpic]");
					while($rs = $db->fetch_array($query)){
						if(intval($paramer[pt_len])>0)
						{
							$len = intval($paramer[pt_len]);
							if($rs[color]){
								$rs[title] = "<font color='".$rs[color]."'>".mb_substr($rs[title],0,$len,"GBK")."</font>";
							}else{
								$rs[title] = mb_substr($rs[title],0,$len,"GBK");
							}
						}
						if(intval($paramer[pd_len])>0)
						{
							$len = intval($paramer[pd_len]);
							$rs[description] = mb_substr($rs[description],0,$len,"GBK");
						}
						foreach($group as $k=>$v)
						{
							if($v[id]==$rs[nid])
							{
								$rs[name] = $v[name];
							}
						}

						if($config[sy_news_rewrite]=="2"){
							$rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
						}else{
							$rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
						}
						$arcpic[] = $rs;
					}
					$group[$key][arcpic] = $arcpic;
					unset($arcpic);

				}
				if($paramer[arclist])
				{
					$query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE `nid`='$value[id]' $newswhere  ORDER BY `sort` DESC,`datetime` DESC limit $paramer[arclist]");
					while($rs = $db->fetch_array($query))
					{
						if(intval($paramer[t_len])>0)
						{
							$len = intval($paramer[t_len]);
							if($rs[color]){
								$rs[title] = "<font color='".$rs[color]."'>".mb_substr($rs[title],0,$len,"GBK")."</font>";
							}else{
								$rs[title] = mb_substr($rs[title],0,$len,"GBK");
							}
						}
						if(intval($paramer[d_len])>0)
						{
							$len = intval($paramer[d_len]);
							$rs[description] = mb_substr($rs[description],0,$len,"GBK");
						}
						foreach($group as $k=>$v)
						{
							if($v[id]==$rs[nid])
							{
								$rs[name] = $v[name];
							}
						}

						if($config[sy_news_rewrite]=="2"){
							$rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
						}else{
							$rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
						}
						$arclist[] = $rs;
					}
					$group[$key][arclist] = $arclist;
					unset($arclist);
				}
			}
		}$group = $group; if (!is_array($group) && !is_object($group)) { settype($group, 'array');}
foreach ($group as $_smarty_tpl->tpl_vars['arcgroupright']->key => $_smarty_tpl->tpl_vars['arcgroupright']->value) {
$_smarty_tpl->tpl_vars['arcgroupright']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['arcgroupright']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value>0) {?>|<?php }?> <a href="<?php echo $_smarty_tpl->tpl_vars['arcgroupright']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['arcgroupright']->value['name'];?>
</a> <?php } ?> <a <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_news_rewrite']=='2') {?>href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/news.html"<?php } else { ?>href="<?php echo smarty_function_url(array('m'=>'article'),$_smarty_tpl);?>
"<?php }?>target="_blank">����>></a> </u> </div>
      <?php  $_smarty_tpl->tpl_vars['indexnews'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['indexnews']->_loop = false;
$indexnews = $indexnews; if (!is_array($indexnews) && !is_object($indexnews)) { settype($indexnews, 'array');}
foreach ($indexnews as $_smarty_tpl->tpl_vars['indexnews']->key => $_smarty_tpl->tpl_vars['indexnews']->value) {
$_smarty_tpl->tpl_vars['indexnews']->_loop = true;
?>
      <div class="index_news_content"> <?php if ($_smarty_tpl->tpl_vars['indexnews']->value['pic']) {?>
        <dl class="index_news_top">
          <dt> <a href="<?php echo $_smarty_tpl->tpl_vars['indexnews']->value['pic'][0]['url'];?>
"> <img width="100" height="80" data-original="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['indexnews']->value['pic'][0]['newsphoto'];?>
" class="lazy" src=""/> </a> </dt>
          <dd> <strong><a href="<?php echo $_smarty_tpl->tpl_vars['indexnews']->value['pic'][0]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['indexnews']->value['pic'][0]['title'];?>
</a></strong> <span><?php echo $_smarty_tpl->tpl_vars['indexnews']->value['pic'][0]['description'];?>
...</span> <a href="<?php echo $_smarty_tpl->tpl_vars['indexnews']->value['pic'][0]['url'];?>
" target="_blank">[��ϸ]</a> </dd>
        </dl>
        <?php }?>
        <div class="index_news_right">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['arcitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arcitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['indexnews']->value['arclist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arcitem']->key => $_smarty_tpl->tpl_vars['arcitem']->value) {
$_smarty_tpl->tpl_vars['arcitem']->_loop = true;
?>
            <li>[<?php echo $_smarty_tpl->tpl_vars['arcitem']->value['name'];?>
] <a href="<?php echo $_smarty_tpl->tpl_vars['arcitem']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['arcitem']->value['title'];?>
</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <?php } ?> </div>
    <div class="index_news">
      <div class="Latest_talent_h1 "><b><i class="Latest_talent_h1_icon Latest_talent_h1_icon_link png"></i>��������</b><?php if ($_smarty_tpl->tpl_vars['config']->value['sy_linksq']==0) {?> <a href="<?php echo smarty_function_url(array('m'=>'link'),$_smarty_tpl);?>
" class="index_more">��������</a><?php }?></div>
      <div class="Famous_recruitment_cont_box">
        <div class="index_link_cont">
          <div class="index_link_list">
            <div class="index_link_list_img"> <?php  $_smarty_tpl->tpl_vars['linklist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linklist']->_loop = false;
global $config;
		//������ʹ�÷�Χ
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
				if(is_numeric('2') && $value['link_type']!='2')
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
foreach ($linkList as $_smarty_tpl->tpl_vars['linklist']->key => $_smarty_tpl->tpl_vars['linklist']->value) {
$_smarty_tpl->tpl_vars['linklist']->_loop = true;
?> <a href="<?php echo $_smarty_tpl->tpl_vars['linklist']->value['link_url'];?>
" target="_blank"><img class="lazy" src="" data-original="<?php echo $_smarty_tpl->tpl_vars['linklist']->value['pic'];?>
" width="120" height="35" alt="<?php echo $_smarty_tpl->tpl_vars['linklist']->value['link_name'];?>
" /></a> <?php } ?> </div>
            <div class="index_link_list_name"> <?php  $_smarty_tpl->tpl_vars['linklist2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linklist2']->_loop = false;
global $config;
		//������ʹ�÷�Χ
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
foreach ($linkList as $_smarty_tpl->tpl_vars['linklist2']->key => $_smarty_tpl->tpl_vars['linklist2']->value) {
$_smarty_tpl->tpl_vars['linklist2']->_loop = true;
?> <a href="<?php echo $_smarty_tpl->tpl_vars['linklist2']->value['link_url'];?>
" target="_blank"> <?php echo $_smarty_tpl->tpl_vars['linklist2']->value['link_name'];?>
</a> <?php } ?> </div>
          </div>
        </div>
      </div>
    </div>
    <div id="bg"></div>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/backtop.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id='footer_ad'> <?php  $_smarty_tpl->tpl_vars['footer_ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['footer_ad']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[10];if(is_array($add_arr) && !empty($add_arr)){
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['footer_ad']->key => $_smarty_tpl->tpl_vars['footer_ad']->value) {
$_smarty_tpl->tpl_vars['footer_ad']->_loop = true;
?>
      <div class="footer_ban" id="">
        <div class="baner_footer" id='bottom_ad_fl'> <span class="ban_close" onclick="colse_bottom()">�ر�</span> <?php echo $_smarty_tpl->tpl_vars['footer_ad']->value['html'];?>
 </div>
        <input type="hidden" value='1' id='bottom_ad_is_show' />
      </div>
      <?php } ?>
      <?php  $_smarty_tpl->tpl_vars['left_ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['left_ad']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[11];if(is_array($add_arr) && !empty($add_arr)){
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
foreach ($AdArr as $_smarty_tpl->tpl_vars['left_ad']->key => $_smarty_tpl->tpl_vars['left_ad']->value) {
$_smarty_tpl->tpl_vars['left_ad']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['left_ad']->key;
?>
      <div class="duilian <?php if ($_smarty_tpl->tpl_vars['key']->value=='0') {?>duilian_left<?php } else { ?>duilian_right<?php }?>">
        <div class="duilian_con"><?php echo $_smarty_tpl->tpl_vars['left_ad']->value['html'];?>
</div>
        <div class="close_container">
          <div class="btn_close"></div>
        </div>
      </div>
      <?php } ?> </div>
  </div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
