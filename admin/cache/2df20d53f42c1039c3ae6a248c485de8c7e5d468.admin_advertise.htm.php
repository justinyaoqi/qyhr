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
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ����� 
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg("����δѡ���κ���Ϣ��",2,2);	return false;
	}else{
		$("input[name=jobid]").val(codewebarr);
 		$.layer({
			type : 1,
			title :'��������', 
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
<title>��̨����</title>
</head>
<body class="body_ifm">
<div id="wname"  style="display:none; width: 300px; "> 
	<div style="height: 160px;" class="job_box_div">  
	   <div class="job_box_inp">
		<table class="table_form "style="width:100%">
			<tr ><td  class='ui_content_wrap'>����(CTRL+C)�����ݲ���ӵ�ģ����</td></tr> 
			<tr><td><input type="text" name="position" id='copy_url' class="input-text" size='45'/></td></tr> 
		</table> 
	   </div>
	</div>
</div> 
<div class="infoboxp"> 
<div class="infoboxp_top_bg"></div>
    <div class="admin_Filter">
		<span class="complay_top_span fl">������</span> 
		<form action="index.php" name="myform" method="get">
		<input name="m" value="advertise" type="hidden"/> 
		  <span class="admin_Filter_span"> ������</span> 
		  <div class="admin_Filter_text_big formselect"  did='dclass_id'>
		  <input type="button" value="����" class="admin_Filter_but_big"  id="bclass_id">
		  <input type="hidden" id='class_id' value="" name='class_id'>
		  <div class="admin_Filter_text_box" style="display:none;width:258px;height:230px; overflow:auto; overflow-x:hidden" id='dclass_id'>
			  <ul>
			  			  <li><a href="javascript:void(0)" onClick="formselect('29','class_id','ģ��3�в����1')">ģ��3�в����1</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('14','class_id','��ҳ˫��������497*78')">��ҳ˫��������497*78</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('7','class_id','ְλ�б�ҳ���')">ְλ�б�ҳ���</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('5','class_id','��ҳ�������')">��ҳ�������</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('6','class_id','��ҳ������960X80')">��ҳ������960X80</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('3','class_id','��ҳ�õƹ���񣺿�510��248')">��ҳ�õƹ���񣺿�510��248</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('13','class_id','��ҳ������Ƹ�º�����980*60')">��ҳ������Ƹ�º�����980*60</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('12','class_id','��ҳ�����˲��Ҳ���269*50')">��ҳ�����˲��Ҳ���269*50</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('27','class_id','ְλ����ҳ�Ҳ�')">ְλ����ҳ�Ҳ�</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('37','class_id','��¼ҳͼƬ�л�')">��¼ҳͼƬ�л�</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('51','class_id','��ҳ��������')">��ҳ��������</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('15','class_id','��ҳ������Ƹ��������������325*60')">��ҳ������Ƹ��������������325*60</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('1','class_id','��ҳ�в�ͼƬ��� ��񣺿�154 ��50')">��ҳ�в�ͼƬ��� ��񣺿�154 ��50</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('8','class_id','��ҳ����ְλ�Ҳ���285*51')">��ҳ����ְλ�Ҳ���285*51</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('10','class_id','��վ�ײ��������980*60')">��վ�ײ��������980*60</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('11','class_id','�������')">�������</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('34','class_id','�����̳���ҳ�õ�')">�����̳���ҳ�õ�</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('35','class_id','��ѵ��ҳ�õ�')">��ѵ��ҳ�õ�</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('39','class_id','ģ��1_��ҳ������Ƹ�Ҳ�ͼƬ')">ģ��1_��ҳ������Ƹ�Ҳ�ͼƬ</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('48','class_id','�ʴ���ҳ���')">�ʴ���ҳ���</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('50','class_id','Wapվ��ҳ���')">Wapվ��ҳ���</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('36','class_id','�˲��б��Ҳ���168*120')">�˲��б��Ҳ���168*120</a></li>
			  			  <li><a href="javascript:void(0)" onClick="formselect('52','class_id','ͷ�����260*60')">ͷ�����260*60</a></li>
			   
			  </ul>  
		  </div>
		</div> 
		<input class="admin_Filter_search" type="text" name="name"  size="25" style="float:left">
		<input  class="admin_Filter_bth"  type="submit" name="comquestion" value="����"/>
		</form> 
		<span class='admin_search_div'>
		  <div class="admin_adv_search"><div class="admin_adv_search_bth">�߼�����</div></div>  
		   
		</span> 
  		<a href="index.php?m=advertise&c=ad_add" class="admin_infoboxp_tj" style="margin-top:0px;"> ��ӹ��</a>        
		<a href="javascript:void(0)" onClick="layer_del('','index.php?m=advertise&c=cache_ad')" class="admin_infoboxp_nav admin_infoboxp_gl">���¹��</a>
   </div>
     	  <div class="search_select">
                                   
		                     
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">���״̬</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=advertise" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=advertise&is_check=1" 
                >�ѹ���</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=advertise&is_check=-1" 
                >δ���</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">�������</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=advertise" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=advertise&ad=1" 
                >���ֹ��</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=advertise&ad=2" 
                >ͼƬ���</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=advertise&ad=3" 
                >FLASH���</a> 
                    
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
			<th align="center">���</th>
			<th align="left" width="150">���λ����</th>
             <th align="left" width="120">ʹ�÷�Χ</th>
             <th align="left" width="220">������</th>
              <th align="center">�����</th>
              <th align="center">״̬</th>
            <th align="center">����</th>
            <th align="left">���״̬</th>
            <th align="center">����ʱ��</th>
            <th align="center">����</th>
			<th align="left" width="120">���ô���</th>
			<th class="admin_table_th_bg" align="left">����</th>
		</tr>
	</thead>
	<tbody>
        <tr align="left" id="list7">
     <td align="center"><input type="checkbox" value="7" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">7</td>
    	<td align="left" class="td1"><span>WAP�õ�һ</span></td>
		<td align="left"></td>
        <td align="left" class="ud">Wapվ��ҳ���</td>
        <td align="center" class="ud">0</td>
        <td align="center" class="ud" id="7"><a href="javascript:void(0);" onClick="check_type(7,1);" ><font color="green">�����</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14412678513.PNG">ͼƬ���</a></td>
        <td class="ud" align="left"><font color='green'>ʹ����..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('�ڲ�����','{yun\:}ad cid=50 id=7{\/yun}')">�ڲ�����</a> | 
            <a href="javascript:void(0);" onClick="copy_url('�ⲿ����','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=50&ad_id=7\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">�ⲿ����</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=50&id=7"class="admin_cz_yl">Ԥ��</a> | 
        <a href="index.php?m=advertise&c=modify&id=7" class="admin_cz_bj">�޸�</a> | 
        <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=advertise&c=del_ad&id=7');" class="admin_cz_sc">ɾ��</a>
        </td>
  </tr>
      <tr align="left"class="admin_com_td_bg" id="list6">
     <td align="center"><input type="checkbox" value="6" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">6</td>
    	<td align="left" class="td1"><span>��Ա��¼ҳ���</span></td>
		<td align="left"></td>
        <td align="left" class="ud">��¼ҳͼƬ�л�</td>
        <td align="center" class="ud">0</td>
        <td align="center" class="ud" id="6"><a href="javascript:void(0);" onClick="check_type(6,1);" ><font color="green">�����</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14434106119.JPG">ͼƬ���</a></td>
        <td class="ud" align="left"><font color='green'>ʹ����..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('�ڲ�����','{yun\:}ad cid=37 id=6{\/yun}')">�ڲ�����</a> | 
            <a href="javascript:void(0);" onClick="copy_url('�ⲿ����','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=37&ad_id=6\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">�ⲿ����</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=37&id=6"class="admin_cz_yl">Ԥ��</a> | 
        <a href="index.php?m=advertise&c=modify&id=6" class="admin_cz_bj">�޸�</a> | 
        <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=advertise&c=del_ad&id=6');" class="admin_cz_sc">ɾ��</a>
        </td>
  </tr>
      <tr align="left" id="list5">
     <td align="center"><input type="checkbox" value="5" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">5</td>
    	<td align="left" class="td1"><span>��ҳͷ���Ҳ���</span></td>
		<td align="left"></td>
        <td align="left" class="ud">ͷ�����260*60</td>
        <td align="center" class="ud">0</td>
        <td align="center" class="ud" id="5"><a href="javascript:void(0);" onClick="check_type(5,1);" ><font color="green">�����</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14447101994.GIF">ͼƬ���</a></td>
        <td class="ud" align="left"><font color='green'>ʹ����..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('�ڲ�����','{yun\:}ad cid=52 id=5{\/yun}')">�ڲ�����</a> | 
            <a href="javascript:void(0);" onClick="copy_url('�ⲿ����','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=52&ad_id=5\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">�ⲿ����</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=52&id=5"class="admin_cz_yl">Ԥ��</a> | 
        <a href="index.php?m=advertise&c=modify&id=5" class="admin_cz_bj">�޸�</a> | 
        <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=advertise&c=del_ad&id=5');" class="admin_cz_sc">ɾ��</a>
        </td>
  </tr>
      <tr align="left"class="admin_com_td_bg" id="list4">
     <td align="center"><input type="checkbox" value="4" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">4</td>
    	<td align="left" class="td1"><span>��ҳ���������</span></td>
		<td align="left"></td>
        <td align="left" class="ud">�������</td>
        <td align="center" class="ud">0</td>
        <td align="center" class="ud" id="4"><a href="javascript:void(0);" onClick="check_type(4,1);" ><font color="green">�����</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14435734889.GIF">ͼƬ���</a></td>
        <td class="ud" align="left"><font color='green'>ʹ����..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('�ڲ�����','{yun\:}ad cid=11 id=4{\/yun}')">�ڲ�����</a> | 
            <a href="javascript:void(0);" onClick="copy_url('�ⲿ����','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=11&ad_id=4\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">�ⲿ����</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=11&id=4"class="admin_cz_yl">Ԥ��</a> | 
        <a href="index.php?m=advertise&c=modify&id=4" class="admin_cz_bj">�޸�</a> | 
        <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=advertise&c=del_ad&id=4');" class="admin_cz_sc">ɾ��</a>
        </td>
  </tr>
      <tr align="left" id="list3">
     <td align="center"><input type="checkbox" value="3" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">3</td>
    	<td align="left" class="td1"><span>��ҳ���������</span></td>
		<td align="left"></td>
        <td align="left" class="ud">�������</td>
        <td align="center" class="ud">0</td>
        <td align="center" class="ud" id="3"><a href="javascript:void(0);" onClick="check_type(3,1);" ><font color="green">�����</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14396433257.JPG">ͼƬ���</a></td>
        <td class="ud" align="left"><font color='green'>ʹ����..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('�ڲ�����','{yun\:}ad cid=11 id=3{\/yun}')">�ڲ�����</a> | 
            <a href="javascript:void(0);" onClick="copy_url('�ⲿ����','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=11&ad_id=3\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">�ⲿ����</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=11&id=3"class="admin_cz_yl">Ԥ��</a> | 
        <a href="index.php?m=advertise&c=modify&id=3" class="admin_cz_bj">�޸�</a> | 
        <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=advertise&c=del_ad&id=3');" class="admin_cz_sc">ɾ��</a>
        </td>
  </tr>
      <tr align="left"class="admin_com_td_bg" id="list2">
     <td align="center"><input type="checkbox" value="2" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">2</td>
    	<td align="left" class="td1"><span>��ҳר������</span></td>
		<td align="left"></td>
        <td align="left" class="ud">��ҳ��������</td>
        <td align="center" class="ud">1</td>
        <td align="center" class="ud" id="2"><a href="javascript:void(0);" onClick="check_type(2,1);" ><font color="green">�����</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14382350059.JPG">ͼƬ���</a></td>
        <td class="ud" align="left"><font color='green'>ʹ����..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('�ڲ�����','{yun\:}ad cid=51 id=2{\/yun}')">�ڲ�����</a> | 
            <a href="javascript:void(0);" onClick="copy_url('�ⲿ����','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=51&ad_id=2\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">�ⲿ����</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=51&id=2"class="admin_cz_yl">Ԥ��</a> | 
        <a href="index.php?m=advertise&c=modify&id=2" class="admin_cz_bj">�޸�</a> | 
        <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=advertise&c=del_ad&id=2');" class="admin_cz_sc">ɾ��</a>
        </td>
  </tr>
      <tr align="left" id="list1">
     <td align="center"><input type="checkbox" value="1" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center">1</td>
    	<td align="left" class="td1"><span>��ҳ�õ�һ</span></td>
		<td align="left"></td>
        <td align="left" class="ud">��ҳ�õƹ���񣺿�510��248</td>
        <td align="center" class="ud">0</td>
        <td align="center" class="ud" id="1"><a href="javascript:void(0);" onClick="check_type(1,1);" ><font color="green">�����</font></a></td>
        <td  align="center" class="ud"><a href="javascript:void(0)" class="preview" url="../data/upload/pimg/20150623/14428064404.JPG">ͼƬ���</a></td>
        <td class="ud" align="left"><font color='green'>ʹ����..</font></td>
        <td class="ud" align="center">2017-06-30</td>
        <td class="ud" align="center">0</td>
    	<td class="ud" align="left"> 
			 
        	<a href="javascript:void(0);" class="admin_cz_bj" onClick="copy_url('�ڲ�����','{yun\:}ad cid=3 id=1{\/yun}')">�ڲ�����</a> | 
            <a href="javascript:void(0);" onClick="copy_url('�ⲿ����','&lt;script src=\'http://localhost/qyhr/data/plus/yunimg.php?classid=3&ad_id=1\' language=\'javascript\'&gt;&lt;/script&gt;')" class="admin_cz_bj">�ⲿ����</a>  
					
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=3&id=1"class="admin_cz_yl">Ԥ��</a> | 
        <a href="index.php?m=advertise&c=modify&id=1" class="admin_cz_bj">�޸�</a> | 
        <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=advertise&c=del_ad&id=1');" class="admin_cz_sc">ɾ��</a>
        </td>
  </tr>
    <tr>
    <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
    <td colspan="2" >
    <label for="chkAll2">ȫѡ</label>&nbsp;
        <input type="button" onclick="return really('del[]')" value="ɾ����ѡ" name="delsub" class="admin_submit4">
<input class="admin_submit4" type="button" name="delsub" value="��������" onClick="audall2('0');" /></td>
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
			<tr><td style="float:right"><span style="font-weight:bold;">�ӳ�ʱ�䣺</span></td><td><input class="input-text" value="" name="endtime" style="width:50px;" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"> �� </td></tr>
 			<tr style="text-align:center;margin-top:10px"><td colspan='2' > <input type="submit"  value='ȷ��' class="submit_btn">
          &nbsp;&nbsp;<input type="button"   onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></td></tr>
		</table>  
		 <input type="hidden" name="pytoken" value="6dd985061a91">
        <input name="jobid" value="0" type="hidden"> 
      </form>
    </div>
  </div> 
</div>
</body>
</html><?php }} ?>
