<?php /*%%SmartyHeaderCode:870255e2d0314a0c02-70313049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c7ef8102be0c175ac41a5965026e7bddd1113ff' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_pay_config.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '870255e2d0314a0c02-70313049',
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d0314ffc06_89341674',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d0314ffc06_89341674')) {function content_55e2d0314ffc06_89341674($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js"></script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="infoboxp_top"><h6>֧������</h6></div>
<div class="main_tag">
<div class="table-list">
<div class="admin_table_border">
<table width="100%">
	<thead class="admin_table_trbg">
			<tr class="admin_table_top">
			<th width="20%">֧����ʽ</th>
			<th width="60%">����</th>
			<th width="20%" class="admin_table_th_bg">����</th>
		</tr>
	</thead>
	<tbody>
    <tr>
    	<td align="center" style="cursor:pointer;">֧����</td>
    	<td  style="cursor:pointer;">
        ֧������վ(www.alipay.com) �ǹ����Ƚ�������֧��ƽ̨��<br>
		
        <a href="https://b.alipay.com/index.htm" style="color:red;">������������</a>
		</td>
    	<td align="center">
             
            <a href="javascript:change_pay_un('alipay');" id="alipay_xiezai">ж��</a>  
            <a href="index.php?m=payconfig&c=alipay" id="alipay_config">����</a>
                    </td>
    </tr>
        <tr class="admin_table_trbg">
    	<td align="center" style="cursor:pointer;">�Ƹ�ͨ</td>
    	<td align="" style="cursor:pointer;">�Ƹ�ͨ����Ѷ��˾������й����ȵ�����֧��ƽ̨��������Ϊ�������û�����ҵ�ṩ��ȫ����ݡ�רҵ������֧������</td>
    	<td align="center">
             
            <a href="javascript:change_pay_un('tenpay');" id="alipay_xiezai">ж��</a>  
            <a href="index.php?m=payconfig&c=tenpay" id="alipay_config">����</a>
                    </td>
    </tr>
        <tr>
    	<td align="center" style="cursor:pointer;">����ת��</td>
    	<td align="" style="cursor:pointer;">
        �������� �տ�����Ϣ��ȫ�� ������ ���ʺŻ��ַ ������ �������� �������� <br>
        ע�����������ʱ�����ڵ�㵥"�����;"һ����ע�����Ķ����š�</td>
    	<td align="center">
        	 
            <a href="javascript:change_pay_un('bank');" id="alipay_xiezai">ж��</a>  
            <a href="index.php?m=payconfig&c=bank" id="alipay_config">����</a>
            </td>
    </tr>
	</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
	<input type="hidden" name="pytoken" id='pytoken' value="6dd985061a91">

<script>
function change_pay(paytype){
	var paytype;
	var pytoken = $('#pytoken').val();
	if(paytype=="alipay"){
		$.post("index.php?m=payconfig&c=save",{
			config : 'ddd',
			alipay : 1,
			pytoken : pytoken,
			alipaytype:1
		},function(data,textStatus){
			location.href="index.php?m=payconfig";
		});
	}else if(paytype=="tenpay"){
		$.post("index.php?m=config&c=save",{
			config : 'ddd',
			pytoken : pytoken,
			tenpay : 1
		},function(data,textStatus){
			location.href="index.php?m=payconfig";
		});
	}else{
		$.post("index.php?m=payconfig&c=save",{
			config : 'ddd',
			pytoken : pytoken,
			bank : 1
		},function(data,textStatus){
			location.href="index.php?m=payconfig";
		});	
	}
}
function change_pay_un(paytype){
	var paytype;
	var pytoken = $('#pytoken').val();
	if(paytype=="alipay"){
		$.post("index.php?m=payconfig&c=save",{
			config : 'ddd',
			pytoken : pytoken,
			alipay : 0
		},function(data,textStatus){
			location.href="index.php?m=payconfig";
		});
	}else if(paytype=="tenpay"){
		$.post("index.php?m=payconfig&c=save",{
			config : 'ddd',
			pytoken : pytoken,
			tenpay : 0
		},function(data,textStatus){
			location.href="index.php?m=payconfig";
		});
	}else{
		$.post("index.php?m=payconfig&c=save",{
			config : 'ddd',
			pytoken : pytoken,
			bank : 0
		},function(data,textStatus){
			location.href="index.php?m=payconfig";
		});	
	}
}
</script>
</div>
</body>
</html><?php }} ?>
