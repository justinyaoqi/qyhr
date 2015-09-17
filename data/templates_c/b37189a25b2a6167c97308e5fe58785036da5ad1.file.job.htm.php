<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:25:37
         compiled from "D:\wamp\www\qyhr\app\template\mobile\job.htm" */ ?>
<?php /*%%SmartyHeaderCode:2997055f96dd1ebd9b9-21332068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b37189a25b2a6167c97308e5fe58785036da5ad1' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\mobile\\job.htm',
      1 => 1442291881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2997055f96dd1ebd9b9-21332068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'city_name' => 0,
    'jobname' => 0,
    'comclass_name' => 0,
    'searchurl' => 0,
    'comdata' => 0,
    'v' => 0,
    'industry_index' => 0,
    'industry_name' => 0,
    'pr' => 0,
    'num' => 0,
    'exp' => 0,
    'edu' => 0,
    'type' => 0,
    'uptime' => 0,
    'key' => 0,
    'config_weburl' => 0,
    'job_list' => 0,
    'total' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f96dd224ed94_36513252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f96dd224ed94_36513252')) {function content_55f96dd224ed94_36513252($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\wamp\\www\\qyhr\\app\\include\\libs\\plugins\\function.searchurl.php';
if (!is_callable('smarty_function_url')) include 'D:\\wamp\\www\\qyhr\\app\\include\\libs\\plugins\\function.url.php';
?><?php global $db,$db_config,$config;
		$time = time();
		
        eval('$paramer=array("namelen"=>"15","comlen"=>"15","ispage"=>"1","jobin"=>"\'auto.jobin\'","hy"=>"\'auto.hy\'","pr"=>"\'auto.pr\'","mun"=>"\'auto.mun\'","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","type"=>"\'auto.type\'","edu"=>"\'auto.edu\'","exp"=>"\'auto.exp\'","sex"=>"\'auto.sex\'","salary"=>"\'auto.salary\'","keyword"=>"\'auto.keyword\'","urgent"=>"\'auto.urgent\'","limit"=>"20","item"=>"\'job_list\'","islt"=>"4","nocache"=>"")
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
		$job_list = $db->select_all("company_job",$where.$limit);
		if(is_array($job_list)){
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_list as $key=>$value){
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
			foreach($job_list as $key=>$value){
				$job_list[$key] = $db->array_action($value,$cache_array);
				$job_list[$key][stime] = date("Y-m-d",$value[sdate]);
				$job_list[$key][etime] = date("Y-m-d",$value[edate]);
				$job_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);

				$job_list[$key][yyzz_status] =$r_uid[$value['uid']]['yyzz_status'];
				$time=time()-$value['lastupdate'];

				if($time>86400 && $time<604800){
					$job_list[$key]['time'] = ceil($time/86400)."天前";
				}elseif($time>3600 && $time<86400){
					$job_list[$key]['time'] = ceil($time/3600)."小时前";
				}elseif($time>60 && $time<3600){
					$job_list[$key]['time'] = ceil($time/60)."分钟前";
				}elseif($time<60){
					$job_list[$key]['time'] = "刚刚";
				}else{
					$job_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
				}
				if(is_array($job_list[$key]['welfare'])&&$job_list[$key]['welfare']){
					foreach($job_list[$key]['welfare'] as $val){
						$job_list[$key]['welfarename'][]=$cache_array['comclass_name'][$val];
					}

				}
				if($paramer[comlen]){
					$job_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"GBK");
				}
				if($paramer[namelen]){
					if($value['rec_time']>time()){
						$job_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"GBK")."</font>";
					}else{
						$job_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"GBK");
					}
				}else{
					if($value['rec_time']>time()){
						$job_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
					}
				}
				$job_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
				$job_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
				foreach($comrat as $k=>$v){
					if($value[rating]==$v[id]){
						$job_list[$key][color] = str_replace("#","",$v[com_color]);
						$job_list[$key][ratlogo] = $v[com_pic];
						$job_list[$key][ratname] = $v[name];
					}
				}
				if($paramer[keyword]){
					$job_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
					$job_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
					$job_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][name_n]);
					$job_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][com_n]);
					$job_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
					$job_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
				}
			}
			if(is_array($job_list)){
				if($paramer[keyword]!=""&&!empty($job_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		} ?>

 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/mobile/js/search.js" language="javascript"><?php echo '</script'; ?>
>
<section>
  <div class="searchOptions clearfix">
    <ul class="searchOptions_list">
      <li onclick="checkshowjob('city');"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']]||$_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']]) {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];
} else { ?>区域<?php }?><i class="searchOptions_icon fa fa-caret-down"></i></a></li>
      <li onclick="checkshowjob('job');"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['jobname']->value) {
echo $_smarty_tpl->tpl_vars['jobname']->value;
} else { ?>职能<?php }?><i class="searchOptions_icon fa fa-caret-down"></i></a></li>
      <li onclick="show_div('open')"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['salary']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['salary']];
} else { ?>薪资<?php }?><i class="searchOptions_icon fa fa-caret-down"></i></a></li>
      <li onclick="show_div('open2')" style="border:none"><a href="javascript:void(0);" class="searchOptions_list_a">更多<i class="searchOptions_icon fa fa-caret-down"></i></a></li>
      <input type="hidden" id="searchurl" value="<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
" />
      <input type="hidden" id="waptype" value="1" />
    </ul>

    <!--薪资弹出框-->
    <div class="job_pop_box openlist" id="open">
      <ul class="job_pop_pay_list">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li><a href="<?php echo smarty_function_searchurl(array('m'=>'mobile','c'=>'job','salary'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'salary'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
        <?php } ?>
      </ul>
    </div>
    <!--更多弹出框-->
    <div class="job_pop_more openlist" id="open2">
      <form method="get" action="">
        <input type="hidden" name="c" value="job" />
        <?php if ($_GET['jobin']) {?><input type="hidden" name="jobin" value="<?php echo $_GET['jobin'];?>
" /><?php }?>
        <?php if ($_GET['cityid']) {?><input type="hidden" name="cityid" value="<?php echo $_GET['cityid'];?>
" /><?php }?>
        <?php if ($_GET['provinceid']) {?><input type="hidden" name="provinceid" value="<?php echo $_GET['provinceid'];?>
" /><?php }?>
        <?php if ($_GET['salary']) {?><input type="hidden" name="salary" value="<?php echo $_GET['salary'];?>
" /><?php }?>
        <div class="com_search_box">
        <div class="com_search_box_cont">
          <div class="com_search_box_list">
            <div class="com_search_box_left"> 行业类别 </div>
            <div class="com_search_box_right">
              <div class="selectOption" style="width: 100%">
                <select name="hy">
                  <option value="">行业类别</option>                          
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>				
                  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_GET['hy']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                 <?php } ?> 			  
                </select>
              </div>
            </div>
          </div>
          <div class="com_search_box_list">
            <div class="com_search_box_left"> 公司性质</div>
            <div class="com_search_box_right">
              <div class="selectOption" style="width: 100%">
                <select name="pr" id='pr'>
                  <option value="">公司性质</option>                 
					<?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value) {
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>					
                  <option value="<?php echo $_smarty_tpl->tpl_vars['pr']->value;?>
" <?php if ($_GET['pr']==$_smarty_tpl->tpl_vars['pr']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['pr']->value];?>
</option>                
					<?php } ?>				
                </select>
              </div>
            </div>
          </div>
          <div class="com_search_box_list">
            <div class="com_search_box_left"> 公司规模</div>
            <div class="com_search_box_right">
              <div class="selectOption" style="width: 100%">
                <select name="num" id='num'>
                  <option value="">公司规模</option>                  
				<?php  $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['num']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['num']->key => $_smarty_tpl->tpl_vars['num']->value) {
$_smarty_tpl->tpl_vars['num']->_loop = true;
?>				
                  <option value="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" <?php if ($_GET['num']==$_smarty_tpl->tpl_vars['num']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['num']->value];?>
</option>                  
				<?php } ?>		    
                </select>
              </div>
            </div>
          </div>
          <div class="com_search_box_list">
            <div class="com_search_box_left"> 工作经验 </div>
            <div class="com_search_box_right">
              <div class="selectOption" style="width: 100%">
                <select name="exp" id='exp'>
                  <option value="">工作经验</option>                  
					<?php  $_smarty_tpl->tpl_vars['exp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['exp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['exp']->key => $_smarty_tpl->tpl_vars['exp']->value) {
$_smarty_tpl->tpl_vars['exp']->_loop = true;
?>					
                  <option value="<?php echo $_smarty_tpl->tpl_vars['exp']->value;?>
" <?php if ($_GET['exp']==$_smarty_tpl->tpl_vars['exp']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['exp']->value];?>
</option>                  
					<?php } ?>			
                </select>
              </div>
            </div>
          </div>
          <div class="com_search_box_list">
            <div class="com_search_box_left"> 学历要求</div>
            <div class="com_search_box_right">
              <div class="selectOption" style="width: 100%">
                <select name="edu" id='edu'>
                  <option value="">学历要求</option>                  
				<?php  $_smarty_tpl->tpl_vars['edu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['edu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['edu']->key => $_smarty_tpl->tpl_vars['edu']->value) {
$_smarty_tpl->tpl_vars['edu']->_loop = true;
?>				
                  <option value="<?php echo $_smarty_tpl->tpl_vars['edu']->value;?>
" <?php if ($_GET['edu']==$_smarty_tpl->tpl_vars['edu']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['edu']->value];?>
</option>                  
				<?php } ?> 		    
                </select>
              </div>
            </div>
          </div>
          <div class="com_search_box_list">
            <div class="com_search_box_left"> 工作性质 </div>
            <div class="com_search_box_right">
              <div class="selectOption" style="width: 100%">
                <select name="type" id='type'>
                  <option value=""> 工作性质</option>                  
				<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>				
                  <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" <?php if ($_GET['type']==$_smarty_tpl->tpl_vars['type']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['type']->value];?>
</option>                  
				<?php } ?> 		    
                </select>
              </div>
            </div>
          </div>
          <div class="com_search_box_list">
            <div class="com_search_box_left"> 更新日期</div>
            <div class="com_search_box_right">
              <div class="selectOption" style="width: 100%">
                <select name="uptime" id='uptime'>
                  <option value="">更新日期</option>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_GET['uptime']==$_smarty_tpl->tpl_vars['key']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
				<?php } ?> 
                </select>
              </div>
            </div>
          </div>
          <input type="submit" value="搜索"class="seach_post_sub" />
        </div>
      </form>
    </div>
  </div>
  <!--更多end-->  
  </div>
</section>
<section>
  <div class="warp_content clear">
    <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['config_weburl']->value;?>
/mobile/index.php">
      <input type="hidden" name="c" value="job" />
      <div class="formFiled">
        <input type="text" value="<?php echo $_GET['keyword'];?>
" name="keyword" class="input_search" placeholder="请输入关键字">
        <input type="submit" value="搜索" class="input_btn">
      </div>
    </form>
    <div class="job_list_content"> <?php  $_smarty_tpl->tpl_vars['job_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_list']->_loop = false;
$job_list = $job_list; if (!is_array($job_list) && !is_object($job_list)) { settype($job_list, 'array');}
foreach ($job_list as $_smarty_tpl->tpl_vars['job_list']->key => $_smarty_tpl->tpl_vars['job_list']->value) {
$_smarty_tpl->tpl_vars['job_list']->_loop = true;
?>
      <div class="job_list_box"> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['job_list']->value['id']),$_smarty_tpl);?>
" class="job_list">
        <h3><?php echo $_smarty_tpl->tpl_vars['job_list']->value['name_n'];
if ($_smarty_tpl->tpl_vars['job_list']->value['urgent_time']>time()) {?><i class="urgent">急招</i><?php }?></h3>
        <aside class="job_qy_name"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_two'];?>
<em class="line">|</em><?php echo mb_substr($_smarty_tpl->tpl_vars['job_list']->value['com_name'],0,12,'gbk');?>
</aside>
        <aside class="job_pay"><strong><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_salary'];?>
</strong><span class="job_date"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>
</span></aside>
        </a> </div>
      <?php } ?>
      <?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?>
      <?php if ($_GET['keyword']!='') {?>
      <div class="wap_member_no">没有搜索到职位</div>
      <?php } else { ?>
      <div class="wap_member_no">暂无职位</div>
      <?php }?>
      <?php } else { ?>
      <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
      <?php }?> </div>
  </div>
  </div>
</section>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
