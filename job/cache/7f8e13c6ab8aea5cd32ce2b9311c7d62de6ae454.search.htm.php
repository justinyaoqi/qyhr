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
<title>������Ƹ��Ϣ|��Ƹ - phpyun�˲�ϵͳ</title>
<META name="keywords" content="phpyun�˲�ϵͳ,��Ƹ,��Ƹ������Ϣ- ">
<META name="description" content="phpyun�˲�ϵͳ- phpyun�˲�ϵͳ��ƸƵ����Ϊ��ְ���ṩ������ȫ����Ƹ��Ϣ����Ƹ���ҹ���������phpyun�˲�ϵͳ">
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
        <div class="yun_welcome fl">��ӭ����phpyun�˲�ϵͳ��</div>
        <span class="fl"><a href="http://localhost/qyhr/wap" class="wap_icon">�ֻ���</a> | <a href="http://localhost/qyhr/index.php?m=subscribe">����</a></span> </div>
      <div class="top_right_re fr">
        <div class="top_right">
          <div class="yun_topNav fr"> 
		  <a class="yun_navMore" href="javascript:;">��վ����</a>
            <div class="yun_webMoredown" style="display:none">
              <div class="yun_top_nav_box"> 
			                  <div class="yun_top_nav_h1"><a href="http://localhost/qyhr/job/" >�ҹ���</a></div>
                <ul>
                                    <li><a href="http://localhost/qyhr/company/" >����ҵ</a></li>
                                    <li><a href="http://localhost/qyhr/once/" >΢��Ƹ</a></li>
                                    <li><a href="http://localhost/qyhr/map/" >��ͼ��Ƹ</a></li>
                                  </ul>
                                <div class="yun_top_nav_h1"><a href="http://localhost/qyhr/resume/" >���˲�</a></div>
                <ul>
                                    <li><a href="http://localhost/qyhr/hr/" >������</a></li>
                                    <li><a href="http://localhost/qyhr/tiny/" >΢����</a></li>
                                  </ul>
                                <div class="yun_top_nav_h1"><a href="http://localhost/qyhr/article/" >��Ѷ</a></div>
                <ul>
                                    <li><a href="http://localhost/qyhr//ask" >�ʴ�</a></li>
                                  </ul>
                                <div class="yun_top_nav_h1"><a href="http://www.hr135.com"  target="_blank">��վ��ɫ</a></div>
                <ul>
                                    <li><a href="http://localhost/qyhr/redeem/" >���ֶһ�</a></li>
                                  </ul>
                 </div>
            </div>
          </div>
                        <div class=" fr"><div class="yun_topLogin_cont"><div class="yun_topLogin"><a class="yun_More" href="javascript:void(0)">�û���¼</a><ul class="yun_Moredown" style="display:none"><li><a href="http://localhost/qyhr/index.php?m=login">��Ա��¼</a></li></ul></div><div class="yun_topLogin"> <a class="yun_More" href="javascript:void(0)">�û�ע��</a><ul class="yun_Moredown fn-hide" style="display:none"><li><a href="http://localhost/qyhr/index.php?m=register&usertype=1">����ע��</a></li><li><a href="http://localhost/qyhr/index.php?m=register&usertype=2">��ҵע��</a></li></ul></div></div></div>
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
                    <li class=""><a href="http://localhost/qyhr/index.php" >��ҳ</a></li>
                    <li class="header_nav_cur"><a href="http://localhost/qyhr/job/" >�ҹ���</a></li>
                    <li class=""><a href="http://localhost/qyhr/resume/" >���˲�</a></li>
                    <li class=""><a href="http://localhost/qyhr/company/" >����ҵ</a></li>
                    <li class=""><a href="http://localhost/qyhr/once/" >΢��Ƹ</a></li>
                    <li class=""><a href="http://localhost/qyhr/tiny/" >΢����</a></li>
                    <li class=""><a href="http://localhost/qyhr/article/" >ְ����Ѷ</a></li>
                    <li class=""><a href="http://localhost/qyhr/zph/" >��Ƹ��</a></li>
                    <li class=""><a href="http://localhost/qyhr/map/"  target="_blank">��ͼ</a></li>
                    <li class=""><a href="http://localhost/qyhr/evaluate/" >����</a></li>
                            </ul>
      </nav>

        
        
        
        
        
        
    </div>
  </div>
