<?php /*%%SmartyHeaderCode:267055e2d022c3fba4-34156967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9def9a7fde6ab4db30cc4cb1245593873c2d361c' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_message.htm',
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
  'nocache_hash' => '267055e2d022c3fba4-34156967',
  'variables' => 
  array (
    'config' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d022d69027_19339693',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d022d69027_19339693')) {function content_55e2d022d69027_19339693($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js"></script>
<script src="http://localhost/qyhr/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<script src="js/show_pub.js"></script>
<title>后台管理</title>
<script>
function showbox(title,msg){
	$('#showboxmsg').html(msg);
	$.layer({
			type : 1,
			title :title, 
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['360px','auto'],
			page : {dom :"#showbox"}
		});
}
</script>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="infoboxp_top_bg"></div>
    <form action="index.php" name="myform" method="get">
      <input name="m" value="admin_message" type="hidden"/>
      <div class="admin_Filter"><span class="complay_top_span fl">留言反馈列表</span>
        <div class="admin_Filter_span">检索类型：</div>
        <div class="admin_Filter_text formselect" did='dtype'>
          <input type="button" value=" 用户名" class="admin_Filter_but" id="btype">
         <input type="hidden" name="type" id="type" value="1"/>
          <div class="admin_Filter_text_box" style="display:none" id='dtype'>
            <ul> 
              <li><a href="javascript:void(0)" onClick="formselect('1','type','用户名')">用户名</a></li>
              <li><a href="javascript:void(0)" onClick="formselect('2','type','内容')">留言内容</a></li>
            </ul>
          </div>
        </div>
        <input type="text" placeholder="输入你要搜索的关键字" value="" name='keyword' class="admin_Filter_search">
        <input type="submit" name='search'  value="搜索" class="admin_Filter_bth">
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
                    <div class="admin_adv_search_left">留言状态</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_message" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_message&status=1" 
                >已回复</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_message&status=2" 
                >未回复</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">留言时间</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=admin_message" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=admin_message&end=1" 
                >今天</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_message&end=3" 
                >最近三天</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_message&end=7" 
                >最近七天</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_message&end=15" 
                >最近半月</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=admin_message&end=30" 
                >最近一个月</a> 
                    
        </div>
        </div>
          
	  <div class="admin_adv_search_icon"><i class="admin_adv_search_icon_i">&nbsp;</i></div>
  </div> 
<div class="clear"></div>	 
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" target="supportiframe" id='myform' name="myform" method="get">
        <input name="m" value="admin_message" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th>  <a href="index.php?m=admin_message&order=asc&t=id">编号<img src="images/sanj2.jpg"/></a>               </th>
              <th align="left">用户名</th>
              <th align="left">留言内容</th>
              <th>  <a href="index.php?m=admin_message&order=asc&t=ctime">留言时间<img src="images/sanj2.jpg"/></a>  </th>
              <th>状态</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
                    <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" ><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_submit4" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="4" class="digg"></td>
          </tr>
          </tbody>
        </table>
        <input type="hidden" name="pytoken"  id='pytoken' value="6dd985061a91">
      </form>
    </div>
  </div>
</div>
<div id="showbox"  style="display:none; width: 350px; "> 
    <div id="infobox">
       <table cellspacing='2' cellpadding='3'>
          <tr style="text-align:center;margin-top:10px"><td colspan='2' id="showboxmsg"></tr>
        </table>
      </div>
</div>
</body>
</html><?php }} ?>
