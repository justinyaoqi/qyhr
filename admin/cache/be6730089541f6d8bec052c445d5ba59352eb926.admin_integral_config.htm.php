<?php /*%%SmartyHeaderCode:446355e2d033be47b4-39228574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be6730089541f6d8bec052c445d5ba59352eb926' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_integral_config.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '446355e2d033be47b4-39228574',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d0362f97c7_98303170',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d0362f97c7_98303170')) {function content_55e2d0362f97c7_98303170($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<div class="admin_h1_bg infoboxp_topIjf">
    <span class="infoboxp_top_span">��������</span>
	<span class="infoboxp_top_span_sz infoboxp_top_span_sz_in "><a href="index.php?m=integral">��������</a></span>
    <span class="infoboxp_top_span_sz"><a href="index.php?m=integral&c=user">���˻���</a></span>
	<span class="infoboxp_top_span_sz"><a href="index.php?m=integral&c=com">��ҵ����</a></span>
</div>
<div class="main_tag">
<div class="tag_box">
<div>
<table width="100%" class="table_form">
  <tr class="admin_table_trbg">
          <th width="220">����˵����</th>
          <td>����ֵ</td>
          <td width="280">����</td>
    </tr>
        <tr>
		<th width="220">���ִ���ʣ�</th>
		<td><input class="input-text tips_class" type="text" name="integral_pricename" id="integral_pricename" value="����" size="20" maxlength="255"/> <font color="gray" style="display:none">Ĭ��Ϊ���֣��������</font></td>
         <td width="280">integral_pricename</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">���ֵ�λ��</th>
		<td><input class="input-text tips_class" type="text" name="integral_priceunit" id="integral_priceunit" value="��" size="20" maxlength="255"/> <font color="gray" style="display:none">Ĭ��Ϊ�㣬��������λ</font></td>
        <td width="280">integral_priceunit</td>
	</tr>
    <tr>
		<th width="220">���ֶһ�������</th>
		<td><input class="input-text tips_class" type="text" name="integral_proportion" id="integral_proportion" value="20" size="20" maxlength="255"/>�� <font color="gray" style="display:none">����1Ԫ=30�����</font></td>
        <td width="280">integral_proportion</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">��Աע�᣺</th>
		<td>
        <select id="integral_reg_type">
        <option value="1" selected>��</option>
        </select>
         <input class="input-text" type="text" name="integral_reg" id="integral_reg" value="10" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>���� </td>
        <td width="280">integral_reg_type / integral_reg</td>
	</tr>
    <tr>
	<th width="220">ÿ���һ�ε�¼��</th>
		<td>
        <select id="integral_login_type">
        <option value="1" selected>��</option>
        <option value="2" >��</option>
        </select>
         <input class="input-text" type="text" name="integral_login" id="integral_login" value="1" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>���� </td>
        <td width="280">integral_login_type / integral_login</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">���ƻ������ϣ�</th>
		<td>
        <select id="integral_userinfo_type">
        <option value="1" selected>��</option>
        <option value="2" >��</option>
        </select>
         <input class="input-text" type="text" name="integral_userinfo" id="integral_userinfo" value="10" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>���� </td>
        <td width="280">integral_userinfo_type / integral_userinfo</td>
	</tr>  
    <tr>
	<th width="220">������֤��</th>
		<td>
        <select id="integral_emailcert_type">
        <option value="1" selected>��</option>
        <option value="2" >��</option>
        </select>
         <input class="input-text" type="text" name="integral_emailcert" id="integral_emailcert" value="5" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>���� </td>
        <td width="280">integral_emailcert_type / integral_emailcert</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">�ֻ���֤��</th>
		<td>
        <select id="integral_mobliecert_type">
        <option value="1" selected>��</option>
        <option value="2" >��</option>
        </select>
         <input class="input-text" type="text" name="integral_mobliecert" id="integral_mobliecert" value="5" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>���� </td>
        <td width="280">integral_mobliecert_type / integral_mobliecert</td>
	</tr>
    <tr>
	<th width="220">�ϴ�ͷ��</th>
		<td>
        <select id="integral_avatar_type">
        <option value="1" selected>��</option>
        <option value="2" >��</option>
        </select>
         <input class="input-text" type="text" name="integral_avatar" id="integral_avatar" value="5" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>���� </td>
        <td width="280">integral_avatar_type / integral_avatar</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">�������⣺</th>
		<td>
        <select id="integral_question_type">
        <option value="1" selected>��</option>
        <option value="2" >��</option>
        </select>
         <input class="input-text" type="text" name="integral_question" id="integral_question" value="15" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>���� </td>
        <td width="280">integral_question_type / integral_question</td>
	</tr>
    <tr>
	<th width="220">�ش����⣺</th>
		<td>
        <select id="integral_answer_type">
        <option value="1" selected>��</option>
        <option value="2" >��</option>
        </select>
         <input class="input-text" type="text" name="integral_answer" id="integral_answer" value="2" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>���� </td>
        <td width="280">integral_answer_type / integral_answer</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">���ۻش�</th>
		<td>
        <select id="integral_answerpl_type">
        <option value="1" selected>��</option>
        <option value="2" >��</option>
        </select>
         <input class="input-text" type="text" name="integral_answerpl" id="integral_answerpl" value="10" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>���� </td>
        <td width="280">integral_answerpl_type / integral_answerpl</td>
	</tr>
    <tr>
	<th width="220">����Ȧ���ԣ�</th>
		<td>
        <select id="integral_friend_msg_type">
        <option value="1" selected>��</option>
        <option value="2" >��</option>
        </select>
         <input class="input-text" type="text" name="integral_friend_msg" id="integral_friend_msg" value="1" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>���� </td>
        <td width="280">integral_friend_msg_type / integral_friend_msg</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">����Ȧ�ظ���</th>
		<td>
        <select id="integral_friend_reply_type">
        <option value="1" selected>��</option>
        <option value="2" >��</option>
        </select>
         <input class="input-text" type="text" name="integral_friend_reply" id="integral_friend_reply" value="1" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>���� </td>
        <td width="280">integral_friend_reply_type / integral_friend_reply</td>
	</tr>
    <tr>
	<th width="220">����ע�᣺</th>
		<td>
        <select id="integral_invite_reg_type">
        <option value="1" selected>��</option>
        <option value="2" >��</option>
        </select>
         <input class="input-text" type="text" name="integral_invite_reg" id="integral_invite_reg" value="100" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>���� </td>
        <td width="280">integral_invite_reg_type / integral_invite_reg</td>
	</tr>
    <tr class="admin_table_trbg">
		<td colspan="3" align="center">
        <input class="admin_submit4" id="integral" type="button" name="config" value="�ύ" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="����" /></td>
	</tr>
</table>
</div>

</div>
</div>
</div>
<input type="hidden" name="pytoken" id='pytoken' value="6dd985061a91">
<script>
$(function(){
	$("#integral").click(function(){
		$.post("index.php?m=integral&c=save",{
			config : $("#integral").val(),
			integral_pricename : $("#integral_pricename").val(),
			integral_priceunit : $("#integral_priceunit").val(),
			integral_proportion : $("#integral_proportion").val(),
			integral_reg_type : $("#integral_reg_type").val(),
			integral_reg : $("#integral_reg").val(),
			integral_login_type : $("#integral_login_type").val(),
			integral_login : $("#integral_login").val(),
			integral_userinfo_type : $("#integral_userinfo_type").val(),
			integral_userinfo : $("#integral_userinfo").val(),
			integral_emailcert_type : $("#integral_emailcert_type").val(),
			integral_emailcert : $("#integral_emailcert").val(),
			integral_mobliecert_type : $("#integral_mobliecert_type").val(),
			integral_mobliecert : $("#integral_mobliecert").val(),
			integral_avatar_type : $("#integral_avatar_type").val(),
			integral_avatar : $("#integral_avatar").val(),
			integral_question_type : $("#integral_question_type").val(),
			integral_question : $("#integral_question").val(),
			integral_answer_type : $("#integral_answer_type").val(),
			integral_answer : $("#integral_answer").val(),
			integral_answerpl_type : $("#integral_answerpl_type").val(),
			integral_answerpl : $("#integral_answerpl").val(),
			integral_friend_msg_type : $("#integral_friend_msg_type").val(),
			integral_friend_msg : $("#integral_friend_msg").val(),
			integral_friend_reply_type : $("#integral_friend_reply_type").val(),
			integral_friend_reply : $("#integral_friend_reply").val(),
			integral_invite_reg_type : $("#integral_invite_reg_type").val(),
			integral_invite_reg : $("#integral_invite_reg").val(),
			pytoken : $("#pytoken").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
</script>
</body>
</html><?php }} ?>
