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
	$(".check_all:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		 parent.layer.msg('您还未选择任何信息！', 2, 8);	return false;
	}else{
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=reward_list&c=statuss",{allid:codewebarr,status:status,pytoken:pytoken},function(data){
			if(data=="1") {
				parent.layer.msg('批量审核成功！', 2, 9,function(){window.location.reload();});

			}else{
				parent.layer.msg('批量取消审核成功！', 2, 9,function(){window.location.reload();});
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
			status_div('兑换记录审核','450','360');
		});
	});	
});
  
</script>

<title>后台管理</title>
</head>
<body class="body_ifm">
<div id="status_div"  style="display:none; width: 450px; "> 
     <div id="infobox"> 
      <form action="index.php?m=reward_list&c=status" target="supportiframe" method="post" id="formstatus"> 
      <input type="hidden" name="pytoken" value="6dd985061a91">
		<div class="admin_Operating_sh" style="padding:10px;">
        <div style="margin-bottom:10px;"> 联系电话：<input class="input-text" type="text" id="linktel" name="linktel" size="30" value="" /> </div>
         <div>联 系 人：<input class="input-text" type="text" id="linkman" name="linkman" size="30" value="" /> </div>
         <div>备注：<textarea id="body" name="body" class="admin_Operating_text"></textarea> </div>
      
		<div style="margin-top:5px;">审核操作：
        <label for="status0"><input type="radio" name="status" value="0" id="status0" >未审核</label>
        <label for="status1"><input type="radio" name="status" value="1" id="status1" >正常</label>
        <label for="status2"><input type="radio" name="status" value="2" id="status2">未通过</label></div>
		<div class="admin_Operating_sh_sm">审核说明：</div>
        <div><textarea id="alertcontent" name="statusbody" class="admin_Operating_text"></textarea></div>
		<div class="admin_Operating_sub"> <input type="submit"  value='确认' class="submit_btn" >
          &nbsp;&nbsp;<input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='取消'></div>
		</div>  
        <input name="id" value="0" type="hidden"> 
      </form>
    </div> 
</div>  
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
    <form action="index.php" name="myform" method="get">
      <input name="m" value="reward_list" type="hidden"/>
      <div class="admin_Filter">
	   <span class="complay_top_span fl">兑换奖品记录</span>
	    <div class="admin_Filter_span">检索类型：</div>
        <div class="admin_Filter_text formselect" did='dtype'>
          <input type="button" value="商品名称" class="admin_Filter_but" id="btype">
         <input type="hidden" name="type" id="type" value="1"/>
          <div class="admin_Filter_text_box" style="display:none" id='dtype'>
            <ul> 
              <li><a href="javascript:void(0)" onClick="formselect('1','type','商品名称')">商品名称</a></li>
              <li><a href="javascript:void(0)" onClick="formselect('2','type','会员名称')">会员名称</a></li>
            </ul>
          </div>
        </div>
        <input type="text" placeholder="输入你要搜索的关键字" value="" name='keyword' class="admin_Filter_search">
        <input type="submit" value="搜索" class="admin_Filter_bth">
        <span class='admin_search_div'>
        <div class="admin_adv_search">
          <div class="admin_adv_search_bth">高级搜索</div>
        </div> 
        </span> 
        </div>
    </form>
  	  <div class="search_select">
                                   
		                     
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">审核状态</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=reward_list" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=reward_list&status=-1" 
                >未审核</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=reward_list&status=1" 
                >已审核</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=reward_list&status=2" 
                >未通过</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">兑换时间</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=reward_list" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=reward_list&change=1" 
                >今天</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=reward_list&change=3" 
                >最近三天</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=reward_list&change=7" 
                >最近七天</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=reward_list&change=15" 
                >最近半月</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=reward_list&change=30" 
                >最近一个月</a> 
                    
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
              <th align="left">商品名称</th>
              <th>会员名称</th>
              <th>兑换数量</th>
              <th>兑换积分</th>             
              <th>兑换时间</th>              
              <th>联系人</th>  
              <th>联系电话</th>                             
              <th>审核状态</th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
                    <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_submit4"  type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
            &nbsp;&nbsp;
            <input class="admin_submit4" type="button" name="delsub" value="批量审核" onClick="audall('1');" />
            &nbsp;&nbsp;
            <input class="admin_submit6" type="button" name="delsub" value="批量取消审核" onClick="audall('0');" /></td>
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
