<?php /*%%SmartyHeaderCode:3032055e2d01a1e1073-45813920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '287c0a9ff2ac69a9842c06fa9335bd8d7f724120' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_cron_list.htm',
      1 => 1440861575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3032055e2d01a1e1073-45813920',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d03c08ed68_86464180',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d03c08ed68_86464180')) {function content_55e2d03c08ed68_86464180($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
   <span class="admin_title_span">计划任务</span>
  <a href="index.php?m=cron&c=add"  class="admin_infoboxp_tj">添加计划任务</a>
</div>
<div class="table-list">
  <div class="admin_table_border">
    <form action="" name="myform" method="get">
    <input type="hidden" name="pytoken" id='pytoken'  value="6dd985061a91">
      <table width="100%">
        <thead>
          <tr class="admin_table_top">
            <th align="left">任务名称</th>
            <th align="left">任务路径</th>
            <th align="left">执行类型</th>
            <th align="left">是否执行</th>
            <th align="left">上次执行时间</th>
            <th align="left">下次执行时间</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
                      </tbody>
      </table>
    </form>
  </div>
</div>
</body>
</html><?php }} ?>
