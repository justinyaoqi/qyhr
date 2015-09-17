<?php /*%%SmartyHeaderCode:321855e2d01fe59da9-06399570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '998f80fdb76b8c50e98774e658276211f5140047' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_userclass.htm',
      1 => 1440861574,
      2 => 'file',
    ),
    'af37d4024dfa1edfd1d8508040b54b90c653b268' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\\\app\\template\\admin\\add_class.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321855e2d01fe59da9-06399570',
  'variables' => 
  array (
    'config' => 0,
    'id' => 0,
    'position' => 0,
    'key' => 0,
    'v' => 0,
    'class1' => 0,
    'class2' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d020086855_86520450',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d020086855_86520450')) {function content_55e2d020086855_86520450($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="http://localhost/qyhr/js/jquery-1.8.0.min.js"></script>
<script src="http://localhost/qyhr/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<script>
function checksort(id){
	$("#sort"+id).hide();
	$("#input"+id).show();
	$("#input"+id).focus();
}
function subsort(id){
	var sort=$("#input"+id).val();
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=userclass&c=ajax",{id:id,sort:sort,pytoken:pytoken},function(data){
		$("#sort"+id).html(sort);
		$("#sort"+id).show();
		$("#input"+id).hide();
		if(data!='1'){config_msg(data);}else{location.reload();}
	})
}
function checkname(id){
	$("#name"+id).hide();
	$("#inputname"+id).show();
	$("#inputname"+id).focus();
}
function subname(id){
	var name=$("#inputname"+id).val();
	if($.trim(name)==""){
		parent.layer.msg("类别名称不能为空！",2,8,function(){location.reload();});return false;
	}
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=userclass&c=ajax",{id:id,name:name,pytoken:pytoken},function(data){
		$("#name"+id).html(name);
		$("#name"+id).show();
		$("#inputname"+id).hide();
		if(data!='1'){config_msg(data);}else{location.reload();}
	})
}
</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<!--弹出框-->
<div id="wname"  style="display:none; width: 300px; "> 
	<div style="height: 160px;" class="job_box_div">  
	   <div class="job_box_inp">
		<table class="table_form "style="width:100%">
			<tr ><td colspan='2' class='ui_content_wrap'><input name='ctype' type='radio' value='1' checked='checked'>一级分类<input name='ctype' type='radio' value='2'>二级分类</td></tr>
			<tr class='sclass'  style="display:none;"><td style="text-align: right;">父类:</td><td><select name="nid" id='nid'> 
							 							<option value="1">性别</option>
														<option value="2">婚姻状况</option>
														<option value="3">教育程度</option>
														<option value="4">工作经验</option>
														<option value="25">技能</option>
														<option value="29">期待薪资</option>
														<option value="39">技能程度</option>
														<option value="44">到岗时间</option>
														<option value="52">个人反馈类型</option>
														<option value="56">工作性质</option>
														<option value="113">求职状态</option>
													</select> </td></tr>
			<tr><td style="text-align: right;">类别名称:</td><td><input type="text" name="position" id='position' class="input-text" /></td></tr>
			<tr class='variable ' ><td style="text-align: right;">调用变量名:</td><td><input type="text" name="variable" id='variable' class="input-text" size="16"/></td></tr> 
			<tr class='sclass'  style="display:none;"><td style="text-align: right;">排序:</td><td><input type="text" name="sort" id='sort' value="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="input-text" size="5" /></td></tr>		
			<tr><td colspan='2' class='ui_content_wrap' style="border-bottom:none"><input class="admin_submit4" type="button" value="添加 " onclick="save_class()"/></td></tr>
		</table> 
	   </div>
	</div>
</div> 

<!--弹出框end-->
<script type="text/javascript"> 
$(document).ready(function(){
	$("input[name='ctype']").click(function(){
		var val=$(this).val();
		if(val=='1'){
			$(".variable").show();
			$(".sclass").hide();
		}else if(val=='2'){
			$(".variable").hide();
			$(".sclass").show();
		}
	})
})
function save_class(){
	var ctype=$('input[name="ctype"]:checked').val();
	var nid=$('#nid').val();
	var url=$('#surl').val();
	var position=$('#position').val();
	var variable=$('#variable').val();
	var sort=$('#sort').val();
	if(ctype==''||ctype==null){
		parent.layer.msg('请选择类型！', 2, 8);return false;
	}
	if($.trim(position)==''){
		parent.layer.msg('类别名称不能为空！', 2, 8);return false;
	}
	if(ctype=='1'&&$.trim(variable)==''){
		parent.layer.msg('调用变量名不能为空！', 2, 8);return false;
	}
	$.post(url,{ctype:ctype,nid:nid,position:position,variable:variable,sort:sort,pytoken:$('#pytoken').val()},function(msg){
		if(msg==1){
			parent.layer.msg('该类分类已存在！', 2, 8);return false;
		}else if(msg==2){
			parent.layer.msg('添加成功！', 2,9,function(){location=location ;});return false;
		}else{
			parent.layer.msg('添加失败！', 2,8,function(){location=location ;});return false;
		} 
	}); 
} 
</script>
<span id="temp"></span>
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
<span class="admin_title_span">个人会员分类</span>
 <a  href="javascript:void(0)" onClick="add_class('个人会员分类','300','280','#wname','index.php?m=userclass&c=save')" class="admin_infoboxp_tj">添加类别</a>
</div>
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<div class="table-list">
<div class="admin_table_border">
<form action="index.php?m=userclass&c=del" method="post" id='myform' target="supportiframe">
<table width="100%">
	<thead>
	<tr class="admin_table_top">
        <th width="50"><label for="chkall"> <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
		<th width="60">分类编号</th>
        <th width="400">分类名称<span class="clickup">(点击修改)</span></th>
		<th>
		 		分类变量名
        		</th>
		<th width="180" class="admin_table_th_bg">操作</th>
	</tr>
	</thead>
	<tbody>
                    <tr align="center"  id="list1">
            <td width="50"><input type="checkbox" value="1" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud">1</td>
            <td align="left">一级分类：<span onClick="checkname('1');" id="name1" style="cursor:pointer;">性别</span>
            <input class="input-text hidden" type="text" id="inputname1" value="性别" onBlur="subname('1');"></td>
            <td class="ud"><input type="text" name="variable" class="input-text" value="user_sex" size="20" disabled/></td>
            <td class="ud">
            	<A href="index.php?m=userclass&c=up&id=1" class="admin_cz_sc">分类管理</A> | 
                <A href="javascript:void(0)" onClick="layer_del('确定要删除？', '?m=userclass&c=del&delid=1');" class="admin_cz_sc">删除</A></td>
        </tr>
    	        <tr align="center" class="admin_com_td_bg" id="list2">
            <td width="50"><input type="checkbox" value="2" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud">2</td>
            <td align="left">一级分类：<span onClick="checkname('2');" id="name2" style="cursor:pointer;">婚姻状况</span>
            <input class="input-text hidden" type="text" id="inputname2" value="婚姻状况" onBlur="subname('2');"></td>
            <td class="ud"><input type="text" name="variable" class="input-text" value="user_marriage" size="20" disabled/></td>
            <td class="ud">
            	<A href="index.php?m=userclass&c=up&id=2" class="admin_cz_sc">分类管理</A> | 
                <A href="javascript:void(0)" onClick="layer_del('确定要删除？', '?m=userclass&c=del&delid=2');" class="admin_cz_sc">删除</A></td>
        </tr>
    	        <tr align="center"  id="list3">
            <td width="50"><input type="checkbox" value="3" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud">3</td>
            <td align="left">一级分类：<span onClick="checkname('3');" id="name3" style="cursor:pointer;">教育程度</span>
            <input class="input-text hidden" type="text" id="inputname3" value="教育程度" onBlur="subname('3');"></td>
            <td class="ud"><input type="text" name="variable" class="input-text" value="user_edu" size="20" disabled/></td>
            <td class="ud">
            	<A href="index.php?m=userclass&c=up&id=3" class="admin_cz_sc">分类管理</A> | 
                <A href="javascript:void(0)" onClick="layer_del('确定要删除？', '?m=userclass&c=del&delid=3');" class="admin_cz_sc">删除</A></td>
        </tr>
    	        <tr align="center" class="admin_com_td_bg" id="list4">
            <td width="50"><input type="checkbox" value="4" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud">4</td>
            <td align="left">一级分类：<span onClick="checkname('4');" id="name4" style="cursor:pointer;">工作经验</span>
            <input class="input-text hidden" type="text" id="inputname4" value="工作经验" onBlur="subname('4');"></td>
            <td class="ud"><input type="text" name="variable" class="input-text" value="user_word" size="20" disabled/></td>
            <td class="ud">
            	<A href="index.php?m=userclass&c=up&id=4" class="admin_cz_sc">分类管理</A> | 
                <A href="javascript:void(0)" onClick="layer_del('确定要删除？', '?m=userclass&c=del&delid=4');" class="admin_cz_sc">删除</A></td>
        </tr>
    	        <tr align="center"  id="list25">
            <td width="50"><input type="checkbox" value="25" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud">25</td>
            <td align="left">一级分类：<span onClick="checkname('25');" id="name25" style="cursor:pointer;">技能</span>
            <input class="input-text hidden" type="text" id="inputname25" value="技能" onBlur="subname('25');"></td>
            <td class="ud"><input type="text" name="variable" class="input-text" value="user_skill" size="20" disabled/></td>
            <td class="ud">
            	<A href="index.php?m=userclass&c=up&id=25" class="admin_cz_sc">分类管理</A> | 
                <A href="javascript:void(0)" onClick="layer_del('确定要删除？', '?m=userclass&c=del&delid=25');" class="admin_cz_sc">删除</A></td>
        </tr>
    	        <tr align="center" class="admin_com_td_bg" id="list29">
            <td width="50"><input type="checkbox" value="29" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud">29</td>
            <td align="left">一级分类：<span onClick="checkname('29');" id="name29" style="cursor:pointer;">期待薪资</span>
            <input class="input-text hidden" type="text" id="inputname29" value="期待薪资" onBlur="subname('29');"></td>
            <td class="ud"><input type="text" name="variable" class="input-text" value="user_salary" size="20" disabled/></td>
            <td class="ud">
            	<A href="index.php?m=userclass&c=up&id=29" class="admin_cz_sc">分类管理</A> | 
                <A href="javascript:void(0)" onClick="layer_del('确定要删除？', '?m=userclass&c=del&delid=29');" class="admin_cz_sc">删除</A></td>
        </tr>
    	        <tr align="center"  id="list39">
            <td width="50"><input type="checkbox" value="39" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud">39</td>
            <td align="left">一级分类：<span onClick="checkname('39');" id="name39" style="cursor:pointer;">技能程度</span>
            <input class="input-text hidden" type="text" id="inputname39" value="技能程度" onBlur="subname('39');"></td>
            <td class="ud"><input type="text" name="variable" class="input-text" value="user_ing" size="20" disabled/></td>
            <td class="ud">
            	<A href="index.php?m=userclass&c=up&id=39" class="admin_cz_sc">分类管理</A> | 
                <A href="javascript:void(0)" onClick="layer_del('确定要删除？', '?m=userclass&c=del&delid=39');" class="admin_cz_sc">删除</A></td>
        </tr>
    	        <tr align="center" class="admin_com_td_bg" id="list44">
            <td width="50"><input type="checkbox" value="44" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud">44</td>
            <td align="left">一级分类：<span onClick="checkname('44');" id="name44" style="cursor:pointer;">到岗时间</span>
            <input class="input-text hidden" type="text" id="inputname44" value="到岗时间" onBlur="subname('44');"></td>
            <td class="ud"><input type="text" name="variable" class="input-text" value="user_report" size="20" disabled/></td>
            <td class="ud">
            	<A href="index.php?m=userclass&c=up&id=44" class="admin_cz_sc">分类管理</A> | 
                <A href="javascript:void(0)" onClick="layer_del('确定要删除？', '?m=userclass&c=del&delid=44');" class="admin_cz_sc">删除</A></td>
        </tr>
    	        <tr align="center"  id="list52">
            <td width="50"><input type="checkbox" value="52" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud">52</td>
            <td align="left">一级分类：<span onClick="checkname('52');" id="name52" style="cursor:pointer;">个人反馈类型</span>
            <input class="input-text hidden" type="text" id="inputname52" value="个人反馈类型" onBlur="subname('52');"></td>
            <td class="ud"><input type="text" name="variable" class="input-text" value="user_message" size="20" disabled/></td>
            <td class="ud">
            	<A href="index.php?m=userclass&c=up&id=52" class="admin_cz_sc">分类管理</A> | 
                <A href="javascript:void(0)" onClick="layer_del('确定要删除？', '?m=userclass&c=del&delid=52');" class="admin_cz_sc">删除</A></td>
        </tr>
    	        <tr align="center" class="admin_com_td_bg" id="list56">
            <td width="50"><input type="checkbox" value="56" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud">56</td>
            <td align="left">一级分类：<span onClick="checkname('56');" id="name56" style="cursor:pointer;">工作性质</span>
            <input class="input-text hidden" type="text" id="inputname56" value="工作性质" onBlur="subname('56');"></td>
            <td class="ud"><input type="text" name="variable" class="input-text" value="user_type" size="20" disabled/></td>
            <td class="ud">
            	<A href="index.php?m=userclass&c=up&id=56" class="admin_cz_sc">分类管理</A> | 
                <A href="javascript:void(0)" onClick="layer_del('确定要删除？', '?m=userclass&c=del&delid=56');" class="admin_cz_sc">删除</A></td>
        </tr>
    	        <tr align="center"  id="list113">
            <td width="50"><input type="checkbox" value="113" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud">113</td>
            <td align="left">一级分类：<span onClick="checkname('113');" id="name113" style="cursor:pointer;">求职状态</span>
            <input class="input-text hidden" type="text" id="inputname113" value="求职状态" onBlur="subname('113');"></td>
            <td class="ud"><input type="text" name="variable" class="input-text" value="user_jobstatus" size="20" disabled/></td>
            <td class="ud">
            	<A href="index.php?m=userclass&c=up&id=113" class="admin_cz_sc">分类管理</A> | 
                <A href="javascript:void(0)" onClick="layer_del('确定要删除？', '?m=userclass&c=del&delid=113');" class="admin_cz_sc">删除</A></td>
        </tr>
    			  <tr style="background:#f1f1f1;">
    <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
    <td colspan="4" >
    <label for="chkAll2">全选</label>&nbsp;
      <input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
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
