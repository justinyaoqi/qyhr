<?php /*%%SmartyHeaderCode:3260255e2d048d70363-85570551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '509cad214ad525059d87b49f708c9b415149a593' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\index.htm',
      1 => 1440861575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3260255e2d048d70363-85570551',
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'navigation' => 0,
    'v' => 0,
    'navigation_url' => 0,
    'nav_user' => 0,
    'menu' => 0,
    'one_menu' => 0,
    'val' => 0,
    'two_menu' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d048ec4359_80602110',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d048ec4359_80602110')) {function content_55e2d048ec4359_80602110($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="off">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>phpyun�˲�ϵͳ - ��̨��������</title>
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../js/jquery-1.8.0.min.js"></script>
<script src="../js/layer/layer.min.js" language="javascript"></script> 
<script src="js/admin_public.js" language="javascript"></script>
<!--[if IE 6]>
<script src="./js/png.js"></script>
<script>
  DD_belatedPNG.fix('.png,.header .logo,.header .nav li a,.header .nav li.on,.left_menu h3 span.on,.admin_adv_search_bth,admin_infoboxp_tj');
</script>
<![endif]-->
<script type="text/javascript">
	var pc_hash = 'l9Yqpa' 
	function check_web(id){
		$("html").removeClass("on");
		var timestamp=Math.round(new Date().getTime()/1000) ;
		var pytoken=$("#pytoken").val();
		$.get("index.php?c=topmenu&id="+id,function(data){
			document.getElementById("current_pos").innerHTML = data;
		})
	}
</script>
</head>
<body scroll="no">
<div class="header" style="width:auto;">
<input type="hidden" name="pytoken" id='pytoken' value="6dd985061a91">
  <div class="header_bg">
    
    <div class="col-auto" style="overflow: visible">
      <ul class="nav white" id="top_menu">
        <li id="_M1000" class="on top_menu"><a href="javascript:_M(1000,'index.php?m=admin_right')"  onclick="check_web('1000');" hidefocus="true" style="outline:none;">��ҳ</a></li>
                <li id="_M1" class="top_menu"><a class="system" href="javascript:_M(1,'index.php?m=config')" onclick="check_web(1);" hidefocus="true" style="outline:none;">ϵͳ</a></li>
                <li id="_M10" class="top_menu"><a class="com" href="javascript:_M(10,'index.php?m=admin_company')" onclick="check_web(10);" hidefocus="true" style="outline:none;">��ҵ</a></li>
                <li id="_M3" class="top_menu"><a class="user" href="javascript:_M(3,'index.php?m=user_member')" onclick="check_web(3);" hidefocus="true" style="outline:none;">����</a></li>
                <li id="_M9" class="top_menu"><a class="news" href="javascript:_M(9,'index.php?m=admin_news')" onclick="check_web(9);" hidefocus="true" style="outline:none;">����</a></li>
                <li id="_M2" class="top_menu"><a class="zph" href="javascript:_M(2,'index.php?m=zhaopinhui')" onclick="check_web(2);" hidefocus="true" style="outline:none;">��Ƹ��</a></li>
                <li id="_M1210" class="top_menu"><a class="social" href="javascript:_M(1210,'index.php?m=admin_message')" onclick="check_web(1210);" hidefocus="true" style="outline:none;">�罻</a></li>
                <li id="_M14" class="top_menu"><a class="jf" href="javascript:_M(14,'index.php?m=reward_list')" onclick="check_web(14);" hidefocus="true" style="outline:none;">�̳�</a></li>
                <li id="_M12" class="top_menu"><a class="ban" href="javascript:_M(12,'index.php?m=advertise')" onclick="check_web(12);" hidefocus="true" style="outline:none;">���</a></li>
                <li id="_M78" class="top_menu"><a class="column" href="javascript:_M(78,'index.php?m=userclass')" onclick="check_web(78);" hidefocus="true" style="outline:none;">���</a></li>
                <li id="_M5" class="top_menu"><a class="generate" href="javascript:_M(5,'index.php?m=cache&c=index')" onclick="check_web(5);" hidefocus="true" style="outline:none;">����</a></li>
                <li id="_M6" class="top_menu"><a class="operations" href="javascript:_M(6,'index.php?m=admin_keyword')" onclick="check_web(6);" hidefocus="true" style="outline:none;">��Ӫ</a></li>
                <li id="_M127" class="top_menu"><a class="tool" href="javascript:_M(127,'index.php?m=cron')" onclick="check_web(127);" hidefocus="true" style="outline:none;">����</a></li>
                <li id="_M1327" class="top_menu"><a class="evaluate" href="javascript:_M(1327,'index.php?m=admin_evaluate')" onclick="check_web(1327);" hidefocus="true" style="outline:none;">����</a></li>
                <li id="_M15" class="top_menu"><a class="guanliyuan" href="javascript:_M(15,'index.php?m=admin_user&c=myuser')" onclick="check_web(15);" hidefocus="true" style="outline:none;">����Ա</a></li>
              </ul>
    </div>
    <div>
      <div class="admin-header_top">
        <div class="admin-header_top_wz">
            <a href="http://www.bibizan.cn" target="_blank">����������</a> |
        <a href="javascript:void(0)" target="right" onclick="layer_del('','index.php?m=index&c=del_cache');"><span>���»���</span></a> |
        <a href="http://localhost/qyhr" target="_blank" id="site_homepage">վ����ҳ</a>
        </div>
        </div>
    </div>
  </div>
</div>
<div id="content" style="width:auto;">
  <div class="col-left left_menu">
    <div id="leftMain"> </div>
    <a href="javascript:;" id="openClose" style="outline-style:none;outline-color:invert;outline-width:medium;height:539px;" hidefocus="hidefocus" class="open" title="չ����ر�"><span class="hidden"> </span></a>
    </div>
  <div class="col-1 lf cat-menu" id="display_center_id" style="display:none" height="100%">
    <div class="content"> </div>
  </div>
  <div class="col-auto">
    <div class="crumbs-admin-top">
      <div class="crumbs">
        <div class="admin_top_shortcut ">
        ���ã�<font color="#0066FF">��������Ա</font> ��������Ա  <a href="javascript:void(0)" onclick="layer_logout('index.php?m=index&c=logout');" class="admin_logout">�˳���¼</a> | <a href="javascript:void(0)" onclick="adminmap()"> <span>��̨��ͼ</span></a>&nbsp;&nbsp;
        </div>
        ��ǰλ�ã�<span id="current_pos">������ҳ</span> </div>
    </div>
    <div class="">
      <div class="" style="position:relative; overflow:hidden">
        <iframe name="right" id="rightMain" src="index.php?m=admin_right" frameborder="false" scrolling="auto" style="border:none;" width="100%" height="470" allowtransparency="true"></iframe>
      </div>
    </div>
  </div>
</div>
<ul class="tab-web-panel hidden" style="position: absolute; z-index: 999; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); left: 680px; top: 82px; display: none; background-position: initial initial; background-repeat: initial initial; ">
  <li style="margin:0"><a href="javascript:site_select(1, 'Ĭ��վ��', '#', '1')">Ĭ��վ��</a></li>
</ul>
<div style="display:none;">
  <div id="DIV_M1000">
    <h3 class="f14">
        <div class="shortcut_menu_bb" ><em class="switchs_sz" onclick="shortcut_menu()"></em>��ݲ˵�</div>
    </h3>
    <ul id='keyid_1000' class="left_mune_ul">
                <li id="_MP133" class="sub_menu" name='124'>
            <a href="javascript:_MP(133,'index.php?m=admin_news');" onclick="check_web(133);" hidefocus="true" style="outline:none;">���Ź���</a>
          </li>
                <li id="_MP11" class="sub_menu" name='8'>
            <a href="javascript:_MP(11,'index.php?m=config');" onclick="check_web(11);" hidefocus="true" style="outline:none;">��վ����</a>
          </li>
                <li id="_MP1312" class="sub_menu" name='1306'>
            <a href="javascript:_MP(1312,'index.php?m=admin_user&c=myuser');" onclick="check_web(1312);" hidefocus="true" style="outline:none;">�ҵ��ʺ�</a>
          </li>
                <li id="_MP164" class="sub_menu" name='49'>
            <a href="javascript:_MP(164,'index.php?m=cache&c=index');" onclick="check_web(164);" hidefocus="true" style="outline:none;">��ҳ����</a>
          </li>
                <li id="_MP150" class="sub_menu" name='35'>
            <a href="javascript:_MP(150,'index.php?m=admin_resume');" onclick="check_web(150);" hidefocus="true" style="outline:none;">��������</a>
          </li>
                <li id="_MP1314" class="sub_menu" name='1306'>
            <a href="javascript:_MP(1314,'index.php?m=admin_user&c=pass');" onclick="check_web(1314);" hidefocus="true" style="outline:none;">�޸��ҵ�����</a>
          </li>
                <li id="_MP146" class="sub_menu" name='8'>
            <a href="javascript:_MP(146,'index.php?m=navigation');" onclick="check_web(146);" hidefocus="true" style="outline:none;">��������</a>
          </li>
                <li id="_MP170" class="sub_menu" name='80'>
            <a href="javascript:_MP(170,'index.php?m=admin_industry');" onclick="check_web(170);" hidefocus="true" style="outline:none;">��ҵ���</a>
          </li>
                <li id="_MP171" class="sub_menu" name='1216'>
            <a href="javascript:_MP(171,'index.php?m=admin_message');" onclick="check_web(171);" hidefocus="true" style="outline:none;">���Է���</a>
          </li>
                <li id="_MP1244" class="sub_menu" name='49'>
            <a href="javascript:_MP(1244,'index.php?m=cache&c=all');" onclick="check_web(1244);" hidefocus="true" style="outline:none;">һ������</a>
          </li>
          </ul>
  </div>
    <div id="DIV_M1">
              <h3 class="f14">
            <div class="shortcut_menu_bb">ϵͳ����</div>
        </h3>
        <ul id="keyid_1" class="left_mune_ul">
                     <li id="_MP11" class="sub_menu" > <a href="javascript:_MP(11,'index.php?m=config');" onclick="check_web(11);" hidefocus="true" style="outline:none;">��վ����</a> </li>
                    <li id="_MP1318" class="sub_menu" > <a href="javascript:_MP(1318,'index.php?m=model_config');" onclick="check_web(1318);" hidefocus="true" style="outline:none;">ģ������</a> </li>
                    <li id="_MP1321" class="sub_menu" > <a href="javascript:_MP(1321,'index.php?m=web_config');" onclick="check_web(1321);" hidefocus="true" style="outline:none;">ҳ������</a> </li>
                    <li id="_MP146" class="sub_menu" > <a href="javascript:_MP(146,'index.php?m=navigation');" onclick="check_web(146);" hidefocus="true" style="outline:none;">��������</a> </li>
                    <li id="_MP157" class="sub_menu" > <a href="javascript:_MP(157,'index.php?m=emailconfig');" onclick="check_web(157);" hidefocus="true" style="outline:none;">�ʼ�����</a> </li>
                    <li id="_MP158" class="sub_menu" > <a href="javascript:_MP(158,'index.php?m=msgconfig');" onclick="check_web(158);" hidefocus="true" style="outline:none;">��������</a> </li>
                    <li id="_MP122" class="sub_menu" > <a href="javascript:_MP(122,'index.php?m=payconfig');" onclick="check_web(122);" hidefocus="true" style="outline:none;">֧������</a> </li>
                    <li id="_MP176" class="sub_menu" > <a href="javascript:_MP(176,'index.php?m=seo');" onclick="check_web(176);" hidefocus="true" style="outline:none;">SEO����</a> </li>
                    <li id="_MP126" class="sub_menu" > <a href="javascript:_MP(126,'index.php?m=userconfig');" onclick="check_web(126);" hidefocus="true" style="outline:none;">�û�����</a> </li>
                    <li id="_MP1270" class="sub_menu" > <a href="javascript:_MP(1270,'index.php?m=integral');" onclick="check_web(1270);" hidefocus="true" style="outline:none;">��������</a> </li>
                    <li id="_MP1316" class="sub_menu" > <a href="javascript:_MP(1316,'index.php?m=navmap');" onclick="check_web(1316);" hidefocus="true" style="outline:none;">��վ��ͼ</a> </li>
                    <li id="_MP1325" class="sub_menu" > <a href="javascript:_MP(1325,'index.php?m=regset');" onclick="check_web(1325);" hidefocus="true" style="outline:none;">ע������</a> </li>
                  </ul>
          </div>
    <div id="DIV_M10">
              <h3 class="f14">
            <div class="shortcut_menu_bb">��ҵ����</div>
        </h3>
        <ul id="keyid_10" class="left_mune_ul">
                     <li id="_MP151" class="sub_menu" > <a href="javascript:_MP(151,'index.php?m=admin_company');" onclick="check_web(151);" hidefocus="true" style="outline:none;">��˾����</a> </li>
                    <li id="_MP152" class="sub_menu" > <a href="javascript:_MP(152,'index.php?m=admin_company_job');" onclick="check_web(152);" hidefocus="true" style="outline:none;">ְλ����</a> </li>
                    <li id="_MP189" class="sub_menu" > <a href="javascript:_MP(189,'index.php?m=comproduct');" onclick="check_web(189);" hidefocus="true" style="outline:none;">��ҵ��Ʒ����</a> </li>
                    <li id="_MP188" class="sub_menu" > <a href="javascript:_MP(188,'index.php?m=comnews');" onclick="check_web(188);" hidefocus="true" style="outline:none;">��ҵ���Ź���</a> </li>
                    <li id="_MP1234" class="sub_menu" > <a href="javascript:_MP(1234,'index.php?m=com_pl');" onclick="check_web(1234);" hidefocus="true" style="outline:none;">��ҵ����</a> </li>
                    <li id="_MP174" class="sub_menu" > <a href="javascript:_MP(174,'index.php?m=comcert');" onclick="check_web(174);" hidefocus="true" style="outline:none;">��ҵ��֤���</a> </li>
                    <li id="_MP149" class="sub_menu" > <a href="javascript:_MP(149,'index.php?m=admin_once');" onclick="check_web(149);" hidefocus="true" style="outline:none;">΢��Ƹ</a> </li>
                    <li id="_MP1337" class="sub_menu" > <a href="javascript:_MP(1337,'index.php?m=special');" onclick="check_web(1337);" hidefocus="true" style="outline:none;">ר����Ƹ</a> </li>
                    <li id="_MP1261" class="sub_menu" > <a href="javascript:_MP(1261,'index.php?m=apply');" onclick="check_web(1261);" hidefocus="true" style="outline:none;">ְλ�����¼</a> </li>
                    <li id="_MP1262" class="sub_menu" > <a href="javascript:_MP(1262,'index.php?m=invite');" onclick="check_web(1262);" hidefocus="true" style="outline:none;">�������Լ�¼</a> </li>
                    <li id="_MP1271" class="sub_menu" > <a href="javascript:_MP(1271,'index.php?m=admin_company_rating');" onclick="check_web(1271);" hidefocus="true" style="outline:none;">��ҵ��Ա�ȼ�</a> </li>
                    <li id="_MP1281" class="sub_menu" > <a href="javascript:_MP(1281,'index.php?m=look_job');" onclick="check_web(1281);" hidefocus="true" style="outline:none;">ְλ�����¼</a> </li>
                  </ul>
          </div>
    <div id="DIV_M3">
              <h3 class="f14">
            <div class="shortcut_menu_bb">�����û�</div>
        </h3>
        <ul id="keyid_3" class="left_mune_ul">
                     <li id="_MP38" class="sub_menu" > <a href="javascript:_MP(38,'index.php?m=user_member');" onclick="check_web(38);" hidefocus="true" style="outline:none;">�����û��б�</a> </li>
                    <li id="_MP150" class="sub_menu" > <a href="javascript:_MP(150,'index.php?m=admin_resume');" onclick="check_web(150);" hidefocus="true" style="outline:none;">��������</a> </li>
                    <li id="_MP195" class="sub_menu" > <a href="javascript:_MP(195,'index.php?m=usercert');" onclick="check_web(195);" hidefocus="true" style="outline:none;">������֤���</a> </li>
                    <li id="_MP1203" class="sub_menu" > <a href="javascript:_MP(1203,'index.php?m=admin_tiny');" onclick="check_web(1203);" hidefocus="true" style="outline:none;">΢����</a> </li>
                    <li id="_MP1197" class="sub_menu" > <a href="javascript:_MP(1197,'index.php?m=admin_msg');" onclick="check_web(1197);" hidefocus="true" style="outline:none;">��ְ��ѯ</a> </li>
                    <li id="_MP1260" class="sub_menu" > <a href="javascript:_MP(1260,'index.php?m=down');" onclick="check_web(1260);" hidefocus="true" style="outline:none;">�������ؼ�¼</a> </li>
                    <li id="_MP1280" class="sub_menu" > <a href="javascript:_MP(1280,'index.php?m=look_resume');" onclick="check_web(1280);" hidefocus="true" style="outline:none;">���������¼</a> </li>
                  </ul>
          </div>
    <div id="DIV_M9">
              <h3 class="f14">
            <div class="shortcut_menu_bb">���Ź���</div>
        </h3>
        <ul id="keyid_9" class="left_mune_ul">
                     <li id="_MP133" class="sub_menu" > <a href="javascript:_MP(133,'index.php?m=admin_news');" onclick="check_web(133);" hidefocus="true" style="outline:none;">���Ź���</a> </li>
                    <li id="_MP1278" class="sub_menu" > <a href="javascript:_MP(1278,'index.php?m=admin_news&c=news');" onclick="check_web(1278);" hidefocus="true" style="outline:none;">�������</a> </li>
                    <li id="_MP1287" class="sub_menu" > <a href="javascript:_MP(1287,'index.php?m=admin_news&c=group');" onclick="check_web(1287);" hidefocus="true" style="outline:none;">�������</a> </li>
                    <li id="_MP1276" class="sub_menu" > <a href="javascript:_MP(1276,'index.php?m=hr');" onclick="check_web(1276);" hidefocus="true" style="outline:none;">������</a> </li>
                    <li id="_MP1302" class="sub_menu" > <a href="javascript:_MP(1302,'index.php?m=hrclass');" onclick="check_web(1302);" hidefocus="true" style="outline:none;">���������</a> </li>
                    <li id="_MP134" class="sub_menu" > <a href="javascript:_MP(134,'index.php?m=admin_announcement');" onclick="check_web(134);" hidefocus="true" style="outline:none;">�������</a> </li>
                    <li id="_MP135" class="sub_menu" > <a href="javascript:_MP(135,'index.php?m=description');" onclick="check_web(135);" hidefocus="true" style="outline:none;">��ҳ�����</a> </li>
                  </ul>
          </div>
    <div id="DIV_M2">
              <h3 class="f14">
            <div class="shortcut_menu_bb">��Ƹ�����</div>
        </h3>
        <ul id="keyid_2" class="left_mune_ul">
                     <li id="_MP1267" class="sub_menu" > <a href="javascript:_MP(1267,'index.php?m=zhaopinhui');" onclick="check_web(1267);" hidefocus="true" style="outline:none;">��Ƹ���б�</a> </li>
                    <li id="_MP1268" class="sub_menu" > <a href="javascript:_MP(1268,'index.php?m=zhaopinhui&c=add');" onclick="check_web(1268);" hidefocus="true" style="outline:none;">�����Ƹ��</a> </li>
                    <li id="_MP1269" class="sub_menu" > <a href="javascript:_MP(1269,'index.php?m=zhaopinhui&c=com');" onclick="check_web(1269);" hidefocus="true" style="outline:none;">�λ���ҵ</a> </li>
                  </ul>
          </div>
    <div id="DIV_M1210">
              <h3 class="f14">
            <div class="shortcut_menu_bb">�罻</div>
        </h3>
        <ul id="keyid_1210" class="left_mune_ul">
                     <li id="_MP171" class="sub_menu" > <a href="javascript:_MP(171,'index.php?m=admin_message');" onclick="check_web(171);" hidefocus="true" style="outline:none;">���Է���</a> </li>
                    <li id="_MP1212" class="sub_menu" > <a href="javascript:_MP(1212,'index.php?m=admin_question');" onclick="check_web(1212);" hidefocus="true" style="outline:none;">�ʴ����</a> </li>
                    <li id="_MP1217" class="sub_menu" > <a href="javascript:_MP(1217,'index.php?m=friend_message');" onclick="check_web(1217);" hidefocus="true" style="outline:none;">���Թ���</a> </li>
                    <li id="_MP1218" class="sub_menu" > <a href="javascript:_MP(1218,'index.php?m=friend_state');" onclick="check_web(1218);" hidefocus="true" style="outline:none;">��̬����</a> </li>
                    <li id="_MP1264" class="sub_menu" > <a href="javascript:_MP(1264,'index.php?m=member_log');" onclick="check_web(1264);" hidefocus="true" style="outline:none;">��Ա��־</a> </li>
                    <li id="_MP1315" class="sub_menu" > <a href="javascript:_MP(1315,'index.php?m=sysnews');" onclick="check_web(1315);" hidefocus="true" style="outline:none;">ϵͳ��Ϣ</a> </li>
                    <li id="_MP1319" class="sub_menu" > <a href="javascript:_MP(1319,'index.php?m=friend_letter');" onclick="check_web(1319);" hidefocus="true" style="outline:none;">վ����</a> </li>
                  </ul>
          </div>
    <div id="DIV_M14">
              <h3 class="f14">
            <div class="shortcut_menu_bb">�̳ǹ���</div>
        </h3>
        <ul id="keyid_14" class="left_mune_ul">
                     <li id="_MP1292" class="sub_menu" > <a href="javascript:_MP(1292,'index.php?m=reward_list');" onclick="check_web(1292);" hidefocus="true" style="outline:none;">�һ���Ʒ��¼</a> </li>
                    <li id="_MP1274" class="sub_menu" > <a href="javascript:_MP(1274,'index.php?m=reward');" onclick="check_web(1274);" hidefocus="true" style="outline:none;">�һ���Ʒ����</a> </li>
                  </ul>
          </div>
    <div id="DIV_M12">
              <h3 class="f14">
            <div class="shortcut_menu_bb">������</div>
        </h3>
        <ul id="keyid_12" class="left_mune_ul">
                     <li id="_MP138" class="sub_menu" > <a href="javascript:_MP(138,'index.php?m=advertise');" onclick="check_web(138);" hidefocus="true" style="outline:none;">������</a> </li>
                    <li id="_MP1286" class="sub_menu" > <a href="javascript:_MP(1286,'index.php?m=advertise&c=ad_add');" onclick="check_web(1286);" hidefocus="true" style="outline:none;">��ӹ��</a> </li>
                    <li id="_MP1285" class="sub_menu" > <a href="javascript:_MP(1285,'index.php?m=advertise&c=class');" onclick="check_web(1285);" hidefocus="true" style="outline:none;">������</a> </li>
                  </ul>
          </div>
    <div id="DIV_M78">
              <h3 class="f14">
            <div class="shortcut_menu_bb">������</div>
        </h3>
        <ul id="keyid_78" class="left_mune_ul">
                     <li id="_MP104" class="sub_menu" > <a href="javascript:_MP(104,'index.php?m=userclass');" onclick="check_web(104);" hidefocus="true" style="outline:none;">���˻�Ա����</a> </li>
                    <li id="_MP86" class="sub_menu" > <a href="javascript:_MP(86,'index.php?m=admin_city');" onclick="check_web(86);" hidefocus="true" style="outline:none;">���й���</a> </li>
                    <li id="_MP170" class="sub_menu" > <a href="javascript:_MP(170,'index.php?m=admin_industry');" onclick="check_web(170);" hidefocus="true" style="outline:none;">��ҵ���</a> </li>
                    <li id="_MP144" class="sub_menu" > <a href="javascript:_MP(144,'index.php?m=admin_job');" onclick="check_web(144);" hidefocus="true" style="outline:none;">ְλ������</a> </li>
                    <li id="_MP85" class="sub_menu" > <a href="javascript:_MP(85,'index.php?m=comclass');" onclick="check_web(85);" hidefocus="true" style="outline:none;">��ҵ��Ա����</a> </li>
                    <li id="_MP1213" class="sub_menu" > <a href="javascript:_MP(1213,'index.php?m=question_class');" onclick="check_web(1213);" hidefocus="true" style="outline:none;">�ʴ����</a> </li>
                    <li id="_MP1219" class="sub_menu" > <a href="javascript:_MP(1219,'index.php?m=admin_reason');" onclick="check_web(1219);" hidefocus="true" style="outline:none;">�ٱ�ԭ�����</a> </li>
                    <li id="_MP1303" class="sub_menu" > <a href="javascript:_MP(1303,'index.php?m=desc_class');" onclick="check_web(1303);" hidefocus="true" style="outline:none;">��ҳ�����</a> </li>
                  </ul>
          </div>
    <div id="DIV_M5">
              <h3 class="f14">
            <div class="shortcut_menu_bb">ҳ������</div>
        </h3>
        <ul id="keyid_5" class="left_mune_ul">
                     <li id="_MP164" class="sub_menu" > <a href="javascript:_MP(164,'index.php?m=cache&c=index');" onclick="check_web(164);" hidefocus="true" style="outline:none;">��ҳ����</a> </li>
                    <li id="_MP142" class="sub_menu" > <a href="javascript:_MP(142,'index.php?m=cache&c=news');" onclick="check_web(142);" hidefocus="true" style="outline:none;">������ҳ</a> </li>
                    <li id="_MP168" class="sub_menu" > <a href="javascript:_MP(168,'index.php?m=cache&c=newsclass');" onclick="check_web(168);" hidefocus="true" style="outline:none;">�������</a> </li>
                    <li id="_MP167" class="sub_menu" > <a href="javascript:_MP(167,'index.php?m=cache&c=archive');" onclick="check_web(167);" hidefocus="true" style="outline:none;">������ϸҳ</a> </li>
                    <li id="_MP50" class="sub_menu" > <a href="javascript:_MP(50,'index.php?m=cache&c=cache');" onclick="check_web(50);" hidefocus="true" style="outline:none;">���ɻ���</a> </li>
                    <li id="_MP1277" class="sub_menu" > <a href="javascript:_MP(1277,'index.php?m=cache&c=once');" onclick="check_web(1277);" hidefocus="true" style="outline:none;">��ҳ������</a> </li>
                    <li id="_MP1244" class="sub_menu" > <a href="javascript:_MP(1244,'index.php?m=cache&c=all');" onclick="check_web(1244);" hidefocus="true" style="outline:none;">һ������</a> </li>
                    <li id="_MP1313" class="sub_menu" > <a href="javascript:_MP(1313,'index.php?m=admin_xml');" onclick="check_web(1313);" hidefocus="true" style="outline:none;">����XML</a> </li>
                  </ul>
          </div>
    <div id="DIV_M6">
              <h3 class="f14">
            <div class="shortcut_menu_bb">��Ӫ����</div>
        </h3>
        <ul id="keyid_6" class="left_mune_ul">
                     <li id="_MP169" class="sub_menu" > <a href="javascript:_MP(169,'index.php?m=admin_keyword');" onclick="check_web(169);" hidefocus="true" style="outline:none;">�ؼ��ֹ���</a> </li>
                    <li id="_MP172" class="sub_menu" > <a href="javascript:_MP(172,'index.php?m=mobliemsg');" onclick="check_web(172);" hidefocus="true" style="outline:none;">���ż�¼</a> </li>
                    <li id="_MP141" class="sub_menu" > <a href="javascript:_MP(141,'index.php?m=email');" onclick="check_web(141);" hidefocus="true" style="outline:none;">�����ʼ�</a> </li>
                    <li id="_MP139" class="sub_menu" > <a href="javascript:_MP(139,'index.php?m=link');" onclick="check_web(139);" hidefocus="true" style="outline:none;">��������</a> </li>
                    <li id="_MP155" class="sub_menu" > <a href="javascript:_MP(155,'index.php?m=company_order');" onclick="check_web(155);" hidefocus="true" style="outline:none;">��ֵ��¼</a> </li>
                    <li id="_MP156" class="sub_menu" > <a href="javascript:_MP(156,'index.php?m=company_pay');" onclick="check_web(156);" hidefocus="true" style="outline:none;">���Ѽ�¼</a> </li>
                    <li id="_MP162" class="sub_menu" > <a href="javascript:_MP(162,'index.php?m=recharge');" onclick="check_web(162);" hidefocus="true" style="outline:none;">��̨��ֵ</a> </li>
                    <li id="_MP163" class="sub_menu" > <a href="javascript:_MP(163,'index.php?m=information');" onclick="check_web(163);" hidefocus="true" style="outline:none;">����Ⱥ��</a> </li>
                    <li id="_MP1223" class="sub_menu" > <a href="javascript:_MP(1223,'index.php?m=report');" onclick="check_web(1223);" hidefocus="true" style="outline:none;">�ٱ�����</a> </li>
                    <li id="_MP1273" class="sub_menu" > <a href="javascript:_MP(1273,'index.php?m=emailmsg');" onclick="check_web(1273);" hidefocus="true" style="outline:none;">�ʼ���¼</a> </li>
                    <li id="_MP1320" class="sub_menu" > <a href="javascript:_MP(1320,'index.php?m=subscribe');" onclick="check_web(1320);" hidefocus="true" style="outline:none;">���Ĺ���</a> </li>
                  </ul>
          </div>
    <div id="DIV_M127">
              <h3 class="f14">
            <div class="shortcut_menu_bb">��վ����</div>
        </h3>
        <ul id="keyid_127" class="left_mune_ul">
                     <li id="_MP179" class="sub_menu" > <a href="javascript:_MP(179,'index.php?m=comtpl');" onclick="check_web(179);" hidefocus="true" style="outline:none;">��ҵģ��</a> </li>
                    <li id="_MP1243" class="sub_menu" > <a href="javascript:_MP(1243,'index.php?m=cron');" onclick="check_web(1243);" hidefocus="true" style="outline:none;">�ƻ�����</a> </li>
                    <li id="_MP148" class="sub_menu" > <a href="javascript:_MP(148,'index.php?m=admin_uc');" onclick="check_web(148);" hidefocus="true" style="outline:none;">������̳</a> </li>
                    <li id="_MP159" class="sub_menu" > <a href="javascript:_MP(159,'index.php?m=qqconfig');" onclick="check_web(159);" hidefocus="true" style="outline:none;">��ݵ�¼</a> </li>
                    <li id="_MP143" class="sub_menu" > <a href="javascript:_MP(143,'index.php?m=admin_style');" onclick="check_web(143);" hidefocus="true" style="outline:none;">������</a> </li>
                    <li id="_MP129" class="sub_menu" > <a href="javascript:_MP(129,'index.php?m=admin_template');" onclick="check_web(129);" hidefocus="true" style="outline:none;">ģ�����</a> </li>
                    <li id="_MP147" class="sub_menu" > <a href="javascript:_MP(147,'index.php?m=database');" onclick="check_web(147);" hidefocus="true" style="outline:none;">���ݿ�</a> </li>
                    <li id="_MP177" class="sub_menu" > <a href="javascript:_MP(177,'index.php?m=collection');" onclick="check_web(177);" hidefocus="true" style="outline:none;">���ݲɼ�</a> </li>
                    <li id="_MP178" class="sub_menu" > <a href="javascript:_MP(178,'index.php?m=admin_domain');" onclick="check_web(178);" hidefocus="true" style="outline:none;">��վ����</a> </li>
                    <li id="_MP1239" class="sub_menu" > <a href="javascript:_MP(1239,'index.php?m=wx');" onclick="check_web(1239);" hidefocus="true" style="outline:none;">΢�ſͻ���</a> </li>
                    <li id="_MP1220" class="sub_menu" > <a href="javascript:_MP(1220,'index.php?m=datacall');" onclick="check_web(1220);" hidefocus="true" style="outline:none;">���ݵ���</a> </li>
                    <li id="_MP1304" class="sub_menu" > <a href="javascript:_MP(1304,'index.php?m=warning');" onclick="check_web(1304);" hidefocus="true" style="outline:none;">Ԥ������</a> </li>
                    <li id="_MP1338" class="sub_menu" > <a href="javascript:_MP(1338,'index.php?m=recycle');" onclick="check_web(1338);" hidefocus="true" style="outline:none;">����վ</a> </li>
                  </ul>
          </div>
    <div id="DIV_M1327">
              <h3 class="f14">
            <div class="shortcut_menu_bb">����</div>
        </h3>
        <ul id="keyid_1327" class="left_mune_ul">
                     <li id="_MP1329" class="sub_menu" > <a href="javascript:_MP(1329,'index.php?m=admin_evaluate');" onclick="check_web(1329);" hidefocus="true" style="outline:none;">�����Ծ��б�</a> </li>
                    <li id="_MP1330" class="sub_menu" > <a href="javascript:_MP(1330,'index.php?m=admin_evaluate&c=examup');" onclick="check_web(1330);" hidefocus="true" style="outline:none;">��Ӳ����Ծ�</a> </li>
                    <li id="_MP1331" class="sub_menu" > <a href="javascript:_MP(1331,'index.php?m=admin_evaluate&c=group');" onclick="check_web(1331);" hidefocus="true" style="outline:none;">����������</a> </li>
                  </ul>
          </div>
    <div id="DIV_M15">
              <h3 class="f14">
            <div class="shortcut_menu_bb">��̨����Ա</div>
        </h3>
        <ul id="keyid_15" class="left_mune_ul">
                     <li id="_MP1312" class="sub_menu" > <a href="javascript:_MP(1312,'index.php?m=admin_user&c=myuser');" onclick="check_web(1312);" hidefocus="true" style="outline:none;">�ҵ��ʺ�</a> </li>
                    <li id="_MP1314" class="sub_menu" > <a href="javascript:_MP(1314,'index.php?m=admin_user&c=pass');" onclick="check_web(1314);" hidefocus="true" style="outline:none;">�޸��ҵ�����</a> </li>
                    <li id="_MP1307" class="sub_menu" > <a href="javascript:_MP(1307,'index.php?m=admin_user');" onclick="check_web(1307);" hidefocus="true" style="outline:none;">����Ա�б�</a> </li>
                    <li id="_MP1308" class="sub_menu" > <a href="javascript:_MP(1308,'index.php?m=admin_user&c=add');" onclick="check_web(1308);" hidefocus="true" style="outline:none;">��ӹ���Ա</a> </li>
                    <li id="_MP1310" class="sub_menu" > <a href="javascript:_MP(1310,'index.php?m=admin_user&c=addgroup');" onclick="check_web(1310);" hidefocus="true" style="outline:none;">��ӹ���Ա����</a> </li>
                    <li id="_MP1309" class="sub_menu" > <a href="javascript:_MP(1309,'index.php?m=admin_user&c=group');" onclick="check_web(1309);" hidefocus="true" style="outline:none;">����Ա����</a> </li>
                    <li id="_MP1238" class="sub_menu" > <a href="javascript:_MP(1238,'index.php?m=admin_log');" onclick="check_web(1238);" hidefocus="true" style="outline:none;">����Ա��־</a> </li>
                  </ul>
          </div>
    </div>
<!--��ݲ˵�����-->
<div id="shortcut_menu"  style="display:none; width: 710px;top:0px ">
	<div class=" " style="height:450px; overflow:auto;overflow-x: hidden;_width:710px">
	  <div class="common-form">
		  			<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>ϵͳ</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>ϵͳ����</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='11' type='checkbox' checked>��վ����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1318' type='checkbox' >ģ������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1321' type='checkbox' >ҳ������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='146' type='checkbox' checked>��������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='157' type='checkbox' >�ʼ�����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='158' type='checkbox' >��������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='122' type='checkbox' >֧������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='176' type='checkbox' >SEO����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='126' type='checkbox' >�û�����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1270' type='checkbox' >��������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1316' type='checkbox' >��վ��ͼ</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1325' type='checkbox' >ע������</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>��ҵ</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>��ҵ����</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='151' type='checkbox' >��˾����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='152' type='checkbox' >ְλ����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='189' type='checkbox' >��ҵ��Ʒ����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='188' type='checkbox' >��ҵ���Ź���</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1234' type='checkbox' >��ҵ����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='174' type='checkbox' >��ҵ��֤���</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='149' type='checkbox' >΢��Ƹ</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1337' type='checkbox' >ר����Ƹ</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1261' type='checkbox' >ְλ�����¼</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1262' type='checkbox' >�������Լ�¼</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1271' type='checkbox' >��ҵ��Ա�ȼ�</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1281' type='checkbox' >ְλ�����¼</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>����</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>�����û�</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='38' type='checkbox' >�����û��б�</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='150' type='checkbox' checked>��������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='195' type='checkbox' >������֤���</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1203' type='checkbox' >΢����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1197' type='checkbox' >��ְ��ѯ</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1260' type='checkbox' >�������ؼ�¼</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1280' type='checkbox' >���������¼</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>����</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>���Ź���</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='133' type='checkbox' checked>���Ź���</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1278' type='checkbox' >�������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1287' type='checkbox' >�������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1276' type='checkbox' >������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1302' type='checkbox' >���������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='134' type='checkbox' >�������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='135' type='checkbox' >��ҳ�����</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>��Ƹ��</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>��Ƹ�����</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1267' type='checkbox' >��Ƹ���б�</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1268' type='checkbox' >�����Ƹ��</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1269' type='checkbox' >�λ���ҵ</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>�罻</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>�罻</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='171' type='checkbox' checked>���Է���</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1212' type='checkbox' >�ʴ����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1217' type='checkbox' >���Թ���</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1218' type='checkbox' >��̬����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1264' type='checkbox' >��Ա��־</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1315' type='checkbox' >ϵͳ��Ϣ</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1319' type='checkbox' >վ����</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>�̳�</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>�̳ǹ���</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1292' type='checkbox' >�һ���Ʒ��¼</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1274' type='checkbox' >�һ���Ʒ����</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>���</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>������</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='138' type='checkbox' >������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1286' type='checkbox' >��ӹ��</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1285' type='checkbox' >������</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>���</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>������</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='104' type='checkbox' >���˻�Ա����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='86' type='checkbox' >���й���</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='170' type='checkbox' checked>��ҵ���</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='144' type='checkbox' >ְλ������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='85' type='checkbox' >��ҵ��Ա����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1213' type='checkbox' >�ʴ����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1219' type='checkbox' >�ٱ�ԭ�����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1303' type='checkbox' >��ҳ�����</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>����</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>ҳ������</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='164' type='checkbox' checked>��ҳ����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='142' type='checkbox' >������ҳ</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='168' type='checkbox' >�������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='167' type='checkbox' >������ϸҳ</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='50' type='checkbox' >���ɻ���</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1277' type='checkbox' >��ҳ������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1244' type='checkbox' checked>һ������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1313' type='checkbox' >����XML</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>��Ӫ</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>��Ӫ����</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='169' type='checkbox' >�ؼ��ֹ���</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='172' type='checkbox' >���ż�¼</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='141' type='checkbox' >�����ʼ�</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='139' type='checkbox' >��������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='155' type='checkbox' >��ֵ��¼</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='156' type='checkbox' >���Ѽ�¼</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='162' type='checkbox' >��̨��ֵ</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='163' type='checkbox' >����Ⱥ��</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1223' type='checkbox' >�ٱ�����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1273' type='checkbox' >�ʼ���¼</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1320' type='checkbox' >���Ĺ���</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>����</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>��վ����</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='179' type='checkbox' >��ҵģ��</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1243' type='checkbox' >�ƻ�����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='148' type='checkbox' >������̳</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='159' type='checkbox' >��ݵ�¼</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='143' type='checkbox' >������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='129' type='checkbox' >ģ�����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='147' type='checkbox' >���ݿ�</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='177' type='checkbox' >���ݲɼ�</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='178' type='checkbox' >��վ����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1239' type='checkbox' >΢�ſͻ���</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1220' type='checkbox' >���ݵ���</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1304' type='checkbox' >Ԥ������</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1338' type='checkbox' >����վ</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>����</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>����</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1329' type='checkbox' >�����Ծ��б�</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1330' type='checkbox' >��Ӳ����Ծ�</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1331' type='checkbox' >����������</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<table width="100%" bgcolor="#dfdfdf">
			  <tr><td height="30" style="padding-left:10px"><strong>����Ա</strong></td></tr>
			  <tr>
				<td>
									  <table width="100%" bgcolor="#f7f7f7">
					<tr><td height="30" style="padding-left:40px;"><strong>��̨����Ա</strong></td></tr>
					<tr>
					  <td bgcolor="#fdfeff" height="30" style="padding-left:70px;"> 						<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1312' type='checkbox' checked>�ҵ��ʺ�</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1314' type='checkbox' checked>�޸��ҵ�����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1307' type='checkbox' >����Ա�б�</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1308' type='checkbox' >��ӹ���Ա</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1310' type='checkbox' >��ӹ���Ա����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1309' type='checkbox' >����Ա����</div>
												<div style="float:left; width:100px; height:30px; line-height:30px; "><input name='shortcut_menu[]' value='1238' type='checkbox' >����Ա��־</div>
						 </td>
					</tr>
									  </table></td>
			  </tr>
			</table>
						<div style="text-align:center"><input class="admin_submit4" type="button" value="�ύ" onclick="check_menu();"></div>
		</div>
	</div>
</div>
<!--��ݲ˵�����end-->
<script type="text/javascript">
$(document).ready(function(){
	$(".admin_index_city_list").hover(function(){
		$(".admin_index_city_list").show();
	},function(){
		$(".admin_index_city_list").hide();
	});
})
function check_menu(){
	var chk_value =[];
	var pytoken=$("#pytoken").val();
	$('input[name="shortcut_menu[]"]:checked').each(function(){
		chk_value.push($(this).val());
	});
	if(chk_value.length==0){
		parent.layer.msg('������ѡ��һ����', 2,8);return false;
	}else{
		$.post("index.php?c=shortcut_menu",{chk_value:chk_value,pytoken:pytoken},function(msg){
			parent.layer.msg('���óɹ���', 2,9,function(){location=location ;});return false;
		});
	}
}
function shortcut_menu(){
	$.layer({
		type : 1,
		title : '��ݲ˵�����',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		shade: [0.5, '#000'], 
		area : ['710px','490px'],
		page : {dom : '#shortcut_menu'}
	});
}
//���˵�
//clientHeight-0; �հ�ֵ iframe����Ӧ�߶�
$('#DIV_M1000').clone().appendTo('#leftMain');
function windowW(){
	if($(window).width()<980){
		$('.header').css('width',980+'px');
		$('#content').css('width',980+'px');
		$('body').attr('scroll','');
		$('body').css('overflow','');
	}
}
windowW();
$(window).resize(function(){
	if($(window).width()<980){
		windowW();
	}else{
		$('.header').css('width','auto');
		$('#content').css('width','auto');
		$('body').attr('scroll','no');
		$('body').css('overflow','hidden');
	}
});
window.onresize = function(){
	var heights = document.documentElement.clientHeight-150;document.getElementById('rightMain').height = heights+30;
	var openClose = $("#rightMain").height()+39;
	$('#center_frame').height(openClose+9);
	$("#openClose").height(openClose+30);
}
window.onresize();
//��࿪��
$("#openClose").click(function(){
	if($(this).data('clicknum')==1) {
		$("html").removeClass("on");
		$(".left_menu").removeClass("left_menu_on");
		$(this).removeClass("close");
		$(this).data('clicknum', 0);
	} else {
		$(".left_menu").addClass("left_menu_on");
		$(this).addClass("close");
		$("html").addClass("on");
		$(this).data('clicknum', 1);
	}
	return false;
});
function _M(menuid,targetUrl) {
	$('.top_menu').removeClass("on");
	$('#_M'+menuid).addClass("on");
	$("#menuid").val(menuid);
	$("#bigid").val(menuid);
	var menu="#DIV_M"+menuid;
	$('#leftMain').html("");
	$(menu).clone().appendTo($("#leftMain"));
	$(".left_menu").removeClass("left_menu_on");//��ʾ���˵������������ʱ��չ�����
	$("#openClose").removeClass("close");
	$("#openClose").data('clicknum', 0);
	$("#current_pos").data('clicknum', 1);
	$('#keyid_'+menuid).find("li:lt(1)").addClass("on fb blue");
	$("#rightMain").attr('src', targetUrl);
}
function _MP(menuid,targetUrl) {
	$("#menuid").val(menuid);
	$("#paneladd").html('<a class="panel-add" href="javascript:add_panel();"><em>���</em></a>');
	$("#rightMain").attr('src', targetUrl);
	$('.sub_menu').removeClass("on fb blue");
	$('#_MP'+menuid).addClass("on fb blue");
	$("#current_pos").data('clicknum', 1);
}
function admin_site(id){
	var pytoken=$("#pytoken").val();
	$.post("index.php?c=site",{id:id,pytoken:pytoken},function(data){window.location.href="index.php";})
}
function for_menu(id){
	$("#keyid_"+id).slideToggle();
	$("#span_"+id).toggleClass("on"); return false;
}
</script>
</body>
</html><?php }} ?>
