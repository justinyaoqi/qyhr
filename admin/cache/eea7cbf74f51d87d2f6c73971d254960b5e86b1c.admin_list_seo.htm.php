<?php /*%%SmartyHeaderCode:2772655e2d03262cb12-02581570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea7cbf74f51d87d2f6c73971d254960b5e86b1c' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_list_seo.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2772655e2d03262cb12-02581570',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d0376dcfe3_33302038',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d0376dcfe3_33302038')) {function content_55e2d0376dcfe3_33302038($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" /> 
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js"></script>
<script src="http://localhost/qyhr/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script> 
<script> 
function check_type(id,value){
	var val = value=="1"?"0":"1";
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=advertise&c=ajax_check",{id:id,val:val,pytoken:pytoken},function(data){
		html = "<a href=\"javascript:void(0);\" onClick=\"check_type("+id+","+val+");\" >"+data+"</a>";
		$("#"+id).html(html);
	});
}
</script>
<title>��̨����</title>
</head>

<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="main_tag">
<div class="admin_h1_bg"> 
 <span class="infoboxp_top_span">SEO����</span>
    
    <span class="infoboxp_top_span_sz  infoboxp_top_span_sz_in ">
    <a href="index.php?m=seo&action=index">��ҳ</a></span>
       
    <span class="infoboxp_top_span_sz  ">
    <a href="index.php?m=seo&action=job">�ҹ���</a></span>
       
    <span class="infoboxp_top_span_sz  ">
    <a href="index.php?m=seo&action=com">��˾</a></span>
       
    <span class="infoboxp_top_span_sz  ">
    <a href="index.php?m=seo&action=resume">���˲�</a></span>
       
    <span class="infoboxp_top_span_sz  ">
    <a href="index.php?m=seo&action=news">����</a></span>
       
    <span class="infoboxp_top_span_sz  ">
    <a href="index.php?m=seo&action=hr">������</a></span>
       
    <span class="infoboxp_top_span_sz  ">
    <a href="index.php?m=seo&action=zph">��Ƹ��</a></span>
       
    <span class="infoboxp_top_span_sz  ">
    <a href="index.php?m=seo&action=ask">�ʴ�</a></span>
       
    <span class="infoboxp_top_span_sz  ">
    <a href="index.php?m=seo&action=evaluate">����</a></span>
       
    <span class="infoboxp_top_span_sz  ">
    <a href="index.php?m=seo&action=once">΢��Ƹ</a></span>
       
    <span class="infoboxp_top_span_sz  ">
    <a href="index.php?m=seo&action=tiny">΢����</a></span>
       
    <span class="infoboxp_top_span_sz  ">
    <a href="index.php?m=seo&action=gg">����</a></span>
       
    <span class="infoboxp_top_span_sz  ">
    <a href="index.php?m=seo&action=other">����</a></span>
        <a href="index.php?m=seo&c=SeoAdd" class="admin_infoboxp_tj" style="margin-top:0px;float:none;">���SEO</a> 
</div>



</div>

<div class="table-list">

<div class="admin_table_border" style="float:left">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
<input type="hidden" name="m" value="seo">
<input type="hidden" name="c" value="del">
<input type="hidden" name="pytoken" id='pytoken'  value="6dd985061a91">
<table width="100%">
	<thead>
		<tr class="admin_table_top">
        	<th><label for="chkall"><input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
			<th align="left" width="200">����</th>
            <th align="left">SEO��ʶ��</th>
            <th align="left">��ҳ����</th>
            <th align="left">����ʱ��</th>
			<th align="center" class="admin_table_th_bg">����</th>
		</tr>
	</thead>
	<tbody>
        <tr align="left"  id="list1">
    	<td align="center"><input type="checkbox" value="1" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1"><span>����ҳ</span></td> 
        <td align="left" class="ud">index</td>
        <td width="450px" align="left" class="ud">{webname}_������Ƹ��Ϣ_�ҹ���</td>
        <td width="150px" class="ud" align="left">2015-06-17</td>
    	<td width="70px" align="center"> <a href="index.php?m=seo&c=Modify&id=1" class="admin_cz_sc">�޸�</a> | 
        <a href="javascript:;" onClick="layer_del('ȷ��Ҫɾ����','index.php?m=seo&c=del&del=1');" class="admin_cz_sc">ɾ��</a></td>
  	</tr>
      <tr align="left" class="admin_com_td_bg" id="list121">
    	<td align="center"><input type="checkbox" value="121" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1"><span>��˿�б�</span></td> 
        <td align="left" class="ud">myfans</td>
        <td width="450px" align="left" class="ud">{nickname}�ķ�˿-{webname}</td>
        <td width="150px" class="ud" align="left">2015-06-10</td>
    	<td width="70px" align="center"> <a href="index.php?m=seo&c=Modify&id=121" class="admin_cz_sc">�޸�</a> | 
        <a href="javascript:;" onClick="layer_del('ȷ��Ҫɾ����','index.php?m=seo&c=del&del=121');" class="admin_cz_sc">ɾ��</a></td>
  	</tr>
    
  </tbody>
  </table>
</form>
</div>
</div>
</div>
<style>
.infoboxp_top_span_sz_in{
background: #666;
font-weight: bold;
color: #fff;
border: none;
border-radius: 3px;
}
.infoboxp_top_span_sz_in a{color:#fff}
</style>
</body>
</html><?php }} ?>
