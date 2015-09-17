<?php /*%%SmartyHeaderCode:1584955e2d02144b233-15309421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2df20d53f42c1039c3ae6a248c485de8c7e5d468' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_advertise.htm',
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
  'nocache_hash' => '1584955e2d02144b233-15309421',
  'variables' => 
  array (
    'config' => 0,
    'nclass' => 0,
    'class' => 0,
    'adv' => 0,
    'pytoken' => 0,
    'linkrows' => 0,
    'key' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d02159da76_96582446',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d02159da76_96582446')) {function content_55e2d02159da76_96582446($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
function check_type(id,value){
	if(value=="1"){
		var val = "0";
	}else{
		var val="1";
	}
	$.post("index.php?m=advertise&c=ajax_check",{id:id,val:val,pytoken:$('#pytoken').val()},function(data){
		html = "<a href=\"javascript:void(0);\" onClick=\"check_type("+id+","+val+");\" >"+data+"</a>";
		$("#"+id).html(html);
	});
} 
function audall2(status)
{
	var codewebarr="";
	$(".check_all:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出 
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg("您还未选择任何信息！",2,2);	return false;
	}else{
		$("input[name=jobid]").val(codewebarr);
 		$.layer({
			type : 1,
			title :'批量延期', 
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','120px'],
			page : {dom :"#infobox2"}
		}); 		
	}
}
$(document).ready(function() {
	$(".preview").hover(function(){  
		var pic_url=$(this).attr('url');
		layer.tips("<img src="+pic_url+" style='max-width:380px'>", this, {
			guide:3,
			style: ['background-color:#F26C4F; color:#fff;top:-7px;left:-20px', '#F26C4F']
		});
	},function(){layer.closeTips();});  
});
$(document).ready(function(){
	$(".job_name").hover(function(){
		var job_name=$(this).attr('v'); 
		if($.trim(job_name)!=''){
			layer.tips(job_name, this, {guide: 1, style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']}); 
		} 
	},function(){
		var job_name=$(this).attr('v'); 
		if($.trim(job_name)!=''){
			layer.closeTips();
		} 
	}); 
})
</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div id="wname"  style="display:none; width: 300px; "> 
	<div style="height: 160px;" class="job_box_div">  
	   <div class="job_box_inp">
		<table class="table_form "style="width:100%">
			<tr ><td  class='ui_content_wrap'>复制(CTRL+C)以下內容并添加到模板中</td></tr> 
			<tr><td><input type="text" name="position" id='copy_url' class="input-text" size='45'/></td></tr> 
		</table> 
	   </div>
	</div>
</div> 
<div class="infoboxp"> 
<div class="infoboxp_top_bg"></div>
    <div class="admin_Filter">
		<span class="complay_top_span fl">广告管理</span> 
		<form action="index.php" name="myform" method="get">
		<input name="m" value="advertise" type="hidden"/> 
		  <span class="admin_Filter_span"> 广告类别：</span> 
		  <div class="admin_Filter_text_big formselect"  did='dclass_id'>
		  <input type="button" value="不限" class="admin_Filter_but_big"  id="bclass_id">
		  <input type="hidden" id='class_id' value="" name='class_id'>
		  <div class="admin_Filter_text_box" style="display:none;width:258px;height:230px; overflow:auto; overflow-x:hidden" id='dclass_id'>
			  <ul>
			  			  <li><a href="javascript:void(0)" onClick="formselect('29','class_id','模板3中部广告1')">模板3中部广告1</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('14','class_id','首页双联横幅广告497*78')">首页双联横幅广告497*78</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('7','class_id','职位列表页广告')">职位列表页广告</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('5','class_id','首页收缩广告')">首页收缩广告</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('6','class_id','首页横幅广告960X80')">首页横幅广告960X80</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('3','class_id','首页幻灯广告规格：宽510高248')">首页幻灯广告规格：宽510高248</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('13','class_id','首页紧急招聘下横幅广告980*60')">首页紧急招聘下横幅广告980*60</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('12','class_id','首页最新人才右侧广告269*50')">首页最新人才右侧广告269*50</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('27','class_id','职位详情页右侧')">职位详情页右侧</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('37','class_id','登录页图片切换')">登录页图片切换</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('51','class_id','首页顶部横栏')">首页顶部横栏</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('15','class_id','首页紧急招聘下三联联横幅广告325*60')">首页紧急招聘下三联联横幅广告325*60</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('1','class_id','首页中部图片广告 规格：宽154 高50')">首页中部图片广告 规格：宽154 高50</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('8','class_id','首页热门职位右侧广告285*51')">首页热门职位右侧广告285*51</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('10','class_id','网站底部浮动广告980*60')">网站底部浮动广告980*60</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('11','class_id','对联广告')">对联广告</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('34','class_id','积分商城首页幻灯')">积分商城首页幻灯</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('35','class_id','培训首页幻灯')">培训首页幻灯</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('39','class_id','模板1_首页紧急招聘右侧图片')">模板1_首页紧急招聘右侧图片</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('48','class_id','问答首页横幅')">问答首页横幅</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('50','class_id','Wap站首页广告')">Wap站首页广告</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('36','class_id','人才列表右侧广告168*120')">人才列表右侧广告168*120</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('52','class_id','头部广告260*60')">头部广告260*60</a></li>
			   
			  </ul>  
		  </div>
		</div> 
		<input class="admin_Filter_search" type="text" name="name"  size="25" style="float:left">
		<input  class="admin_Filter_bth"  type="submit" name="comquestion" value="检索"/>
		</form> 
		<span class='admin_search_div'>
		  <div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div>  
		   
		</span> 
  		<a href="index.php?m=advertise&c=ad_add" class="admin_infoboxp_tj" style="margin-top:0px;"> 添加广告</a>        
		<a href="javascript:void(0)" onClick="layer_del('','index.php?m=advertise&c=cache_ad')" class="admin_infoboxp_nav admin_infoboxp_gl">更新广告</a>
   </div>
     	  <div class="search_select">
                                   
		                     
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">审核状态</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=advertise" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=advertise&is_check=1" 
                >已过期</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=advertise&is_check=-1" 
                >未审核</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">广告类型</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=advertise" class="admin_adv_search_cur">不限</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=advertise&ad=1" 
                >文字广告</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=advertise&ad=2" 
                >图片广告</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=advertise&ad=3" 
                >FLASH广告</a> 
                    
        </div>
        </div>
          
	  <div class="admin_adv_search_icon"><i class="admin_adv_search_icon_i">&nbsp;</i></div>
  </div> 
<div class="clear"></div> 
  
 
<div class="table-list">
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="" name="myform" method="get" id='myform' target="supportiframe">
    <input type="hidden" value="advertise" name="m">
    <input type="hidden" value="del" name="c">
 <input type="hidden" id="pytoken" name="pytoken" value="6dd985061a91">
<table width="100%">
	<thead>
			<tr class="admin_table_top">
             <th><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
			<th align="center">编号</th>
			<th align="left" width="150">广告位名称</th>
             <th align="left" width="120">使用范围</th>
             <th align="left" width="220">广告类别</th>
              <th align="center">点击量</th>
              <th align="center">状态</th>
            <th align="center">类型</th>
            <th align="left">广告状态</th>
            <th align="center">结束时间</th>
            <th align="center">排序</th>
			<th align="left" width="120">调用代码</th>
			<th class="admin_table_th_bg" align="left">操作</th>
		</tr>
	</thead>
	<tbody>
        <tr align="left" id="list7">
     <td align="center"><input type="checkbox" value="7" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">7</td>
    	<td align="left" class="td1"><span>WAP幻灯一</span></td>
		<td align="left"></td>
        <td align="left" class="ud">Wap站首页广告</td>
        <td align="center" class="ud">0</td>
        <td align="center" class="ud" id="7"><a href="javascript:void(0);" onClick="check_type(7,1);" ><font color="green">已审核</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14412678513.PNG">图片广告</a></td>
        <td class="ud" align="left"><font color='green'>使用中..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('内部调用','{yun\:}ad cid=50 id=7{\/yun}')">内部调用</a> | 
            <a href="javascript:void(0);" onClick="copy_url('外部调用','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=50&ad_id=7\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">外部调用</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=50&id=7"class="admin_cz_yl">预览</a> | 
        <a href="index.php?m=advertise&c=modify&id=7" class="admin_cz_bj">修改</a> | 
        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=advertise&c=del_ad&id=7');" class="admin_cz_sc">删除</a>
        </td>
  </tr>
      <tr align="left"class="admin_com_td_bg" id="list6">
     <td align="center"><input type="checkbox" value="6" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">6</td>
    	<td align="left" class="td1"><span>会员登录页广告</span></td>
		<td align="left"></td>
        <td align="left" class="ud">登录页图片切换</td>
        <td align="center" class="ud">0</td>
        <td align="center" class="ud" id="6"><a href="javascript:void(0);" onClick="check_type(6,1);" ><font color="green">已审核</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14434106119.JPG">图片广告</a></td>
        <td class="ud" align="left"><font color='green'>使用中..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('内部调用','{yun\:}ad cid=37 id=6{\/yun}')">内部调用</a> | 
            <a href="javascript:void(0);" onClick="copy_url('外部调用','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=37&ad_id=6\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">外部调用</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=37&id=6"class="admin_cz_yl">预览</a> | 
        <a href="index.php?m=advertise&c=modify&id=6" class="admin_cz_bj">修改</a> | 
        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=advertise&c=del_ad&id=6');" class="admin_cz_sc">删除</a>
        </td>
  </tr>
      <tr align="left" id="list5">
     <td align="center"><input type="checkbox" value="5" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">5</td>
    	<td align="left" class="td1"><span>首页头部右侧广告</span></td>
		<td align="left"></td>
        <td align="left" class="ud">头部广告260*60</td>
        <td align="center" class="ud">0</td>
        <td align="center" class="ud" id="5"><a href="javascript:void(0);" onClick="check_type(5,1);" ><font color="green">已审核</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14447101994.GIF">图片广告</a></td>
        <td class="ud" align="left"><font color='green'>使用中..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('内部调用','{yun\:}ad cid=52 id=5{\/yun}')">内部调用</a> | 
            <a href="javascript:void(0);" onClick="copy_url('外部调用','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=52&ad_id=5\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">外部调用</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=52&id=5"class="admin_cz_yl">预览</a> | 
        <a href="index.php?m=advertise&c=modify&id=5" class="admin_cz_bj">修改</a> | 
        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=advertise&c=del_ad&id=5');" class="admin_cz_sc">删除</a>
        </td>
  </tr>
      <tr align="left"class="admin_com_td_bg" id="list4">
     <td align="center"><input type="checkbox" value="4" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">4</td>
    	<td align="left" class="td1"><span>首页对联广告左</span></td>
		<td align="left"></td>
        <td align="left" class="ud">对联广告</td>
        <td align="center" class="ud">0</td>
        <td align="center" class="ud" id="4"><a href="javascript:void(0);" onClick="check_type(4,1);" ><font color="green">已审核</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14435734889.GIF">图片广告</a></td>
        <td class="ud" align="left"><font color='green'>使用中..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('内部调用','{yun\:}ad cid=11 id=4{\/yun}')">内部调用</a> | 
            <a href="javascript:void(0);" onClick="copy_url('外部调用','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=11&ad_id=4\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">外部调用</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=11&id=4"class="admin_cz_yl">预览</a> | 
        <a href="index.php?m=advertise&c=modify&id=4" class="admin_cz_bj">修改</a> | 
        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=advertise&c=del_ad&id=4');" class="admin_cz_sc">删除</a>
        </td>
  </tr>
      <tr align="left" id="list3">
     <td align="center"><input type="checkbox" value="3" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">3</td>
    	<td align="left" class="td1"><span>首页对联广告右</span></td>
		<td align="left"></td>
        <td align="left" class="ud">对联广告</td>
        <td align="center" class="ud">0</td>
        <td align="center" class="ud" id="3"><a href="javascript:void(0);" onClick="check_type(3,1);" ><font color="green">已审核</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14396433257.JPG">图片广告</a></td>
        <td class="ud" align="left"><font color='green'>使用中..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('内部调用','{yun\:}ad cid=11 id=3{\/yun}')">内部调用</a> | 
            <a href="javascript:void(0);" onClick="copy_url('外部调用','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=11&ad_id=3\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">外部调用</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=11&id=3"class="admin_cz_yl">预览</a> | 
        <a href="index.php?m=advertise&c=modify&id=3" class="admin_cz_bj">修改</a> | 
        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=advertise&c=del_ad&id=3');" class="admin_cz_sc">删除</a>
        </td>
  </tr>
      <tr align="left"class="admin_com_td_bg" id="list2">
     <td align="center"><input type="checkbox" value="2" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">2</td>
    	<td align="left" class="td1"><span>首页专题引导</span></td>
		<td align="left"></td>
        <td align="left" class="ud">首页顶部横栏</td>
        <td align="center" class="ud">1</td>
        <td align="center" class="ud" id="2"><a href="javascript:void(0);" onClick="check_type(2,1);" ><font color="green">已审核</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14382350059.JPG">图片广告</a></td>
        <td class="ud" align="left"><font color='green'>使用中..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('内部调用','{yun\:}ad cid=51 id=2{\/yun}')">内部调用</a> | 
            <a href="javascript:void(0);" onClick="copy_url('外部调用','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=51&ad_id=2\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">外部调用</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=51&id=2"class="admin_cz_yl">预览</a> | 
        <a href="index.php?m=advertise&c=modify&id=2" class="admin_cz_bj">修改</a> | 
        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=advertise&c=del_ad&id=2');" class="admin_cz_sc">删除</a>
        </td>
  </tr>
      <tr align="left" id="list1">
     <td align="center"><input type="checkbox" value="1" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">1</td>
    	<td align="left" class="td1"><span>首页幻灯一</span></td>
		<td align="left"></td>
        <td align="left" class="ud">首页幻灯广告规格：宽510高248</td>
        <td align="center" class="ud">0</td>
        <td align="center" class="ud" id="1"><a href="javascript:void(0);" onClick="check_type(1,1);" ><font color="green">已审核</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14428064404.JPG">图片广告</a></td>
        <td class="ud" align="left"><font color='green'>使用中..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('内部调用','{yun\:}ad cid=3 id=1{\/yun}')">内部调用</a> | 
            <a href="javascript:void(0);" onClick="copy_url('外部调用','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=3&ad_id=1\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">外部调用</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=3&id=1"class="admin_cz_yl">预览</a> | 
        <a href="index.php?m=advertise&c=modify&id=1" class="admin_cz_bj">修改</a> | 
        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=advertise&c=del_ad&id=1');" class="admin_cz_sc">删除</a>
        </td>
  </tr>
    <tr>
    <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
    <td colspan="2" >
    <label for="chkAll2">全选</label>&nbsp;
        <input type="button" onclick="return really('del[]')" value="删除所选" name="delsub" class="admin_submit4">
<input class="admin_submit4" type="button" name="delsub" value="批量延期" onClick="audall2('0');" /></td>
  <td colspan="10" class="digg"></td></tr>
  </tbody>
  </table>
</form>
</div>
</div>
</div>
<div id="infobox2" style="display:none;">
	<div class="" style=" margin-top:10px;">
    <div id="infobox"> 
      <form action="index.php?m=advertise&c=ctime" target="supportiframe" method="post" id="formstatus"> 
		<table cellspacing='2' cellpadding='3'>
			<tr><td style="float:right"><span style="font-weight:bold;">延长时间：</span></td><td><input class="input-text" value="" name="endtime" style="width:50px;" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"> 天 </td></tr>
 			<tr style="text-align:center;margin-top:10px"><td colspan='2' > <input type="submit"  value='确认' class="submit_btn">
          &nbsp;&nbsp;<input type="button"   onClick="layer.closeAll();" class="cancel_btn" value='取消'></td></tr>
		</table>  
		 <input type="hidden" name="pytoken" value="6dd985061a91">
        <input name="jobid" value="0" type="hidden"> 
      </form>
    </div>
  </div> 
</div>
</body>
</html><?php }} ?>
