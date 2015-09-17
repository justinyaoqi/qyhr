<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:04:05
         compiled from "D:\wamp\www\qyhr\app\template\admin\admin_keyword.htm" */ ?>
<?php /*%%SmartyHeaderCode:1095055f968c57fea00-63992000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f8d373dbad731d44a91d584a426922b602c068d' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_keyword.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1095055f968c57fea00-63992000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'keywordarr' => 0,
    'k' => 0,
    'v' => 0,
    'rows' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f968c59b9934_08346957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f968c59b9934_08346957')) {function content_55f968c59b9934_08346957($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\wamp\\www\\qyhr\\app\\include\\libs\\plugins\\function.searchurl.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jscolor/jscolor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layer/layer.min.js" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/show_pub.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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

<?php echo '</script'; ?>
>
<title>后台管理</title>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="./js/png.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  DD_belatedPNG.fix('.png,.header_bg,.header .logo, .left_menu h3 span,.shortcut_menu,.header .nav li a,.header .nav li,.admin_cz_bj,.admin_bg');
<?php echo '</script'; ?>
>
<![endif]-->
</head>
<body class="body_ifm">
<div id="status_div"  style="display:none;">
    <div id="infobox" style=" width:355px" >
      <form action="index.php?m=admin_keyword&c=save" target="supportiframe" method="post" id="formstatus">
      <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
		<table cellspacing='2' cellpadding='3'>
			<tr><td style="width:90px">关键字名称：</td><td><input id="key_name" class="input-text" type="text" value=""   name="key_name"><font color="gray">例：phpyun</font></td></tr>
			<tr><td>关键字类型：</td><td><select id="type" name="type">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['keywordarr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
				<?php } ?>
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
	  <input type="hidden" name="check" value="<?php echo $_GET['check'];?>
"/>
	  <input type="hidden" name="type" value="<?php echo $_GET['type'];?>
"/>
      <input class="company_job_text"  type="text" name="keyword"  size="25" style="float:left">
      <input class="admin_Filter_bth" type="submit" name="news_search" style="cursor:pointer;" value="检索"/>
	  <span class='admin_search_div'>
		  <div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div>   
	  </span>
       <a href="javascript:void(0)" onClick="keywords('','','','','','','','')" class="admin_infoboxp_tj">添加关键字</a>
    </form>  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
<div class="table-list">
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php?m=admin_keyword&c=del" name="myform" method="post"  target="supportiframe" id='myform'>
    <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      <table width="100%">
        <thead>
          <tr class="admin_table_top">
            <th width="50"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
            <th align="left">
			<?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?>
			<a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'admin_keyword','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a>
            <?php } else { ?>
            <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'admin_keyword','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a>
            <?php }?>
			</th>
            <th align="left" width="30%">热门关键字</th>
            <th align="left">关键字类型</th>
            <th align="left">
			<?php if ($_GET['t']=="num"&&$_GET['order']=="asc") {?>
			<a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'num','m'=>'admin_keyword','untype'=>'order,t'),$_smarty_tpl);?>
">搜索次数<img src="images/sanj.jpg"/></a>
            <?php } else { ?>
            <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'num','m'=>'admin_keyword','untype'=>'order,t'),$_smarty_tpl);?>
">搜索次数<img src="images/sanj2.jpg"/></a>
            <?php }?>
			</th>
            <th align="left">加粗</th>
            <th align="left">推荐</th>
            <th align="left">审核</th>
            <th align="left" class="admin_table_th_bg" width="80">操作</th>
          </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars["type"] = new Smarty_variable($_smarty_tpl->tpl_vars['v']->value['type'], null, 0);?>
        <tr id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
          <td align="center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
          <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
          <td align="left" class="td1"><font color="#<?php echo $_smarty_tpl->tpl_vars['v']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['key_name'];?>
</font></td>
          <td  align="left"><?php echo $_smarty_tpl->tpl_vars['keywordarr']->value[$_smarty_tpl->tpl_vars['v']->value['type']];?>
</td>
          <td  align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</td>
          <td id="bold<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['bold']=="1") {?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','0','bold');"><img src="../config/ajax_img/doneico.gif"></a><?php } else { ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1','bold');"><img src="../config/ajax_img/errorico.gif"></a><?php }?></td>
          <td id="tuijian<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['tuijian']=="1") {?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','0','tuijian');"><img src="../config/ajax_img/doneico.gif"></a><?php } else { ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1','tuijian');"><img src="../config/ajax_img/errorico.gif"></a><?php }?></td>
          <td id="check<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['check']=="1") {?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','0','check');"><img src="../config/ajax_img/doneico.gif"></a><?php } else { ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1','check');"><img src="../config/ajax_img/errorico.gif"></a><?php }?></td>
          <td><span style="cursor:pointer;" onClick="keywords('<?php echo $_smarty_tpl->tpl_vars['v']->value['key_name'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['color'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['bold'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['tuijian'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class="admin_cz_bj">修改</span> | 
<a href="javascript:void(0)"  class="admin_cz_sc" onClick="layer_del('确定要删除？', 'index.php?m=admin_keyword&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');">删除</a></td>
        </tr>
        <?php } ?>
        <tr style="background:#f1f1f1;">
          <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
          <td colspan="2" >
          <label for="chkAll2">全选</label>&nbsp;
          <input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
          <td colspan="6" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
        </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>
<div id="bg" class="admin_bg"></div>
</body>
</html><?php }} ?>
