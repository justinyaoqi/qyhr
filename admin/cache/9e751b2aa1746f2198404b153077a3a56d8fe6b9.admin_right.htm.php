<?php /*%%SmartyHeaderCode:2189955e2d0491187a5-10287960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e751b2aa1746f2198404b153077a3a56d8fe6b9' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_right.htm',
      1 => 1440861575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2189955e2d0491187a5-10287960',
  'variables' => 
  array (
    'config' => 0,
    'nav_user' => 0,
    'dirname' => 0,
    'mruser' => 0,
    'company_job' => 0,
    'company' => 0,
    'comcert' => 0,
    'once_job' => 0,
    'admin_link' => 0,
    'company_order' => 0,
    'comproduct' => 0,
    'comnews' => 0,
    'db_config' => 0,
    'soft' => 0,
    'kongjian' => 0,
    'banben' => 0,
    'yonghu' => 0,
    'server' => 0,
    'pytoken' => 0,
    'base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d049219ce1_96041052',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d049219ce1_96041052')) {function content_55e2d049219ce1_96041052($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="images/reset.css" rel="stylesheet" type="text/css" /> 
<script src="../js/jquery-1.8.0.min.js"></script>
<script src="js/admin_public.js" language="javascript"></script> 
<title>后台管理</title>
<style>
<!--
.mainright a,.maincontent a:visited{color:#F00; text-decoration:none;}
.mainright a:hover{color:#900; text-decoration:underline;}
.mainleft a,.mainleft a:visited{color:#06C; text-decoration:none;}
.mainleft a:hover{color:#00F; text-decoration:underline;}
-->
</style>
<script> 
/*屏蔽所有的js错误*/
function killerrors() {return true;}
window.onerror = killerrors;
function logout(){
	if (confirm("您确定要退出控制面板吗？"))
	top.location = 'index.php?c=logout';
	return false;
}
var integral_pricename='积分';  
</script>
<!--[if IE 6]>
<script src="./js/png.js"></script>
<script>
  DD_belatedPNG.fix('.png,.header .logo,.header .nav li a,.header .nav li.on,.left_menu h3 span.on');
</script>
<![endif]-->
</head>
<body style="font-size:12px; padding-bottom:0; " onLoad="version_msg();">
<div id="sysinfobox" class="sysinfobox" style="display:none;">
	<script>
    	setTimeout("document.getElementById('sysinfobox').style.display='none'",10000);
    </script>
	<div class="sysinfoboxtop" id="sysinfoboxtop"><strong style="float:left;margin-left:10px;">友情提醒</strong><span style="float:left;">(10秒后自动退出)</span><span style="float:right;margin-right:10px;"><a href="#" onclick="javascript:document.getElementById('sysinfobox').style.display='none';">[关闭]</a></span></div> 
</div>
<div style="height:455px;">
<div class="admin_index_center">
<div class="admin_message_left">
<div class="admin_message_left_cont">
<div class="admin_message_name"><span class="admin_message_up">你好！</span><span class="admin_message_yun">超级管理员</span><a  href="javascript:void(0)" onclick="layer_logout('index.php?m=index&c=logout');" class="admin_message_zh">[更换帐户]</a></div>
<div class="admin_message_login">您的登陆帐户，<strong>admin</strong>
所属角色：<strong>超级管理员</strong> 上次登录时间：2015-08-30 17:41:33</div>
<div class="admin_message_jy">
    <div>
             <p>强烈建议将 admin,install 文件夹名改为其它名称！
                       没有更改默认的管理员名称和密码!<a href="index.php?m=admin_user&c=pass">【马上修改】</a></p>        </div>
	</div>
