<?php /*%%SmartyHeaderCode:2142055e2d035aa9f74-39424267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52567aa27630cf03b83e502c6b636c09ac1a8915' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_regset.htm',
      1 => 1440861575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2142055e2d035aa9f74-39424267',
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d035bdfb68_48142145',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d035bdfb68_48142145')) {function content_55e2d035bdfb68_48142145($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />  
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.8.0.min.js"></script>
<script src="../js/layer/layer.min.js" language="javascript"></script> 
<script src="js/admin_public.js" type="text/javascript"></script> 
<title>后台管理</title>
</head>
<body class="body_ifm">

<div class="infoboxp" style="position:relative;">
<div class="infoboxp_top_bg"></div>

<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute; z-index:10000"></div>

<div class="main_tag" >
<div class="admin_h1_bg"> 
<span class="infoboxp_top_span infoboxp_top_wz">注册设置</span>

</div>
<div class="tag_box">

<div class=""> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
		<tr>
		<th width="160">快速注册：</th>
		<td>
		    <input type="radio" name="reg_fast" value="0" id="reg_fast_0" checked>
		    <label for="fastreg_0">关闭</label>&nbsp;&nbsp;
		    <input type="radio" name="reg_fast" value="1" id="reg_fast_1" >
		    <label for="reg_fast_1">开启</label>&nbsp;&nbsp;
		  </td>
          <td width="160">reg_fast</td>
		</tr>
		<tr  class="admin_table_trbg">
		<th width="160">密码确认：</th>
		<td>
		    <input type="radio" name="reg_passconfirm" value="0" id="reg_passconfirm_0" >
		    <label for="reg_passconfirm_0">关闭</label>&nbsp;&nbsp;
		    <input type="radio" name="reg_passconfirm" value="1" id="reg_passconfirm_1" checked>
		    <label for="reg_passconfirm_1">开启</label>&nbsp;&nbsp;
		  </td>
          <td width="160">reg_passconfirm</td>
		</tr>
		<tr>
		<th width="160">个人姓名：</th>
		<td>
		    <input type="radio" name="reg_username" value="0" id="reg_username_0" checked>
		    <label for="reg_username_0">关闭</label>&nbsp;&nbsp;
		    <input type="radio" name="reg_username" value="1" id="reg_username_1" >
		    <label for="reg_username_1">开启</label>&nbsp;&nbsp;
		  </td>
          <td width="160">reg_username</td>
		</tr>
		<tr  class="admin_table_trbg">
		<th width="160">个人邮箱：</th>
		<td>
		    <input type="radio" name="reg_useremail" value="0" id="reg_useremail_0" checked>
		    <label for="reg_useremail_0">关闭</label>&nbsp;&nbsp;
		    <input type="radio" name="reg_useremail" value="1" id="reg_useremail_1" >
		    <label for="reg_useremail_1">开启</label>&nbsp;&nbsp;
		  </td>
          <td width="160">reg_useremail</td>
		</tr>

		<tr>
		<th width="160">个人手机：</th>
		<td>
		    <input type="radio" name="reg_usertel" value="0" id="reg_usertel_0" checked>
		    <label for="reg_usertel_0">关闭</label>&nbsp;&nbsp;
		    <input type="radio" name="reg_usertel" value="1" id="reg_usertel_1" >
		    <label for="reg_usertel_1">开启</label>&nbsp;&nbsp;
		  </td>
          <td width="160">reg_usertel</td>
		</tr>
		<tr class="admin_table_trbg">
		<th width="160">企业邮箱：</th>
		<td>
		    <input type="radio" name="reg_comemail" value="0" id="reg_comemail_0" checked>
		    <label for="reg_comemail_0">关闭</label>&nbsp;&nbsp;
		    <input type="radio" name="reg_comemail" value="1" id="reg_comemail_1" >
		    <label for="reg_comemail_1">开启</label>&nbsp;&nbsp;
		  </td>
          <td width="160">reg_comemail</td>
		</tr>

		<tr>
		<th width="160">企业联系人：</th>
		<td>
		    <input type="radio" name="reg_comlink" value="0" id="reg_comlink_0" checked>
		    <label for="reg_comlink_0">关闭</label>&nbsp;&nbsp;
		    <input type="radio" name="reg_comlink" value="1" id="reg_comlink_1" >
		    <label for="reg_comlink_1">开启</label>&nbsp;&nbsp;
		  </td>
          <td width="160">reg_comlink</td>
		</tr>
		<tr  class="admin_table_trbg">
		<th width="160">企业联系人手机：</th>
		<td>
		    <input type="radio" name="reg_comtel" value="0" id="reg_comtel_0" checked>
		    <label for="reg_comtel_0">关闭</label>&nbsp;&nbsp;
		    <input type="radio" name="reg_comtel" value="1" id="reg_comtel_1" >
		    <label for="reg_comtel_1">开启</label>&nbsp;&nbsp;
		  </td>
          <td width="160">reg_comtel</td>
		</tr>
		<tr>
		<th width="160">企业名称：</th>
		<td>
		    <input type="radio" name="reg_comname" value="0" id="reg_comname_0" checked>
		    <label for="reg_comname_0">关闭</label>&nbsp;&nbsp;
		    <input type="radio" name="reg_comname" value="1" id="reg_comname_1" >
		    <label for="reg_comname_1">开启</label>&nbsp;&nbsp;
		  </td>
          <td width="160">reg_comname</td>
		</tr>
		<tr class="admin_table_trbg">
		<th width="160">企业地址：</th>
		<td>
		    <input type="radio" name="reg_comaddress" value="0" id="reg_comaddress_0" checked>
		    <label for="reg_comaddress_0">关闭</label>&nbsp;&nbsp;
		    <input type="radio" name="reg_comaddress" value="1" id="reg_comaddress_1" >
		    <label for="reg_comaddress_1">开启</label>&nbsp;&nbsp;
		  </td>
          <td width="160">reg_comaddress</td>
		</tr>
        <tr >
            <th width="160">限制注册用户名：</th>
            <td><textarea name="sy_regname" id="sy_regname" rows="3" cols="50" class="text tips_class">admin,zhongguo</textarea>
            <font color="gray" style="display:none">多个请用,(半角逗号)隔开。</font></td>
            <td width="160">sy_regname</td>
        </tr>
	<tr class="admin_table_trbg">
		<th width="160">邮件默认后缀：</th>
        <td><textarea name="sy_def_email" id="sy_def_email" rows="3" cols="50" class="text tips_class">@qq.com|@163.com|@126.com|@gmail.com|@hotmail.com|@sina.com|@sina.com.cn|@sina.cn|@sohu.com|@139.com|@yahoo.com|@aliyun.com</textarea>
        <font color="gray" style="display:none">多个用|(竖线)隔开,例：@qq.com|@163.com</font>
        </td>
        <td width="160">sy_def_email</td>
	</tr>
      
        <tr>
            <td colspan="3" align="center">
            <input class="admin_submit4" id="regconfig" type="button" name="mapconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>  
		<input type="hidden" name="pytoken" id='pytoken' value="6dd985061a91">
</div>
</div>
</div>
<script> 


$(function(){  
	
	
	
	$("#regconfig").click(function(){
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#regconfig").val(),
			sy_regname : $("#sy_regname").val(),
			sy_def_email : $("#sy_def_email").val(),
			reg_fast : $("input[name=reg_fast]:checked").val(),
			reg_passconfirm : $("input[name=reg_passconfirm]:checked").val(),
			reg_username : $("input[name=reg_username]:checked").val(),
			reg_useremail : $("input[name=reg_useremail]:checked").val(),
			reg_usertel : $("input[name=reg_usertel]:checked").val(),
			reg_comemail : $("input[name=reg_comemail]:checked").val(),
			reg_comlink : $("input[name=reg_comlink]:checked").val(),
			reg_comtel : $("input[name=reg_comtel]:checked").val(),
			reg_comname : $("input[name=reg_comname]:checked").val(),
			reg_comaddress : $("input[name=reg_comaddress]:checked").val(),
			pytoken : $("#pytoken").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	
});
</script>
</div>
</body>
</html><?php }} ?>
