<?php /*%%SmartyHeaderCode:1979255e2d03023d3d8-33366079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8c4617f5225fa2fa9c1bbb3b40d0db33e79da73' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_email_config.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1979255e2d03023d3d8-33366079',
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'emailconfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d0302c3d43_98737609',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d0302c3d43_98737609')) {function content_55e2d0302c3d43_98737609($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js"></script>
<script src="http://localhost/qyhr/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="main_tag">
<div class="admin_h1_bg"> 
<span class="infoboxp_top_span infoboxp_top_wz">�ʼ�����</span>
<ul>
	<li class="on"><a href="index.php?m=emailconfig" style="color:#FFF">�ʼ�����</a></li>
    <li><a href="index.php?m=emailconfig&c=tpl">ģ������</a></li> 
</ul>
</div>
<div class="tag_box">
<div> 
<input type="hidden" name="pytoken" id='pytoken' value="6dd985061a91"> 

<table width="100%" class="table_form">
    <tr class="admin_table_trbg">
          <th width="160">����˵����</th>
          <td>����ֵ</td>
          <td width="160">����</td>
    </tr>
	<tr>
		<th width="160" style="width:160px;">�ʼ����ͷ�ʽ��</th>
		<td>
              <input type="radio" name="sy_email_online" value="1" id="sy_email_online_0" >
              <label for="sy_email_online_0">SMTP�����������ʼ�</label>
              <input type="radio" name="sy_email_online" value="2" id="sy_email_online_1" >
              <label for="sy_email_online_1">PHP����SMTP�����ʼ�</label>
            </td>
            <td width="160">sy_email_online</td>
	</tr>
	<tr class="email admin_table_trbg">
		<th width="160">SMTP��������</th>
		<td><input class="input-text tips_class" type="text" name="sy_smtpserver" id="sy_smtpserver" value="" size="30" maxlength="255"/><font color="gray" style="display:none">�磺smtp.163.com</font></td>
        <td width="160">sy_smtpserver</td>
	</tr>
	<tr class="email">
		<th width="160">SMTP���������û����䣺</th>
		<td><input class="input-text tips_class" type="text" name="sy_smtpemail" id="sy_smtpemail" value="" size="30" maxlength="255"/><font color="gray" style="display:none">�磺phpyun@163.com</font></td>
        <td width="160">sy_smtpemail</td>
	</tr>
	<tr class="email admin_table_trbg">
		<th width="160">�û��ʺţ�</th>
		<td><input class="input-text tips_class" type="text" name="sy_smtpuser" id="sy_smtpuser" value="" size="30" maxlength="255"/><font color="gray" style="display:none">�磺phpyun</font></td>
        <td width="160">sy_smtpuser</td>
	</tr>
	<tr class="email">
		<th width="160">�û����룺</th>
		<td><input class="input-text tips_class" type="password" name="sy_smtppass" id="sy_smtppass" value="" size="30" maxlength="255"/></td>
        <td width="160">sy_smtppass</td>
	</tr>
	<tr class="email admin_table_trbg">
		<th width="160">SMTP�������˿�: </th>
		<td><input class="input-text tips_class" type="text" name="sy_smtpserverport" id="sy_smtpserverport" value="25" size="30" maxlength="255"/><font color="gray" style="display:none">�磺25</font></td>
        <td width="160">sy_smtpserverport</td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input class="admin_submit4" id="mconfig" type="button" name="config" value="�ύ" />&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="����" />&nbsp;&nbsp;<input class="admin_submit4"   type="button" onclick="prompt()"  value="����" /></td>
	</tr>
</table> 
</div>
</div>
</div>
<input type="hidden" id="emailconfig" value="1">
<script>
layer.use('extend/layer.ext.js')
function prompt(){
	var emailconfig=$("#emailconfig").val();
	if(emailconfig==1){
		parent.layer.msg('���ȱ����������ã�', 2, 8);return false;
	}
	layer.prompt({height:'20px',title: '��д��������',top:'50px'}, function(value){ 
		if(value){
			var myreg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((.[a-zA-Z0-9_-]{2,3}){1,2})$/;
			var pytoken=$("#pytoken").val();
			if(!myreg.test(value)){
				parent.layer.msg('�����ʽ����ȷ�����������룡', 2, 8);return false;
			}else{ 
				parent.layer.load('�����С�',0);
				$.post("index.php?m=emailconfig&c=ceshi",{ceshi_email:value,pytoken:pytoken},function(data){
					parent.layer.closeAll();
					var data=eval('('+data+')');   
					parent.layer.msg(data.msg, 2, Number(data.type),function(){location.reload();});return false; 
				}); 
			}
		}else{
			parent.layer.msg('���������䣡',2,8);return false; 
		} 
	})
}
$(function(){  
	if("0"=="2"){
		$(".email").hide();
	}
	$("input[name=sy_email_online]").click(function(){
		var value=$(this).val();
		if(value==2){
			$(".email").hide();
		}else{
			$(".email").show();
		}
	})
	$("#mconfig").click(function(){
		$.post("index.php?m=emailconfig&c=save",{
			config : $("#mconfig").val(),
			sy_email_online : $("input[name=sy_email_online]:checked").val(),
			sy_smtpemail : $("#sy_smtpemail").val(),
			sy_smtpuser : $("#sy_smtpuser").val(),
			sy_smtpserver : $("#sy_smtpserver").val(),
			sy_smtppass : $("#sy_smtppass").val(),
			pytoken : $("#pytoken").val(),
			sy_smtpserverport : $("#sy_smtpserverport").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
})

</script>
</div>
</body>
</html><?php }} ?>
