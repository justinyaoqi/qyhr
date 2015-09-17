<?php /*%%SmartyHeaderCode:77355e2d03d96cf08-63922318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd79925969ccdec514f871ebe8bb4242f8789b126' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_style_list.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77355e2d03d96cf08-63922318',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d0445edfc1_46709421',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d0445edfc1_46709421')) {function content_55e2d0445edfc1_46709421($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js"></script>
<script src="http://localhost/qyhr/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script> 
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
<span class="admin_title_span">模板风格列表</span>
</div>
<div class="table-list">
<div style="float:left;width:240px;text-align:center;padding:15px;line-height:180%;border:1px solid #ccc;background:#fff;margin-right:10px;">
	  <img width="225" height="136" border="1" style="border: #CCCCCC;" alt="蓝色模板" src="../app/template/default/images/preview.jpg">
	  <br>
	 <strong>蓝色模板</strong>     <br>
     风格作者：PHPYUN-花菜
	 <br>
	风格目录名称：default
      <br>
      <input name="" value="风格信息修改" type="button" class="admin_submit6" onClick="location.href='index.php?m=admin_style&c=modify&dir=default'" >
              <input name="" value="使用该风格" type="button" onClick="layer_del('确定更换模版分格吗？更换后请重新生成页面。','index.php?m=admin_style&c=check_style&dir=default');" class="admin_submit6"/>
       
      	 </div>
     <div style="float:left;width:240px;text-align:center;padding:15px;line-height:180%;border:1px solid #ccc;background:#fff;margin-right:10px;">
	  <img width="225" height="136" border="1" style="border: #CCCCCC;" alt="6-行业站模板" src="../app/template/hy/images/preview.jpg">
	  <br>
	 <strong>6-行业站模板</strong><font color="#FF0000">【当前使用风格】</font>     <br>
     风格作者：PHPYUN-花菜
	 <br>
	风格目录名称：hy
      <br>
      <input name="" value="风格信息修改" type="button" class="admin_submit6" onClick="location.href='index.php?m=admin_style&c=modify&dir=hy'" >
      	 </div>
      
</div>
</div>
</body>
</html><?php }} ?>
