<?php /*%%SmartyHeaderCode:590755e2d02d846123-80791989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '590755e2d02d846123-80791989',
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d02d954f38_45628726',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d02d954f38_45628726')) {function content_55e2d02d954f38_45628726($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
          <input type="radio" name="sy_seo_rewrite" value="0" id="RadioGroup2_12" checked>
          <label for="RadioGroup2_12">ԭ����</label>&nbsp;
          <input type="radio" name="sy_seo_rewrite" value="1" id="RadioGroup2_13" >
          <label for="RadioGroup2_13">α��̬</label><br>
          <font color="gray" style="display:none">�޸�α��̬֮ǰҪ�ȸ��ݷ��������α��̬����</font>
        </td>
        <td width="160">sy_seo_rewrite</td>
    </tr> 
	<tr>
    	<th width="220">ͷ������������</th>
		<td>
          <input type="radio" name="sy_header_fix" value="0" id="sy_header_fix_0" >
          <label for="sy_header_fix_0">�ر�</label>&nbsp;
          <input type="radio" name="sy_header_fix" value="1" id="sy_header_fix_1" checked>
          <label for="sy_header_fix_1">����</label><br>
          <font color="gray" style="display:none"></font>
        </td>
        <td width="160">sy_header_fix</td>
    </tr>       
	 <tr class="admin_table_trbg">
    	<th width="220">������ʾ��ʽ��</th>
		<td>
          <input type="radio" name="sy_news_rewrite" value="1" id="sy_news_rewrite_1" checked>
          <label for="sy_news_rewrite_1">��̬</label>&nbsp;
          <input type="radio" name="sy_news_rewrite" value="2" id="sy_news_rewrite_2" >
          <label for="sy_news_rewrite_2">��̬</label><br>
          <font color="gray" style="display:none">�޸�Ϊ��̬������ʱ��ʾ��̬ҳ���ݣ�����Ч��</font>
        </td>
        <td width="160">sy_news_rewrite</td>
    </tr> 	
	<tr >
    	<th width="220">�����������룺</th>
		<td>
          <input type="radio" name="sy_linksq" value="0" id="sy_linksq_0" checked>
          <label for="sy_linksq_0">����</label>&nbsp;
          <input type="radio" name="sy_linksq" value="1" id="sy_linksq_1" >
          <label for="sy_linksq_1">�ر�</label>
        </td>
        <td width="160">sy_linksq</td>
    </tr>
	<tr class="admin_table_trbg">
    	<th width="220">�ֻ����Զ���ת��wap��</th>
		<td>
          <input type="radio" name="sy_wap_jump" value="1" id="sy_wap_jump_1" checked>
          <label for="sy_linksq_0">����</label>&nbsp;
          <input type="radio" name="sy_wap_jump" value="0" id="sy_wap_jump_0" >
          <label for="sy_linksq_1">�ر�</label>
        </td>
        <td width="160">sy_wap_jump</td>
    </tr>
	<tr >
    	<th width="220"><font color="red">���˲�ҳ��Ĭ����ʾ���</font>��</th>
		<td>
          <input type="radio" name="sy_default_userclass" value="1" id="RadioGroup10_16" >
          <label for="RadioGroup10_16">��</label>&nbsp;
          <input type="radio" name="sy_default_userclass" value="2" id="RadioGroup10_17" checked>
          <label for="RadioGroup10_17">��</label>
          <font color="gray"  >��ѡ��"��"����ֱ����ʾ�����б�</font>
        </td>
        <td width="160">sy_default_userclass</td>
    </tr>
	<tr class="admin_table_trbg">
    	<th width="220"><font color="red">�ҹ���ҳ��Ĭ����ʾ���</font>��</th>
		<td>
          <input type="radio" name="sy_default_comclass" value="1" id="RadioGroup10_14" >
          <label for="RadioGroup10_14">��</label>&nbsp;
          <input type="radio" name="sy_default_comclass" value="2" id="RadioGroup10_15" checked>
          <label for="RadioGroup10_15">��</label>
          <font color="gray"  >��ѡ��"��"����ֱ����ʾְλ�б�</font>
        </td>
        <td width="160">sy_default_comclass</td>
    </tr>
    <tr>
		<th width="220">ǰ̨������ʾ��</th>
		<td>
		    <input type="radio" name="user_name" value="1" id="Radiouser_name_1" >
		    <label for="Radiouser_name_1">ȫ��</label>
		    <input type="radio" name="user_name" value="2" id="Radiouser_name_2" checked>
		    <label for="Radiouser_name_2">����</label>
            <input type="radio" name="user_name" value="3" id="Radiouser_name_3" >
		    <label for="Radiouser_name_3">�������</label><br/>
            <font color="gray">����ĳ������Ϊ������ѡ��ȫ��ǰֱ̨����ʾ��������������ʾ������(Ůʿ)�������������ֱ���������������ʾ��</font>
            </td>
            <td width="160">user_name</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="220">ǰ̨΢��Ƹ����������</th>
		<td><input class="input-text tips_class" type="text" name="sy_once" id="sy_once" value="100" size="10" maxlength="255" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/> ��/��<font color="gray" style="display:none">��ʾ��ֵΪ0ʱ��ʾ�����ƴ���</font></td>
         <td width="160">sy_once</td>
	</tr>
	<tr>
		<th width="220">ͬһIP�������¼�����</th>
		<td><input class="input-text tips_class" type="text" name="sy_adclick" id="sy_adclick" value="0" size="10" maxlength="255"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/> Сʱ<font color="gray" style="display:none">��ʾ��ֵΪ0ʱ��ʾ�����ƣ���������Ϊ������ֻ��¼һ��</font></td>
         <td width="160">sy_adclick</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="220">ǰ̨΢��������������</th>
		<td><input class="input-text tips_class" type="text" name="sy_tiny" id="sy_tiny" value="2" size="10" maxlength="255" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/> ��/��<font color="gray" style="display:none">��ʾ��ֵΪ0ʱ��ʾ�����ƴ���</font></td>
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
<input type="hidden" name="pytoken" id='pytoken' value="6dd985061a91">
<script>
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
</script>
</body>
</html><?php }} ?>
