<?php /*%%SmartyHeaderCode:2579955e2d0179ddff8-86958615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '233b242926a34fa97faa257c354d8e2c826db706' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_makenews.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2579955e2d0179ddff8-86958615',
  'variables' => 
  array (
    'config' => 0,
    'type' => 0,
    'rows' => 0,
    'v' => 0,
    'pytoken' => 0,
    'classid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d017b02d37_42626636',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d017b02d37_42626636')) {function content_55e2d017b02d37_42626636($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js"></script>
<script src="http://localhost/qyhr/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<title></title>
</head>
<body class="body_ifm">

<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="admin_Prompt">
<div class="admin_Prompt_span">
    注意事项：
    1. 生成请确保目录有可写权限，否则无法生成。
    2. 添加导航的时候，链接可以填写 http://localhost/qyhr/ 保存路径
</div>
<div class="admin_Prompt_close"></div>
</div>
    <div class="infoboxp_top">
                            <h6>生成网站首页</h6>
                                            </div>
<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form target="supportiframe" action="" method="post" >

    <table width="100%" class="table_form table_form_bg">
            <tr>
                <th width="40%">首页保存路径：</th>
                <td><input class="input-text" type="text" name="url" size="40" value="../index.html"/></td>
            </tr>
        <tr class="admin_table_trbg">
            <td class="ud" align="center" colspan="2">
                <input class="admin_submit4" type="submit" id='madeindex' name="madeall" value="更新首页"/>&nbsp;&nbsp;
            </td>
          </tr>
		  <input type="hidden" name="pytoken" value="6dd985061a91">
  </table>
</form>
</div>
<input type="hidden" id="pytoken" value="6dd985061a91">

<script>
$(document).ready(function(){
	$("#archive").click(function(){
		var group=$("#group").val();
		var startid=$("#start_id").val();
		var endid=$("#end_id").val();
		var limit=$("#limit").val();
		makearchive(group,startid,endid,limit,"archive",0,'正在获取新闻总数');
	})
	$("#madeall").click(function(){
		var index_url=$("input[name=index_url]").val();
		var news_url=$("input[name=news_url]").val();
		make_all(index_url,news_url,"cache",0,'正在生成区域');
	})
	$("#newsclass").click(function(){
		var group=$("#group").val();
		makenewsclass(group,"class",0,'正在获取新闻类别信息');
	});
	$("#madeindex").click(function(){
		var ii = parent.layer.load("正在生成...",0);
	});
	$("#madenindex").click(function(){
		
		var ii = parent.layer.load("正在生成...",0);
	});
	$("#cache_once").click(function(){
		var desc=$("#once_class").val();
		var pytoken=$("#pytoken").val();
		var ii = parent.layer.load("正在生成",0);
		$.post("index.php?m=cache&c=once",{desc:desc,pytoken:pytoken,make:1},function(data){
			if(data==1){
				parent.layer.msg("生成成功！",2,9);
			}
		})
	})
})
function make_all(index,news,type,value,msg){
	if(type!="ok"){
		var ii = parent.layer.load(msg,0);
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=cache&c=all",{action:"makeall",index:index,news:news,type:type,value:value,pytoken:pytoken},function(data){
			var data=eval('('+data+')');
			make_all(index,news,data.type,data.value,data.msg);
		})
	}else{
		parent.layer.close(ii);
		parent.layer.alert(msg,9);
	}
}
function makenewsclass(group,type,value,msg){
	if(type!="ok"){
		var ii = parent.layer.load(msg,0);
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=cache&c=newsclass",{action:"makeclass",group:group,type:type,value:value,pytoken:pytoken},function(data){
			var data=eval('('+data+')');
			makenewsclass(group,data.type,data.value,data.msg);
		})
	}else{
		parent.layer.close(ii);
		parent.layer.alert(msg, 9);
	}
}
function makearchive(group,startid,endid,limit,type,value,msg){
	$("#make_l").html(msg);
	if(type!="ok"){
		var ii = parent.layer.load(msg,0);
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=cache&c=archive",{action:"makearchive",group:group,startid:startid,endid:endid,limit:limit,type:type,value:value,pytoken:pytoken},function(data){
			var data=eval('('+data+')');
			makearchive(group,startid,endid,limit,data.type,data.value,data.msg);
		})
	}else{
		parent.layer.close(ii);
		parent.layer.alert(msg, 9);
	}
}
</script>
</body>
</html><?php }} ?>
