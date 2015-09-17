<?php /*%%SmartyHeaderCode:1509255e2d019172b01-04566423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bda5f591d9402b3f1d1f8a62cb21377fa4a3656a' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_evaluate_list.htm',
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
  'nocache_hash' => '1509255e2d019172b01-04566423',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d03b2abda0_21949073',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d03b2abda0_21949073')) {function content_55e2d03b2abda0_21949073($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<div class="infoboxp">
  <div class="infoboxp_top_bg"></div>
  <div class="admin_Filter"> 
	<span class="complay_top_span fl">测评试卷列表</span> 
    <!--高级搜索框-->
    <form action="index.php" name="myform" method="get" >
      <input name="m" value="admin_evaluate" type="hidden"/> 
      <input class="admin_Filter_search"  type="text" name="keyword"  size="25" style=" float:left">
      <input class="admin_Filter_bth"  type="submit" name="evaluate_search" value="检索"/>
    </form>
	<span class='admin_search_div'>
		<div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div>  
	</span>
    <a href="index.php?m=admin_evaluate&c=examup" class="admin_infoboxp_nav admin_infoboxp_tj">添加测评试卷</a><em class="admin-tit_line"></em> 
	<a href="index.php?m=admin_evaluate&c=group" class="admin_infoboxp_nav admin_infoboxp_gl">测评类别管理</a> 
	
	</div>
  
  	  <div class="search_select">
                                   
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">试卷类别</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_evaluate" class="admin_adv_search_cur">不限</a>
   		        
        </div>
        </div>
          
	  <div class="admin_adv_search_icon"><i class="admin_adv_search_icon_i">&nbsp;</i></div>
  </div> 
<div class="clear"></div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" target="supportiframe" name="myform" method="get" id='myform'>
        <input name="m" value="admin_evaluate" type="hidden"/>
        <input name="c" value="delevaluate" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th width="70">  <a href="index.php?m=admin_evaluate&order=asc&t=id">编号<img src="images/sanj2.jpg"/></a>  </th>
              <th width="130" align="left">测评类别</th>
              <th width="350" align="left">试卷标题</th>
              <th>  <a href="index.php?m=admin_evaluate&order=asc&t=ctime">发布时间<img src="images/sanj2.jpg"/></a>  </th>
              <th width="60">  <a href="index.php?m=admin_evaluate&order=asc&t=sort">排序<img src="images/sanj2.jpg"/></a>  </th>
              <th  class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
                    
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="3"><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_submit4"  type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
            <td colspan="6" class="digg"></td>
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
