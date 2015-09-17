<?php /*%%SmartyHeaderCode:563855e2d004b473b8-36064144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0b9efca5015deb42a3e67317d0bca7f63d0bdfa' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_map.htm',
      1 => 1440861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '563855e2d004b473b8-36064144',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d00580bc56_67142926',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d00580bc56_67142926')) {function content_55e2d00580bc56_67142926($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../js/jquery-1.8.0.min.js"></script>
<script src="../js/layer/layer.min.js" language="javascript"></script> 
<style type="text/css">
.ui_dialog_wrap {
	visibility:hidden
}
.ui_title_icon, .ui_content, .ui_dialog_icon, .ui_btns span {
	display:inline-block;
*zoom:1;
*display:inline
}
.ui_dialog {
	text-align:left;
	position:absolute;
	top:0;
	 background:#fff;
}
.ui_dialog table {
	border:0;
	margin:0;
	border-collapse:collapse
}
.ui_dialog td {
	padding:0
}
.ui_title_icon, .ui_dialog_icon {
	vertical-align:middle;
	_font-size:0
}
.ui_title_text {
	overflow:hidden;
	cursor:default
}
.ui_close {
	display:block;
	position:absolute;
	outline:none
}
.ui_content_wrap {
	text-align:center
}
.ui_content {
	margin:10px;
	text-align:left
}
.ui_iframe .ui_content {
	margin:0;
*padding:0;
	display:block;
	height:100%;
	position:relative
}
.ui_iframe .ui_content iframe {
	border:none;
	overflow:auto
}
.ui_content_mask {
	visibility:hidden;
	width:100%;
	height:100%;
	position:absolute;
	top:0;
	left:0;
	background:#FFF;
	filter:alpha(opacity=0);
	opacity:0
}
.ui_bottom {
	position:relative
}
.ui_resize {
	position:absolute;
	right:0;
	bottom:0;
	z-index:1;
	cursor:nw-resize;
	_font-size:0
}
.ui_btns {
	text-align:right;
	white-space:nowrap
}
.ui_btns span {
	margin:5px 10px
}
.ui_btns button {
	cursor:pointer
}
* .ui_ie6_select_mask {
	position:absolute;
	top:0;
	left:0;
	z-index:-1;
	filter:alpha(opacity=0)
}
.ui_loading .ui_content_wrap {
	position:relative;
	min-width:9em;
	min-height:3.438em
}
.ui_loading .ui_btns {
	display:none
}
.ui_loading_tip {
	visibility:hidden;
	width:5em;
	height:1.2em;
	text-align:center;
	line-height:1.2em;
	position:absolute;
	top:50%;
	left:50%;
	margin:-0.6em 0 0 -2.5em
}
.ui_loading .ui_loading_tip, .ui_loading .ui_content_mask {
	visibility:visible
}
.ui_loading .ui_content_mask {
	filter:alpha(opacity=100);
	opacity:1
}
.ui_move .ui_title_text {
	cursor:move
}
.ui_page_move .ui_content_mask {
	visibility:visible
}
.ui_move_temp {
	visibility:hidden;
	position:absolute;
	cursor:move
}
.ui_move_temp div {
	height:100%
}
html>body .ui_fixed .ui_move_temp {
	position:fixed
}
html>body .ui_fixed .ui_dialog {
	position:fixed
}
* .ui_ie6_fixed {
	background:url(*) fixed
}
* .ui_ie6_fixed body {
	height:100%
}
* html .ui_fixed {
	width:100%;
	height:100%;
	position:absolute;
left:expression(documentElement.scrollLeft+documentElement.clientWidth-this.offsetWidth);
top:expression(documentElement.scrollTop+documentElement.clientHeight-this.offsetHeight)
}
* .ui_page_lock select, * .ui_page_lock .ui_ie6_select_mask {
	visibility:hidden
}
* .ui_page_lock .ui_content select {
	visibility:visible;
}
.ui_overlay {
	visibility:hidden;
	_display:none;
	position:fixed;
	top:0;
	left:0;
	width:100%;
	height:100%;
	filter:alpha(opacity=0);
	opacity:0;
	_overflow:hidden
}
.ui_lock .ui_overlay {
	visibility:visible;
	_display:block
}
.ui_overlay div {
	height:100%
}
* html body {
	margin:0
}
.ui_title{ position:relative}
</style> 
<title></title>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="infoboxp_top_bg"></div>
  <div class="common-form">     <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>系统</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>系统设置</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=config')">网站设置</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=model_config')">模块设置</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=web_config')">页面设置</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=navigation')">导航设置</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=emailconfig')">邮件设置</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=msgconfig')">短信设置</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=payconfig')">支付设置</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=seo')">SEO设置</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=userconfig')">用户设置</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=integral')">积分设置</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=navmap')">网站地图</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=regset')">注册设置</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>企业</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>企业管理</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_company')">公司管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_company_job')">职位管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=comproduct')">企业产品管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=comnews')">企业新闻管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=com_pl')">企业评论</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=comcert')">企业认证审核</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_once')">微招聘</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=special')">专题招聘</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=apply')">职位申请记录</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=invite')">邀请面试记录</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_company_rating')">企业会员等级</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=look_job')">职位浏览记录</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>个人</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>个人用户</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=user_member')">个人用户列表</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_resume')">简历管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=usercert')">个人认证审核</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_tiny')">微简历</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_msg')">求职咨询</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=down')">简历下载记录</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=look_resume')">简历浏览记录</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>新闻</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>新闻管理</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_news')">新闻管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_news&c=news')">添加新闻</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_news&c=group')">新闻类别</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=hr')">工具箱</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=hrclass')">工具箱类别</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_announcement')">公告管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=description')">单页面管理</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>招聘会</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>招聘会管理</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=zhaopinhui')">招聘会列表</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=zhaopinhui&c=add')">添加招聘会</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=zhaopinhui&c=com')">参会企业</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>社交</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>社交</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_message')">留言反馈</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_question')">问答管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=friend_message')">留言管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=friend_state')">动态管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=member_log')">会员日志</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=sysnews')">系统消息</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=friend_letter')">站内信</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>商城</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>商城管理</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=reward_list')">兑换奖品记录</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=reward')">兑换奖品管理</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>广告</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>广告管理</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=advertise')">广告管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=advertise&c=ad_add')">添加广告</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=advertise&c=class')">广告类别</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>类别</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>类别管理</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=userclass')">个人会员分类</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_city')">城市管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_industry')">行业类别</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_job')">职位类别管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=comclass')">企业会员分类</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=question_class')">问答类别</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_reason')">举报原因管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=desc_class')">单页面类别</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>生成</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>页面生成</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=cache&c=index')">首页生成</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=cache&c=news')">新闻首页</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=cache&c=newsclass')">新闻类别</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=cache&c=archive')">新闻详细页</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=cache&c=cache')">生成缓存</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=cache&c=once')">单页面生成</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=cache&c=all')">一键更新</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_xml')">生成XML</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>运营</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>运营管理</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_keyword')">关键字管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=mobliemsg')">短信记录</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=email')">发送邮件</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=link')">友情链接</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=company_order')">充值记录</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=company_pay')">消费记录</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=recharge')">后台充值</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=information')">短信群发</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=report')">举报管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=emailmsg')">邮件记录</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=subscribe')">订阅管理</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>工具</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>网站工具</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=comtpl')">企业模板</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=cron')">计划任务</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_uc')">整合论坛</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=qqconfig')">快捷登录</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_style')">风格管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_template')">模板管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=database')">数据库</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=collection')">数据采集</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_domain')">分站管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=wx')">微信客户端</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=datacall')">数据调用</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=warning')">预警管理</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=recycle')">回收站</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>测评</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>测评</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_evaluate')">测评试卷列表</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_evaluate&c=examup')">添加测评试卷</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_evaluate&c=group')">测评类别管理</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
        <table width="100%" bgcolor="#dfdfdf">
      <tr>
        <td height="30" style="padding-left:10px"><strong>管理员</strong></td>
      </tr>
      <tr>
        <td>           <table width="100%" bgcolor="#f7f7f7">
            <tr>
              <td height="30" style="padding-left:40px;"><strong>后台管理员</strong></td>
            </tr>
            <tr>
              <td bgcolor="#fdfeff" height="30" style="padding-left:70px;">                 <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_user&c=myuser')">我的帐号</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_user&c=pass')">修改我的密码</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_user')">管理员列表</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_user&c=add')">添加管理员</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_user&c=addgroup')">添加管理员类型</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_user&c=group')">管理员类型</a> </div>
                                <div style="float:left; width:100px; height:30px; line-height:30px; "> <a href="javascript:go('index.php?m=admin_log')">管理员日志</a> </div>
                 </td>
            </tr>
                      </table></td>
      </tr>
    </table>
     </div>
</div> 
<script>
function go(url) { 
	window.top.document.getElementById('rightMain').src=url; 
	parent.layer.closeAll();
}
</script>
</body>
</html><?php }} ?>
