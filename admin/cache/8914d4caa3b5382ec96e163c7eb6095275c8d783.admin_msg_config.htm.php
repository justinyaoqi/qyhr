<?php /*%%SmartyHeaderCode:3156155e2d030aa15e4-04742832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8914d4caa3b5382ec96e163c7eb6095275c8d783' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_msg_config.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3156155e2d030aa15e4-04742832',
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d030afaab3_33481777',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d030afaab3_33481777')) {function content_55e2d030afaab3_33481777($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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

<div class="admin_Prompt">
<div class="admin_Prompt_span"> 提示：请先注册帐户 短信内容支持长短信，最多500个字，65个字按一条短信计费。 </div>
<div class="admin_Prompt_close"></div>
</div>


<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="main_tag">
<div class="admin_h1_bg"> 
<span class="infoboxp_top_span infoboxp_top_wz">短信设置</span>
    <ul>
        <li class="on"><a href="index.php?m=msgconfig" style="color:#FFF">短信设置</a></li>
        <li><a href="index.php?m=msgconfig&c=tpl">模板设置</a></li>
    </ul>
 </div>
<div class="tag_box">
 <div>
    <form action="" method="post">
    <table width="100%" class="table_form">
         <tr>
            <th width="160">参数说明：</th>
            <td>参数值</td>
            <td width="160">变量</td>
         </tr>

        <tr class="admin_table_trbg">
            <th width="160">帐户：</th>
            <td><input class="input-text tips_class" type="text" name="sy_msguser" id="sy_msguser" value="" size="30" maxlength="255" /><font color="gray" style="display:none">如：shyflc</font></td>
            <td width="160">sy_msguser</td>
        </tr>
 		<tr>
            <th width="160">密码：</th>
            <td><input class="input-text tips_class" type="text" name="sy_msgpw" id="sy_msgpw" value="" size="30" maxlength="255"/><font color="gray" style="display:none">如：123456</font></td>
            <td width="160">sy_msgpw</td>
        </tr>
        <tr class="admin_table_trbg">
            <th width="160">KEY：</th>
            <td><input class="input-text tips_class" type="text" name="sy_msgkey" id="sy_msgkey" value="" size="50" maxlength="255"/><font color="gray" style="display:none">如：c9ed1cc682defeef35537330adc9ad85</font></td>
             <td width="160">sy_msgkey</td>
        </tr>
 		<tr>
            <th width="160">短信兑换比例：</th>
            <td><input class="input-text " type="text" name="integral_msg_proportion" id="integral_msg_proportion" value="15" size="30" maxlength="255"/>条/元</td>
            <td width="160">integral_msg_proportion</td>
        </tr>
        <tr class="admin_table_trbg">
            <th width="160">购买短信：</th>
            <td><a href="http://msg.phpyun.com/" target="_blank" style=" color:#CC3300; text-decoration:underline; "> 购买短信地址</a></td>
            <td width="160">&nbsp;</td>
         </tr>
  		 <tr>
            <td colspan="3" align="center"><input class="admin_submit4" id="config" type="button" name="msgconfig" value="提交" />&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>
    <input type="hidden" id="pytoken" name="pytoken" value="6dd985061a91">
    </form>

</div>

</div>
</div>
<script>
$(function(){
	$("#config").click(function(){
		$.post("index.php?m=msgconfig&c=save",{
			config : $("#config").val(),
			sy_msguser : $("#sy_msguser").val(),
			sy_msgkey :$("#sy_msgkey").val(),
			pytoken : $("#pytoken").val(),
			sy_msgpw : $("#sy_msgpw").val(),
			integral_msg_proportion : $("#integral_msg_proportion").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
</script>
</div>
</body>
</html><?php }} ?>
