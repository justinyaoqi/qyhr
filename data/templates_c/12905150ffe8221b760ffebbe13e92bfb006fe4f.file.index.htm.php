<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:05:45
         compiled from "D:\wamp\www\qyhr\app\template\mobile\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:1861755f969299ce8f1-76646156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12905150ffe8221b760ffebbe13e92bfb006fe4f' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\mobile\\index.htm',
      1 => 1442291881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1861755f969299ce8f1-76646156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'wap_style' => 0,
    'lunbo' => 0,
    'config_weburl' => 0,
    'keylist' => 0,
    'job' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f96929add444_91671192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f96929add444_91671192')) {function content_55f96929add444_91671192($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\wamp\\www\\qyhr\\app\\include\\libs\\plugins\\function.url.php';
?><?php global $db,$db_config,$config;
		$time = time();
		
        eval('$paramer=array("limit"=>"5","rec"=>"1","item"=>"\'job\'","nocache"=>"")
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
		$job = $db->select_all("company_job",$where.$limit);
		if(is_array($job)){
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job as $key=>$value){
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
			foreach($job as $key=>$value){
				$job[$key] = $db->array_action($value,$cache_array);
				$job[$key][stime] = date("Y-m-d",$value[sdate]);
				$job[$key][etime] = date("Y-m-d",$value[edate]);
				$job[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);

				$job[$key][yyzz_status] =$r_uid[$value['uid']]['yyzz_status'];
				$time=time()-$value['lastupdate'];

				if($time>86400 && $time<604800){
					$job[$key]['time'] = ceil($time/86400)."天前";
				}elseif($time>3600 && $time<86400){
					$job[$key]['time'] = ceil($time/3600)."小时前";
				}elseif($time>60 && $time<3600){
					$job[$key]['time'] = ceil($time/60)."分钟前";
				}elseif($time<60){
					$job[$key]['time'] = "刚刚";
				}else{
					$job[$key]['time'] = date("Y-m-d",$value['lastupdate']);
				}
				if(is_array($job[$key]['welfare'])&&$job[$key]['welfare']){
					foreach($job[$key]['welfare'] as $val){
						$job[$key]['welfarename'][]=$cache_array['comclass_name'][$val];
					}

				}
				if($paramer[comlen]){
					$job[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"GBK");
				}
				if($paramer[namelen]){
					if($value['rec_time']>time()){
						$job[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"GBK")."</font>";
					}else{
						$job[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"GBK");
					}
				}else{
					if($value['rec_time']>time()){
						$job[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
					}
				}
				$job[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
				$job[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
				foreach($comrat as $k=>$v){
					if($value[rating]==$v[id]){
						$job[$key][color] = str_replace("#","",$v[com_color]);
						$job[$key][ratlogo] = $v[com_pic];
						$job[$key][ratname] = $v[name];
					}
				}
				if($paramer[keyword]){
					$job[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
					$job[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
					$job[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job[$key][name_n]);
					$job[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job[$key][com_n]);
					$job[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
					$job[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
				}
			}
			if(is_array($job)){
				if($paramer[keyword]!=""&&!empty($job)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		} ?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/slides.jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/flickity-docs.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/css/normalize.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/css/flickity-docs.css" media="screen" />
<section>
    <div class="example">        
        <div class="example__demo">
            <div class="gallery gallery--images-loaded-demo js-flickity"
                 data-flickity-options='{ "imagesLoaded": true,"autoPlay": true }'>
                <!-- images from unsplash.com -->
                <?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[50];if(is_array($add_arr) && !empty($add_arr)){
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
                <img src="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['pic'];?>
" />
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section>
  <div class="index_warp_content clear">
     <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['config_weburl']->value;?>
/mobile/index.php">
      <input type="hidden" name="c" value="job" />
      <div class="index_formFiled">
        <input type="text" value="" name="keyword" class="index_input_search" placeholder="请输入关键字，如：会计">
        <input type="submit" value="搜职位" class="index_input_btn">
      </div>
    </form>
    <nav>
      <dl class="nav_list">
        <a href="<?php echo smarty_function_url(array('m'=>'mobile','c'=>'job'),$_smarty_tpl);?>
">
        <dt class="cor_1"><i class="nav_icon fa fa-briefcase"></i></dt>
        <dd>找职位</dd>
        </a>
      </dl>
      <dl class="nav_list">
        <a href="<?php echo smarty_function_url(array('m'=>'mobile','c'=>'resume'),$_smarty_tpl);?>
">
        <dt class="cor_2"><i class="nav_icon fa fa-graduation-cap"></i></dt>
        <dd>找人才</dd>
        </a>
      </dl>
      <dl class="nav_list">
        <a href="<?php echo smarty_function_url(array('m'=>'mobile','c'=>'company'),$_smarty_tpl);?>
">
        <dt class="cor_3"><i class="nav_icon fa fa-building-o"></i></dt>
        <dd>找企业</dd>
        </a>
      </dl>
      <dl class="nav_list">
        <a href="<?php echo smarty_function_url(array('m'=>'mobile','c'=>'job','rec'=>1),$_smarty_tpl);?>
">
        <dt class="cor_4"><i class="nav_icon fa fa-thumbs-up"></i></dt>
        <dd>职位推荐</dd>
        </a>
      </dl>
           <dl class="nav_list">
        <a href="<?php echo smarty_function_url(array('m'=>'mobile','c'=>'map'),$_smarty_tpl);?>
">
        <dt class="cor_5"><i class="nav_icon fa fa-map-marker"></i></dt>
        <dd>附近职位</dd>
        </a>
      </dl> <dl class="nav_list">
        <a href="<?php echo smarty_function_url(array('m'=>'mobile','c'=>'once'),$_smarty_tpl);?>
">
        <dt class="cor_6"><i class="nav_icon fa fa-tasks"></i></dt>
        <dd>微招聘</dd>
        </a>
      </dl>
      <dl class="nav_list">
        <a href="<?php echo smarty_function_url(array('m'=>'mobile','c'=>'tiny'),$_smarty_tpl);?>
">
        <dt class="cor_7"><i class="nav_icon fa fa-users"></i></dt>
        <dd>微简历</dd>
        </a>
      </dl>
      <dl class="nav_list">
        <a href="<?php echo smarty_function_url(array('m'=>'mobile','c'=>'article'),$_smarty_tpl);?>
">
        <dt class="cor_8"><i class="nav_icon fa fa-newspaper-o"></i></dt>
        <dd>看资讯</dd>
        </a>
      </dl>

    </nav>
  </div>
</section>

<div class="clear"></div>
<section>
  <div  class="index_hotlist"> <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"16","type"=>"3","recom"=>"1","item"=>"\'keylist\'","iswap"=>"1","nocache"=>"")
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
foreach ($list as $_smarty_tpl->tpl_vars['keylist']->key => $_smarty_tpl->tpl_vars['keylist']->value) {
$_smarty_tpl->tpl_vars['keylist']->_loop = true;
?> <a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</span></a> <?php } ?> </div>
</section>
<div class="clear"></div>
<section>
  <div class="index_warp_content mt10">
    <div class="wap_title"><span class="">职位推荐</span><a href="<?php echo smarty_function_url(array('m'=>'mobile','c'=>'job','rec'=>1),$_smarty_tpl);?>
" class="more">更多>></a></div>
    <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
$job = $job; if (!is_array($job) && !is_object($job)) { settype($job, 'array');}
foreach ($job as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
    <div class="job_list_box"> <a href="<?php echo smarty_function_url(array('m'=>'mobile','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" class="job_list">
      <h3><?php echo mb_substr($_smarty_tpl->tpl_vars['job']->value['name'],0,12,'gbk');
if ($_smarty_tpl->tpl_vars['job']->value['urgent_time']>time()) {?><i class="urgent">急招</i><?php }?></h3>
      <aside class="job_qy_name"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['job']->value['job_city_two'];?>
<em class="line">|</em><?php echo mb_substr($_smarty_tpl->tpl_vars['job']->value['com_name'],0,12,'gbk');?>
</aside>
      <aside class="job_pay"><strong><?php echo $_smarty_tpl->tpl_vars['job']->value['job_salary'];?>
</strong><span class="job_date"><?php echo $_smarty_tpl->tpl_vars['job']->value['lastupdate'];?>
</span></aside>
      </a> </div>
    <?php } ?> </div>
</section>
<style>
    .previous, .next, .flickity-page-dots {
        display: none;
    }
    .example,.gallery {margin-bottom:0px !important;
    }
</style>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
        $(".example__demo img").width($(document.body).width());
    }); 
<?php echo '</script'; ?>
>
<?php }} ?>