</div>
<!--------------------------------������-------------------------------------->
<!--ְλ���start-->
<div class="sPopupDiv" id="jobdiv" style="display:none; float:left;"></div>
<!--ְλ���end--> 

<!--�����ص�start-->
<div class="sPopupDiv" id="citydiv" style="display:none"></div>
<!--�����ص�end--> 

<!--��ҵ���start-->
<div class="sPopupDiv" id="industrydiv" style="display:none"></div>
<!--��ҵ���end--> 


<div class="yun_body">
  <div class="yun_content">
    
    <div class="current_Location com_current_Location png">
      <div class="fl" >����ǰ��λ�ã�<a href="http://localhost/qyhr">��ҳ</a> > <span onclick="index_industry(1,'input[name=keyword]','.disc_zwsx','left:100px;top:100px; position:absolute;');">ְλ�б�</span> </div>
    </div>
    <div class="clear"></div>    
    <div class="Search_jobs_box">
      <form action="http://localhost/qyhr/job/" method="get" onsubmit="return search_keyword(this);">
                <input type="hidden" name="c" value="search" />
                <div class="php_disc">
          <div class="disc_sx"> <span class="disc_zwsx">ְλɸѡ</span>

            <span class="Search_jobs_c_a_ln">
     
   >  �� <span class="blod org">0</span> ��ְλ 
       </span>
       </div>
          <div class="disc_search">
            <input type="text" name="keyword" value="" placeholder="������Ҫ�����Ĺؼ���" class="Search_jobs_text">
            <input type="submit" value="����" class="Search_jobs_submit">
            </div>
        </div>
			                                    			 
				 
				 
			            
                         
             
             
             
             
                        
             
                    
                     
        <div class="Search_jobs_form_list">
          <div class="Search_jobs_name">��Ƹ��ҵ��</div>
          <div class="Search_jobs_sub"> <!--��� ���� ����Search_jobs_sub_nore--> 
            <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">ȫ��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=35" class="Search_jobs_sub_a  " >�����/������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=837" class="Search_jobs_sub_a  " >��е/�豸/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=835" class="Search_jobs_sub_a  " >ó��/�ٻ�</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=836" class="Search_jobs_sub_a  " >����/��Դ</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=45" class="Search_jobs_sub_a  " >����Ա/����/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=44" class="Search_jobs_sub_a  " >����ҵ</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=43" class="Search_jobs_sub_a  " >��ѯ/����/����/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=42" class="Search_jobs_sub_a  " >����/����/�߼�����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=41" class="Search_jobs_sub_a  hylist" style="display:none;">����/���ز�</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=40" class="Search_jobs_sub_a  hylist" style="display:none;">���/�г�/ý��/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=39" class="Search_jobs_sub_a  hylist" style="display:none;">����/��ҩ/ҽ��/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=38" class="Search_jobs_sub_a  hylist" style="display:none;">����/Ӫ��/�ɹ�/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=37" class="Search_jobs_sub_a  hylist" style="display:none;">���/����/����/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=36" class="Search_jobs_sub_a  hylist" style="display:none;">����/�ͷ�/����֧��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&hy=839" class="Search_jobs_sub_a  hylist" style="display:none;">ͨ��/����</a>  </div>
          <div class="zh_more"> <a href="javascript:checkmore('hylist');" id="hylist">����</a> </div>
        </div>
                <div class="Search_jobs_form_list">
          <div class="Search_jobs_name"> ְλ���ࣺ</div>
          <div class="Search_jobs_sub "> <!--��� ���� ����Search_jobs_sub_nore--> 
            <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">ȫ��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=35" class="Search_jobs_sub_a  " >�����/������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=44" class="Search_jobs_sub_a  " >����ҵ</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=37" class="Search_jobs_sub_a  " >���/����/����/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=43" class="Search_jobs_sub_a  " >��ѯ/����/����/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=42" class="Search_jobs_sub_a  " >����/����/�߼�����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=41" class="Search_jobs_sub_a  " >����/���ز�</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=40" class="Search_jobs_sub_a  " >���/�г�/ý��/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=39" class="Search_jobs_sub_a  job1list" style="display:none;">����/��ҩ/ҽ��/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=36" class="Search_jobs_sub_a  job1list" style="display:none;">����/�ͷ�/����֧��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=38" class="Search_jobs_sub_a  job1list" style="display:none;">����/Ӫ��/�ɹ�/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=836" class="Search_jobs_sub_a  job1list" style="display:none;">����/��Դ</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=837" class="Search_jobs_sub_a  job1list" style="display:none;">��е/�豸/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=839" class="Search_jobs_sub_a  job1list" style="display:none;">ͨ��/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=45" class="Search_jobs_sub_a  job1list" style="display:none;">����Ա/����/����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&job1=835" class="Search_jobs_sub_a  job1list" style="display:none;">ó��/�ٻ�</a> </div>
          <div class="zh_more"> <a href="javascript:checkmore('job1list');" id="job1list">����</a> </div>
        </div>
                		 
        <div class="Search_jobs_form_list">
          <div class="Search_jobs_name"> ����ʡ�ݣ�</div>
          <div class="Search_jobs_sub"> <!--��� ���� ����Search_jobs_sub_nore--> 
            <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">ȫ��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&provinceid=5" class="Search_jobs_sub_a  " >����</a> </div>
          <div class="zh_more"> <a href="javascript:checkmore('provinceidlist');" id="provinceidlist">����</a> </div>
        </div>
		                          <div class="Search_jobs_form_list">
          <div class="Search_jobs_name"> н�ʴ�����</div>
          <div class="Search_jobs_sub "> <!--��� ���� ����Search_jobs_sub_nore--> 
            <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">ȫ��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=46" class="Search_jobs_sub_a ">����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=128" class="Search_jobs_sub_a ">����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=47" class="Search_jobs_sub_a ">1000����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=48" class="Search_jobs_sub_a ">1000 - 1999</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=83" class="Search_jobs_sub_a ">2000 - 2999</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=49" class="Search_jobs_sub_a ">3000 - 4499</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=50" class="Search_jobs_sub_a ">4500 - 5999</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=51" class="Search_jobs_sub_a ">6000 - 7999</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=52" class="Search_jobs_sub_a ">8000 - 9999</a>  <a href="http://localhost/qyhr/job/index.php?c=search&salary=53" class="Search_jobs_sub_a ">10000������</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name">ѧ��Ҫ��</div>
          <div class="Search_jobs_sub "> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">ȫ��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=65" class="Search_jobs_sub_a ">����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=66" class="Search_jobs_sub_a ">����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=67" class="Search_jobs_sub_a ">��ר</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=68" class="Search_jobs_sub_a ">��ר</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=69" class="Search_jobs_sub_a ">����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=70" class="Search_jobs_sub_a ">˶ʿ</a>  <a href="http://localhost/qyhr/job/index.php?c=search&edu=71" class="Search_jobs_sub_a ">��ʿ</a>  </div>
        </div>
        <div class="Search_jobs_form_list search_more"  style="display:none">
          <div class="Search_jobs_name"> �������飺</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">ȫ��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=127" class="Search_jobs_sub_a ">����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=12" class="Search_jobs_sub_a ">Ӧ���ҵ��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=13" class="Search_jobs_sub_a ">1������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=14" class="Search_jobs_sub_a ">2������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=15" class="Search_jobs_sub_a ">3������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=16" class="Search_jobs_sub_a ">5������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=17" class="Search_jobs_sub_a ">8������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&exp=18" class="Search_jobs_sub_a ">10������</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> �Ա�Ҫ��</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">ȫ��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sex=62" class="Search_jobs_sub_a ">����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sex=63" class="Search_jobs_sub_a ">��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sex=64" class="Search_jobs_sub_a ">Ů</a>  </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> �������ͣ�</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">ȫ��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&type=54" class="Search_jobs_sub_a ">����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&type=55" class="Search_jobs_sub_a ">ȫְ</a>  <a href="http://localhost/qyhr/job/index.php?c=search&type=56" class="Search_jobs_sub_a ">��ְ</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> ����ʱ�䣺</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">ȫ��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&report=57" class="Search_jobs_sub_a ">����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&report=58" class="Search_jobs_sub_a ">1������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&report=59" class="Search_jobs_sub_a ">2������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&report=60" class="Search_jobs_sub_a ">3������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&report=61" class="Search_jobs_sub_a ">1����֮��</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> ����ʱ�䣺</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">ȫ��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sdate=1" class="Search_jobs_sub_a ">һ����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sdate=3" class="Search_jobs_sub_a ">������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sdate=7" class="Search_jobs_sub_a ">������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sdate=15" class="Search_jobs_sub_a ">ʮ������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sdate=30" class="Search_jobs_sub_a ">һ������</a>  <a href="http://localhost/qyhr/job/index.php?c=search&sdate=60" class="Search_jobs_sub_a ">��������</a> </div>
        </div>
        <div class="Search_jobs_form_list search_more" style="display:none">
          <div class="Search_jobs_name"> ����ʱ�䣺</div>
          <div class="Search_jobs_sub"> <a href="http://localhost/qyhr/job/index.php?c=search" class="Search_jobs_sub_a Search_jobs_sub_cur">ȫ��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&uptime=1" class="Search_jobs_sub_a ">����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&uptime=3" class="Search_jobs_sub_a ">���3��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&uptime=7" class="Search_jobs_sub_a ">���7��</a>  <a href="http://localhost/qyhr/job/index.php?c=search&uptime=30" class="Search_jobs_sub_a ">���һ����</a>  <a href="http://localhost/qyhr/job/index.php?c=search&uptime=90" class="Search_jobs_sub_a ">���������</a> </div>
        </div>
        <div class="clear"></div>
      </form>
      <div class="disc_more">
        <div class="disc_morecon" onclick="checkmore_search();"> <a href="javascript:void(0);"><span id="searchlist">����ѡ��</span>��ѧ�������飬�Ա𣬹������͵ȣ�</a> </div>
      </div>
    </div>
    <div class="search_h1_box">
      <div class="search_h1_box_title">
        <ul class="search_h1_box_list">
          <li class="search_h1_box_cur"><a href="http://localhost/qyhr/job/index.php?c=search">����ְλ</a></li>
          <li  class="list_age png"><a href="http://localhost/qyhr/job/index.php?c=search&urgent=1">����ְλ</a></li>
          <li  class="list_rem png"><a href="http://localhost/qyhr/job/index.php?c=search&rec=1">�Ƽ�ְλ</a></li>
        </ul>
        <div class="jobs_tag"> ���ǲ������ң� </div>
      </div>
    </div>
    <div class="left_job_all fl">
      <div class="job_left_sidebar">
        <div class="search_user_list_tit search_user_list_tit_bg">
          <div class="search_Filter"> <span class="yun_search_tit">����</span>
            <ul class="search_Filter_list">
              <li ><a href="http://localhost/qyhr/job/index.php?c=search&order=lastdate">����ʱ��<i class="search_Filter_icon"></i></a></li>
              <li ><a href="http://localhost/qyhr/job/index.php?c=search&order=sdate">����ʱ��<i class="search_Filter_icon"></i></a></li>
            </ul>
            <div class="search_Filter_Authenticate"> <a href="http://localhost/qyhr/job/index.php?c=search&cert=3">
              <div class="checkbox_job search_Filter_Authenticate_mt8 "><b></b></div>
              <em>ִ������֤</em></a></div>
          </div>
        </div>
          
         
        <!--û������-->
        <div class="seachno">
          <div class="seachno_left"><img src="http://localhost/qyhr/app/template/hy/images/seach_no.png" width="144" height="102"></div>
          <div class="listno-content"> 
		  <h2 color="#00b38a;">�������ټӵ������ɣ��Ҷ���˯����</h2><br>
            
             <span> ���Źؼ��֣�<br>
            </span> </div>
        </div>
         </div>
    </div>
    <div class="job_right_sidebar">
      <div class="job_right_box m10">
        <div class="job_right_box_h1"><span class="job_right_box_span">ְλ�Ƽ�</span><a href="javascript:void(0)" onclick="exchange();" class="job_right_box_more png">��һ��</a></div>
        <ul class="job_right_box_list">
          <input type="hidden" value='2' id='exchangep'/>
                  </ul>
      </div>
      <div class="job_Subscribe m10">
        <div class="job_Subscribe_h1">����ְλ</div>
        <div class="job_Subscribe_p"> �������ɸѡ���������ڽ�������Ҫ���ְλ��Ϣ���͸���</div>
        <div class="job_Subscribe_dy"><a href="http://localhost/qyhr/index.php?m=subscribe" class="job_Subscribe_a">����ְλ</a></div>
      </div>
    </div>
  </div>
  <div class="yun_content">
    <div class="recomme_det">
      <h3 class="">��ҵ�Ƽ�</h3>
      <div class="co_recom">
        <ul>
                    </ul>
      </div>
    </div>
    <div class="recomme_det">
      <h3 class="">phpyun�˲�ϵͳΪ���ṩ�˲���������Ƹ��Ϣ</h3>
      <div class="co_recom co_recom_link">
			<dl>
				<dt>�ܱ���Ƹ��</dt>
				<dd>
                                						<a href="http://localhost/qyhr/job/index.php?c=search&provinceid=5">������Ƹ</a>
					                				</dd>
			</dl>
			<dl>
				<dt>��ƸƵ����</dt>
				<dd>
                                						<a href="http://localhost/qyhr/job/index.php?c=search&job1=35">�����/��������Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=44">����ҵ��Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=37">���/����/����/������Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=43">��ѯ/����/����/������Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=42">����/����/�߼�������Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=41">����/���ز���Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=40">���/�г�/ý��/������Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=39">����/��ҩ/ҽ��/������Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=36">����/�ͷ�/����֧����Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=38">����/Ӫ��/�ɹ�/������Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=836">����/��Դ��Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=837">��е/�豸/������Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=839">ͨ��/������Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=45">����Ա/����/������Ƹ</a>
										<a href="http://localhost/qyhr/job/index.php?c=search&job1=835">ó��/�ٻ���Ƹ</a>
					                				</dd>
			</dl>
			<dl style="border-bottom:0;">
				<dt>����������</dt>
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
     <span style="width:90px; font-weight:bold; padding:10px  0 0 0; display:block">ѡ�������</span>
     <div style="clear:both"></div>
      <div class="POp_up_r"></div>
    </div>
    <div style="clear:both"></div>
    <div class="Pop-up_logoin_sq" style="margin-top:10px;">
      <input id="click_comindex_sqjob" class="login_button2" style="margin-left:80px;"type="button" value="�ύ����" name="Submit">
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
          <dt>��������</dt>
          <dd>
            <ul>
                            <li><a 
                            href="http://localhost/qyhr/about/index.html"
                              title="��������">��������</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/service.html"
                              title="ע��Э��">ע��Э��</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/phpyun.html"
                              title="��������">��������</a></li>
                          </ul>
          <dd>
        </dl>
                <dl class="footer_list">
          <dt>֧����Ϣ</dt>
          <dd>
            <ul>
                            <li><a 
                            href="http://localhost/qyhr/about/yh.html"
                              title="�����ʻ�">�����ʻ�</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/pinpai.html"
                              title="Ʒ���ƹ�">Ʒ���ƹ�</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/charge.html"
                              title="�շѱ�׼">�շѱ�׼</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/indexzy.html"
                              title="��Ӫ��Դ">��Ӫ��Դ</a></li>
                          </ul>
          <dd>
        </dl>
                <dl class="footer_list">
          <dt>��վ��ɫ</dt>
          <dd>
            <ul>
                            <li><a 
                            href="index.php?m=redeem"
                              title="���ֶһ�">���ֶһ�</a></li>
                            <li><a 
                            href="index.php?m=subscribe"
                              title="���ķ���">���ķ���</a></li>
                          </ul>
          <dd>
        </dl>
                <dl class="footer_list">
          <dt>��ѯ����</dt>
          <dd>
            <ul>
                            <li><a 
                            href="http://localhost/qyhr/about/kf.html"
                              title="�ͷ�����">�ͷ�����</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/gg.html"
                              title="���Ͷ��">���Ͷ��</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/newuser.html"
                              title="����ָ��">����ָ��</a></li>
                          </ul>
          <dd>
        </dl>
                <dl class="footer_list">
          <dt>��ɫ����</dt>
          <dd>
            <ul>
                            <li><a 
                            href="http://localhost/qyhr/about/jinjia.html"
                              title="����ְλ">����ְλ</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/map.html"
                              title="��ͼ����">��ͼ����</a></li>
                            <li><a 
                            href="http://localhost/qyhr/about/new.html"
                              title="ְ��ָ��">ְ��ָ��</a></li>
                          </ul>
          <dd>
        </dl>
         </div>
       <div class="footer_right" style="text-align:left">
        <div class="footer_touch">��������</div>
        <div class="footer_tel">400-880-5523</div>
        
        <ul class="footer_last">
                  
          <li style="width:70px; float:left; margin-top:5px; text-align:left"> <a class="move_03" style="color: #ff0000"  target="_blank" href="http://localhost/qyhr/index.php?c=weixin" target="_blank">΢��</a> </li>
                  </ul>
      </div>
    </div>
    <div class="clear"></div>
    <div class="footer_bot">
      <div class="footer_bot_p">Copyright C 20092014 All Rights Reserved ��Ȩ���� �γ�������Դ������ICP��12049413��-3 </div>
      <div class="footer_bot_p">	��ַ:����ʡ���������԰B��10¥  �绰(Tel):400-880-5523  EMAIL:admin@admin.com</div>
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
<script>var integral_pricename='����';var weburl="http://localhost/qyhr"; </script>
</body>
</html> 
<!---��ǰ��¼--->
<link rel="stylesheet" href="http://localhost/qyhr/app/template/hy/style/tck_logoin.css" type="text/css">
<div style="display:none" id="onlogin">
  <div class="logoin_tck_left" style="margin-top: 25px;padding-left: 25px;">
    <div class="logoin_tck_text" > <i class="logoin_tck_text_icon"></i>
      <input type="text" id="login_username" placeholder="�������û���" tabindex="1" name="username" class="logoin_tck_text_t1">
    </div>
    <div class="logoin_tck_text" style="margin-top:20px;"> <i class="logoin_tck_text_icon logoin_tck_text_icon_p"></i>
      <input type="password" id="login_password" tabindex="2" name="password" placeholder="����������"class="logoin_tck_text_t1">
    </div>
    <div class="logoin_tck_text logoin_tck_text_yzm" style="margin-top:20px;"> <i class="logoin_tck_text_icon logoin_tck_text_icon_y"></i>
      <input id="login_authcode" type="text" tabindex="3"  maxlength="4" name="authcode" class="logoin_tck_text_t1" placeholder="��������֤��"  style="width:80px;">
    </div>
    <div class=" logoin_tck_text_yzm_r" style="margin-top: 20px;"> <img id="vcode_img" src="http://localhost/qyhr/app/include/authcode.inc.php" onclick="check_code()" style="margin-right:5px; margin-left:5px;cursor:pointer;">&nbsp;<a href="javascript:void(0);" onclick="check_code()">������?</a> </div>
    <div class="Pop-up_logoin_list">
      <div id="msg"></div>
    
    <input type="hidden" id="login_usertype" />
    <input id="loginsubmit" class="logoin_tck_bth_sub" type="button" name="loginsubmit" onclick="checkajaxlogin()" value="��¼" ></div>
  </div>
  <div class="logoin_tck_right" style="margin-top: 35px;padding-left: 20px;">
    <div class="logoin_tck_reg">��ûû���˺ţ�<a href="" id="onregister" class="Orange">����ע��</a></div>
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
		title :'���ٵ�¼', 
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
		layer.msg('��������д�û��������룬��֤�룡', 2, 8,function(){showlogin(usertype);});return false;
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
