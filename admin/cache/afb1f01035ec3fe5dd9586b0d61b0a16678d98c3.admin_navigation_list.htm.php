<?php /*%%SmartyHeaderCode:1477755e2d02f708183-40564426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afb1f01035ec3fe5dd9586b0d61b0a16678d98c3' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_navigation_list.htm',
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
  'nocache_hash' => '1477755e2d02f708183-40564426',
  'variables' => 
  array (
    'config' => 0,
    'nclass' => 0,
    'navinfo' => 0,
    'na' => 0,
    'nav' => 0,
    'key' => 0,
    'v' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d02f8364f2_56344957',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d02f8364f2_56344957')) {function content_55e2d02f8364f2_56344957($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
		<span class="complay_top_span fl">导航设置</span> 
            <form action="index.php" name="myform" method="get">
                <input name="m" value="navigation" type="hidden"/>
				<span class="admin_Filter_span">检索类型：</span> 
			 
				<div class="admin_Filter_text formselect"  did='dtype'>
				  <input type="button" value="头部导航" class="admin_Filter_but"  id="btype">
				  <input type="hidden" id='type' value="1" name='nid'>
				  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
					  <ul>
											  <li><a href="javascript:void(0)" onClick="formselect('1','type','头部导航')">头部导航</a></li>
					  					  <li><a href="javascript:void(0)" onClick="formselect('2','type','底部导航')">底部导航</a></li>
					  					  <li><a href="javascript:void(0)" onClick="formselect('3','type','企业底部导航')">企业底部导航</a></li>
					  					  <li><a href="javascript:void(0)" onClick="formselect('5','type','问答模块导航')">问答模块导航</a></li>
					  					  <li><a href="javascript:void(0)" onClick="formselect('11','type','底部客户端导航')">底部客户端导航</a></li>
					   
					  </ul>  
				  </div>
				</div>
			<input class="admin_Filter_search"  type="text" name="keyword"  size="25" style="float:left"> 
			<input  class="admin_Filter_bth" type="submit" name="news_search" value="检索"/>
			        <span class='admin_search_div'>
        <div class="admin_adv_search">
          <div class="admin_adv_search_bth">高级搜索</div>
        </div> 
        </span> 
            <a href="index.php?m=navigation&c=add" class="admin_infoboxp_tj">添加导航</a>
 			<a href="index.php?m=navigation&c=group" class="admin_infoboxp_tj">添加分类</a>

 		</form> 
	
</div>
	  <div class="search_select">
                                   
		                     
		                     
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">导航类型</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=navigation" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=navigation&type=1" 
                >站内链接</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=navigation&type=2" 
                >原链接</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">弹出窗口</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=navigation" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=navigation&eject=1" 
                >新窗口</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=navigation&eject=2" 
                >原窗口</a> 
                    
        </div>
        </div>
                 	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">显示状态</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=navigation" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=navigation&display=1" 
                >是</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=navigation&display=2" 
                >否</a> 
                    
        </div>
        </div>
          
	  <div class="admin_adv_search_icon"><i class="admin_adv_search_icon_i">&nbsp;</i></div>
  </div> 
<div class="clear"></div>	
<div class="table-list">
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="index.php" name="myform" id='myform' method="get" target="supportiframe">
<input name="m" value="navigation" type="hidden"/>
<input name="c" value="del" type="hidden"/>
<table width="100%">
	<thead>
		<tr class="admin_table_top">
		    <th><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
			<th>导航编号</th>
            <th>导航名称</th>
			<th>导航类别</th>
			<th>连接地址</th>
            <th>导航类型</th>
			<th>排序</th>
            <th>弹出窗口</th>
            <th>显示</th>
			<th class="admin_table_th_bg">操作</th>
		</tr>
	</thead>
	<tbody>
        <tr align="center" id="list1">
	    <td><input type="checkbox" value="1"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>1</span></td>
        <td class="od" align="left">首页</td>
    	<td class="ud" align="left">头部导航</td>
		<td class="gd" align="left">index.php</td>
        <td class="td">站内链接</td>
		<td class="td">1</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navigation&c=add&id=1" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=1');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list49">
	    <td><input type="checkbox" value="49"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>49</span></td>
        <td class="od" align="left">触屏版</td>
    	<td class="ud" align="left">底部客户端导航</td>
		<td class="gd" align="left">index.php?c=wap</td>
        <td class="td">站内链接</td>
		<td class="td">1</td>
        <td class="td">新窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navigation&c=add&id=49" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=49');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center" id="list33">
	    <td><input type="checkbox" value="33"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>33</span></td>
        <td class="od" align="left">首页</td>
    	<td class="ud" align="left">问答模块导航</td>
		<td class="gd" align="left">index.php</td>
        <td class="td">站内链接</td>
		<td class="td">1</td>
        <td class="td">新窗口</td>
    	<td class="td">否</td>
    	<td><a href="index.php?m=navigation&c=add&id=33" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=33');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list2">
	    <td><input type="checkbox" value="2"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>2</span></td>
        <td class="od" align="left">找工作</td>
    	<td class="ud" align="left">头部导航</td>
		<td class="gd" align="left">job/</td>
        <td class="td">站内链接</td>
		<td class="td">2</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navigation&c=add&id=2" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=2');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center" id="list34">
	    <td><input type="checkbox" value="34"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>34</span></td>
        <td class="od" align="left">法律声明</td>
    	<td class="ud" align="left">底部导航</td>
		<td class="gd" align="left">/about/phpyun.html</td>
        <td class="td">站内链接</td>
		<td class="td">3</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navigation&c=add&id=34" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=34');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list51">
	    <td><input type="checkbox" value="51"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>51</span></td>
        <td class="od" align="left">微信</td>
    	<td class="ud" align="left">底部客户端导航</td>
		<td class="gd" align="left">index.php?c=weixin</td>
        <td class="td">站内链接</td>
		<td class="td">3</td>
        <td class="td">新窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navigation&c=add&id=51" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=51');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center" id="list3">
	    <td><input type="checkbox" value="3"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>3</span></td>
        <td class="od" align="left">找人才</td>
    	<td class="ud" align="left">头部导航</td>
		<td class="gd" align="left">resume/</td>
        <td class="td">站内链接</td>
		<td class="td">3</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navigation&c=add&id=3" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=3');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list11">
	    <td><input type="checkbox" value="11"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>11</span></td>
        <td class="od" align="left">找企业</td>
    	<td class="ud" align="left">头部导航</td>
		<td class="gd" align="left">company/</td>
        <td class="td">站内链接</td>
		<td class="td">4</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navigation&c=add&id=11" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=11');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center" id="list32">
	    <td><input type="checkbox" value="32"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>32</span></td>
        <td class="od" align="left">职场问答</td>
    	<td class="ud" align="left">问答模块导航</td>
		<td class="gd" align="left">ask/</td>
        <td class="td">站内链接</td>
		<td class="td">4</td>
        <td class="td">新窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navigation&c=add&id=32" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=32');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list5">
	    <td><input type="checkbox" value="5"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>5</span></td>
        <td class="od" align="left">微招聘</td>
    	<td class="ud" align="left">头部导航</td>
		<td class="gd" align="left">once/</td>
        <td class="td">站内链接</td>
		<td class="td">6</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navigation&c=add&id=5" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=5');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center" id="list26">
	    <td><input type="checkbox" value="26"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>26</span></td>
        <td class="od" align="left">微简历</td>
    	<td class="ud" align="left">头部导航</td>
		<td class="gd" align="left">tiny/</td>
        <td class="td">站内链接</td>
		<td class="td">6</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navigation&c=add&id=26" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=26');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list4">
	    <td><input type="checkbox" value="4"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>4</span></td>
        <td class="od" align="left">职场资讯</td>
    	<td class="ud" align="left">头部导航</td>
		<td class="gd" align="left">article/</td>
        <td class="td">站内链接</td>
		<td class="td">7</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navigation&c=add&id=4" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=4');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center" id="list15">
	    <td><input type="checkbox" value="15"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>15</span></td>
        <td class="od" align="left">招聘会</td>
    	<td class="ud" align="left">头部导航</td>
		<td class="gd" align="left">zph/</td>
        <td class="td">站内链接</td>
		<td class="td">9</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navigation&c=add&id=15" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navigation&c=del&id=15');"class="admin_cz_sc">删除</a></td>
  </tr>
    <tr style="background:#f1f1f1;">
    <td align="center"><label for="chkall2"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></label></td>
    <td colspan="2" ><label for="chkAll2">全选</label>
    <input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
    <td colspan="7" class="digg"><a href="http://localhost/qyhr/admin/index.php?m=navigation&page=1">上一页</a><a href="#" class="selected">1</a><a href="http://localhost/qyhr/admin/index.php?m=navigation&page=2">2</a><a href="http://localhost/qyhr/admin/index.php?m=navigation&page=2">下一页</a><em>共2页</em></td>
  </tr>
  </tbody>
  </table>
  <input type="hidden" name="pytoken" id='pytoken' value="6dd985061a91">
</form>
</div>
</div>
</div>
</body>
</html><?php }} ?>
