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
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
   <div class="admin_Filter">
		<span class="complay_top_span fl">��������</span> 
            <form action="index.php" name="myform" method="get">
                <input name="m" value="navigation" type="hidden"/>
				<span class="admin_Filter_span">�������ͣ�</span> 
			 
				<div class="admin_Filter_text formselect"  did='dtype'>
				  <input type="button" value="ͷ������" class="admin_Filter_but"  id="btype">
				  <input type="hidden" id='type' value="1" name='nid'>
				  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
					  <ul>
											  <li><a href="javascript:void(0)" onClick="formselect('1','type','ͷ������')">ͷ������</a></li>
					  					  <li><a href="javascript:void(0)" onClick="formselect('2','type','�ײ�����')">�ײ�����</a></li>
					  					  <li><a href="javascript:void(0)" onClick="formselect('3','type','��ҵ�ײ�����')">��ҵ�ײ�����</a></li>
					  					  <li><a href="javascript:void(0)" onClick="formselect('5','type','�ʴ�ģ�鵼��')">�ʴ�ģ�鵼��</a></li>
					  					  <li><a href="javascript:void(0)" onClick="formselect('11','type','�ײ��ͻ��˵���')">�ײ��ͻ��˵���</a></li>
					   
					  </ul>  
				  </div>
				</div>
			<input class="admin_Filter_search"  type="text" name="keyword"  size="25" style="float:left"> 
			<input  class="admin_Filter_bth" type="submit" name="news_search" value="����"/>
			        <span class='admin_search_div'>
        <div class="admin_adv_search">
          <div class="admin_adv_search_bth">�߼�����</div>
        </div> 
        </span> 
            <a href="index.php?m=navigation&c=add" class="admin_infoboxp_tj">���ӵ���</a>
 			<a href="index.php?m=navigation&c=group" class="admin_infoboxp_tj">���ӷ���</a>

 		</form> 
	
