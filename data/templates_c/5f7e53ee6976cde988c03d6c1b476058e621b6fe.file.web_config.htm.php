<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:06:36
         compiled from "D:\wamp\www\qyhr\app\template\admin\web_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:1419755f9695c62e002-85774262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f7e53ee6976cde988c03d6c1b476058e621b6fe' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\web_config.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1419755f9695c62e002-85774262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f9695c7729c5_25786599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f9695c7729c5_25786599')) {function content_55f9695c7729c5_25786599($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="infoboxp_top infoboxp_topIjf">
    <span class="infoboxp_top_span">ҳ������</span>
</div>
<div class="main_tag">
<div class="clear"></div>
<div class="tag_box">
<div>
<form method="post">
<table width="100%" class="table_form">
  <tr>
          <th width="220">����˵����</th>
          <td>����ֵ</td>
          <td width="210">����</td>
    </tr>
  <tr class="admin_table_trbg">
    	<th width="220">α��̬���ã�</th>
		<td>
          <input type="radio" name="sy_seo_rewrite" value="0" id="RadioGroup2_12" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_seo_rewrite']=="0") {?>checked<?php }?>>
          <label for="RadioGroup2_12">ԭ����</label>&nbsp;
          <input type="radio" name="sy_seo_rewrite" value="1" id="RadioGroup2_13" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_seo_rewrite']=="1") {?>checked<?php }?>>
          <label for="RadioGroup2_13">α��̬</label><br>
          <font color="gray" style="display:none">�޸�α��̬֮ǰҪ�ȸ��ݷ��������α��̬����</font>
        </td>
        <td width="160">sy_seo_rewrite</td>
    </tr> 
	<tr>
    	<th width="220">ͷ������������</th>
		<td>
          <input type="radio" name="sy_header_fix" value="0" id="sy_header_fix_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_header_fix']=="0") {?>checked<?php }?>>
          <label for="sy_header_fix_0">�ر�</label>&nbsp;
          <input type="radio" name="sy_header_fix" value="1" id="sy_header_fix_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_header_fix']=="1") {?>checked<?php }?>>
          <label for="sy_header_fix_1">����</label><br>
          <font color="gray" style="display:none"></font>
        </td>
        <td width="160">sy_header_fix</td>
    </tr>       
	 <tr class="admin_table_trbg">
    	<th width="220">������ʾ��ʽ��</th>
		<td>
          <input type="radio" name="sy_news_rewrite" value="1" id="sy_news_rewrite_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_news_rewrite']=="1") {?>checked<?php }?>>
          <label for="sy_news_rewrite_1">��̬</label>&nbsp;
          <input type="radio" name="sy_news_rewrite" value="2" id="sy_news_rewrite_2" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_news_rewrite']=="2") {?>checked<?php }?>>
          <label for="sy_news_rewrite_2">��̬</label><br>
          <font color="gray" style="display:none">�޸�Ϊ��̬������ʱ��ʾ��̬ҳ���ݣ�����Ч��</font>
        </td>
        <td width="160">sy_news_rewrite</td>
    </tr> 	
	<tr >
    	<th width="220">�����������룺</th>
		<td>
          <input type="radio" name="sy_linksq" value="0" id="sy_linksq_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_linksq']=="0") {?>checked<?php }?>>
          <label for="sy_linksq_0">����</label>&nbsp;
          <input type="radio" name="sy_linksq" value="1" id="sy_linksq_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_linksq']=="1") {?>checked<?php }?>>
          <label for="sy_linksq_1">�ر�</label>
        </td>
        <td width="160">sy_linksq</td>
    </tr>
	<tr class="admin_table_trbg">
    	<th width="220">�ֻ����Զ���ת��wap��</th>
		<td>
          <input type="radio" name="sy_wap_jump" value="1" id="sy_wap_jump_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wap_jump']=="1") {?>checked<?php }?>>
          <label for="sy_linksq_0">����</label>&nbsp;
          <input type="radio" name="sy_wap_jump" value="0" id="sy_wap_jump_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wap_jump']=="0") {?>checked<?php }?>>
          <label for="sy_linksq_1">�ر�</label>
        </td>
        <td width="160">sy_wap_jump</td>
    </tr>
	<tr >
    	<th width="220"><font color="red">���˲�ҳ��Ĭ����ʾ���</font>��</th>
		<td>
          <input type="radio" name="sy_default_userclass" value="1" id="RadioGroup10_16" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_default_userclass']=="1") {?>checked<?php }?>>
          <label for="RadioGroup10_16">��</label>&nbsp;
          <input type="radio" name="sy_default_userclass" value="2" id="RadioGroup10_17" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_default_userclass']=="2") {?>checked<?php }?>>
          <label for="RadioGroup10_17">��</label>
          <font color="gray"  >��ѡ��"��"����ֱ����ʾ�����б�</font>
        </td>
        <td width="160">sy_default_userclass</td>
    </tr>
	<tr class="admin_table_trbg">
    	<th width="220"><font color="red">�ҹ���ҳ��Ĭ����ʾ���</font>��</th>
		<td>
          <input type="radio" name="sy_default_comclass" value="1" id="RadioGroup10_14" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_default_comclass']=="1") {?>checked<?php }?>>
          <label for="RadioGroup10_14">��</label>&nbsp;
          <input type="radio" name="sy_default_comclass" value="2" id="RadioGroup10_15" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_default_comclass']=="2") {?>checked<?php }?>>
          <label for="RadioGroup10_15">��</label>
          <font color="gray"  >��ѡ��"��"����ֱ����ʾְλ�б�</font>
        </td>
        <td width="160">sy_default_comclass</td>
    </tr>
    <tr>
		<th width="220">ǰ̨������ʾ��</th>
		<td>
		    <input type="radio" name="user_name" value="1" id="Radiouser_name_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_name']=='1'||$_smarty_tpl->tpl_vars['config']->value['user_name']=='') {?>checked<?php }?>>
		    <label for="Radiouser_name_1">ȫ��</label>
		    <input type="radio" name="user_name" value="2" id="Radiouser_name_2" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_name']=='2') {?>checked<?php }?>>
		    <label for="Radiouser_name_2">����</label>
            <input type="radio" name="user_name" value="3" id="Radiouser_name_3" <?php if ($_smarty_tpl->tpl_vars['config']->value['user_name']=='3') {?>checked<?php }?>>
		    <label for="Radiouser_name_3">�������</label><br/>
            <font color="gray">����ĳ������Ϊ������ѡ��ȫ��ǰֱ̨����ʾ��������������ʾ������(Ůʿ)�������������ֱ���������������ʾ��</font>
            </td>
            <td width="160">user_name</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="220">ǰ̨΢��Ƹ����������</th>
		<td><input class="input-text tips_class" type="text" name="sy_once" id="sy_once" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_once'];?>
