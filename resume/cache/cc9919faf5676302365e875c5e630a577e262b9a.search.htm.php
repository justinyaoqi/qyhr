<?php /*%%SmartyHeaderCode:1144055e2d05c109a57-08092681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc9919faf5676302365e875c5e630a577e262b9a' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\hy\\resume\\search.htm',
      1 => 1440861515,
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
  ),
  'nocache_hash' => '1144055e2d05c109a57-08092681',
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'total' => 0,
    'industry_name' => 0,
    'job_name' => 0,
    'city_name' => 0,
    'userclass_name' => 0,
    'adtime' => 0,
    'uptime' => 0,
    'paras' => 0,
    'industry_index' => 0,
    'v' => 0,
    'key' => 0,
    'job_index' => 0,
    'job_type' => 0,
    'city_index' => 0,
    'city_type' => 0,
    'userdata' => 0,
    'keylist' => 0,
    'user' => 0,
    'lookresume' => 0,
    'talentpool' => 0,
    'useridmsg' => 0,
    'job_list' => 0,
    'pagenav' => 0,
    'klist' => 0,
    'userrec' => 0,
    'com' => 0,
    'zpthreecityid' => 0,
    'zpcityid' => 0,
    'zpjobpost' => 0,
    'zpjob1son' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d05cb1e629_34998451',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d05cb1e629_34998451')) {function content_55e2d05cb1e629_34998451($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>人才列表-phpyun人才系统-人才列表</title>
<META name="keywords" content=",人才列表">
<META name="description" content="phpyun人才系统个人简历库为您提供海量优秀的个人简历您可以搜索销售、客服、文员等数百种职位人才的个人简历.搜简历找人才就来phpyun人才系统个人简历库。">
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
<script src="http://localhost/qyhr/data/plus/city.cache.js" type="text/javascript"></script>
<script src="http://localhost/qyhr/js/public.js" language="javascript"></script>
<script src="http://localhost/qyhr/data/plus/city.cache.js" type="text/javascript"></script>
<script src="http://localhost/qyhr/data/plus/job.cache.js" type="text/javascript"></script>
<script src="http://localhost/qyhr/js/search.js" type="text/javascript"></script>
<script src="http://localhost/qyhr/app/template/hy/js/index.js" type="text/javascript"></script>
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
                    <li class=""><a href="http://localhost/qyhr/job/" >找工作</a></li>
                    <li class="header_nav_cur"><a href="http://localhost/qyhr/resume/" >找人才</a></li>
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
    <div class="current_Location  com_current_Location png">
      <div class="fl" >您当前的位置：<a href="http://localhost/qyhr">首页</a> >  <span>人才列表</span>  </div> </div>
    <div class="clear"></div>
	<form method="get" action="http://localhost/qyhr/resume/" onsubmit="return search_keyword(this);">
           <div class="Search_jobs_box">
   
   <div class="php_disc">
		<div class="disc_sx">
			<span class="disc_zwsx">人才筛选</span>
            
		  <span class="Search_jobs_c_a_ln">	
        >  共 <span class="blod org">0</span> 位人才</span>
		</div>
		<div class="disc_search">
			<input type="text" name="keyword" value="" placeholder="请输入要搜索的关键字" class="Search_jobs_text"><input type="submit" value="搜索" class="Search_jobs_submit">
		</div>
	</div>
										 
											
				 
		 
		 
		 
		 
				
		 
    
 <div class="Search_jobs_form_list">
 <div class="Search_jobs_name">求职行业：</div>
          <div class="Search_jobs_sub"> <!--点击 更多 增加Search_jobs_sub_nore--> 
            <a href="http://localhost/qyhr/resume/index.php?c=search&order=topdate" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=35&order=topdate" class="Search_jobs_sub_a  " >计算机/互联网</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=837&order=topdate" class="Search_jobs_sub_a  " >机械/设备/技工</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=835&order=topdate" class="Search_jobs_sub_a  " >贸易/百货</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=836&order=topdate" class="Search_jobs_sub_a  " >化工/能源</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=45&order=topdate" class="Search_jobs_sub_a  " >公务员/翻译/其他</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=44&order=topdate" class="Search_jobs_sub_a  " >服务业</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=43&order=topdate" class="Search_jobs_sub_a  " >咨询/法律/教育/科研</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=42&order=topdate" class="Search_jobs_sub_a  " >人事/行政/高级管理</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=41&order=topdate" class="Search_jobs_sub_a  hylist" style="display:none;">建筑/房地产</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=40&order=topdate" class="Search_jobs_sub_a  hylist" style="display:none;">广告/市场/媒体/艺术</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=39&order=topdate" class="Search_jobs_sub_a  hylist" style="display:none;">生物/制药/医疗/护理</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=38&order=topdate" class="Search_jobs_sub_a  hylist" style="display:none;">生产/营运/采购/物流</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=37&order=topdate" class="Search_jobs_sub_a  hylist" style="display:none;">会计/金融/银行/保险</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=36&order=topdate" class="Search_jobs_sub_a  hylist" style="display:none;">销售/客服/技术支持</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&hy=839&order=topdate" class="Search_jobs_sub_a  hylist" style="display:none;">通信/电子</a>  </div>
          <div class="zh_more"> <a href="javascript:checkmore('hylist');" id="hylist">更多</a> </div>
 </div> 
         <div class="Search_jobs_form_list">
          <div class="Search_jobs_name"> 职位大类：</div>
          <div class="Search_jobs_sub "> <!--点击 更多 增加Search_jobs_sub_nore--> 
            <a href="http://localhost/qyhr/resume/index.php?c=search&order=topdate" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=35&order=topdate" class="Search_jobs_sub_a  " >计算机/互联网</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=44&order=topdate" class="Search_jobs_sub_a  " >服务业</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=37&order=topdate" class="Search_jobs_sub_a  " >会计/金融/银行/保险</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=43&order=topdate" class="Search_jobs_sub_a  " >咨询/法律/教育/科研</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=42&order=topdate" class="Search_jobs_sub_a  " >人事/行政/高级管理</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=41&order=topdate" class="Search_jobs_sub_a  " >建筑/房地产</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=40&order=topdate" class="Search_jobs_sub_a  " >广告/市场/媒体/艺术</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=39&order=topdate" class="Search_jobs_sub_a  job1list" style="display:none;">生物/制药/医疗/护理</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=36&order=topdate" class="Search_jobs_sub_a  job1list" style="display:none;">销售/客服/技术支持</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=38&order=topdate" class="Search_jobs_sub_a  job1list" style="display:none;">生产/营运/采购/物流</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=836&order=topdate" class="Search_jobs_sub_a  job1list" style="display:none;">化工/能源</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=837&order=topdate" class="Search_jobs_sub_a  job1list" style="display:none;">机械/设备/技工</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=839&order=topdate" class="Search_jobs_sub_a  job1list" style="display:none;">通信/电子</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=45&order=topdate" class="Search_jobs_sub_a  job1list" style="display:none;">公务员/翻译/其他</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&job1=835&order=topdate" class="Search_jobs_sub_a  job1list" style="display:none;">贸易/百货</a> </div>
          <div class="zh_more"> <a href="javascript:checkmore('job1list');" id="job1list">更多</a> </div>
        </div>
                					<div class="Search_jobs_form_list">
			  <div class="Search_jobs_name"> 工作省份：</div>
			  <div class="Search_jobs_sub"> <!--点击 更多 增加Search_jobs_sub_nore--> 
				<a href="http://localhost/qyhr/resume/index.php?c=search&order=topdate" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&provinceid=5&order=topdate" class="Search_jobs_sub_a  " >甘肃</a> </div>
			  <div class="zh_more"> <a href="javascript:checkmore('provinceidlist');" id="provinceidlist">更多</a> </div>
			</div>
		                         <div class="Search_jobs_form_list">
          <div class="Search_jobs_name"> 薪资待遇：</div>
          <div class="Search_jobs_sub "> <!--点击 更多 增加Search_jobs_sub_nore--> 
            <a href="http://localhost/qyhr/resume/index.php?c=search&order=topdate" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&salary=30&order=topdate" class="Search_jobs_sub_a ">面议</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&salary=31&order=topdate" class="Search_jobs_sub_a ">1000以下</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&salary=32&order=topdate" class="Search_jobs_sub_a ">1000 - 1999</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&salary=33&order=topdate" class="Search_jobs_sub_a ">2000 - 2999</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&salary=34&order=topdate" class="Search_jobs_sub_a ">3000 - 4499</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&salary=35&order=topdate" class="Search_jobs_sub_a ">4500 - 5999</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&salary=36&order=topdate" class="Search_jobs_sub_a ">6000 - 7999</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&salary=37&order=topdate" class="Search_jobs_sub_a ">8000 - 9999</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&salary=38&order=topdate" class="Search_jobs_sub_a ">10000及以上</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name">学历要求：</div>
          <div class="Search_jobs_sub "> <a href="http://localhost/qyhr/resume/index.php?c=search&order=topdate" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&edu=9&order=topdate" class="Search_jobs_sub_a ">高中以下</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&edu=12&order=topdate" class="Search_jobs_sub_a ">高中</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&edu=13&order=topdate" class="Search_jobs_sub_a ">中专</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&edu=14&order=topdate" class="Search_jobs_sub_a ">大专</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&edu=15&order=topdate" class="Search_jobs_sub_a ">本科</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&edu=16&order=topdate" class="Search_jobs_sub_a ">硕士</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&edu=17&order=topdate" class="Search_jobs_sub_a ">博士</a>  </div>
        </div>
        <div class="Search_jobs_form_list search_more"  style="display:none">
          <div class="Search_jobs_name"> 工作经验：</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/resume/index.php?c=search&order=topdate" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&exp=112&order=topdate" class="Search_jobs_sub_a ">无经验</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&exp=18&order=topdate" class="Search_jobs_sub_a ">应届毕业生</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&exp=19&order=topdate" class="Search_jobs_sub_a ">1年以上</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&exp=20&order=topdate" class="Search_jobs_sub_a ">2年以上</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&exp=21&order=topdate" class="Search_jobs_sub_a ">3年以上</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&exp=100&order=topdate" class="Search_jobs_sub_a ">4年以上</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&exp=22&order=topdate" class="Search_jobs_sub_a ">5年以上</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&exp=101&order=topdate" class="Search_jobs_sub_a ">6年以上</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&exp=23&order=topdate" class="Search_jobs_sub_a ">8年以上</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&exp=24&order=topdate" class="Search_jobs_sub_a ">10年以上</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> 性别要求：</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/resume/index.php?c=search&order=topdate" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&sex=6&order=topdate" class="Search_jobs_sub_a ">男</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&sex=7&order=topdate" class="Search_jobs_sub_a ">女</a>  </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> 工作类型：</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/resume/index.php?c=search&order=topdate" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&type=57&order=topdate" class="Search_jobs_sub_a ">不限</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&type=58&order=topdate" class="Search_jobs_sub_a ">全职</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&type=59&order=topdate" class="Search_jobs_sub_a ">兼职</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> 到岗时间：</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/resume/index.php?c=search&order=topdate" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&report=45&order=topdate" class="Search_jobs_sub_a ">随时到岗</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&report=46&order=topdate" class="Search_jobs_sub_a ">1周以内</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&report=47&order=topdate" class="Search_jobs_sub_a ">3周以内</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&report=48&order=topdate" class="Search_jobs_sub_a ">1个月之内</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&report=50&order=topdate" class="Search_jobs_sub_a ">3个月之内</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&report=51&order=topdate" class="Search_jobs_sub_a ">不确定</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> 发布时间：</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/resume/index.php?c=search&order=topdate" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&adtime=1&order=topdate" class="Search_jobs_sub_a ">一天内</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&adtime=3&order=topdate" class="Search_jobs_sub_a ">三天内</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&adtime=7&order=topdate" class="Search_jobs_sub_a ">七天内</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&adtime=15&order=topdate" class="Search_jobs_sub_a ">十五天内</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&adtime=30&order=topdate" class="Search_jobs_sub_a ">一个月内</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&adtime=60&order=topdate" class="Search_jobs_sub_a ">两个月内</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> 更新时间：</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/resume/index.php?c=search&order=topdate" class="Search_jobs_sub_a Search_jobs_sub_cur">全部</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&uptime=1&order=topdate" class="Search_jobs_sub_a ">今天</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&uptime=3&order=topdate" class="Search_jobs_sub_a ">最近3天</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&uptime=7&order=topdate" class="Search_jobs_sub_a ">最近7天</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&uptime=30&order=topdate" class="Search_jobs_sub_a ">最近一个月</a>  <a href="http://localhost/qyhr/resume/index.php?c=search&uptime=90&order=topdate" class="Search_jobs_sub_a ">最近三个月</a> </div>
        </div>
        <div class="clear"></div>
      </form>
      <div class="disc_more">
        <div class="disc_morecon" onclick="checkmore_search();"> <a href="javascript:void(0);"><span id="searchlist">更多选项</span>（学历，经验，性别，工作类型等） </a></div>
  
  </div> 
</div> 

<div class="search_h1_box">
<div class="search_h1_box_title">
<ul class="search_h1_box_list">
<li class="search_h1_box_cur"><a href="http://localhost/qyhr/resume/index.php?c=search">所有人才</a></li>
<li  class="list_photo"><a href="http://localhost/qyhr/resume/index.php?c=search&pic=1">照片人才</a></li>   
</ul> 
<div class="jobs_tag">你是不是想找： </div>
</div>

</div>
<div class="job_left_sidebar">
<div class="search_Filter">
<span class="yun_search_tit"><i></i>排序</span>
<ul class="search_Filter_list">
<li ><a href="http://localhost/qyhr/resume/index.php?c=search&order=lastdate">更新时间<i class="search_Filter_icon"></i></a></li>
<li ><a href="http://localhost/qyhr/resume/index.php?c=search&order=status_time">发布时间<i class="search_Filter_icon"></i></a></li> 
</ul> 
<div class="search_Filter_Authenticate "><a href="http://localhost/qyhr/resume/index.php?c=search&idcard=1&order=topdate"><div class="checkbox_job search_Filter_Authenticate_mt8 "><i></i></div>有身份验证</a></div>
<div class="search_Filter_Authenticate "><a href="http://localhost/qyhr/resume/index.php?c=search&work=1&order=topdate"><div class="checkbox_job search_Filter_Authenticate_mt8 "><i></i></div>有作品</a></div>

</div>

  
<div class="clear"></div>
	
<div class="seachno">
	<div class="seachno_left"><img src="http://localhost/qyhr/app/template/hy/images/seach_no.png" width="144" height="102"></div>
	<div class="listno-content"> 
	<h2 color="#00b38a;">您还是少加点条件吧，我都快睡着了</h2><br>
            
             
	  <span> 热门关键字：<br></span> 
	  </div>
</div> 
</div>


<div class="job_right_sidebar"> 
	<div class="job_right_box  m10">
        <div class="job_right_box_h1"><span class="job_right_box_span">推荐人才</span></div>
		  <ul class="job_right_user_list">
		        </ul>
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
		<h3 class="">phpyun人才系统为您提供人才网最新求职信息</h3>
		<div class="co_recom co_recom_link">
			<dl>
				<dt>周边求职：</dt>
				<dd>
                                						<a href="http://localhost/qyhr/resume/index.php?c=search&provinceid=5">甘肃招聘</a>
					                				</dd>
			</dl>
			<dl>
				<dt>求职频道：</dt>
				<dd>
                                						<a href="http://localhost/qyhr/resume/index.php?c=search&job1=35">计算机/互联网招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=44">服务业招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=37">会计/金融/银行/保险招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=43">咨询/法律/教育/科研招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=42">人事/行政/高级管理招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=41">建筑/房地产招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=40">广告/市场/媒体/艺术招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=39">生物/制药/医疗/护理招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=36">销售/客服/技术支持招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=38">生产/营运/采购/物流招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=836">化工/能源招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=837">机械/设备/技工招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=839">通信/电子招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=45">公务员/翻译/其他招聘</a>
										<a href="http://localhost/qyhr/resume/index.php?c=search&job1=835">贸易/百货招聘</a>
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
  
 </div><!--foot  start-->

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
</html><?php }} ?>
