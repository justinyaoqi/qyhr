<?php /*%%SmartyHeaderCode:1717755e2d0242e6331-59964298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eb6b35d3fbf00fe75a0b640e32dd8768a6a32db' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_zhaopinhui_list.htm',
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
  'nocache_hash' => '1717755e2d0242e6331-59964298',
  'variables' => 
  array (
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d0243bd5c4_72035778',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d0243bd5c4_72035778')) {function content_55e2d0243bd5c4_72035778($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js"></script>
<script src="http://localhost/qyhr/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
  <div class="admin_Filter">
    <span class="complay_top_span fl">招聘会列表</span> 
      <form action="index.php" name="myform" method="get">
        <input name="m" value="zhaopinhui" type="hidden"/>
		<input type="hidden" name="status" value=""/>
        <span class="admin_Filter_span"> 检索类型：</span>  
		<div class="admin_Filter_text formselect"  did='dtype'>
		  <input type="button" value="招聘会标题" class="admin_Filter_but"  id="btype">
		  <input type="hidden" id='type' value="1" name='type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','type','招聘会标题')">招聘会标题</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','type','举办会场')">举办会场</a></li> 
			  </ul>  
		  </div>
		</div> 
        <input class="admin_Filter_search" type="text" name="keyword"  size="25" style="float:left">
        <input class="admin_Filter_bth" type="submit" name="news_search" value="检索"/> 
      </form>
	  <span class='admin_search_div'>
	  <div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div>  	   
	</span>
     <a href="index.php?m=zhaopinhui&c=add"  class="admin_infoboxp_tj" style="margin-top:0px;">添加招聘会</a>
   </div>
	  <div class="search_select">
                                   
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">审核状态</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=zhaopinhui" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=zhaopinhui&status=0" 
                >未开始</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=zhaopinhui&status=1" 
                >已开始</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=zhaopinhui&status=2" 
                >已结束</a> 
                    
        </div>
        </div>
          
	  <div class="admin_adv_search_icon"><i class="admin_adv_search_icon_i">&nbsp;</i></div>
  </div> 
<div class="clear"></div>   
   
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?m=zhaopinhui&c=del" name="myform" method="post" target="supportiframe" id='myform'>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' />
                </label></th>
              <th>编号</th>
              <th>招聘会标题</th>
              <th>开始时间</th>
              <th>结束时间</th>
              <th>举办会场</th>
              <th>企业数</th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
                    <tr style="background: #f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
            <td colspan="5" class="digg"></td>
          </tr>
          </tbody>
          
        </table>
		<input type="hidden" name="pytoken"  id="pytoken" value="6dd985061a91">
      </form>
    </div>
  </div>
</div>
</body>
</html>
<?php }} ?>
