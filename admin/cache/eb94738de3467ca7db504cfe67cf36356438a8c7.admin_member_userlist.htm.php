<?php /*%%SmartyHeaderCode:2454255e2d026a75a04-09852319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb94738de3467ca7db504cfe67cf36356438a8c7' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_member_userlist.htm',
      1 => 1440861574,
      2 => 'file',
    ),
    'cee5aac44cd0fe3d3c9338011fd89b131aa5ff76' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\\\app\\template\\admin\\member_send_email.htm',
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
  'nocache_hash' => '2454255e2d026a75a04-09852319',
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'get_type' => 0,
    'userrows' => 0,
    'key' => 0,
    'v' => 0,
    'email_promiss' => 0,
    'moblie_promiss' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d026c1db42_41053069',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d026c1db42_41053069')) {function content_55e2d026c1db42_41053069($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
$(function(){
	$(".status").click(function(){
		$("input[name=pid]").val($(this).attr("pid"));
		var uid=$(this).attr("pid");
		var status=$(this).attr("status");
		$("#status"+status).attr("checked",true);
		$("input[name=uid]").val(uid);
		$.get("index.php?m=user_member&c=lockinfo&uid="+uid,function(msg){
			$("#alertcontent").val($.trim(msg));
			status_div('�����û�','350','220');
		});
	});
});
function SendMsg(){
	var codewebarr="";
	$(".check_all:checked").each(function(){
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	$("#userid").val(codewebarr);
	setTimeout(function(){$('#checkform').submit()},0);
}

</script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<form action="index.php?m=admin_message&c=show" method="post" id='checkform'>
  <input type="hidden" name="userid" id="userid" value="">
  <input type="hidden" name="pytoken" value="6dd985061a91">
</form>
<script>
function send_email(email){
	$("#email_user").val(email);
	$.layer({
		type : 1,
		title :'�����ʼ�', 
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['410px','250px'],
		page : {dom :"#email_div"}
	});
}
function send_moblie(moblie){
	$("#userarr").val(moblie);
	$.layer({
		type : 1,
		title :'���Ͷ���', 
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['410px','220px'],
		page : {dom :"#moblie_div"}
	});
}

function confirm_email(msg,name){
	var chk_value=[];
	var email=moblie=[];
	$('input[name="del[]"]:checked').each(function(){
		chk_value.push($(this).val());
	});
	if(chk_value.length==0){
		parent.layer.msg("��ѡ���˻���",2,8);return false;
	}else{
		var cf=parent.layer.confirm(msg,function(){
			parent.layer.close(cf);
			if(name=='email_div'){
				$('input[name="del[]"]:checked').each(function(){
					email.push($(this).attr('email'));
				});
				$("#email_user").val(email);
				$.layer({
					type : 1,
					title :'�����ʼ�', 
					closeBtn : [0 , true],
					border : [10 , 0.3 , '#000', true],
					area : ['410px','250px'],
					page : {dom :"#email_div"}
				});
			}else{
				$('input[name="del[]"]:checked').each(function(){
					moblie.push($(this).attr('moblie'));
				});
				$("#userarr").val(moblie);
				$.layer({
					type : 1,
					title :'���Ͷ���', 
					closeBtn : [0 , true],
					border : [10 , 0.3 , '#000', true],
					area : ['410px','220px'],
					page : {dom :"#moblie_div"}
				});
			}
		});
	}
}
function emailload(){
	if($.trim($("input[name='email_title']").val())==''){
		parent.layer.msg('�������ʼ����⣡', 2, 8);return false;
	}
	if($.trim($("#content").val())==''){
		parent.layer.msg('�������ʼ����ݣ�', 2, 8);return false;
	}
	layer.closeAll();
	parent.layer.load('ִ���У����Ժ�...',0);
}
function moblieload(){
	if($.trim($("#mcontent").val())==''){
		parent.layer.msg('������������ݣ�', 2, 8);return false;
	}
	layer.closeAll();
	parent.layer.load('ִ���У����Ժ�...',0);
}
</script>
<div id="moblie_div" style=" display:none;">
	<form id="formstatus" method="post" target="supportiframe" action="index.php?m=information&c=save" onsubmit="return moblieload();" >
	  <table class="table_form ">
			<tr><td>�������ݣ�</td><td><textarea name="content" id="mcontent" style="width:320px;height:90px;"class="text"></textarea></td></tr>
			<tr><td colspan='2' style='border-bottom:none'>
				<div class="admin_Operating_sub" style="margin-top:0px">
				<input class="submit_btn" type="submit" name='message_send' value="ȷ��">
				<input  class="cancel_btn" type="button" value="ȡ��" onclick="layer.closeAll();">
				</div>
			</td></tr>
			<input type="hidden" name="pytoken" value="6dd985061a91">
			<input type="hidden" id='userarr' name="userarr">
			<input type="hidden" value="4" name="all">
	  </table>
	 </form>
</div>
<div id="email_div" style=" display:none;">
	<form id="formstatus" method="post" target="supportiframe" action="index.php?m=email&c=send" onsubmit="return emailload();" >
	  <table class="table_form "  id="">
			<tr><td>�ʼ����⣺</td><td><input name="email_title"  class="input-text" type="text" size="40"></td></tr>
			<tr><td>�ʼ����ݣ�</td><td><textarea name="content" id="content" style="width:320px;height:90px;" class="text"></textarea></td></tr>
			<tr><td colspan='2' style='border-bottom:none'>
				<div class="admin_Operating_sub" style="margin-top:0px">
				<input class="submit_btn" type="submit" name='email_send' value="ȷ��">
				<input  class="cancel_btn" type="button" value="ȡ��" onclick="layer.closeAll();">
				</div>
			</td></tr>
			<input type="hidden" name="pytoken" value="6dd985061a91">
			<input type="hidden" id='email_user' name="email_user">
			<input type="hidden" value="3" name="all[]">
	  </table>
	 </form>
</div>

<div id="status_div"  style="display:none; width: 350px; ">
  <div class="" style=" margin-top:10px; "  >
    <form action="index.php?m=user_member&c=status" target="supportiframe" method="post" id="formstatus">
      <table cellspacing='2' cellpadding='3' style="margin:0 auto">
        <tr>
          <td><div style="width:80px; text-align:right; font-weight:bold">����������</div></td>
          <td>
         		<label for="status1"><input type="radio" name="status" value="1" id="status1" >����</label>
            	<label for="status2"><input type="radio" name="status" value="2" id="status2">����</label>
          </td>
        </tr>
        <tr>
          <td><div style="width:80px; text-align:right; font-weight:bold">����˵����</div></td>
          <td><textarea id="alertcontent" name="lock_info" cols="30" rows="5"></textarea></td>
        </tr>
        <tr style="text-align:center;margin-top:10px">
          <td colspan='2' ><input type="submit"  value='ȷ��' class="submit_btn">
            &nbsp;&nbsp;
            <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></td>
        </tr>
      </table>
      <input type="hidden" name="pytoken" value="6dd985061a91">
      <input name="uid" value="0" type="hidden">
    </form>
  </div>
</div>
<div class="infoboxp">
  <div class="infoboxp_top_bg"></div>
  <form action="index.php" name="myform" method="get">
    <input name="m" value="user_member" type="hidden"/>
    <div class="admin_Filter">
    	<span class="complay_top_span fl">���˻�Ա�б�</span>
      <div class="admin_Filter_span">�������ͣ�</div>
      <div class="admin_Filter_text formselect" did='dtype'>
        <input type="button"  value="�û���"  class="admin_Filter_but" id="btype">
        <input type="hidden" name="type" id="type" value='1'/>
        <div class="admin_Filter_text_box" style="display:none" id="dtype">
          <ul> 
            <li><a href="javascript:void(0)" onClick="formselect('1','type','�û���')">�û���</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('2','type','����')">����</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('3','type','EMAIL')">EMAIL</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('4','type','�ֻ���')">�ֻ���</a></li>
          </ul>
        </div>
      </div>
      <input type="text" placeholder="������Ҫ�����Ĺؼ���" value="" name='keyword' class="admin_Filter_search">
      <input type="submit" name='search' value="����" class="admin_Filter_bth">
      <span class='admin_search_div'>
      <div class="admin_adv_search">
        <div class="admin_adv_search_bth">�߼�����</div>
      </div>
      </span> <a href="index.php?m=user_member&c=add" class="admin_infoboxp_tj" style="margin-top:0px;">��ӻ�Ա</a> </div>
  </form>
  	  <div class="search_select">
                                   
		                     
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">�����¼</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=user_member" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=user_member&lotime=1" 
                >����</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=user_member&lotime=3" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=user_member&lotime=7" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=user_member&lotime=15" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=user_member&lotime=30" 
                >���һ����</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">���ע��</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=user_member" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=user_member&adtime=1" 
                >����</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=user_member&adtime=3" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=user_member&adtime=7" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=user_member&adtime=15" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=user_member&adtime=30" 
                >���һ����</a> 
                    
        </div>
        </div>
          
	  <div class="admin_adv_search_icon"><i class="admin_adv_search_icon_i">&nbsp;</i></div>
  </div> 
<div class="clear"></div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php"  target="supportiframe" name="myform" method="get" id='myform'>
        <input name="m" value="user_member" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th align="left">  <a href="index.php?m=user_member&order=asc&t=uid">�û�ID<img src="images/sanj2.jpg"/></a> </th>
              <th align="left">�û���</th>
              <th align="left">����</th>
              <th align="left">EMAIL/�ֻ���</th>
              <th>  <a href="index.php?m=user_member&order=asc&t=reg_date">ע��ʱ��<img src="images/sanj2.jpg"/></a> </th>
              <th>  <a href="index.php?m=user_member&order=asc&t=login_date">�����¼ʱ��<img src="images/sanj2.jpg"/></a> </th>
              <th>��¼IP</th>
              <th>���/����</th>
              <th class="admin_table_th_bg">����</th>
            </tr>
          </thead>
          <tbody>
                    <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="4" ><label for="chkAll2">ȫѡ</label>
              &nbsp;
              <input class="admin_submit4" type="button" name="delsub" value="ɾ����ѡ"  onclick="return really('del[]')"/>
                            <input class="admin_submit4" type="button"  value="���ʼ�"  onclick="return confirm_email('ȷ�����ʼ���','email_div')"/>
                                          <input class="admin_submit4" type="button" value="����Ϣ"  onclick="return confirm_email('ȷ������Ϣ��','moblie_div')"/>
              </td>
            <td colspan="7" class="digg"></td>
          </tr>
            </tbody>
        </table>
        <input type="hidden" name="pytoken" id='pytoken' value="6dd985061a91">
      </form>
    </div>
  </div>
</div>
</body>
</html>
<?php }} ?>
