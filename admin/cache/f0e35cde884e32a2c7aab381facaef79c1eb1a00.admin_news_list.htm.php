<?php /*%%SmartyHeaderCode:948755e2d0255fe629-91043153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0e35cde884e32a2c7aab381facaef79c1eb1a00' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_news_list.htm',
      1 => 1440861574,
      2 => 'file',
    ),
    '5fdb1c925bebfdc13bff21146ec8bfec4b2f52d6' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_search.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '948755e2d0255fe629-91043153',
  'variables' => 
  array (
    'config' => 0,
    'property' => 0,
    'property_row' => 0,
    'pytoken' => 0,
    'adminnews' => 0,
    'key' => 0,
    'v' => 0,
    'pagenav' => 0,
    'propertys' => 0,
    'pv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d0257dfdf8_01764602',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d0257dfdf8_01764602')) {function content_55e2d0257dfdf8_01764602($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js"></script>
<script src="http://localhost/qyhr/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<script src="js/show_pub.js"></script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div id="property" style="display:none;">
  <form action="index.php?m=admin_news&c=savepro" method="post" target="supportiframe">
    <table class="table_form ">
      <tr>
        <td style="width:500px; " class="ui_content_wrap">���ԣ�</td>
        <td>           <input type="checkbox" name="describe[]" value="indextj"/>
          ��ҳ�Ƽ�
                    <input type="checkbox" name="describe[]" value="t"/>
          ͷ��
                    <input type="checkbox" name="describe[]" value="tj"/>
          �Ƽ�
          </td>
      </tr>
      <tr>
        <td style="width:500px; " class="ui_content_wrap">���±�ţ�</td>
        <td><input size="40" type="text" id="proid" name="proid" value="" class="input-text"></td>
      </tr>
      <input type="hidden" id="protype" name="type" value="">
      <tr>
        <td colspan='2' style="text-align:center"><input type="submit" value="ȷ ��" name="submit" class="admin_submit4 "></td>
      </tr>
    </table>
    <input type="hidden" name="pytoken" value="6dd985061a91">
  </form>
</div>
<div class="infoboxp">
  <div class="infoboxp_top_bg"></div>
  <div class="admin_Filter"> <span class="complay_top_span fl">�����б�</span>
    <form action="index.php" name="myform" method="get" >
      <input name="m" value="admin_news" type="hidden"/>
      <input name="cate" value="" type="hidden"/>
      <span class="admin_Filter_span">�������ͣ�</span>
      <div class="admin_Filter_text formselect"  did='dtype'>
        <input type="button" value="����" class="admin_Filter_but"  id="btype">
        <input type="hidden" id='type' value="1" name='type'>
        <div class="admin_Filter_text_box" style="display:none" id='dtype'>
          <ul>
            <li><a href="javascript:void(0)" onClick="formselect('1','type','����')">����</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('2','type','����')">����</a></li>
          </ul>
        </div>
      </div>
      <input class="admin_Filter_search"  type="text" name="keyword"  size="25" style=" float:left">
      <input class="admin_Filter_bth"  type="submit" name="news_search" value="����"/>
      <span class='admin_search_div'>
      <div class="admin_adv_search">
        <div class="admin_adv_search_bth">�߼�����</div>
      </div>
      </span>
    </form>
    <a href="index.php?m=admin_news&c=news" class="admin_infoboxp_nav admin_infoboxp_tj">�������</a><em class="admin-tit_line"></em> <a href="index.php?m=admin_news&c=group" class="admin_infoboxp_nav admin_infoboxp_gl">������</a> <em class="admin-tit_line"></em> <a href="javascript:;" onClick="showdiv('houtai_div')" class="admin_infoboxp_nav admin_infoboxp_tj">�������</a> </div>
  	  <div class="search_select">
                                   
		                     
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">����ʱ��</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_news" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_news&publish=1" 
                >����</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&publish=3" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&publish=7" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&publish=15" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&publish=30" 
                >���һ����</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">�������</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_news" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=1" 
                >ְҵָ��</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=2" 
                >��������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=3" 
                >����ٿ�</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=4" 
                >�߶˷�̸</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=5" 
                >�Ͷ�����</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=6" 
                >����ָ��</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=7" 
                >�ֳ���Ƹ��</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=8" 
                >��ְ����</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=9" 
                >�����ؼ�</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=10" 
                >н������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=17" 
                >���ֽ�Ŀ</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=36" 
                >��������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_news&cate=33" 
                >�����̸</a> 
                    
        </div>
        </div>
          
	  <div class="admin_adv_search_icon"><i class="admin_adv_search_icon_i">&nbsp;</i></div>
  </div> 
<div class="clear"></div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" target="supportiframe" name="myform" method="get" id='myform'>
        <input name="m" value="admin_news" type="hidden"/>
        <input name="c" value="delnews" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll' value='' onclick='CheckAll(this.form)'/>
                </label></th>
              <th width="70">  <a href="http://localhost/qyhr/admin/index.php?m=admin_news&order=asc&t=id">���<img src="images/sanj2.jpg"/></a>  </th>
              <th width="130" align="left">�������</th>
              <th width="350" align="left">����</th>
              <th align="left">����</th>
              <th>  <a href="http://localhost/qyhr/admin/index.php?m=admin_news&order=asc&t=datetime">����ʱ��<img src="images/sanj2.jpg"/></a>  </th>
              <th width="60">  <a href="http://localhost/qyhr/admin/index.php?m=admin_news&order=asc&t=hits">�����<img src="images/sanj2.jpg"/></a>  </th>
              <th width="60">  <a href="http://localhost/qyhr/admin/index.php?m=admin_news&order=asc&t=sort">����<img src="images/sanj2.jpg"/></a>  </th>
              <th  class="admin_table_th_bg">����</th>
            </tr>
          </thead>
          <tbody>
          
                      <td align="center"><input type="checkbox" value='' id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="3"><label for="chkAll2">ȫѡ</label>
              &nbsp;
              <input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ" onClick="return really('del[]')" />
              <input class="admin_submit4"  type="button" value="��������" onClick="add_pro()" />
              <input class="admin_submit4"  type="button"  value="ȡ������" onClick="del_pro()" />
              </td>
            <td colspan="6" class="digg"></td>
          </tr>
            </tbody>
        </table>
        <input type="hidden" name="pytoken" id='pytoken' value="6dd985061a91">
      </form>
    </div>
  </div>
</div>
<div id="houtai_div" style=" width:470px; display:none;">
  <div class="subnav">
    <div class="content-menu ib-a blue line-x">
      <form name="myform" action="index.php?m=admin_news&c=property" target="supportiframe" method="post" onSubmit="return check_form(this);" style="padding:10px;">
        ���ƣ�
        <input type="text" id="nameid" name="name" class="input-text">
        ���ñ�ʶ��
        <input type="text" id="valueid" name="value" class="input-text" size="10">
        <input type="hidden" id="upid" name="id" value="">
        <input type="hidden" name="pytoken" value="6dd985061a91">
        <input class="admin_submit4" name="submit" id="submit" type="submit" value="���">
      </form>
      <table width="100%" class="table_form" style="text-align:center">
        <tr>
          <th style="text-align:center;" width="10%">���</th>
          <th style="text-align:center;" width="30%">����</th>
          <th style="text-align:center;" width="35%">���ñ�ʶ</th>
          <th style="text-align:center;" width="20%">����</th>
        </tr>
                <tr id="pro29">
          <td class="od">29</td>
          <td class="od">��ҳ�Ƽ�</td>
          <td class="od">indextj</td>
          <td class="od"><a href="javascript:;" onClick="update('29','��ҳ�Ƽ�','indextj');">�޸�</a> | <a href="javascript:layer_del('ȷ��Ҫɾ����','index.php?m=admin_news&c=delpro&id=29');">ɾ��</a></td>
        </tr>
                <tr id="pro16">
          <td class="od">16</td>
          <td class="od">ͷ��</td>
          <td class="od">t</td>
          <td class="od"><a href="javascript:;" onClick="update('16','ͷ��','t');">�޸�</a> | <a href="javascript:layer_del('ȷ��Ҫɾ����','index.php?m=admin_news&c=delpro&id=16');">ɾ��</a></td>
        </tr>
                <tr id="pro28">
          <td class="od">28</td>
          <td class="od">�Ƽ�</td>
          <td class="od">tj</td>
          <td class="od"><a href="javascript:;" onClick="update('28','�Ƽ�','tj');">�޸�</a> | <a href="javascript:layer_del('ȷ��Ҫɾ����','index.php?m=admin_news&c=delpro&id=28');">ɾ��</a></td>
        </tr>
              </table>
    </div>
  </div>
</div>
<script> 
function showdiv(div){
	$("#upid").val("");
	$("#nameid").val("");
	$("#valueid").val("");
	$.layer({
		type : 1,
		title :'���Թ���', 
		offset: ['100px', ''], 
		closeBtn : [0 , true], 
		area : ['470px','auto'],
		page : {dom :"#"+div}
	}); 
} 
function update(id,name,value){
	$("#upid").val(id);
	$("#nameid").val(name);
	$("#valueid").val(value);
	$("#submit").val('�޸�');
}
function check_form(myform){
	if (myform.name.value==""){ 
		parent.layer.msg('����д���ƣ�', 2, 8); 
		myform.name.focus();
		return (false);
	}	
	if (myform.value.value==""){
		parent.layer.msg('����д��ʶ����', 2, 8); 
		myform.name.focus();
		return (false);
	}	
}
function add_pro(){
	var codewebarr="";
	$("input[type='checkbox']:checked").each(function(){  
		if($.trim($(this).val())){
			if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
		} 
	}); 
	if(codewebarr==""){ 
		parent.layer.msg('������ѡ��һ��������', 2, 8);
	}else{
		$("#protype").val('add');$("#proid").val(codewebarr); 
		$.layer({
			type : 1,
			title : '������������',
			closeBtn : [0 , true], 
			offset : ['20%' , '30%'],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','auto'],
			page : {dom : '#property'}
		});  
	}
}
function del_pro(){
	var codewebarr="";
	$("input[type='checkbox']:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ����� 
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	}); 
	if(codewebarr==""){
		parent.layer.msg('������ѡ��һ��������', 2, 8);
	}else{
		$("#protype").val('del'); 
		$("#proid").val(codewebarr); 
		$.layer({
			type : 1,
			title : '����ȡ������',
			closeBtn : [0 , true], 
			offset : ['20%' , '30%'],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','auto'],
			page : {dom : '#property'}
		});  
	}
}
</script>
</body>
</html><?php }} ?>
