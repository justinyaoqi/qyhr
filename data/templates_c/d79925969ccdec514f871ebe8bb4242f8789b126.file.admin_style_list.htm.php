<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:04:10
         compiled from "D:\wamp\www\qyhr\app\template\admin\admin_style_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:1579655f968caefe732-97704764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1579655f968caefe732-97704764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'list' => 0,
    'v' => 0,
    'sy_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f968cb07f770_78667098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f968cb07f770_78667098')) {function content_55f968cb07f770_78667098($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layer/layer.min.js" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js" language="javascript"><?php echo '</script'; ?>
> 
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
<span class="admin_title_span">模板风格列表</span>
</div>
<div class="table-list">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<div style="float:left;width:240px;text-align:center;padding:15px;line-height:180%;border:1px solid #ccc;background:#fff;margin-right:10px;">
	  <img width="225" height="136" border="1" style="border: #CCCCCC;" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
">
	  <br>
	 <strong><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</strong><?php if ($_smarty_tpl->tpl_vars['sy_style']->value==$_smarty_tpl->tpl_vars['v']->value['dir']) {?><font color="#FF0000">【当前使用风格】</font><?php }?>
     <br>
     风格作者：<?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>

	 <br>
	风格目录名称：<?php echo $_smarty_tpl->tpl_vars['v']->value['dir'];?>

      <br>
      <input name="" value="风格信息修改" type="button" class="admin_submit6" onClick="location.href='index.php?m=admin_style&c=modify&dir=<?php echo $_smarty_tpl->tpl_vars['v']->value['dir'];?>
'" >
      <?php if ($_smarty_tpl->tpl_vars['sy_style']->value!=$_smarty_tpl->tpl_vars['v']->value['dir']) {?>
        <input name="" value="使用该风格" type="button" onClick="layer_del('确定更换模版分格吗？更换后请重新生成页面。','index.php?m=admin_style&c=check_style&dir=<?php echo $_smarty_tpl->tpl_vars['v']->value['dir'];?>
');" class="admin_submit6"/>
       
      <?php }?>
	 </div>
     <?php } ?> 
</div>
</div>
</body>
</html><?php }} ?>
