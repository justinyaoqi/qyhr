<?php /*%%SmartyHeaderCode:246055e2d027b2af06-52287847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d422d1fe7588ea76f5a75059cb4521fd3765877' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_company.htm',
      1 => 1440861575,
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
  'nocache_hash' => '246055e2d027b2af06-52287847',
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'ratingarr' => 0,
    'key' => 0,
    'ratlist' => 0,
    'rows' => 0,
    'v' => 0,
    'moblie_promiss' => 0,
    'email_promiss' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d027dc9a63_03318683',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d027dc9a63_03318683')) {function content_55e2d027dc9a63_03318683($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script src="./js/png.js"></script>
<script>
  DD_belatedPNG.fix('.png,.admin_infoboxp_tj,');
</script>
<![endif]-->
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js"></script>
<script src="http://localhost/qyhr/js/layer/layer.min.js" language="javascript"></script>
<script type="text/javascript" src="js/admin_public.js"></script>
<script type="text/javascript" src="js/show_pub.js"></script>
<script>
function changeinput(uid,order){
	$("#"+uid).html("<input type='text'  align=\"middle\" size=\"3\" value='"+order+"' id='input"+uid+"' onBlur=\"changeorder('"+uid+"','"+order+"');\">");
	$("#input"+uid).focus();
}
function audall(){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ�����
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg('����δѡ���κ���Ϣ��', 2, 8);	return false;
	}else{
		$("input[name=uid]").val(codewebarr);
 		$("#statusbody").val('');
		$("input[name='status']").attr('checked',false);
		$.layer({
			type : 1,
			title :'��ҵ�û����', 
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','220px'],
			page : {dom :"#infobox2"}
		});
	}
}
function changeorder(uid,order){
	var norder = $("#input"+uid).val();
	var pytoken = $("#pytoken").val();
	if(order!=norder){
		$.post("index.php?m=admin_company&c=changeorder",{uid:uid,order:norder,pytoken:pytoken},function(data){});

	}
	$("#"+uid).html("<p onClick=\"changeinput('"+uid+"','"+norder+"');\">"+norder+"</p>");
}
$(function(){
	$(".status").click(function(){
  		var uid=$(this).attr("pid");
		var pytoken=$("#pytoken").val();
		var status=$(this).attr("status");
		$("#status_"+status).attr("checked",true);
		$("input[name=uid]").val(uid);
		$.post("index.php?m=admin_company&c=lockinfo",{uid:uid,pytoken:pytoken},function(msg){
			$("#lock_info").val(msg);
			status_div('�����û�','350','220');
		});
	});
	$(".user_status").click(function(){
		var uid=$(this).attr("pid");
		var status=$(this).attr("status");
		$("#status"+status).attr("checked",true);
		var pytoken=$("#pytoken").val();
		$("input[name=uid]").val(uid);
 		$.post("index.php?m=admin_company&c=lockinfo",{uid:uid,pytoken:pytoken},function(msg){
			$("#statusbody").val(msg);
			$.layer({
				type : 1,
				title :'��ҵ�û����', 
				closeBtn : [0 , true],
				border : [10 , 0.3 , '#000', true],
				area : ['350px','220px'],
				page : {dom :"#infobox2"}
			});
		});
	});
	$(".comrating").click(function(){
  		var uid=$(this).attr("data-uid");
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=admin_company&c=getstatis",{uid:uid,pytoken:pytoken},function(data){
			if(data)
			{
				var dataJson = eval("(" + data + ")"); 
				$('#job_num').val(dataJson.job_num);
				$('#down_resume').val(dataJson.down_resume);
				$('#editjob_num').val(dataJson.editjob_num);
				$('#invite_resume').val(dataJson.invite_resume);
				$('#breakjob_num').val(dataJson.breakjob_num);
				$('#oldetime').val(dataJson.vip_etime);
				$('#vipetime').text(dataJson.vipetime);
				$('#pay').val(dataJson.pay);
				$('#integral').val(dataJson.integral);
				$('#ratuid').val(uid);
				$("#ratingid").val(dataJson.rating);
				var ratingname = $("#ratingid").find("option:selected").text();
				$('#rating_name').val(ratingname);
				$.layer({
					type : 1,
					title :'��ҵ��Ա�ȼ��޸�', 
					closeBtn : [0 , true],
					border : [10 , 0.3 , '#000', true],
					area : ['680px','265px'],
					offset: ['50px', ''],
					page : {dom :"#comrating"}
				});
			}else{
				parent.layer.msg('�û���Ϣ��ȡʧ�ܣ�', 2, 8);	return false;
			}
		});
	});
});
function uprating(id){
	var pytoken=$("#pytoken").val();
	if(id)
	{
		$.post("index.php?m=admin_company&c=getrating",{id:id,pytoken:pytoken},function(data){
			if(data)
			{
				var dataJson = eval("(" + data + ")"); 
				$('#job_num').val(dataJson.job_num);
				$('#down_resume').val(dataJson.resume);
				$('#editjob_num').val(dataJson.editjob_num);
				$('#invite_resume').val(dataJson.interview);
				$('#breakjob_num').val(dataJson.breakjob_num);
				$('#vipetime').text(dataJson.vipetime);
				$('#oldetime').val(dataJson.oldetime);
				var ratingname = $("#ratingid").find("option:selected").text();
				$('#rating_name').val(ratingname);
			}
		});
	}
}
</script>
<title>��̨����</title>
</head>
<body class="body_ifm">
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

<div id="status_div"  style="display:none; width: 320px;text-align:center; ">
  <div class="" style=" margin-top:10px; "  > 
      <form action="index.php?m=admin_company&c=lock" target="supportiframe" method="post" id="formstatus">
        <table cellspacing='2' cellpadding='3'>
          <tr>
            <td><div style="width:80px; text-align:right; font-weight:bold">����������</div></td>
            <td align="left" style="padding:10px 0;"><label for="status_1">
              <input type="radio" name="status" value="1" id="status_1" >
              ����</label>
              <label for="status_2">
              <input type="radio" name="status" value="2" id="status_2">
              ����</label></td>
          </tr>
          <tr>
            <td><div style="width:80px; text-align:right; font-weight:bold">����˵����</div></td>
            <td align="left"><textarea id="lock_info"  name="lock_info" cols="30" rows="3"></textarea></td>
          </tr>
          <tr style="text-align:center;margin-top:10px">
            <td colspan='2' ><input type="submit"  value='ȷ��' class="submit_btn">
              &nbsp;&nbsp;
              <input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></td>
          </tr>
        </table>
		<input type="hidden" name="pytoken" value="6dd985061a91">
        <input name="uid" value="0" type="hidden">
      </form> 
  </div>
</div>
<div id="comrating"  style="display:none; width: 680px; ">  
      <form action="index.php?m=admin_company&c=uprating" target="supportiframe" method="post" id="formstatus">
       <table cellspacing='1' cellpadding='1' class="admin_company_table">
          <tr>
            <td align="right"><span style="font-weight:bold;">��Ա�ȼ���</span></td>
            <td align="left">
			<select name="rating" id="ratingid" onchange="uprating(this.value);">
						<option value="3">��ѻ�Ա</option>
						<option value="4">ͭ�ƻ�Ա</option>
						<option value="5">���ƻ�Ա</option>
						<option value="6">���ƻ�Ա</option>
						</select>
			</td>
			 <td align="right" >�˻����֣�</td>
			<td><input type="text" name="integral"  id="integral" size="15" class="admin_c_input-tex" value="" /></td>
          </tr>
	<tr class="admin_table_trbg" >
		 <td align="right"><span style="font-weight:bold;">��Ա����ʱ�䣺</span></td>
		<td><p id="vipetime"></p></td>
		<td align="right">�ӳ���Ա��Ч�ڣ�</td>
		<td><input type="text" name="addday"  style="width:40px;" class="admin_c_input-tex"> ��</td>
	</tr> 

    <tr>
		<td align="right">ʣ��ְλ����</td>
		<td><input type="text" name="job_num"  id="job_num" size="15" class="admin_c_input-tex" value="" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		<td align="right">ʣ����������</td>
		<td><input type="text" name="down_resume"  id="down_resume" size="15" class="admin_c_input-tex" value="" /></td>
	</tr>
	<tr class="admin_table_trbg" >
		<td align="right">�޸�ְλ����</td>
		<td><input type="text" name="editjob_num"  id="editjob_num" size="15" class="admin_c_input-tex" value="" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		<td align="right">�����˲���������</td>
		<td><input type="text" name="invite_resume"  id="invite_resume" size="15" class="admin_c_input-tex" value="" /></td>
	</tr>
    <tr>
		<td align="right">ˢ��ְλ����</td>
		<td colspan="3"><input type="text" name="breakjob_num"  id="breakjob_num" size="15" class="admin_c_input-tex" value="" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>

	</tr>
          <tr style="text-align:center;margin-top:10px">
            <td colspan='4' ><input type="submit"  value='ȷ��' class="submit_btn">
              &nbsp;&nbsp;
              <input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></td>
          </tr>
        </table>
		<input type="hidden" name="pytoken" value="6dd985061a91">
		<input type="hidden" name="rating_name" id="rating_name" value="">
		<input type="hidden" name="oldetime" id="oldetime" value="">
        <input name="ratuid" id="ratuid" value="0" type="hidden">
      </form> 
</div>
<div id="infobox2"  style="display:none; width: 350px; ">  
      <form action="index.php?m=admin_company&c=status" target="supportiframe" method="post" id="formstatus">
       <table cellspacing='2' cellpadding='3'>
          <tr>
            <td><div style="width:80px; text-align:right; font-weight:bold">��˲�����</div></td>
            <td align="left" style="padding:10px 0;"><label for="status0"><input type="radio" name="status" value="0" id="status0" >δ���</label>
        <label for="status1"><input type="radio" name="status" value="1" id="status1" >��ͨ��</label>
        <label for="status3"><input type="radio" name="status" value="3" id="status3">δͨ��</label></td>
          </tr>
          <tr>
            <td><div style="width:80px; text-align:right; font-weight:bold">���˵����</div></td>
            <td align="left"><textarea id="statusbody"  name="statusbody" cols="30" rows="3"></textarea></td>
          </tr>
          <tr style="text-align:center;margin-top:10px">
            <td colspan='2' ><input type="submit"  value='ȷ��' class="submit_btn">
              &nbsp;&nbsp;
              <input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></td>
          </tr>
        </table>
		<input type="hidden" name="pytoken" value="6dd985061a91">
        <input name="uid" value="0" type="hidden">
      </form> 
</div>
<div class="infoboxp"> 
<div class="infoboxp_top_bg"></div>
 <form action="index.php" name="myform" method="get" >
<div class="admin_Filter"> 
<input type="hidden" name="m" value="admin_company"/>
<input type="hidden" name="status" value=""/>
<input type="hidden" name="rec" value=""/>
<input type="hidden" name="time" value=""/>
<input type="hidden" name="rating" value=""/>
<span class="complay_top_span fl">��˾����</span>	
  <div class="admin_Filter_span">�������ͣ�</div>
  <div class="admin_Filter_text formselect" did="dtype"> 
  <input type="button"  value="��ҵ����"  class="admin_Filter_but" id="btype">
  		   <input type="hidden" name="com_type" id="type" value="1"/><div class="admin_Filter_text_box" style="display:none" id="dtype">
			  <ul>
				  <li><a href="javascript:void(0)" onClick="formselect('1','type','��ҵ����')">��ҵ����</a></li>
				  <li><a href="javascript:void(0)" onClick="formselect('2','type','�û�����')">�û�����</a></li>	
				  <li><a href="javascript:void(0)" onClick="formselect('3','type','��ϵ��')">��ϵ��</a></li>	
				  <li><a href="javascript:void(0)" onClick="formselect('4','type','��ϵ�绰')">��ϵ�绰</a></li>	
				  <li><a href="javascript:void(0)" onClick="formselect('5','type','�û�����')">�û�����</a></li>			  
			  </ul>  
		  </div>
    </div>	
    <input type="text" placeholder="������Ҫ�����Ĺؼ���" name="keyword" class="admin_Filter_search">
	<input type="submit" value="����" class="admin_Filter_bth"/>
	  <div class="admin_search_div" ><div class="admin_adv_search"><div class="admin_adv_search_bth">�߼�����</div></div></div>
       <div class="admin_search_div_tianj" > <a href="index.php?m=admin_company&c=add" class="admin_infoboxp_tj">��ӻ�Ա</a> </div>
  </div> 
  </form> 
 	  <div class="search_select">
                                   
		                     
		                     
		                     
		                     
		                     
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">֪����ҵ</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_company" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_company&rec=1" 
                >��</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&rec=2" 
                >��</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">���״̬</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_company" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_company&status=1" 
                >�����</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&status=2" 
                >������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&status=3" 
                >δ���</a> 
                    
        </div>
        </div>
                 	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">��Ա�ȼ�</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_company" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_company&rating=3" 
                >��ѻ�Ա</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&rating=4" 
                >ͭ�ƻ�Ա</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&rating=5" 
                >���ƻ�Ա</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&rating=6" 
                >���ƻ�Ա</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">����ʱ��</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_company" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_company&time=1" 
                >7����</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&time=2" 
                >һ������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&time=3" 
                >������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&time=4" 
                >һ����</a> 
                    
        </div>
        </div>
                 	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">�����¼</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_company" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_company&lotime=1" 
                >����</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&lotime=3" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&lotime=7" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&lotime=15" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&lotime=30" 
                >���һ����</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">���ע��</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_company" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_company&adtime=1" 
                >����</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&adtime=3" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&adtime=7" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&adtime=15" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_company&adtime=30" 
                >���һ����</a> 
                    
        </div>
        </div>
          
	  <div class="admin_adv_search_icon"><i class="admin_adv_search_icon_i">&nbsp;</i></div>
  </div> 
<div class="clear"></div>
  <div class="table-list" style="color:#898989">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
      <input type="hidden" name="pytoken"  id='pytoken' value="6dd985061a91">
        <input name="m" value="admin_company" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll' onclick='CheckAll(this.form)'/> </label></th>
              <th>  <a href="http://localhost/qyhr/admin/index.php?m=admin_company&order=asc&t=uid">�û�ID<img src="images/sanj2.jpg"/></a>  </th>
              <th align="left">��ҵ��/�û���</th>
              <th align="left">�ȼ�/����ʱ��</th>
              <th>��ϵ�绰/�û�����</th>
              <th>��ϵ��</th>
              <th>��ҵ��֤</th>
              <th>��¼/ע��</th>
              <th>״̬</th>
              <th>��Ϊ����</th>
              <th>��ҳ����</th>
              <th>֪����ҵ</th>
              <th>���/����</th>
              <th class="admin_table_th_bg">����</th>
            </tr>
          </thead>
          <tbody>
                 <tr style="background:#f1f1f1;">
          <td align="center"><label for="chkall2"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></label></td>
         <td colspan="5" >
         <label for="chkAll2">ȫѡ</label>
          <input class="admin_submit4" type="button" name="delsub" value="�������" onClick="audall();" />
         <input class="admin_submit4" type="button" name="delsub" value="ɾ����ѡ" onClick="return really('del[]')" />
         </td>
            <td colspan="11" class="digg"></td>
          </tr>
          </tbody>

        </table>
      </form>
    </div>
  </div>
</div>
</body>
</html>
<?php }} ?>
