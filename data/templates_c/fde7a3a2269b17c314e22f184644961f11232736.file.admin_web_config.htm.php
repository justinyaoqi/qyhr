<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:03:39
         compiled from "D:\wamp\www\qyhr\app\template\admin\admin_web_config.htm" */ ?>
<?php /*%%SmartyHeaderCode:1448955f968ab319817-34750943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fde7a3a2269b17c314e22f184644961f11232736' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_web_config.htm',
      1 => 1440861575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1448955f968ab319817-34750943',
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
  'unifunc' => 'content_55f968ab5e4263_18744951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f968ab5e4263_18744951')) {function content_55f968ab5e4263_18744951($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />  
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="../js/jquery-1.8.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/layer/layer.min.js" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="js/admin_public.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="http://api.map.baidu.com/api?v=1.4"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../js/map.js"><?php echo '</script'; ?>
> 
<title>��̨����</title>
</head>
<body class="body_ifm">

<div class="infoboxp" style="position:relative;">
<div class="infoboxp_top_bg"></div>

<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute; z-index:10000"></div>

<div class="main_tag" >
<div class="admin_h1_bg"> 
<span class="infoboxp_top_span infoboxp_top_wz">��վ����</span>
<ul>
	<li class="on">��������</li>
    <li>��ȫ����</li>
    <li>��֤������</li>
    <li>��վLOGO</li>
    <li>��ͼ����</li>
    <li>��������</li>
</ul>
</div>
<div class="tag_box">
<div> 
<table width="100%" class="table_form">
<tr class="admin_table_trbg">
    <th width="160">����˵����</th>
    <td >����ֵ</td>
    <td width="160">����</td>
</tr>
<tr>
<th width="160">��վ���ƣ�</th>
<td>
<input class="input-text" type="text" name="sy_webname" id="sy_webname" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
" size="60" maxlength="255"/>
<font color="gray" style="display:none">�磺hr135�˲���</font></td>
<td width="160">sy_webname</td>
</tr>
<tr class="admin_table_trbg">
		<th width="160">��ַ��ַ��</th>
		<td><input class="input-text tips_class" type="text" name="sy_weburl" id="sy_weburl" value="<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_old_weburl']) {
echo $_smarty_tpl->tpl_vars['config']->value['sy_old_weburl'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];
}?>" size="60" maxlength="255"/><font color="gray" style="display:none">�磺http://www.hr135.com</font></td>
        <td width="160">sy_weburl</td>
	</tr>
    <tr>
    	<th width="160">��վ������</th>
		<td  >
          <input type="radio" name="sy_web_online" value="1" id="RadioGroup1_12" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_online']=="1") {?>checked<?php }?>>
          <label for="RadioGroup1_12">����</label>&nbsp;
          <input type="radio" name="sy_web_online" value="2" id="RadioGroup1_13" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_online']=="2") {?>checked<?php }?>>
          <label for="RadioGroup1_13">�ر�</label>
        </td>
        <td width="160">sy_web_online</td>
    </tr>
    <tr class="admin_table_trbg">
    	<th width="160">������վ��</th>
		<td>
          <input type="radio" name="sy_web_site" value="1" id="RadioGroup3_12" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_site']=="1") {?>checked<?php }?>>
          <label for="RadioGroup3_12">����</label>&nbsp;
          <input type="radio" name="sy_web_site" value="0" id="RadioGroup3_13" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_web_site']=="0") {?>checked<?php }?>>
          <label for="RadioGroup3_13">�ر�</label> <br/><font color="gray">��ʾ����������в��Ұ�������֧��2��Ŀ¼�����ز����� http://localhost/phpyun �������������</font></td>
        <td width="160">sy_web_site</td>
    </tr>
    <tr>
		<th width="160">�趨Ĭ�ϳ��У�</th>
		<td><input class="input-text tips_class" type="text" name="sy_indexcity" id="sy_indexcity" size="40" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_indexcity'];?>
"/><font color="gray">��ʾ������������վ��Ĭ����ʾ�ĳ��� �磺ȫ��</font></td>
        <td width="160">sy_indexcity</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="160">һ��������</th>
		<td><input class="input-text tips_class" type="text" name="sy_onedomain" id="sy_onedomain" size="40" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_onedomain'];?>
"/><font color="gray">��ʾ�����Ĭ������Ϊ����������������дһ������</font></td>
        <td width="160">sy_onedomain</td>
	</tr>
    <tr>
		<th width="160">Ĭ��������</th>
		<td><input class="input-text tips_class" type="text" name="sy_indexdomain" id="sy_indexdomain" size="40" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_indexdomain'];?>
"/><font color="gray" style="display:none">��ʾ��Ĭ�ϳ��ж�Ӧ������ ��ȫվ��Ӧ���� http://www.hr135.com ������ beijing.hr135.com</font></td>
        <td width="160">sy_indexdomain</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="160">��̨�б�ҳ��ʾ������</th>
		<td><input class="input-text tips_class" type="text" name="sy_listnum" id="sy_listnum" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_listnum'];?>
" size="10" maxlength="255" /> ��</td>
         <td width="160">sy_listnum</td>
	</tr>
    <tr>
    	<th width="160">��վ�ر�ԭ��</th>
		<td>
          <textarea name="sy_webclose" id="sy_webclose" rows="3" cols="50" class="text"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webclose'];?>
</textarea>
        </td>
        <td width="160">sy_webclose</td>
    </tr>  
  <tr class="admin_table_trbg">
		<th width="160">��վ�ؼ��ʣ�</th>
		<td class="y-bg"><textarea name="sy_webkeyword" id="sy_webkeyword" rows="3" cols="50" class="text tips_class"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webkeyword'];?>
</textarea>
        <font color="gray">��ʾ����վ�ؼ�����Ϊ����������ϸ�����뵽ϵͳ-��SEO���õ�������</font></td>
        <td width="160">sy_webkeyword</td>
	</tr>
	<tr>
		<th width="160">��վ������</th>
		<td class="y-bg"><textarea name="sy_webmeta" id="sy_webmeta" rows="3" cols="50" class="text"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webmeta'];?>
</textarea><font color="gray">��ʾ����վ������Ϊ�������֣���ϸ�����뵽ϵͳ-��SEO��������</font></td>
         <td width="160">sy_webmeta</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">��վ��Ȩ��Ϣ��</th>
        <td><textarea name="sy_webcopyright" id="sy_webcopyright" rows="3" cols="80" class="text"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webcopyright'];?>
</textarea></td>
        <td width="160">sy_webcopyright</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">ͳ�ƴ��룺</th>
        <td><textarea name="sy_webtongji" id="sy_webtongji" rows="3" cols="80" class="text"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webtongji'];?>
</textarea></td>
        <td width="160">sy_webtongji</td>
	</tr>
	<tr>
		<th width="160">վ��EMAIL��</th>
		<td><input class="input-text tips_class" type="text" name="sy_webemail" id="sy_webemail" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webemail'];?>
" size="40" maxlength="255" /></td>
         <td width="160">sy_webemail</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">�����ţ�</th>
		<td><input class="input-text tips_class" type="text" name="sy_webrecord" id="sy_webrecord" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webrecord'];?>
" size="40" maxlength="255" /></td>
        <td width="160">sy_webrecord</td>
	</tr>
	<tr>
		<th width="160">�� ����</th>
		<td><input class="input-text tips_class" type="text" name="sy_webtel" id="sy_webtel" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webtel'];?>
" size="40" maxlength="255"/> <font color="gray" style="display:none">�磺021-61190281</font></td>
        <td width="160">sy_webtel</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">��ѵ绰��</th>
		<td><input class="input-text tips_class" type="text" name="sy_freewebtel" id="sy_freewebtel" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
" size="40" maxlength="255"/> <font color="gray" style="display:none">�磺400-8888-888</font></td>
        <td width="160">sy_freewebtel</td>
	</tr>
	<tr>
		<th width="160">�ͷ�QQ��</th>
		<td><input class="input-text tips_class" type="text" name="sy_qq" id="sy_qq" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_qq'];?>
" size="40" maxlength="255"/> <font color="gray" style="display:none">������ð�Ƕ��Ÿ�����</font></td>
        <td width="160">sy_qq</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">��˾��ַ��</th>
		<td><input class="input-text tips_class" type="text" name="sy_webadd" id="sy_webadd" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webadd'];?>
" size="80" maxlength="255"/><font color="gray" style="display:none">�磺�Ϻ����������·���ʹ���14A��</font></td>
        <td width="160">sy_webadd</td>
	</tr>
    
<tr  >
		<td colspan="3" align="center" class="admin_table_trbg"><input class="admin_submit4" id="config" type="button" name="config" value="�ύ">&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="����"/></td>
	</tr>
</table>  
</div>
<div class="hiddendiv"> 
    <table width="100%" class="table_form">
      <tr class="admin_table_trbg">
          <th width="160">����˵����</th>
          <td>����ֵ</td>
          <td width="160">����</td>
    </tr>
	<tr>
		<th width="160">ϵͳ��ȫ�룺</th>
		<td><input class="input-text tips_class" type="text" name="sy_safekey" id="sy_safekey" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_safekey'];?>
" size="40" maxlength="255"/><font color="gray" style="display:none">ϵͳ���ֹ���ʹ�õļ��ܴ������Զ����޸ģ��磺986jhgyutw.*x</font></td>
        <td width="160">sy_safekey</td>
	</tr>
    <tr class="admin_table_trbg">
    	<th width="160">��̨�޸�ģ�壺</th>
		<td  >
          <input type="radio" name="sy_istemplate" value="1" id="sy_istemplate" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_istemplate']=="1") {?>checked<?php }?>>
          <label for="RadioGroup1_12">����</label>&nbsp;
          <input type="radio" name="sy_istemplate" value="2" id="sy_istemplate" <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_istemplate']=="2") {?>checked<?php }?>>
          <label for="RadioGroup1_13">�ر�</label>
        </td>
        <td width="160">sy_template</td>
    </tr>
    
        <tr >
            <th width="160">���˹ؼ��ʣ�</th>
            <td><textarea name="sy_fkeyword" id="sy_fkeyword" rows="3" cols="50" class="text tips_class"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_fkeyword'];?>
</textarea>
            <font color="gray" style="display:none">�磺̨��,̨��</font></td>
             <td width="160">sy_fkeyword</td>
        </tr>
        <tr class="admin_table_trbg">
            <th width="160">�滻���˹ؼ��ʣ�</th>
            <td><textarea name="sy_fkeyword_all" id="sy_fkeyword_all" rows="3" cols="50" class="text tips_class"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_fkeyword_all'];?>
</textarea>
            <font color="gray" style="display:none">�����йؼ����滻</font></td>
            <td width="160">sy_fkeyword_all</td>
        </tr>
        <tr  >
		<th>��ֹIP���ʣ�</th>
			<td><textarea id="sy_bannedip" class='tips_class' name="sy_bannedip" cols="100" rows="2" style="width:317px;height:100px;"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_bannedip'];?>
</textarea><font color="gray" style="display:none">���IP��|(����)����,����127.0.0.1|192.168.1.1</font>
            </td>
             <td width="160">sy_bannedip</td>
		</tr>
        <tr class="admin_table_trbg">
            <th width="160">��ֹIP������ʾ��</th>
            <td><textarea name="sy_bannedip_alert" id="sy_bannedip_alert" rows="3" cols="50" class="text tips_class"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_bannedip_alert'];?>
</textarea>
            <font color="gray" style="display:none">��ֹ������ʾ</font></td>
            <td width="160">sy_bannedip_alert</td>
        </tr>
        <tr>
            <td colspan="3" align="center">
            <input class="admin_submit4" id="otherconfig" type="button" name="otherconfig" value="�ύ" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="����" /></td>            
        </tr>
    </table> 
	 
</div>
<div class="hiddendiv"> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">����˵����</th>
          <td>����ֵ</td>
          <td width="160">����</td>
    </tr>
	<tr>
		<th width="160">����ϵͳ��֤�룺</th>
		<td>
        <input type="checkbox" name="code_web" value="ע���Ա" id="checkboxgroup1_0" <?php if (strstr($_smarty_tpl->tpl_vars['config']->value['code_web'],'ע���Ա')) {?>checked<?php }?>>
        <label for="checkboxgroup1_0">ע���Ա</label>&nbsp;&nbsp;
        <input type="checkbox" name="code_web" value="ǰ̨��½" id="checkboxgroup1_1" <?php if (strstr($_smarty_tpl->tpl_vars['config']->value['code_web'],'ǰ̨��½')) {?>checked<?php }?>>
        <label for="checkboxgroup1_1">ǰ̨��½</label>&nbsp;&nbsp;
        <input type="checkbox" name="code_web" value="һ�仰��Ƹ" id="checkboxgroup1_2" <?php if (strstr($_smarty_tpl->tpl_vars['config']->value['code_web'],'һ�仰��Ƹ')) {?>checked<?php }?>>
        <label for="checkboxgroup1_2">һ�仰��Ƹ</label>&nbsp;&nbsp;
        <input type="checkbox" name="code_web" value="��̨��½" id="checkboxgroup1_3" <?php if (strstr($_smarty_tpl->tpl_vars['config']->value['code_web'],'��̨��½')) {?>checked<?php }?>>
        <label for="checkboxgroup1_3">��̨��½</label>
          </td>
         <td width="160">code_web</td> 
	</tr>
      <tr class="admin_table_trbg">
		<th width="160">��֤���������ͣ�</th>
		<td>
		    <input type="radio" name="code_type" value="1" id="RadioGroup3_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_type']=="1") {?>checked<?php }?>>
		    <label for="RadioGroup3_0">����</label>&nbsp;&nbsp;
		    <input type="radio" name="code_type" value="2" id="RadioGroup3_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_type']=="2") {?>checked<?php }?>>
		    <label for="RadioGroup3_1">Ӣ��</label>&nbsp;&nbsp;
            <input type="radio" name="code_type" value="3" id="RadioGroup3_2" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_type']=="3") {?>checked<?php }?>>
		    <label for="RadioGroup3_2">Ӣ��+����</label>
		  </td>
          <td width="160">code_type</td> 
 
	</tr>
    <tr>
		<th width="160">ѡ����֤���ļ����ͣ�</th>
		<td>
        	<input type="radio" name="code_filetype" value="jpg" id="RadioGroup4_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_filetype']=="jpg") {?>checked<?php }?>>
		    <label for="RadioGroup4_0">jpg</label>&nbsp;&nbsp;
		    <input type="radio" name="code_filetype" value="png" id="RadioGroup4_2" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_filetype']=="png") {?>checked<?php }?>>
		    <label for="RadioGroup4_2">png</label>&nbsp;&nbsp;
            <input type="radio" name="code_filetype" value="gif" id="RadioGroup4_3" <?php if ($_smarty_tpl->tpl_vars['config']->value['code_filetype']=="gif") {?>checked<?php }?>>
		    <label for="RadioGroup4_3">gif</label></td>
           <td width="160">code_filetype</td>  
	</tr>
  <tr class="admin_table_trbg">
		<th width="160">��֤��ͼƬ��С��</th>
		<td>��<input class="input-text" type="text" name="code_width" id="code_width" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['code_width'];?>
" size="10" maxlength="255"/>px&nbsp;&nbsp;
        �ߣ�<input class="input-text" type="text" name="code_height" id="code_height" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['code_height'];?>
" size="10" maxlength="255"/>px
        </td>
        <td width="160">code_width</td> 
	</tr>
    <tr>
		<th width="160">��֤���ַ�����</th>
		<td><input class="input-text" type="text" name="code_strlength" id="code_strlength" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['code_strlength'];?>
" size="10" maxlength="1" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/>&nbsp;&nbsp;��ʾ���ַ�����Ҫ����5</td>
         <td width="160">code_strlength</td> 
	</tr>
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4" id="codeconfig" type="button" name="codeconfig" value="�ύ" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="����" /></td>
        </tr>
    </table>  
</div>
<div class="hiddendiv">
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
    <form action="index.php?m=config&c=save_logo" method="post" enctype= "multipart/form-data" target="supportiframe">
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">����˵����</th>
          <td>����ֵ</td>
          <td width="160">����</td>
    </tr>
    
        <tr>
		<th width="160">��վLOGO��</th>
		<td><input  type="file" size="45" name="logo" class="input-text">
        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_logo']!='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_logo'];?>
" >
        <?php }?>
            </td>
             <td width="160">sy_logo</td>
		</tr>

         <tr>
		<th width="160">����ȦLOGO��</th>
		<td><input  type="file" size="45" name="friend_logo" class="input-text">
        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_friend_logo']!='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_logo'];?>
">
        <?php }?>
          </td>
           <td width="160">sy_friend_logo</td>
		</tr>
         <tr class="admin_table_trbg">
		<th width="160">���˻�Ա����LOGO��</th>
		<td><input  type="file" size="45" name="member_logo" class="input-text">
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_member_logo']!='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_logo'];?>
">
        <?php }?>
          </td>
          <td width="160">sy_member_logo</td>
		</tr>
         <tr>	
		<th width="160">��ҵ��Ա����LOGO��</th>
		<td><input  type="file" size="45" name="unit_logo" class="input-text">
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_unit_logo']!='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_logo'];?>
">
        <?php }?>
          </td>
          <td width="160">sy_unit_logo</td>
		</tr>
		
        
        <tr class="admin_table_trbg">	
		<th width="160">�ֻ�LOGO</th>
		<td><input  type="file" size="45" name="wap_logo" class="input-text">
            <?php if ($_smarty_tpl->tpl_vars['config']->value['wap_logo']=='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wap_logo'];?>
">
        <?php }?>
          </td>
          <td width="160">sy_wap_logo</td>
		</tr>
        
        <tr class="admin_table_trbg">	
		<th width="160">WAP��ά��</th>
		<td><input  type="file" size="45" name="sy_wap_qcode" class="input-text">
        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wap_qcode']!='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wap_qcode'];?>
">
        <?php }?>
          </td>
          <td width="160">sy_wap_qcode</td>
		</tr>

		<tr class="admin_table_trbg">
		<th width="160">���ںŶ�ά��</th>
		<td><input  type="file" size="45" name="sy_wx_qcode" class="input-text">
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode']!='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
">
        <?php }?>
          </td>
          <td width="160">sy_wx_qcode</td>
		</tr>
	
        
        <tr>
            <td colspan="3" align="center">
            <input class="admin_submit4"  type="submit" name="waterconfig" value="�ύ" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="����" /></td>
        </tr>
    </table> 
	<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    </form>
</div>

<div class="hiddendiv"> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th>����˵����</th>
          <td>����ֵ</td>
          <td width="160">����</td>
    </tr>
    <tr>
		<th>IP��ת����ǰ���У�</th>
		<td>
        <input type="radio" name="map_tocity" value="1" id="map_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['map_tocity']=="1") {?>checked<?php }?>>
		    <label for="map_0">��ת</label>&nbsp;&nbsp;
		    <input type="radio" name="map_tocity" value="2" id="map_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['map_tocity']=="2") {?>checked<?php }?>>
		    <label for="map_1">����Ĭ������</label>
        </td>
        <td width="160">map_tocity</td>
	</tr>
    <tr class="admin_table_trbg">
		<th>�ٶȵ�ͼKEY��</th>
		<td><input class="input-text  " type="text" name="map_key" id="map_key" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['map_key'];?>
" size="45" maxlength="255"/>
        <font color="gray"><a href="http://lbsyun.baidu.com/apiconsole/key?application=key" target="_blank">�����ַ</a> ��ͼ�汾��1.5</font>
        </td>
        <td width="160">map_key</td>
	</tr>
        <tr>
			<th>Ĭ�����꣺</th>
			<td>X��<input class="input-text" type="text" name="map_x" id="map_x" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['map_x'];?>
" size="20" maxlength="255"/>&nbsp;&nbsp;Y��<input class="input-text" type="text" name="map_y" id="map_y" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['map_y'];?>
" size="20" maxlength="255"/> 
        <a href="javascript:;" id="getclick">�����ȡ����</a>
        </td>
        <td width="160">map_x / map_y</td>       
    <tr id="getmapxy" style="display:none;" class="admin_table_trbg">
			<th>��ȡ���꣺</th>
			<td style=" position:relative; z-index:0px"><div id="map_container" style="width:100%;height:300px; position:relative; z-index:1"></div></td>
            <td width="160"></td>
        </tr>
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4" id="mapconfig" type="button" name="mapconfig" value="�ύ" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="����" /></td>
        </tr>
    </table>  
</div>

<div class="hiddendiv"> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">����˵����</th>
          <td>����ֵ</td>
          <td width="160">����</td>
    </tr>
        <tr>
		<th width="160">Memcache���棺</th>
		<td>
		    <input type="radio" class='tips_class' name="ismemcache" value="1" id="RadioGroup3_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['ismemcache']=="1") {?>checked<?php }?>>
		    <label for="RadioGroup3_0">����</label>&nbsp;&nbsp;
		    <input type="radio" name="ismemcache" class='tips_class' value="2" id="RadioGroup3_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['ismemcache']=="2") {?>checked<?php }?>>
		    <label for="RadioGroup3_1">�ر�</label>&nbsp;&nbsp;
            <font color="gray" style="display:none">ע����������δ��װMemcache,�벻Ҫ�򿪡�</font>
		  </td>
          <td width="160">ismemcache</td>
		</tr>

        <tr class="admin_table_trbg">
        <th width="160">Memcache��������</th>
		<td>
		    <input class="input-text tips_class" type="text" name="memcachehost" id="memcachehost3" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['memcachehost'];?>
" size="20" maxlength="255"/><font color="gray" style="display:none">������IP������127.0.0.1</font>
		  </td>
           <td width="160">memcachehost</td>
		</tr>
        <tr>
        <th width="160">Memcache�˿ڣ�</th>
		<td>
		    <input class="input-text tips_class" type="text" name="memcacheport" id="memcacheport3" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['memcacheport'];?>
" size="20" maxlength="255"/><font color="gray" style="display:none">Ĭ��11211</font>
		  </td>
          <td width="160">memcacheport</td>
		</tr>
        <tr class="admin_table_trbg">
        <th width="160">Memcache����ʱ�䣺</th>
		<td>
		    <input class="input-text tips_class" type="text" name="memcachetime" id="memcachetime" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['memcachetime'];?>
" size="20" maxlength="255"/><font color="gray" style="display:none">��Ϊ��λ,һ��Ϊ3600��</font>
		  </td>
          <td width="160">memcachetime</td>
		</tr>  
        <tr>
		<th width="160">ҳ�滺�棺</th>
		<td>
		    <input type="radio" class="tips_class" name="webcache" value="1" id="RadioGroup3_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['webcache']=="1") {?>checked<?php }?>>
		    <label for="RadioGroup3_0">����</label>&nbsp;&nbsp;
		    <input type="radio" name="webcache" value="2" id="RadioGroup3_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['webcache']=="2") {?>checked<?php }?>>
		    <label for="RadioGroup3_1">�ر�</label>&nbsp;&nbsp;
		  </td>
          <td width="160">webcache</td>
		</tr>   
        <tr class="admin_table_trbg">
        <th width="160">ҳ�滺��ʱ�䣺</th>
		<td>
		    <input class="input-text tips_class" type="text" name="webcachetime" id="webcachetime" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['webcachetime'];?>
" size="20" maxlength="255"/><font color="gray" style="display:none">��Ϊ��λ,һ��Ϊ3600��</font>
		  </td>
          <td width="160">webcachetime</td>
		</tr>    
        <tr class="admin_table_trbg">
		<th width="160">smarty���棺</th>
		<td>
		    <input type="radio" name="issmartycache" value="1" id="RadioGroup4_0" <?php if ($_smarty_tpl->tpl_vars['config']->value['issmartycache']=="1") {?>checked<?php }?>>
		    <label for="RadioGroup4_0">����</label>&nbsp;&nbsp;
		    <input type="radio" name="issmartycache" value="2" id="RadioGroup4_1" <?php if ($_smarty_tpl->tpl_vars['config']->value['issmartycache']=="2") {?>checked<?php }?>>
		    <label for="RadioGroup4_1">�ر�</label>&nbsp;&nbsp;
		  </td>
          <td width="160">issmartycache</td>
		</tr>
        <tr style="display:none;">
        <th width="160">smarty����ʱ�䣺</th>
		<td>
		    <input class="input-text tips_class" type="text" name="smartycachetime" id="smartycachetime" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['smartycachetime'];?>
" size="20" maxlength="255"/><font color="gray" style="display:none">��Ϊ��λ,һ��Ϊ3600��</font>
		  </td>
           <td width="160">smartycachetime</td>
		</tr>        
        <tr>
            <td colspan="3" align="center">
            <input class="admin_submit4" id="cacheconfig" type="button" name="mapconfig" value="�ύ" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="����" /></td>
        </tr>
    </table>  
</div>

</div>
</div>
<?php echo '<script'; ?>
> 
var $switchtag = $("div.main_tag ul li");
$switchtag.click(function(){
	$(this).addClass("on").siblings().removeClass("on");
	var index = $switchtag.index(this);
	$("div.tag_box > div").eq(index).show().siblings().hide();
});
$(".tips_class").hover(function(){ 
	var msg_id=$(this).attr('id'); 
	var msg=$('#'+msg_id+' + font').html();
	if($.trim(msg)!=''){
		layer.tips(msg, this, {
		guide: 1, 
		style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']
		}); 
	} 
},function(){
	var msg_id=$(this).attr('id');
	var msg=$('#'+msg_id+' + font').html();
	if($.trim(msg)!=''){
		layer.closeTips();
	} 
});
getmapnoshowcont('map_container',"<?php if ($_smarty_tpl->tpl_vars['config']->value['map_x']) {
echo $_smarty_tpl->tpl_vars['config']->value['map_x'];
} else { ?>116.404<?php }?>","<?php if ($_smarty_tpl->tpl_vars['config']->value['map_y']) {
echo $_smarty_tpl->tpl_vars['config']->value['map_y'];
} else { ?>39.915<?php }?>","map_x","map_y");
$(function(){  
	$("#getclick").click(function(){
		$('#getmapxy').toggle();
		var bodycont=$('#getmapxy').css("display");
		if(bodycont=="none"){
			$(this).html("�����ȡ����");
		}else{
			$(this).html("�رջ�ȡ����");
		}
	})
	$("#cacheconfig").click(function(){
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#cacheconfig").val(),
			ismemcache : $("input[name=ismemcache]:checked").val(),
			issmartycache : $("input[name=issmartycache]:checked").val(),
			memcachehost : $("input[name=memcachehost]").val(),
			memcacheport : $("input[name=memcacheport]").val(),
			memcachetime : $("input[name=memcachetime]").val(),
			smartycachetime : $("input[name=smartycachetime]").val(),
			webcache : $("input[name=webcache]:checked").val(),
			pytoken : $("#pytoken").val(),
			webcachetime : $("input[name=webcachetime]").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	$("#mapconfig").click(function(){
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#mapconfig").val(),
			map_tocity : $("input[name=map_tocity]:checked").val(),
			map_key : $("#map_key").val(),
			pytoken : $("#pytoken").val(),
			map_x : $("#map_x").val(),
			map_y : $("#map_y").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	$("#otherconfig").click(function(){
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#otherconfig").val(),
			sy_safekey : $("#sy_safekey").val(),
			sy_istemplate : $("input[name=sy_istemplate]:checked").val(),
			sy_bannedip : $("#sy_bannedip").val(),
			sy_fkeyword_all : $("#sy_fkeyword_all").val(),
			sy_bannedip_alert : $("#sy_bannedip_alert").val(),
			pytoken : $("#pytoken").val(),
			sy_fkeyword : $("#sy_fkeyword").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	$("#codeconfig").click(function(){
		loadlayer();
		var codewebarr="";
		$("input[name=code_web]:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ����� 
			if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
		}); 
		$.post("index.php?m=config&c=save",{
			config : $("#codeconfig").val(),
			code_web : codewebarr,
			code_type : $("input[name=code_type]:checked").val(),
			code_filetype : $("input[name=code_filetype]:checked").val(),
			code_width : $("#code_width").val(),
			code_height : $("#code_height").val(),
			pytoken : $("#pytoken").val(),
			code_strlength:$("#code_strlength").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	}); 
	$("#config").click(function(){ 
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#config").val(),
			sy_webname : $("#sy_webname").val(),
			sy_weburl : $("#sy_weburl").val(),
			sy_webkeyword : $("#sy_webkeyword").val(),
			sy_webmeta : $("#sy_webmeta").val(),
			sy_webcopyright : $("#sy_webcopyright").val(),
			sy_webtongji : $("#sy_webtongji").val(),
			sy_webemail : $("#sy_webemail").val(),
			sy_webrecord : $("#sy_webrecord").val(),
			sy_webtel : $("#sy_webtel").val(),
			sy_qq : $("#sy_qq").val(),
			sy_freewebtel : $("#sy_freewebtel").val(),
			sy_listnum : $("#sy_listnum").val(), 
			sy_webadd : $("#sy_webadd").val(),
			sy_rand : $("#sy_rand").val(),
			sy_city_online: $("input[name=sy_city_online]:checked").val(),
			sy_webclose: $("#sy_webclose").val(),
			sy_indexcity: $("#sy_indexcity").val(),
			sy_onedomain: $("#sy_onedomain").val(),
			sy_wapdomain: $("#sy_wapdomain").val(),
			sy_indexdomain: $("#sy_indexdomain").val(),
			sy_qqkey: $("#sy_qqkey").val(),
			sy_sinakey: $("#sy_sinakey").val(), 
			sy_web_online: $("input[name=sy_web_online]:checked").val(),
			pytoken : $("#pytoken").val(),
			sy_web_site: $("input[name=sy_web_site]:checked").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
});
<?php echo '</script'; ?>
>
</div>
</body>
</html><?php }} ?>
