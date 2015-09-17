<?php /*%%SmartyHeaderCode:342355e2d0330915d0-50645194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b338a775d5ce1614dc4fb1b4a64263ba4bd3f7fc' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_user_config.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '342355e2d0330915d0-50645194',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d036c7dfa1_63455664',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d036c7dfa1_63455664')) {function content_55e2d036c7dfa1_63455664($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
<div class="infoboxp_top infoboxp_topIjf">
    <span class="infoboxp_top_span">用户设置</span>
	<span class="infoboxp_top_span_sz infoboxp_top_span_sz_in "><a href="index.php?m=userconfig">个人设置</a></span>
    <span class="infoboxp_top_span_sz"><a href="index.php?m=userconfig&c=com">企业设置</a></span>
    <span class="infoboxp_top_span_sz"><a href="index.php?m=userconfig&c=avatar">会员头像</a></span>

</div>
<div class="main_tag">
<div class="tag_box">
<div class="">
<table width="100%" class="table_form">
	<tr class="admin_table_trbg">
		<th width="220">参数说明：</th>
		<td>参数值</td>
		<td width="160">变量</td>
	</tr>
   <tr>
	<th width="220">个人会员邮件激活：</th>
	<td>
		<input type="radio" name="user_status" value="1" id="user_status_0" >
		<label for="user_status_0">开启</label>
		<input type="radio" name="user_status" value="0" id="user_status_1" checked>
		<label for="user_status_1">关闭</label>&nbsp;&nbsp;<a href="javascript:jihuo();" class="admin_submit_jh">以前用户全部激活</a></td>
		<td width="160">user_status</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">强制身份认证：</th>
		<td>
		    <input type="radio" name="user_enforce_identitycert" value="1" id="RadioGroup1_0" >
		    <label>开启</label>
		    <input type="radio" name="user_enforce_identitycert" value="0" id="RadioGroup1_1" checked>
		    <label>关闭</label></td>
            <td width="160">user_enforce_identitycert</td>
	</tr>
    <tr>
		<th width="220">开启高级简历审核：</th>
		<td>
		    <input type="radio" name="user_height_resume" value="1" id="user_height_resume_1" >
		    <label for="user_height_resume_1">开启</label>
		    <input type="radio" name="user_height_resume" value="2" id="user_height_resume_2" checked>
		    <label for="user_height_resume_2">关闭</label></td>
            <td width="160">user_height_resume</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">开启微简历审核：</th>
		<td>
		    <input type="radio" name="user_wjl" value="0" id="user_wjl_0" >
		    <label for="user_wjl_0">开启</label>
		    <input type="radio" name="user_wjl" value="1" id="user_wjl_1" checked>
		    <label for="user_wjl_1">关闭</label></td>
            <td width="160">user_wjl</td>
	</tr>
    <tr>
		<th width="220">开启微简历联系方式查看：</th>
		<td>
		    <input type="radio" name="user_wjl_link" value="1" id="user_wjl_link_0" >
		    <label for="user_wjl_link_0">登录查看</label>
		    <input type="radio" name="user_wjl_link" value="0" id="user_wjl_link_1" checked>
		    <label for="user_wjl_link_1">公开</label></td>
            <td width="160">user_wjl_link</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">举报虚假企业：</th>
		<td>
		    <input type="radio" name="user_report" value="1" id="user_report_0" >
		    <label for="user_report_0">开启</label>
		    <input type="radio" name="user_report" value="0" id="user_report_1" checked>
		    <label for="user_report_1">关闭</label></td>
            <td width="160">user_report</td>
	</tr>
     <tr>
		<th width="220">个人身份证审核：</th>
		<td>
		    <input type="radio" name="user_idcard_status" value="1" id="user_idcard_status_0" >
		    <label for="user_idcard_status_0">开启</label>
		    <input type="radio" name="user_idcard_status" value="0" id="user_idcard_status_1" checked>
		    <label for="user_idcard_status_1">关闭</label></td>
             <td width="160">user_idcard_status</td>
	</tr>

	<tr>
		<th width="220">会员登录后才可查看企业联系信息：</th>
		<td>
			<input type="radio" name="com_login_link" value="1" id="RadioGroup1_0" checked>
			<label>开启</label>
			<input type="radio" name="com_login_link" value="0" id="RadioGroup1_1" >
			<label>关闭</label>
		</td>
		<td width="160">com_login_link</td>
	</tr>
	   <tr class="admin_table_trbg">
		<th width="220">拥有简历才可查看企业联系信息：</th>
		<td>
			<input type="radio" name="com_resume_link" value="1" id="RadioGroup1_0" checked>
			<label>开启</label>
			<input type="radio" name="com_resume_link" value="0" id="RadioGroup1_1" >
			<label>关闭</label>
		</td>
		<td width="160">com_resume_link</td>
	</tr>
	<tr>
    	<th width="220">求职者头像设置：</th>
		<td>
          <input type="radio" name="sy_usertype_1" value="0" id="RadioGroup10_12" checked>
          <label for="RadioGroup10_12">默认显示</label>&nbsp;
          <input type="radio" name="sy_usertype_1" value="1" id="RadioGroup10_13" >
          <label for="RadioGroup10_13">下载后显示</label><br>
          <font color="gray" style="display:none">下载后显示：只有下载简历后的公司才可以看个人简历头像</font>
        </td>
        <td width="160">sy_usertype_1</td>
    </tr>

	<tr>
		<th width="220">个人搜索器数量：</th>
		<td>
            <input class="input-text tips_class" type="text" name="user_finder" id="user_finder" value="2" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/>
            个 <font color="gray" style="display:none"> 数量太多，发送订阅邮件会很慢，为空则不限</font>
        </td>
        <td width="160">user_finder</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="220">个人会员发布简历数：</th>
		<td>
            <input class="input-text tips_class" type="text" name="user_number" id="user_number" value="5" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/>
            份 <font color="gray" style="display:none"> 为空则不限</font>
        </td>
        <td width="160">user_number</td>
	</tr>

	<tr  class="admin_table_trbg">
		<th width="220">上传简历照片大小：</th>
		<td><input class="input-text tips_class" type="text" name="user_pickb" id="user_pickb" value="2048" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>KB <font color="gray" style="display:none">说明：1024KB=1M</font></td>
        <td width="160">user_pickb</td>
	</tr>
	<tr>
		<th width="220">个人头像裁剪宽度设置：</th>
		<td><input class="input-text tips_class" type="text" name="user_imgwidth" id="user_imgwidth" value="80" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>PX <font color="gray" style="display:none">比例请按照您网站显示头像规格设定</font></td>
        <td width="160">user_imgwidth</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">个人头像裁剪高度设置：</th>
		<td><input class="input-text tips_class" type="text" name="user_imgheight" id="user_imgheight" value="100" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>PX <font color="gray" style="display:none">比例请按照您网站显示头像规格设定</font></td>
        <td width="160">user_imgheight</td>
	</tr> 
	<tr>
		<td colspan="3" align="center">
        <input type="hidden" name="pytoken" id='pytoken' value="6dd985061a91">
        <input class="admin_submit4" id="config" type="button" name="config" value="提交">&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="重置"/></td>
	</tr>
</table>
</div>


</div>
</div>
<script>
$(function(){
	$("#config").click(function(){
		$.post("index.php?m=userconfig&c=save",{
			config : $("#config").val(),
			user_number : $("#user_number").val(),
			user_finder : $("#user_finder").val(),
			user_pickb : $("#user_pickb").val(),
			user_imgwidth : $("#user_imgwidth").val(),
			user_imgheight : $("#user_imgheight").val(), 
			user_status : $("input[name=user_status]:checked").val(),
			user_enforce_identitycert : $("input[name=user_enforce_identitycert]:checked").val(),
			user_height_resume : $("input[name=user_height_resume]:checked").val(),
			user_wjl : $("input[name=user_wjl]:checked").val(),
			user_wjl_link : $("input[name=user_wjl_link]:checked").val(),
			user_report : $("input[name=user_report]:checked").val(),
			user_idcard_status : $("input[name=user_idcard_status]:checked").val(),
			sy_usertype_1 : $("input[name=sy_usertype_1]:checked").val(),
			com_login_link : $("input[name=com_login_link]:checked").val(),
			com_resume_link : $("input[name=com_resume_link]:checked").val(),
			pytoken : $("#pytoken").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
function jihuo(){
	var pytoken=$("#pytoken").val();
	$.get('index.php?m=userconfig&c=jihuo&pytoken='+pytoken,function(data){
		if(data){
			parent.layer.msg('激活成功！', 2, 9);
		}else{
			parent.layer.msg('激活失败！', 2, 8);
		}
	})
}
</script></div>
</body>
</html><?php }} ?>