" size="10" maxlength="255" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/> ��/��<font color="gray" style="display:none">��ʾ��ֵΪ0ʱ��ʾ�����ƴ���</font></td>
         <td width="160">sy_once</td>
	</tr>
	<tr>
		<th width="220">ͬһIP�������¼�����</th>
		<td><input class="input-text tips_class" type="text" name="sy_adclick" id="sy_adclick" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_adclick'];?>
" size="10" maxlength="255"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/> Сʱ<font color="gray" style="display:none">��ʾ��ֵΪ0ʱ��ʾ�����ƣ���������Ϊ������ֻ��¼һ��</font></td>
         <td width="160">sy_adclick</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="220">ǰ̨΢��������������</th>
		<td><input class="input-text tips_class" type="text" name="sy_tiny" id="sy_tiny" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_tiny'];?>
" size="10" maxlength="255" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/> ��/��<font color="gray" style="display:none">��ʾ��ֵΪ0ʱ��ʾ�����ƴ���</font></td>
         <td width="160">sy_tiny</td>
	</tr>
  
    <tr>
		<td colspan="3" align="center">
        <input class="admin_submit4" id="config" type="button" name="config" value="�ύ" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="����" /></td>
	</tr>
</table>
</form>
</div>

</div>
</div>
</div>
<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
<?php echo '<script'; ?>
>
$(function(){
	$("#config").click(function(){
		$.post("index.php?m=web_config&c=save",{
			config : $("#config").val(),
			sy_seo_rewrite : $("input[name=sy_seo_rewrite]:checked").val(), 
			sy_header_fix : $("input[name=sy_header_fix]:checked").val(), 
			sy_news_rewrite : $("input[name=sy_news_rewrite]:checked").val(), 
			sy_linksq : $("input[name=sy_linksq]:checked").val(),
			sy_wap_jump : $("input[name=sy_wap_jump]:checked").val(),
			sy_default_comclass : $("input[name=sy_default_comclass]:checked").val(),
			sy_default_userclass : $("input[name=sy_default_userclass]:checked").val(),
			user_name : $("input[name=user_name]:checked").val(),
			sy_once : $("#sy_once").val(),
			sy_tiny : $("#sy_tiny").val(),
			sy_adclick : $("#sy_adclick").val(),
			pytoken : $("#pytoken").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
