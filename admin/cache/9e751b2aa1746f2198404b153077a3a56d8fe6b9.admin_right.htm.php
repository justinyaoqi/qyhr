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
<title>��̨����</title>
<style>
<!--
.mainright a,.maincontent a:visited{color:#F00; text-decoration:none;}
.mainright a:hover{color:#900; text-decoration:underline;}
.mainleft a,.mainleft a:visited{color:#06C; text-decoration:none;}
.mainleft a:hover{color:#00F; text-decoration:underline;}
-->
</style>
<script> 
/*�������е�js����*/
function killerrors() {return true;}
window.onerror = killerrors;
function logout(){
	if (confirm("��ȷ��Ҫ�˳����������"))
	top.location = 'index.php?c=logout';
	return false;
}
var integral_pricename='����';  
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
	<div class="sysinfoboxtop" id="sysinfoboxtop"><strong style="float:left;margin-left:10px;">��������</strong><span style="float:left;">(10����Զ��˳�)</span><span style="float:right;margin-right:10px;"><a href="#" onclick="javascript:document.getElementById('sysinfobox').style.display='none';">[�ر�]</a></span></div> 
</div>
<div style="height:455px;">
<div class="admin_index_center">
<div class="admin_message_left">
<div class="admin_message_left_cont">
<div class="admin_message_name"><span class="admin_message_up">��ã�</span><span class="admin_message_yun">��������Ա</span><a  href="javascript:void(0)" onclick="layer_logout('index.php?m=index&c=logout');" class="admin_message_zh">[�����ʻ�]</a></div>
<div class="admin_message_login">���ĵ�½�ʻ���<strong>admin</strong>
������ɫ��<strong>��������Ա</strong> �ϴε�¼ʱ�䣺2015-08-30 17:41:33</div>
<div class="admin_message_jy">
    <div>
             <p>ǿ�ҽ��齫 admin,install �ļ�������Ϊ�������ƣ�
                       û�и���Ĭ�ϵĹ���Ա���ƺ�����!<a href="index.php?m=admin_user&c=pass">�������޸ġ�</a></p>        </div>
	</div>
</div>
</div>
<div class="admin_message_right">
<div class="admin_message_left_cont">
<div class="admin_message_h1">��վ��Ϣ</div>
<div class="admin_message_list">
<a href="http://localhost/qyhr/admin/index.php?m=admin_company_job&state=4" class="">�����ְλ��<strong>0</strong></a>
<a href="http://localhost/qyhr/admin/index.php?m=admin_company&status=3" class="admin_message_bg2">�������ҵ��<strong>0</strong></a>
<a href="http://localhost/qyhr/admin/index.php?m=comcert&status=3" class="admin_message_bg3">�������ҵ��֤��<strong>0</strong></a>
<a href="http://localhost/qyhr/admin/index.php?m=admin_once&status=3" class="admin_message_bg4">�����΢��Ƹ��<strong>0</strong></a>
<a href="http://localhost/qyhr/admin/index.php?m=link&state=2" class="admin_message_bg5">��������ӣ�<strong>0</strong></a>    
<a href="http://localhost/qyhr/admin/index.php?m=company_order&order_state=3" class="admin_message_bg6">����������<strong>0</strong></a>
<a href="http://localhost/qyhr/admin/index.php?m=comproduct&status=3" class="admin_message_bg5">�������ҵ��Ʒ��<strong>0</strong></a>    
<a href="http://localhost/qyhr/admin/index.php?m=comnews&status=3" class="admin_message_bg6">�������ҵ���ţ�<strong>0</strong></a>
</div>
</div>
</div>
</div>
<div class="admin_index_center">
<div class="admin_index_Data">
<div class="admin_index_Data_bor">
<div class="admin_message_h1">һ������ͳ��</div>
<div class="admin_index_Data_cont" style=" position:relative">
<div class="admin_index_Data_cont_left" style="width:850px; float:left;height:300px;">
<div class="admin_index_fw" id="main22" style="width:800px;height:300px;">
<iframe name="right" id="tbrightMain" src="index.php?m=admin_right&c=getweb" frameborder="false" scrolling="auto" style="border:none;" width="850" height="300" allowtransparency="true"></iframe>
</div>
</div>
<div class="admin_index_date_list">
<ul>
<li><a href="javascript:clicktb('resumetj');" class="admin_index_date_a png">����ͳ��</a></li>
<li><a href="javascript:clicktb('jobtj');" class="admin_index_date_b png">ְλͳ��</a></li>
<li><a href="javascript:clicktb('comtj');" class="admin_index_date_c png">��ҵע��ͳ��</a></li>
<li><a href="javascript:clicktb('getweb');" class="admin_index_date_d png">����ע��ͳ��</a></li>
<li><a href="javascript:clicktb('newstj');" class="admin_index_date_e png">����ͳ��</a></li>
<li><a href="javascript:clicktb('adtj');" class="admin_index_date_f png">�����ͳ��</a></li>
<li><a href="javascript:clicktb('wzptj');" class="admin_index_date_g png">΢��Ƹͳ��</a></li>
<li><a href="javascript:clicktb('wjltj');" class="admin_index_date_h png">΢����ͳ��</a></li>
<li><a href="javascript:clicktb('payordertj');" class="admin_index_date_i png">��ֵͳ��</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="mainleft">
<div class="maininfo" style="height:180px">
    	<div class="mainboxtop"><h6>�����Ŷ�</h6></div>
        <div class="maincontent">
        <p>�����Ŷӣ�haowubai , ���� , Kstar , Marine , Mylgl , Neo , ��ǰ ��</p>
        <p>�ر��л������ , ������ , Фǿ , ���� , ��ң , ��Ȫ</p>
        <p>��ϵ�绰��400-880-5523</p>
		<p>�ٷ���վ��<a href="http://www.phpyun.com/" target="_blank">http://www.phpyun.com/</a> �ٷ���̳��<a href="http://bbs.phpyun.com/" target="_blank">http://bbs.phpyun.com/</a></p>
<p>PHPYun����汾�� 4.0 [<a href="http://www.phpyun.com">����֧�������</a>] ��ѯQQ�� 3367562</p>
        </div>
    </div>
</div>
<div class="mainright">
    <div class="maininfo" style="height:180px">
    	<div class="mainboxtop"><h6>ϵͳ��Ϣ</h6></div>
        <div class="maincontent">
        <p style="float:left;">PHPYun����汾�� 4.0 [ <div id="version_msg" style="float:left;">�������!</div>]</p>
		<p style="clear:both;">�����������Apache/2.4.9 (Win64) PHP/5.5.12</p>
        <p>���ÿռ�(������)��191926.39&nbsp;M</p>
		<p>MySQL �汾��5.6.17</p>
		<p>�û� - ��������SYSTEM - localhost</p>
        </div>
    </div>
  </div>
</div>
<input type="hidden" name="pytoken" id="pytoken" value="6dd985061a91">
<script>
function clicktb(name){$("#tbrightMain").attr("src","index.php?m=admin_right&c="+name);}
</script>
<script src="http://init.phpyun.com/site.php?site=YWJmOWZiMGNiMDE1NTI4YTc3ZjA1MTMxNDYwNGRhNjF8cGhweXVufHBocHl1bsjLssXPtc2zfHBocHl1bnxodHRwOi8vbG9jYWxob3N0L3F5aHJ8cGhweXVufGFkbWluQGFkbWluLmNvbXxwaHB5dW58NC4w">//�˴���ΪԶ�̻�ȡ������֪ͨ���벻Ҫɾ��</script>
</body>
</html><?php }} ?>