</div>
</div>
<div class="admin_message_right">
<div class="admin_message_left_cont">
<div class="admin_message_h1">网站信息</div>
<div class="admin_message_list">
<a href="http://localhost/qyhr/admin/index.php?m=admin_company_job&state=4" class="">待审核职位：<strong>0</strong></a>
<a href="http://localhost/qyhr/admin/index.php?m=admin_company&status=3" class="admin_message_bg2">待审核企业：<strong>0</strong></a>
<a href="http://localhost/qyhr/admin/index.php?m=comcert&status=3" class="admin_message_bg3">待审核企业认证：<strong>0</strong></a>
<a href="http://localhost/qyhr/admin/index.php?m=admin_once&status=3" class="admin_message_bg4">待审核微招聘：<strong>0</strong></a>
<a href="http://localhost/qyhr/admin/index.php?m=link&state=2" class="admin_message_bg5">待审核链接：<strong>0</strong></a>    
<a href="http://localhost/qyhr/admin/index.php?m=company_order&order_state=3" class="admin_message_bg6">待处理订单：<strong>0</strong></a>
<a href="http://localhost/qyhr/admin/index.php?m=comproduct&status=3" class="admin_message_bg5">待审核企业产品：<strong>0</strong></a>    
<a href="http://localhost/qyhr/admin/index.php?m=comnews&status=3" class="admin_message_bg6">待审核企业新闻：<strong>0</strong></a>
</div>
</div>
</div>
</div>
<div class="admin_index_center">
<div class="admin_index_Data">
<div class="admin_index_Data_bor">
<div class="admin_message_h1">一月数据统计</div>
<div class="admin_index_Data_cont" style=" position:relative">
<div class="admin_index_Data_cont_left" style="width:850px; float:left;height:300px;">
<div class="admin_index_fw" id="main22" style="width:800px;height:300px;">
<iframe name="right" id="tbrightMain" src="index.php?m=admin_right&c=getweb" frameborder="false" scrolling="auto" style="border:none;" width="850" height="300" allowtransparency="true"></iframe>
</div>
</div>
<div class="admin_index_date_list">
<ul>
<li><a href="javascript:clicktb('resumetj');" class="admin_index_date_a png">简历统计</a></li>
<li><a href="javascript:clicktb('jobtj');" class="admin_index_date_b png">职位统计</a></li>
<li><a href="javascript:clicktb('comtj');" class="admin_index_date_c png">企业注册统计</a></li>
<li><a href="javascript:clicktb('getweb');" class="admin_index_date_d png">个人注册统计</a></li>
<li><a href="javascript:clicktb('newstj');" class="admin_index_date_e png">新闻统计</a></li>
<li><a href="javascript:clicktb('adtj');" class="admin_index_date_f png">广告点击统计</a></li>
<li><a href="javascript:clicktb('wzptj');" class="admin_index_date_g png">微招聘统计</a></li>
<li><a href="javascript:clicktb('wjltj');" class="admin_index_date_h png">微简历统计</a></li>
<li><a href="javascript:clicktb('payordertj');" class="admin_index_date_i png">充值统计</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="mainleft">
<div class="maininfo" style="height:180px">
    	<div class="mainboxtop"><h6>开发团队</h6></div>
        <div class="maincontent">
        <p>开发团队：haowubai , 浪浪 , Kstar , Marine , Mylgl , Neo , 阿前 等</p>
        <p>特别感谢：花菜 , 胡杨树 , 肖强 , 纪祥 , 逍遥 , 龙泉</p>
        <p>联系电话：400-880-5523</p>
		<p>官方网站：<a href="http://www.phpyun.com/" target="_blank">http://www.phpyun.com/</a> 官方论坛：<a href="http://bbs.phpyun.com/" target="_blank">http://bbs.phpyun.com/</a></p>
<p>PHPYun程序版本： 4.0 [<a href="http://www.phpyun.com">技术支持与服务</a>] 咨询QQ： 3367562</p>
        </div>
    </div>
</div>
<div class="mainright">
    <div class="maininfo" style="height:180px">
    	<div class="mainboxtop"><h6>系统信息</h6></div>
        <div class="maincontent">
        <p style="float:left;">PHPYun程序版本： 4.0 [ <div id="version_msg" style="float:left;">无须更新!</div>]</p>
		<p style="clear:both;">服务器软件：Apache/2.4.9 (Win64) PHP/5.5.12</p>
        <p>可用空间(磁盘区)：191926.39&nbsp;M</p>
		<p>MySQL 版本：5.6.17</p>
		<p>用户 - 服务器：SYSTEM - localhost</p>
        </div>
    </div>
  </div>
</div>
<input type="hidden" name="pytoken" id="pytoken" value="6dd985061a91">
<script>
function clicktb(name){$("#tbrightMain").attr("src","index.php?m=admin_right&c="+name);}
</script>
<script src="http://init.phpyun.com/site.php?site=YWJmOWZiMGNiMDE1NTI4YTc3ZjA1MTMxNDYwNGRhNjF8cGhweXVufHBocHl1bsjLssXPtc2zfHBocHl1bnxodHRwOi8vbG9jYWxob3N0L3F5aHJ8cGhweXVufGFkbWluQGFkbWluLmNvbXxwaHB5dW58NC4w">//此代码为远程获取补丁及通知，请不要删除</script>
</body>
</html><?php }} ?>
