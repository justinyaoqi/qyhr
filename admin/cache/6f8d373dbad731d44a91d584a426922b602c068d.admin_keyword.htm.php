<?php /*%%SmartyHeaderCode:277455e2cfdb059986-88950755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f8d373dbad731d44a91d584a426922b602c068d' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_keyword.htm',
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
  'nocache_hash' => '277455e2cfdb059986-88950755',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2cfff7ed099_41796227',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2cfff7ed099_41796227')) {function content_55e2cfff7ed099_41796227($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://localhost/qyhr/js/jscolor/jscolor.js"></script>
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js"></script>
<script src="http://localhost/qyhr/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<script src="js/show_pub.js"></script>
<script>
function keywords(key_name,type,color,size,bold,tuijian,num,id){
	$("#id").val(id);
	$("#key_name").val(key_name);
	$("#size").val(size);
	$("#type").val(type);
	if(color!=""){
		$("#color").val(color);
		$("#color").attr("style","background-color:#"+color);
	}else{
		$("#color").attr("style","");
		$("#color").val('');
	}
	$("#num").val(num);
	$("#bold_"+bold).attr("checked",true);
	$("#tuijian_"+tuijian).attr("checked",true);
	add_class('关键字管理','355','300','#status_div','');
}

</script>
<title>后台管理</title>
<!--[if IE 6]>
<script src="./js/png.js"></script>
<script>
  DD_belatedPNG.fix('.png,.header_bg,.header .logo, .left_menu h3 span,.shortcut_menu,.header .nav li a,.header .nav li,.admin_cz_bj,.admin_bg');
</script>
<![endif]-->
</head>
<body class="body_ifm">
<div id="status_div"  style="display:none;">
    <div id="infobox" style=" width:355px" >
      <form action="index.php?m=admin_keyword&c=save" target="supportiframe" method="post" id="formstatus">
      <input type="hidden" name="pytoken" value="6dd985061a91">
		<table cellspacing='2' cellpadding='3'>
			<tr><td style="width:90px">关键字名称：</td><td><input id="key_name" class="input-text" type="text" value=""   name="key_name"><font color="gray">例：phpyun</font></td></tr>
			<tr><td>关键字类型：</td><td><select id="type" name="type">
								<option value="1">微招聘</option>
								<option value="3">职位</option>
								<option value="4">公司</option>
								<option value="5">简历</option>
								<option value="8">微信搜索</option>
								<option value="12">问答</option>
								<option value="13">微简历</option>
							  </select></td></tr>
			<tr><td>字体大小：</td><td><input class="input-text" type="text" id="size" name="size" size="20" value="" /><font color="gray">例：12px</font></td></tr>
			<tr><td>字体颜色：</td><td>
            <input class="input-text color" readonly type="text" id="color" name="color" size="20" value="" /></td></tr>
			<tr><td>是否加粗：</td><td><input type="radio" name="bold" value="0" id="bold_0">&nbsp;否<input  id="bold_1" type="radio" name="bold" value="1">&nbsp;是 </td></tr>
			<tr><td>是否推荐：</td><td><input type="radio" name="tuijian" value="0"  id="tuijian_0">&nbsp;否<input type="radio" id="tuijian_1" name="tuijian" value="1" >&nbsp;是 </td></tr>
			<tr><td>搜索次数：</td><td><input class="input-text" type="text" id="num" name="num" size="10" value="" /><font color="gray">例：大前小后</font></td></tr>
			<tr style="text-align:center;margin-top:10px"><td colspan='2' > <input type="submit"  value='确认' class="submit_btn">
          &nbsp;&nbsp;<input type="button" onClick="layer.closeAll();" class="cancel_btn" value='取消'></td></tr>
		</table>
        <input type="hidden" name="id" id="id" value="" />
      </form>
    </div>
</div>
<div class="infoboxp"> 
<div class="infoboxp_top_bg"></div>
<div class="admin_Filter">
	<span class="complay_top_span fl">关键字管理</span>	
    <form action="index.php" name="myform" method="get">
      <input name="m" value="admin_keyword" type="hidden"/>
	  <input type="hidden" name="check" value=""/>
	  <input type="hidden" name="type" value=""/>
      <input class="company_job_text"  type="text" name="keyword"  size="25" style="float:left">
      <input class="admin_Filter_bth" type="submit" name="news_search" style="cursor:pointer;" value="检索"/>
	  <span class='admin_search_div'>
		  <div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div>   
	  </span>
       <a href="javascript:void(0)" onClick="keywords('','','','','','','','')" class="admin_infoboxp_tj">添加关键字</a>
    </form>  
</div>
	  <div class="search_select">
                                   
		                     
		                     
		                     
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">推荐</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_keyword" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&rec=1" 
                >已推荐</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&rec=2" 
                >未推荐</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">是否加粗</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_keyword" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&bold=1" 
                >是</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&bold=2" 
                >否</a> 
                    
        </div>
        </div>
                 	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">审核状态</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_keyword" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&check=1" 
                >已审核</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&check=2" 
                >未审核</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">数据类型</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_keyword" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&type=1" 
                >微招聘</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&type=3" 
                >职位</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&type=4" 
                >公司</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&type=5" 
                >简历</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&type=8" 
                >微信搜索</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&type=12" 
                >问答</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&type=13" 
                >微简历</a> 
                    
        </div>
        </div>
          
	  <div class="admin_adv_search_icon"><i class="admin_adv_search_icon_i">&nbsp;</i></div>
  </div> 
<div class="clear"></div>
 
<div class="table-list">
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php?m=admin_keyword&c=del" name="myform" method="post"  target="supportiframe" id='myform'>
    <input type="hidden" name="pytoken" id='pytoken' value="6dd985061a91">
      <table width="100%">
        <thead>
          <tr class="admin_table_top">
            <th width="50"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
            <th align="left">
			            <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&order=asc&t=id">编号<img src="images/sanj2.jpg"/></a>
            			</th>
            <th align="left" width="30%">热门关键字</th>
            <th align="left">关键字类型</th>
            <th align="left">
			            <a href="http://localhost/qyhr/admin/index.php?m=admin_keyword&order=asc&t=num">搜索次数<img src="images/sanj2.jpg"/></a>
            			</th>
            <th align="left">加粗</th>
            <th align="left">推荐</th>
            <th align="left">审核</th>
            <th align="left" class="admin_table_th_bg" width="80">操作</th>
          </tr>
        </thead>
        <tbody>
                <tr style="background:#f1f1f1;">
          <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
          <td colspan="2" >
          <label for="chkAll2">全选</label>&nbsp;
          <input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
          <td colspan="6" class="digg"></td>
        </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>
<div id="bg" class="admin_bg"></div>
</body>
</html><?php }} ?>