</div>
	  <div class="search_select">
                                   
		                     
		                     
			</div>
	<div class="admin_adv_search_box">
              	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">��������</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=navigation" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=navigation&type=1" 
                >վ������</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=navigation&type=2" 
                >ԭ����</a> 
                    
        </div>
        </div>
                 	           	<div class="admin_adv_search_list">
                    <div class="admin_adv_search_left">��������</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=navigation" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=navigation&eject=1" 
                >�´���</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=navigation&eject=2" 
                >ԭ����</a> 
                    
        </div>
        </div>
                 	     	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
                    <div class="admin_adv_search_left">��ʾ״̬</div>
	  <div class="admin_adv_search_right">
		<a href="http://localhost/qyhr/admin/index.php?m=navigation" class="admin_adv_search_cur">����</a>
   		                <a href="http://localhost/qyhr/admin/index.php?m=navigation&display=1" 
                >��</a> 
                            <a href="http://localhost/qyhr/admin/index.php?m=navigation&display=2" 
                >��</a> 
                    
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
			<th>�������</th>
            <th>��������</th>
			<th>�������</th>
			<th>���ӵ�ַ</th>
            <th>��������</th>
			<th>����</th>
            <th>��������</th>
            <th>��ʾ</th>
			<th class="admin_table_th_bg">����</th>
		</tr>
	</thead>
	<tbody>
        <tr align="center" id="list1">
	    <td><input type="checkbox" value="1"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>1</span></td>
        <td class="od" align="left">��ҳ</td>
    	<td class="ud" align="left">ͷ������</td>
		<td class="gd" align="left">index.php</td>
        <td class="td">վ������</td>
		<td class="td">1</td>
        <td class="td">ԭ����</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=1" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=1');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list49">
	    <td><input type="checkbox" value="49"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>49</span></td>
        <td class="od" align="left">������</td>
    	<td class="ud" align="left">�ײ��ͻ��˵���</td>
		<td class="gd" align="left">index.php?c=wap</td>
        <td class="td">վ������</td>
		<td class="td">1</td>
        <td class="td">�´���</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=49" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=49');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
      <tr align="center" id="list33">
	    <td><input type="checkbox" value="33"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>33</span></td>
        <td class="od" align="left">��ҳ</td>
    	<td class="ud" align="left">�ʴ�ģ�鵼��</td>
		<td class="gd" align="left">index.php</td>
        <td class="td">վ������</td>
		<td class="td">1</td>
        <td class="td">�´���</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=33" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=33');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list2">
	    <td><input type="checkbox" value="2"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>2</span></td>
        <td class="od" align="left">�ҹ���</td>
    	<td class="ud" align="left">ͷ������</td>
		<td class="gd" align="left">job/</td>
        <td class="td">վ������</td>
		<td class="td">2</td>
        <td class="td">ԭ����</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=2" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=2');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
      <tr align="center" id="list34">
	    <td><input type="checkbox" value="34"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>34</span></td>
        <td class="od" align="left">��������</td>
    	<td class="ud" align="left">�ײ�����</td>
		<td class="gd" align="left">/about/phpyun.html</td>
        <td class="td">վ������</td>
		<td class="td">3</td>
        <td class="td">ԭ����</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=34" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=34');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list51">
	    <td><input type="checkbox" value="51"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>51</span></td>
        <td class="od" align="left">΢��</td>
    	<td class="ud" align="left">�ײ��ͻ��˵���</td>
		<td class="gd" align="left">index.php?c=weixin</td>
        <td class="td">վ������</td>
		<td class="td">3</td>
        <td class="td">�´���</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=51" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=51');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
      <tr align="center" id="list3">
	    <td><input type="checkbox" value="3"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>3</span></td>
        <td class="od" align="left">���˲�</td>
    	<td class="ud" align="left">ͷ������</td>
		<td class="gd" align="left">resume/</td>
        <td class="td">վ������</td>
		<td class="td">3</td>
        <td class="td">ԭ����</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=3" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=3');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list11">
	    <td><input type="checkbox" value="11"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>11</span></td>
        <td class="od" align="left">����ҵ</td>
    	<td class="ud" align="left">ͷ������</td>
		<td class="gd" align="left">company/</td>
        <td class="td">վ������</td>
		<td class="td">4</td>
        <td class="td">ԭ����</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=11" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=11');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
      <tr align="center" id="list32">
	    <td><input type="checkbox" value="32"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>32</span></td>
        <td class="od" align="left">ְ���ʴ�</td>
    	<td class="ud" align="left">�ʴ�ģ�鵼��</td>
		<td class="gd" align="left">ask/</td>
        <td class="td">վ������</td>
		<td class="td">4</td>
        <td class="td">�´���</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=32" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=32');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list5">
	    <td><input type="checkbox" value="5"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>5</span></td>
        <td class="od" align="left">΢��Ƹ</td>
    	<td class="ud" align="left">ͷ������</td>
		<td class="gd" align="left">once/</td>
        <td class="td">վ������</td>
		<td class="td">6</td>
        <td class="td">ԭ����</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=5" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=5');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
      <tr align="center" id="list26">
	    <td><input type="checkbox" value="26"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>26</span></td>
        <td class="od" align="left">΢����</td>
    	<td class="ud" align="left">ͷ������</td>
		<td class="gd" align="left">tiny/</td>
        <td class="td">վ������</td>
		<td class="td">6</td>
        <td class="td">ԭ����</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=26" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=26');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
      <tr align="center"class="admin_com_td_bg" id="list4">
	    <td><input type="checkbox" value="4"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>4</span></td>
        <td class="od" align="left">ְ����Ѷ</td>
    	<td class="ud" align="left">ͷ������</td>
		<td class="gd" align="left">article/</td>
        <td class="td">վ������</td>
		<td class="td">7</td>
        <td class="td">ԭ����</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=4" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=4');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
      <tr align="center" id="list15">
	    <td><input type="checkbox" value="15"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span>15</span></td>
        <td class="od" align="left">��Ƹ��</td>
    	<td class="ud" align="left">ͷ������</td>
		<td class="gd" align="left">zph/</td>
        <td class="td">վ������</td>
		<td class="td">9</td>
        <td class="td">ԭ����</td>
    	<td class="td">��</td>
    	<td><a href="index.php?m=navigation&c=add&id=15" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navigation&c=del&id=15');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
    <tr style="background:#f1f1f1;">
    <td align="center"><label for="chkall2"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></label></td>
    <td colspan="2" ><label for="chkAll2">ȫѡ</label>
    <input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ"  onclick="return really('del[]')"/></td>
    <td colspan="7" class="digg"><a href="http://localhost/qyhr/admin/index.php?m=navigation&page=1">��һҳ</a><a href="#" class="selected">1</a><a href="http://localhost/qyhr/admin/index.php?m=navigation&page=2">2</a><a href="http://localhost/qyhr/admin/index.php?m=navigation&page=2">��һҳ</a><em>��2ҳ</em></td>
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