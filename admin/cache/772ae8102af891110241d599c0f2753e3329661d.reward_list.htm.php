<?php /*%%SmartyHeaderCode:470455e2d0221a8af1-64346907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '772ae8102af891110241d599c0f2753e3329661d' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\reward_list.htm',
      1 => 1440861575,
      2 => 'file',
    ),
    '5fdb1c925bebfdc13bff21146ec8bfec4b2f52d6' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_search.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '470455e2d0221a8af1-64346907',
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d0222f82c5_28768389',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d0222f82c5_28768389')) {function content_55e2d0222f82c5_28768389($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
function audall(status){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ�����
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		 parent.layer.msg('����δѡ���κ���Ϣ��', 2, 8);	return false;
	}else{
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=reward_list&c=statuss",{allid:codewebarr,status:status,pytoken:pytoken},function(data){
			if(data=="1") {
				parent.layer.msg('������˳ɹ���', 2, 9,function(){window.location.reload();});

			}else{
				parent.layer.msg('����ȡ����˳ɹ���', 2, 9,function(){window.location.reload();});
			}
		});
	}
} 
$(function(){
	$(".status").click(function(){ 
 		$("input[name=pid]").val($(this).attr("pid"));
		var id=$(this).attr("pid");
		var status=$(this).attr("status"); 						
		var linktel=$(this).attr("linktel"); 
		var linkman=$(this).attr("linkman"); 
		var body=$(this).attr("body"); 		
		$("#linktel").val(linktel);
		$("#linkman").val(linkman);
		$("#body").val(body);
		$("#status"+status).attr("checked",true);
		$("input[name=id]").val(id);  	 
		$.get("index.php?m=reward_list&c=statusbody&id="+id,function(msg){
			$("#alertcontent").val(msg);
			status_div('�һ���¼���','450','360');
		});
	});	
});
  
</script>

<title>��̨����</title>
</head>
<body class="body_ifm">
<div id="status_div"  style="display:none; width: 450px; "> 
     <div id="infobox"> 
      <form action="index.php?m=reward_list&c=status" target="supportiframe" method="post" id="formstatus"> 
      <input type="hidden" name="pytoken" value="6dd985061a91">
		<div class="admin_Operating_sh" style="padding:10px;">
        <div style="margin-bottom:10px;"> ��ϵ�绰��<input class="input-text" type="text" id="linktel" name="linktel" size="30" value="" /> </div>
         <div>�� ϵ �ˣ�<input class="input-text" type="text" id="linkman" name="linkman" size="30" value="" /> </div>
         <div>��ע��<textarea id="body" name="body" class="admin_Operating_text"></textarea> </div>
      
		<div style="margin-top:5px;">��˲�����
        <label for="status0"><input type="radio" name="status" value="0" id="status0" >δ���</label>
        <label for="status1"><input type="radio" name="status" value="1" id="status1" >����</label>
        <label for="status2"><input type="radio" name="status" value="2" id="status2">δͨ��</label></div>
		<div class="admin_Operating_sh_sm">���˵����</div>
        <div><textarea id="alertcontent" name="statusbody" class="admin_Operating_text"></textarea></div>
		<div class="admin_Operating_sub"> <input type="submit"  value='ȷ��' class="submit_btn" >
          &nbsp;&nbsp;<input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></div>
		</div>  
        <input name="id" value="0" type="hidden"> 
      </form>
    </div> 
</div>  
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
    <form action="index.php" name="myform" method="get">
      <input name="m" value="reward_list" type="hidden"/>
      <div class="admin_Filter">
	   <span class="complay_top_span fl">�һ���Ʒ��¼</span>
	    <div class="admin_Filter_span">�������ͣ�</div>
        <div class="admin_Filter_text formselect" did='dtype'>
          <input type="button" value="��Ʒ����" class="admin_Filter_but" id="btype">
         <input type="hidden" name="type" id="type" value="1"/>
          <div class="admin_Filter_text_box" style="display:none" id='dtype'>
            <ul> 
              <li><a href="javascript:void(0)" onClick="formselect('1','type','��Ʒ����')">��Ʒ����</a></li>
              <li><a href="javascript:void(0)" onClick="formselect('2','type','��Ա����')">��Ա����</a></li>
            </ul>
          </div>
        </div>
        <input type="text" placeholder="������Ҫ�����Ĺؼ���" value="" name='keyword' class="admin_Filter_search">
        <input type="submit" value="����" class="admin_Filter_bth">
        <span class='admin_search_div'>
        <div class="admin_adv_search">
          <div class="admin_adv_search_bth">�߼�����</div>
        </div> 
        </span> 
        </div>
    </form>
  	  <div class="search_select">
                                   
		                     
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">���״̬</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=reward_list" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=reward_list&status=-1" 
                >δ���</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=reward_list&status=1" 
                >�����</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=reward_list&status=2" 
                >δͨ��</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">�һ�ʱ��</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=reward_list" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=reward_list&change=1" 
                >����</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=reward_list&change=3" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=reward_list&change=7" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=reward_list&change=15" 
                >�������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=reward_list&change=30" 
                >���һ����</a> 
                    
        </div>
        </div>
          
	  <div class="admin_adv_search_icon"><i class="admin_adv_search_icon_i">&nbsp;</i></div>
  </div> 
<div class="clear"></div> 	
 
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" target="supportiframe" name="myform" method="get" id='myform'>
      <input type="hidden" name="m" value="reward_list">
      <input type="hidden" name="c" value="del">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th><label for="chkall">
                <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)'/>
                </label></th>
              <th align="left">  <a href="http://localhost/qyhr/admin/index.php?m=reward_list&order=asc&t=id">ID<img src="images/sanj2.jpg"/></a>  </th>
              <th align="left">��Ʒ����</th>
              <th>��Ա����</th>
              <th>�һ�����</th>
              <th>�һ�����</th>             
              <th>�һ�ʱ��</th>              
              <th>��ϵ��</th>  
              <th>��ϵ�绰</th>                             
              <th>���״̬</th>
              <th class="admin_table_th_bg">����</th>
            </tr>
          </thead>
          <tbody>
          
                    <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">ȫѡ</label>&nbsp;
            <input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ" onClick="return really('del[]')" />
            &nbsp;&nbsp;
            <input class="admin_submit4" type="button" name="delsub" value="�������" onClick="audall('1');" />
            &nbsp;&nbsp;
            <input class="admin_submit6" type="button" name="delsub" value="����ȡ�����" onClick="audall('0');" /></td>
            <td colspan="9" class="digg"></td>
          </tr>
          </tbody>
          
        </table>
        <input type="hidden" name="pytoken"  id='pytoken'  value="6dd985061a91">
      </form>
    </div>
  </div>
</div>
</body>
</html>
<?php }} ?>
