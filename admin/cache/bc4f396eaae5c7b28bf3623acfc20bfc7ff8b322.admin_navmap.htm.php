<?php /*%%SmartyHeaderCode:2828455e2d034e05237-99842704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc4f396eaae5c7b28bf3623acfc20bfc7ff8b322' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_navmap.htm',
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
  'nocache_hash' => '2828455e2d034e05237-99842704',
  'variables' => 
  array (
    'config' => 0,
    'nav' => 0,
    'key' => 0,
    'v' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d034edcbe6_92905858',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d034edcbe6_92905858')) {function content_55e2d034edcbe6_92905858($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
	<span class="complay_top_span fl">网站地图</span> 
		<form action="index.php" name="myform" method="get">
		<input name="m" value="navmap" type="hidden"/>
		<input class="admin_Filter_search"  type="text" name="keyword"  size="25" style="float:left"> 
		<input  class="admin_Filter_bth" type="submit" name="news_search" value="检索"/>
				<span class='admin_search_div'>
        <div class="admin_adv_search">
          <div class="admin_adv_search_bth">高级搜索</div>
        </div> 
        </span> 
		<a href="index.php?m=navmap&c=add" class="admin_infoboxp_tj">添加网站地图</a>
	</form> 
</div>
 	  <div class="search_select">
                                   
		                     
		                     
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">链接类型</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=navmap" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=navmap&type=1" 
                >站内链接</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=navmap&type=2" 
                >原链接</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">弹出窗口</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=navmap" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=navmap&eject=1" 
                >新窗口</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=navmap&eject=2" 
                >原窗口</a> 
                    
        </div>
        </div>
                 	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">显示状态</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=navmap" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=navmap&display=1" 
                >是</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=navmap&display=2" 
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
<input name="m" value="navmap" type="hidden"/>
<input name="c" value="del" type="hidden"/>
<table width="100%">
	<thead>
		<tr class="admin_table_top">
		    <th><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
			<th>编号</th>
            <th>名称</th>
			<th>类别</th>
			<th>连接地址</th>
            <th>类型</th>
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
        <td class="od" align="left">找工作</td>
    	<td class="ud" align="left"></td>
		<td class="gd" align="left">job/</td>
        <td class="td" align="left">站内链接</td>
		<td class="td">99</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navmap&c=add&id=1" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navmap&c=del&del=1');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list2">
	    <td><input type="checkbox" value="2"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>2</span></td>
        <td class="od" align="left">找人才</td>
    	<td class="ud" align="left"></td>
		<td class="gd" align="left">resume/</td>
        <td class="td" align="left">站内链接</td>
		<td class="td">98</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navmap&c=add&id=2" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navmap&c=del&del=2');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center" id="list3">
	    <td><input type="checkbox" value="3"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>3</span></td>
        <td class="od" align="left">资讯</td>
    	<td class="ud" align="left"></td>
		<td class="gd" align="left">article/</td>
        <td class="td" align="left">站内链接</td>
		<td class="td">97</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navmap&c=add&id=3" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navmap&c=del&del=3');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list6">
	    <td><input type="checkbox" value="6"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>6</span></td>
        <td class="od" align="left">找企业</td>
    	<td class="ud" align="left">找工作</td>
		<td class="gd" align="left">company/</td>
        <td class="td" align="left">站内链接</td>
		<td class="td">93</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navmap&c=add&id=6" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navmap&c=del&del=6');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center" id="list5">
	    <td><input type="checkbox" value="5"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>5</span></td>
        <td class="od" align="left">微招聘</td>
    	<td class="ud" align="left">找工作</td>
		<td class="gd" align="left">once/</td>
        <td class="td" align="left">站内链接</td>
		<td class="td">92</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navmap&c=add&id=5" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navmap&c=del&del=5');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list4">
	    <td><input type="checkbox" value="4"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>4</span></td>
        <td class="od" align="left">地图招聘</td>
    	<td class="ud" align="left">找工作</td>
		<td class="gd" align="left">map/</td>
        <td class="td" align="left">站内链接</td>
		<td class="td">91</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navmap&c=add&id=4" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navmap&c=del&del=4');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center" id="list8">
	    <td><input type="checkbox" value="8"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>8</span></td>
        <td class="od" align="left">工具箱</td>
    	<td class="ud" align="left">找人才</td>
		<td class="gd" align="left">hr/</td>
        <td class="td" align="left">站内链接</td>
		<td class="td">82</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navmap&c=add&id=8" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navmap&c=del&del=8');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list7">
	    <td><input type="checkbox" value="7"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>7</span></td>
        <td class="od" align="left">微简历</td>
    	<td class="ud" align="left">找人才</td>
		<td class="gd" align="left">tiny/</td>
        <td class="td" align="left">站内链接</td>
		<td class="td">81</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navmap&c=add&id=7" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navmap&c=del&del=7');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center" id="list9">
	    <td><input type="checkbox" value="9"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>9</span></td>
        <td class="od" align="left">问答</td>
    	<td class="ud" align="left">资讯</td>
		<td class="gd" align="left">/ask</td>
        <td class="td" align="left">站内链接</td>
		<td class="td">71</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navmap&c=add&id=9" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navmap&c=del&del=9');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list12">
	    <td><input type="checkbox" value="12"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>12</span></td>
        <td class="od" align="left">积分兑换</td>
    	<td class="ud" align="left">本站特色</td>
		<td class="gd" align="left">redeem/</td>
        <td class="td" align="left">站内链接</td>
		<td class="td">11</td>
        <td class="td">原窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navmap&c=add&id=12" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navmap&c=del&del=12');"class="admin_cz_sc">删除</a></td>
  </tr>
      <tr align="center" id="list10">
	    <td><input type="checkbox" value="10"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>10</span></td>
        <td class="od" align="left">本站特色</td>
    	<td class="ud" align="left"></td>
		<td class="gd" align="left">/</td>
        <td class="td" align="left">原链接</td>
		<td class="td">9</td>
        <td class="td">新窗口</td>
    	<td class="td">是</td>
    	<td><a href="index.php?m=navmap&c=add&id=10" class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=navmap&c=del&del=10');"class="admin_cz_sc">删除</a></td>
  </tr>
    <tr style="background:#f1f1f1;">
    <td align="center"><label for="chkall2"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></label></td>
    <td colspan="2" ><label for="chkAll2">全选</label>
    <input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
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
</html><?php }} ?>
