<?php /*%%SmartyHeaderCode:404255e2d05a71b397-63934354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f8e13c6ab8aea5cd32ce2b9311c7d62de6ae454' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\hy\\job\\search.htm',
      1 => 1440861544,
      2 => 'file',
    ),
    '31b941a90d3e0b833d11f5d43a94ca058345bdbe' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\\\app\\template\\hy\\header.htm',
      1 => 1440861548,
      2 => 'file',
    ),
    '1c0350521fdf50b308693e883bf856635b557682' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\\\app\\template\\hy\\public_search\\index_search.htm',
      1 => 1440861552,
      2 => 'file',
    ),
    '8ef9366cb9e439cb1a7d1acf0f1351640cba7008' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\\\app\\template\\hy\\footer.htm',
      1 => 1440861514,
      2 => 'file',
    ),
    '79c7206d4584f9e78ff38329bcaf4f4cc3770ec1' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\\\app\\template\\hy\\public_search\\login.htm',
      1 => 1440861555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '404255e2d05a71b397-63934354',
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'finder' => 0,
    'key' => 0,
    'v' => 0,
    'total' => 0,
    'industry_name' => 0,
    'job_name' => 0,
    'city_name' => 0,
    'comclass_name' => 0,
    'sdate' => 0,
    'uptime' => 0,
    'paras' => 0,
    'industry_index' => 0,
    'job_index' => 0,
    'job_type' => 0,
    'city_index' => 0,
    'city_type' => 0,
    'comdata' => 0,
    'keylist' => 0,
    'job_list' => 0,
    'lookjob' => 0,
    'favjob' => 0,
    'useridjob' => 0,
    'usertype' => 0,
    'uid' => 0,
    'pagenav' => 0,
    'klist' => 0,
    'blist' => 0,
    'com' => 0,
    'zpthreecityid' => 0,
    'zpcityid' => 0,
    'zpjobpost' => 0,
    'zpjob1son' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d05b2c0817_67623893',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d05b2c0817_67623893')) {function content_55e2d05b2c0817_67623893($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>最新招聘信息|招聘 - phpyun人才系统</title>
<META name="keywords" content="phpyun人才系统,招聘,招聘最新信息- ">
<META name="description" content="phpyun人才系统- phpyun人才系统招聘频道，为求职者提供最新最全的招聘信息。招聘，找工作，就上phpyun人才系统">
<link rel="stylesheet" href="http://localhost/qyhr/app/template/hy/style/css.css" type="text/css">
<link rel="stylesheet" href="http://localhost/qyhr/app/template/hy/style/job.css" type="text/css">
<!--[if IE 6]>
<script src="http://localhost/qyhr/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png');
</script>
<![endif]-->
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="http://localhost/qyhr/js/layer/layer.min.js" language="javascript"></script>
<script src="http://localhost/qyhr/js/lazyload.min.js" language="javascript"></script>
<script src="http://localhost/qyhr/js/public.js" language="javascript"></script>
<script src="http://localhost/qyhr/data/plus/industry.cache.js" type="text/javascript"></script>
<script src="http://localhost/qyhr/data/plus/city.cache.js" type="text/javascript"></script>
<script src="http://localhost/qyhr/data/plus/job.cache.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://localhost/qyhr/app/template/hy/style/class.public.css" type="text/css">
<script src="http://localhost/qyhr/js/class.public.js" type="text/javascript"></script>
<script src="http://localhost/qyhr/app/template/hy/js/com_index.js" language="javascript"></script>
<script src="http://localhost/qyhr/js/search.js" type="text/javascript"></script>
</head>
<body>
<!--header-->
<div class="top">
  <div class="top_cot">
    <div class="top_cot_content">
      <div class="top_left fl">
        <div class="yun_welcome fl">欢迎来到phpyun人才系统！</div>
        <span class="fl"><a href="http://localhost/qyhr/wap" class="wap_icon">手机版</a> | <a href="http://localhost/qyhr/index.php?m=subscribe">订阅</a></span> </div>
      <div class="top_right_re fr">
        <div class="top_right">
          <div class="yun_topNav fr"> 
		  <a class="yun_navMore" href="javascript:;">网站导航</a>
            <div class="yun_webMoredown" style="display:none">
              <div class="yun_top_nav_box"> 
			                  <div class="yun_top_nav_h1"><a href="http://localhost/qyhr/job/" >找工作</a></div>
                <ul>
                                    <li><a href="http://localhost/qyhr/company/" >找企业</a></li>
                                    <li><a href="http://localhost/qyhr/once/" >微招聘</a></li>
                                    <li><a href="http://localhost/qyhr/map/" >地图招聘</a></li>
                                  </ul>
                                <div class="yun_top_nav_h1"><a href="http://localhost/qyhr/resume/" >找人才</a></div>
                <ul>
                                    <li><a href="http://localhost/qyhr/hr/" >工具箱</a></li>
                                    <li><a href="http://localhost/qyhr/tiny/" >微简历</a></li>
                                  </ul>
                                <div class="yun_top_nav_h1"><a href="http://localhost/qyhr/article/" >资讯</a></div>
                <ul>
                                    <li><a href="http://localhost/qyhr//ask" >问答</a></li>
                                  </ul>
                                <div class="yun_top_nav_h1"><a href="http://www.hr135.com"  target="_blank">本站特色</a></div>
                <ul>
                                    <li><a href="http://localhost/qyhr/redeem/" >积分兑换</a></li>
                                  </ul>
                 </div>
            </div>
          </div>
                        <div class=" fr"><div class="yun_topLogin_cont"><div class="yun_topLogin"><a class="yun_More" href="javascript:void(0)">用户登录</a><ul class="yun_Moredown" style="display:none"><li><a href="http://localhost/qyhr/index.php?m=login">会员登录</a></li></ul></div><div class="yun_topLogin"> <a class="yun_More" href="javascript:void(0)">用户注册</a><ul class="yun_Moredown fn-hide" style="display:none"><li><a href="http://localhost/qyhr/index.php?m=register&usertype=1">个人注册</a></li><li><a href="http://localhost/qyhr/index.php?m=register&usertype=2">企业注册</a></li></ul></div></div></div>
                    </div>
      </div>
    </div>
  </div>
</div>
<div class="header_zt"></div>
<div class="header">
  <div class="w980">
    <div class="header_cont">
      <div class="logo fl"><a href="http://localhost/qyhr"><img src="http://localhost/qyhr/data/logo/20150505/14383375306.PNG" class="png"></a></div>
      <nav>
        <ul class="header_nav">
                    <li class=""><a href="http://localhost/qyhr/index.php" >首页</a></li>
                    <li class="header_nav_cur"><a href="http://localhost/qyhr/job/" >找工作</a></li>
                    <li class=""><a href="http://localhost/qyhr/resume/" >找人才</a></li>
                    <li class=""><a href="http://localhost/qyhr/company/" >找企业</a></li>
                    <li class=""><a href="http://localhost/qyhr/once/" >微招聘</a></li>
                    <li class=""><a href="http://localhost/qyhr/tiny/" >微简历</a></li>
                    <li class=""><a href="http://localhost/qyhr/article/" >职场资讯</a></li>
                    <li class=""><a href="http://localhost/qyhr/zph/" >招聘会</a></li>
                    <li class=""><a href="http://localhost/qyhr/map/"  target="_blank">地图</a></li>
                    <li class=""><a href="http://localhost/qyhr/evaluate/" >测评</a></li>
                            </ul>
      </nav>

        
        
        
        
        
        
    </div>
  </div>
</div>
<!--------------------------------弹出框-------------------------------------->
<!--职位类别start-->
<div class="sPopupDiv" id="jobdiv" style="display:none; float:left;"></div>
<!--职位类别end--> 

<!--工作地点start-->
<div class="sPopupDiv" id="citydiv" style="display:none"></div>
<!--工作地点end--> 

<!--行业类别start-->
<div class="sPopupDiv" id="industrydiv" style="display:none"></div>
<!--行业类别end--> 


<div class="yun_body">
  <div class="yun_content">
    
    <div class="current_Location com_current_Location png">
      <div class="fl" >您当前的位置：<a href="http://localhost/qyhr">首页</a> > <span onclick="index_industry(1,'input[name=keyword]','.disc_zwsx','left:100px;top:100px; position:absolute;');">职位列表</span> </div>
    </div>
    <div class="clear"></div>    
    <div class="Search_jobs_box">
      <form action="http://localhost/qyhr/job/" method="get" onsubmit="return search_keyword(this);">
                <input type="hidden" name="c" value="search" />
                <div class="php_disc">
          <div class="disc_sx"> <span class="disc_zwsx">职位筛选</span>

            <span class="Search_jobs_c_a_ln">
     
   >  共 <span class="blod org">0</span> 个职位 
       </span>
       </div>
          <div class="disc_search">
            <input type="text" name="keyword" value="" placeholder="请输入要搜索的关键字" class="Search_jobs_text">
            <input type="submit" value="搜索" class="Search_jobs_submit">
            </div>
        </div>
			                                    			 
				 
				 
			            
                         
             
             
             
             
                        
             
                    
                     
        <div class="Search_jobs_form_list">
          <div class="Search_jobs_name">招聘行业：</div>
          <div class="Search_jobs_sub"> <!--点击 更多 增加Search_jobs_sub_nore--> 
            <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=35" class="Search_jobs_sub_a  " >计算机/互联网</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=837" class="Search_jobs_sub_a  " >机械/设备/技工</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=835" class="Search_jobs_sub_a  " >贸易/百货</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=836" class="Search_jobs_sub_a  " >化工/能源</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=45" class="Search_jobs_sub_a  " >公务员/翻译/其他</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=44" class="Search_jobs_sub_a  " >服务业</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=43" class="Search_jobs_sub_a  " >咨询/法律/教育/科研</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=42" class="Search_jobs_sub_a  " >人事/行政/高级管理</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=41" class="Search_jobs_sub_a  hylist" style="display:none;">建筑/房地产</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=40" class="Search_jobs_sub_a  hylist" style="display:none;">广告/市场/媒体/艺术</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=39" class="Search_jobs_sub_a  hylist" style="display:none;">生物/制药/医疗/护理</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=38" class="Search_jobs_sub_a  hylist" style="display:none;">生产/营运/采购/物流</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=37" class="Search_jobs_sub_a  hylist" style="display:none;">会计/金融/银行/保险</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=36" class="Search_jobs_sub_a  hylist" style="display:none;">销售/客服/技术支持</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=839" class="Search_jobs_sub_a  hylist" style="display:none;">通信/电子</a>  </div>
          <div class="zh_more"> <a href="javascript:checkmore('hylist');" id="hylist">更多</a> </div>
        </div>
                <div class="Search_jobs_form_list">
          <div class="Search_jobs_name"> 职位大类：</div>
          <div class="Search_jobs_sub "> <!--点击 更多 增加Search_jobs_sub_nore--> 
            <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=35" class="Search_jobs_sub_a  " >计算机/互联网</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=44" class="Search_jobs_sub_a  " >服务业</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=37" class="Search_jobs_sub_a  " >会计/金融/银行/保险</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=43" class="Search_jobs_sub_a  " >咨询/法律/教育/科研</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=42" class="Search_jobs_sub_a  " >人事/行政/高级管理</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=41" class="Search_jobs_sub_a  " >建筑/房地产</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=40" class="Search_jobs_sub_a  " >广告/市场/媒体/艺术</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=39" class="Search_jobs_sub_a  job1list" style="display:none;">生物/制药/医疗/护理</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=36" class="Search_jobs_sub_a  job1list" style="display:none;">销售/客服/技术支持</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=38" class="Search_jobs_sub_a  job1list" style="display:none;">生产/营运/采购/物流</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=836" class="Search_jobs_sub_a  job1list" style="display:none;">化工/能源</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=837" class="Search_jobs_sub_a  job1list" style="display:none;">机械/设备/技工</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=839" class="Search_jobs_sub_a  job1list" style="display:none;">通信/电子</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=45" class="Search_jobs_sub_a  job1list" style="display:none;">公务员/翻译/其他</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=835" class="Search_jobs_sub_a  job1list" style="display:none;">贸易/百货</a> </div>
          <div class="zh_more"> <a href="javascript:checkmore('job1list');" id="job1list">更多</a> </div>
        </div>
                		 
        <div class="Search_jobs_form_list">
          <div class="Search_jobs_name"> 工作省份：</div>
          <div class="Search_jobs_sub"> <!--点击 更多 增加Search_jobs_sub_nore--> 
            <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/job/index.php?c=search&provinceid=5" class="Search_jobs_sub_a  " >甘肃</a> </div>
          <div class="zh_more"> <a href="javascript:checkmore('provinceidlist');" id="provinceidlist">更多</a> </div>
        </div>
		                          <div class="Search_jobs_form_list">
          <div class="Search_jobs_name"> 薪资待遇：</div>
          <div class="Search_jobs_sub "> <!--点击 更多 增加Search_jobs_sub_nore--> 
            <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=46" class="Search_jobs_sub_a ">面议</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=128" class="Search_jobs_sub_a ">不限</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=47" class="Search_jobs_sub_a ">1000以下</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=48" class="Search_jobs_sub_a ">1000 - 1999</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=83" class="Search_jobs_sub_a ">2000 - 2999</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=49" class="Search_jobs_sub_a ">3000 - 4499</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=50" class="Search_jobs_sub_a ">4500 - 5999</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=51" class="Search_jobs_sub_a ">6000 - 7999</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=52" class="Search_jobs_sub_a ">8000 - 9999</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=53" class="Search_jobs_sub_a ">10000及以上</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name">学历要求：</div>
          <div class="Search_jobs_sub "> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=65" class="Search_jobs_sub_a ">不限</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=66" class="Search_jobs_sub_a ">高中</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=67" class="Search_jobs_sub_a ">中专</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=68" class="Search_jobs_sub_a ">大专</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=69" class="Search_jobs_sub_a ">本科</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=70" class="Search_jobs_sub_a ">硕士</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=71" class="Search_jobs_sub_a ">博士</a>  </div>
        </div>
        <div class="Search_jobs_form_list search_more"  style="display:none">
          <div class="Search_jobs_name"> 工作经验：</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=127" class="Search_jobs_sub_a ">不限</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=12" class="Search_jobs_sub_a ">应届毕业生</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=13" class="Search_jobs_sub_a ">1年以上</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=14" class="Search_jobs_sub_a ">2年以上</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=15" class="Search_jobs_sub_a ">3年以上</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=16" class="Search_jobs_sub_a ">5年以上</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=17" class="Search_jobs_sub_a ">8年以上</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=18" class="Search_jobs_sub_a ">10年以上</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> 性别要求：</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sex=62" class="Search_jobs_sub_a ">不限</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sex=63" class="Search_jobs_sub_a ">男</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sex=64" class="Search_jobs_sub_a ">女</a>  </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> 工作类型：</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/job/index.php?c=search&type=54" class="Search_jobs_sub_a ">不限</a>  <a href="http://localhost/qyhr/job/index.php?c=search&type=55" class="Search_jobs_sub_a ">全职</a>  <a href="http://localhost/qyhr/job/index.php?c=search&type=56" class="Search_jobs_sub_a ">兼职</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> 到岗时间：</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/job/index.php?c=search&report=57" class="Search_jobs_sub_a ">不限</a>  <a href="http://localhost/qyhr/job/index.php?c=search&report=58" class="Search_jobs_sub_a ">1周以内</a>  <a href="http://localhost/qyhr/job/index.php?c=search&report=59" class="Search_jobs_sub_a ">2周以内</a>  <a href="http://localhost/qyhr/job/index.php?c=search&report=60" class="Search_jobs_sub_a ">3周以内</a>  <a href="http://localhost/qyhr/job/index.php?c=search&report=61" class="Search_jobs_sub_a ">1个月之内</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> 发布时间：</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sdate=1" class="Search_jobs_sub_a ">一天内</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sdate=3" class="Search_jobs_sub_a ">三天内</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sdate=7" class="Search_jobs_sub_a ">七天内</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sdate=15" class="Search_jobs_sub_a ">十五天内</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sdate=30" class="Search_jobs_sub_a ">一个月内</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sdate=60" class="Search_jobs_sub_a ">两个月内</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> 更新时间：</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/job/index.php?c=search&uptime=1" class="Search_jobs_sub_a ">今天</a>  <a href="http://localhost/qyhr/job/index.php?c=search&uptime=3" class="Search_jobs_sub_a ">最近3天</a>  <a href="http://localhost/qyhr/job/index.php?c=search&uptime=7" class="Search_jobs_sub_a ">最近7天</a>  <a href="http://localhost/qyhr/job/index.php?c=search&uptime=30" class="Search_jobs_sub_a ">最近一个月</a>  <a href="http://localhost/qyhr/job/index.php?c=search&uptime=90" class="Search_jobs_sub_a ">最近三个月</a> </div>
        </div>
        <div class="clear"></div>
      </form>
      <div class="disc_more">
        <div class="disc_morecon" onclick="checkmore_search();"> <a href="javascript:void(0);"><span id="searchlist">更多选项</span>（学历，经验，性别，工作类型等）</a> </div>
      </div>
    </div>
    <div class="search_h1_box">
      <div class="search_h1_box_title">
        <ul class="search_h1_box_list">
          <li class="search_h1_box_cur"><a href="http://localhost/qyhr/job/index.php?c=search">所有职位</a></li>
          <li  class="list_age png"><a href="http://localhost/qyhr/job/index.php?c=search&urgent=1">紧急职位</a></li>
          <li  class="list_rem png"><a href="http://localhost/qyhr/job/index.php?c=search&rec=1">推荐职位</a></li>
        </ul>
        <div class="jobs_tag"> 你是不是想找： </div>
      </div>
    </div>
    <div class="left_job_all fl">
      <div class="job_left_sidebar">
        <div class="search_user_list_tit search_user_list_tit_bg">
          <div class="search_Filter"> <span class="yun_search_tit">排序：</span>
            <ul class="search_Filter_list">
              <li ><a href="http://localhost/qyhr/job/index.php?c=search&order=lastdate">更新时间<i class="search_Filter_icon"></i></a></li>
              <li ><a href="http://localhost/qyhr/job/index.php?c=search&order=sdate">发布时间<i class="search_Filter_icon"></i></a></li>
            </ul>
            <div class="search_Filter_Authenticate"> <a href="http://localhost/qyhr/job/index.php?c=search&cert=3">
              <div class="checkbox_job search_Filter_Authenticate_mt8 "><b></b></div>
              <em>执照已认证</em></a></div>
          </div>
        </div>
          
         
        <!--没搜索到-->
        <div class="seachno">
          <div class="seachno_left"><img src="http://localhost/qyhr/app/template/hy/images/seach_no.png" width="144" height="102"></div>
          <div class="listno-content"> 
		  <h2 color="#00b38a;">您还是少加点条件吧，我都快睡着了</h2><br>
            
             <span> 热门关键字：<br>
            </span> </div>
        </div>
         </div>
    </div>
    <div class="job_right_sidebar">
      <div class="job_right_box m10">
        <div class="job_right_box_h1"><span class="job_right_box_span">职位推荐</span><a href="javascript:void(0)" onclick="exchange();" class="job_right_box_more png">换一组</a></div>
        <ul class="job_right_box_list">
          <input type="hidden" value='2' id='exchangep'/>
                  </ul>
      </div>
      <div class="job_Subscribe m10">
        <div class="job_Subscribe_h1">订阅职位</div>
        <div class="job_Subscribe_p"> 根据你的筛选条件，定期将符合你要求的职位信息发送给你</div>
        <div class="job_Subscribe_dy"><a href="http://localhost/qyhr/index.php?m=subscribe" class="job_Subscribe_a">订阅职位</a></div>
      </div>
    </div>
  </div>
  <div class="yun_content">
    <div class="recomme_det">
      <h3 class="">企业推荐</h3>
      <div class="co_recom">
        <ul>
                    </ul>
      </div>
    </div>
    <div class="recomme_det">
      <h3 class="">phpyun人才系统为您提供人才网最新招聘信息</h3>
      <div class="co_recom co_recom_link">
			<dl>
				<dt>周边招聘：</dt>
				<dd>
                                						<a href="http://localhost/qyhr/job/index.php?c=search&provinceid=5">甘肃招聘</a>
					                				</dd>
			</dl>
			<dl>
				<dt>招聘频道：</dt>
				<dd>
                                						<a href="http://localhost/qyhr/job/index.php?c=search&job1=35">计算机/互联网招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=44">服务业招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=37">会计/金融/银行/保险招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=43">咨询/法律/教育/科研招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=42">人事/行政/高级管理招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=41">建筑/房地产招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=40">广告/市场/媒体/艺术招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=39">生物/制药/医疗/护理招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=36">销售/客服/技术支持招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=38">生产/营运/采购/物流招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=836">化工/能源招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=837">机械/设备/技工招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=839">通信/电子招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=45">公务员/翻译/其他招聘</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=835">贸易/百货招聘</a>
					                				</dd>
			</dl>
			<dl style="border-bottom:0;">
				<dt>热门搜索：</dt>
				<dd>
                				</dd>
			</dl>
      </div>
    </div>
  </div>
</div>
<div id="sqjob_show" style=" display:none; float:left">
  <div class="Pop-up_logoin"  style="padding:10px 20px 20px 20px;">
    <div class="Pop-up_logoin_sq" id="resume_job"> 
     <span style="width:90px; font-weight:bold; padding:10px  0 0 0; display:block">选择简历：</span>
     <div style="clear:both"></div>
      <div class="POp_up_r"></div>
    </div>
    <div style="clear:both"></div>
    <div class="Pop-up_logoin_sq" style="margin-top:10px;">
      <input id="click_comindex_sqjob" class="login_button2" style="margin-left:80px;"type="button" value="提交申请" name="Submit">
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
	$.post("http://localhost/qyhr/index.php?m=ajax&c=comspread",{jobids:'',cityid:''},function(data){
		$("#comspread").html(data);
	});
});
</script> 
<!--foot  start-->

<div class="clear"></div>
<div class="footer">
  <div class="foot">
    <div class="foot_conent">
      <div class="footer_left">         <dl class="footer_list">
          <dt>关于我们</dt>
          <dd>
            <ul>
                            <li><a 
                            href="http://localhost/qyhr/about/index.html"
                              title="关于我们">关于我们</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/service.html"
                              title="注册协议">注册协议</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/phpyun.html"
                              title="法律声明">法律声明</a></li>
                          </ul>
          <dd>
        </dl>
                <dl class="footer_list">
          <dt>支付信息</dt>
          <dd>
            <ul>
                            <li><a 
                            href="http://localhost/qyhr/about/yh.html"
                              title="银行帐户">银行帐户</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/pinpai.html"
                              title="品牌推广">品牌推广</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/charge.html"
                              title="收费标准">收费标准</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/indexzy.html"
                              title="经营资源">经营资源</a></li>
                          </ul>
          <dd>
        </dl>
                <dl class="footer_list">
          <dt>网站特色</dt>
          <dd>
            <ul>
                            <li><a 
                            href="index.php?m=redeem"
                              title="积分兑换">积分兑换</a></li>
                            <li><a 
                            href="index.php?m=subscribe"
                              title="订阅服务">订阅服务</a></li>
                          </ul>
          <dd>
        </dl>
                <dl class="footer_list">
          <dt>咨询反馈</dt>
          <dd>
            <ul>
                            <li><a 
                            href="http://localhost/qyhr/about/kf.html"
                              title="客服中心">客服中心</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/gg.html"
                              title="广告投放">广告投放</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/newuser.html"
                              title="新手指引">新手指引</a></li>
                          </ul>
          <dd>
        </dl>
                <dl class="footer_list">
          <dt>特色服务</dt>
          <dd>
            <ul>
                            <li><a 
                            href="http://localhost/qyhr/about/jinjia.html"
                              title="竟价职位">竟价职位</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/map.html"
                              title="地图搜索">地图搜索</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/new.html"
                              title="职场指南">职场指南</a></li>
                          </ul>
          <dd>
        </dl>
         </div>
       <div class="footer_right" style="text-align:left">
        <div class="footer_touch">服务热线</div>
        <div class="footer_tel">400-880-5523</div>
        
        <ul class="footer_last">
                  
          <li style="width:70px; float:left; margin-top:5px; text-align:left"> <a class="move_03" style="color: #ff0000"  target="_blank" href="http://localhost/qyhr/index.php?c=weixin" target="_blank">微信</a> </li>
                  </ul>
      </div>
    </div>
    <div class="clear"></div>
    <div class="footer_bot">
      <div class="footer_bot_p">Copyright C 20092014 All Rights Reserved 版权所有 鑫潮人力资源服务苏ICP备12049413号-3 </div>
      <div class="footer_bot_p">	地址:江苏省沭阳县软件园B栋10楼  电话(Tel):400-880-5523  EMAIL:admin@admin.com</div>
      <div class="footer_img"> 
      <a href="/"><img alt="" src="http://localhost/qyhr/app/template/hy/images/ftImg01.png" width="120" height="52"> </a> 
      <a href="/"><img alt="" src="http://localhost/qyhr/app/template/hy/images/ftImg02.png" width="120" height="52"> </a> 
      <a href="/"><img alt="" src="http://localhost/qyhr/app/template/hy/images/ftImg03.png" width="120" height="52"> </a> 
	  
      </div>
    </div>
  </div>
</div>
<!--foot  end--> 
<div id="bg" style=""></div>
<div id="uclogin" style="display:none"></div>
<script>var integral_pricename='积分';var weburl="http://localhost/qyhr"; </script>
</body>
</html> 
<!---当前登录--->
<link rel="stylesheet" href="http://localhost/qyhr/app/template/hy/style/tck_logoin.css" type="text/css">
<div style="display:none" id="onlogin">
  <div class="logoin_tck_left" style="margin-top: 25px;padding-left: 25px;">
    <div class="logoin_tck_text" > <i class="logoin_tck_text_icon"></i>
      <input type="text" id="login_username" placeholder="请输入用户名" tabindex="1" name="username" class="logoin_tck_text_t1">
    </div>
    <div class="logoin_tck_text" style="margin-top:20px;"> <i class="logoin_tck_text_icon logoin_tck_text_icon_p"></i>
      <input type="password" id="login_password" tabindex="2" name="password" placeholder="请输入密码"class="logoin_tck_text_t1">
    </div>
    <div class="logoin_tck_text logoin_tck_text_yzm" style="margin-top:20px;"> <i class="logoin_tck_text_icon logoin_tck_text_icon_y"></i>
      <input id="login_authcode" type="text" tabindex="3"  maxlength="4" name="authcode" class="logoin_tck_text_t1" placeholder="请输入验证码"  style="width:80px;">
    </div>
    <div class=" logoin_tck_text_yzm_r" style="margin-top: 20px;"> <img id="vcode_img" src="http://localhost/qyhr/app/include/authcode.inc.php" onclick="check_code()" style="margin-right:5px; margin-left:5px;cursor:pointer;">&nbsp;<a href="javascript:void(0);" onclick="check_code()">看不清?</a> </div>
    <div class="Pop-up_logoin_list">
      <div id="msg"></div>
    
    <input type="hidden" id="login_usertype" />
    <input id="loginsubmit" class="logoin_tck_bth_sub" type="button" name="loginsubmit" onclick="checkajaxlogin()" value="登录" ></div>
  </div>
  <div class="logoin_tck_right" style="margin-top: 35px;padding-left: 20px;">
    <div class="logoin_tck_reg">还没没有账号？<a href="" id="onregister" class="Orange">立即注册</a></div>
  </div>
</div>
<script>
function showlogin(usertype){
	$("#login_usertype").val(usertype);
	if(usertype==1 || usertype==""){
		var url='http://localhost/qyhr/index.php?m=register&usertype=1';
	}else if(usertype==2){
		var url='http://localhost/qyhr/index.php?m=register&usertype=2';
	}
	$("#onregister").attr("href",url);
	$.layer({
		type : 1,
		title :'快速登录', 
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['480px','300px'],
		page : {dom :"#onlogin"}
	});
}
function checkajaxlogin(){
	var username = $.trim($("#login_username").val());
	var password = $.trim($("#login_password").val());
	var authcode = $.trim($("#login_authcode").val());
	var usertype = $.trim($("#login_usertype").val());
	if(username == "" || password=="" || authcode==""){
		layer.closeAll();
		layer.msg('请完整填写用户名，密码，验证码！', 2, 8,function(){showlogin(usertype);});return false;
	}
	$.post("http://localhost/qyhr/index.php?m=login&c=loginsave",{comid:1,username:username,password:password,authcode:authcode,usertype:usertype},function(data){
		var data=eval('('+data+')');
		if(data.error==1){
			location.reload();
		}else{
			layer.msg(data.msg, 2, 8);return false;
		}
	});
}
</script> <?php }} ?>
