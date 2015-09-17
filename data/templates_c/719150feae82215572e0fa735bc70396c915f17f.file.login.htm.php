<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:04:22
         compiled from "D:\wamp\www\qyhr\app\template\yun3.2\ajax\login.htm" */ ?>
<?php /*%%SmartyHeaderCode:2370955f968d67f0b75-91531844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '719150feae82215572e0fa735bc70396c915f17f' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\yun3.2\\ajax\\login.htm',
      1 => 1442377206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2370955f968d67f0b75-91531844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cookie' => 0,
    'member' => 0,
    'config' => 0,
    'company' => 0,
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f968d69e0675_53945427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f968d69e0675_53945427')) {function content_55f968d69e0675_53945427($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\wamp\\www\\qyhr\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo '<script'; ?>
>
$(document).ready(function(){
	$("#usertype1").click(function(){
		$("#reg_url_1").show();
		$("#reg_url_2").hide();
		$("#usertype").val("1");
		$("#usertype1").attr("class","");
		$("#usertype2").attr("class","index_logoin_current1");
	});
	$("#usertype2").click(function(){
		$("#reg_url_2").show();
		$("#reg_url_1").hide();
		$("#usertype").val("2");
		$("#usertype2").attr("class","");
		$("#usertype1").attr("class","index_logoin_current2");
	});
});
$(document).ready(function(){
	$("#username").focus(function(){
		var txAreaVal = $(this).val();
		if( txAreaVal == this.defaultValue){$(this).val("");}
	}).blur(function(){
		var txAreaVal = $(this).val();
		if( txAreaVal == this.defaultValue||$(this).val()==""){$(this).val(this.defaultValue);}
	});
	$("#password2").focus(function(){
		$("#password").show();
		$("#password").focus();
		$("#password2").hide();
	})
	/*
	$("#password").blur(function(){
		if($("#password").val()==""){
			$("#password2").show();
			$("#password").hide();
		}
	})
	*/
});
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['cookie']->value['usertype']=="1") {?>
<div class="index_logoin_after">
  <div class="hunter_logoin_bg">
    <dl class="logoin_after_tx">
      <dt><img width="50" height="50" src="<?php echo $_smarty_tpl->tpl_vars['member']->value['photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);"></dt>
      <dd>
        <div>您好：<font color="red"><?php echo $_smarty_tpl->tpl_vars['cookie']->value['username'];?>
</font></div>
        <br>个人用户</dd>
    </dl>
    <div class="logoin_after_cj">您已创建了 (<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=resume"><u><?php echo $_smarty_tpl->tpl_vars['member']->value['resume_num'];?>
</u></a>) 份简历！</div>
    <div class="hunter_logoin_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=expect&add=<?php echo $_smarty_tpl->tpl_vars['cookie']->value['uid'];?>
" class="logoin_after_su1">创建简历</a><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=resume" class="logoin_after_su2">管理简历</a></div>
    <div class="logoin_after"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=job"> 已申请的职位：</a><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=job"><em><?php echo $_smarty_tpl->tpl_vars['member']->value['sq_jobnum'];?>
</em></a></div>
    <div class="logoin_after"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=favorite"> 收藏的职位：</a><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=favorite"><em><?php echo $_smarty_tpl->tpl_vars['member']->value['fav_jobnum'];?>
</em></a></div>
    <div class="logoin_after_cz"><a href="javascript:void(0);" onclick="logout('<?php echo smarty_function_url(array('c'=>'logout'),$_smarty_tpl);?>
');"> 安全退出</a><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php" class="in_l_cor">进入管理中心</a></div>
  </div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['cookie']->value['usertype']=="2") {?>
<div class="index_logoin_after">
  <div class="hunter_logoin_bg">
    <dl class="logoin_after_tx">
      <dt><img width="50" height="50" src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
"  onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);"></dt>
      <dd>
        <div>您好：<font color="red"><?php echo $_smarty_tpl->tpl_vars['cookie']->value['username'];?>
</font></div>
        <br>企业用户</dd>
    </dl>
    <div class="logoin_after_cj">您已发布了 (<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=job&w=1"><u><?php echo $_smarty_tpl->tpl_vars['company']->value['job'];?>
</u></a>)个职位！</div>
    <div class="hunter_logoin_list"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=jobadd" class="logoin_after_su1">发布职位</a><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=job&w=1" class="logoin_after_su2">职位管理</a></div>
    <div class="logoin_after"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=hr"> 已收到简历：</a><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=hr"><em><?php echo $_smarty_tpl->tpl_vars['company']->value['sq_job'];?>
</em></a></div>
    <div class="logoin_after"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=job&w=2"> 已过期职位：</a><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=job&w=2"><em><?php echo $_smarty_tpl->tpl_vars['company']->value['status2'];?>
</em></a></div>
    <div class="logoin_after_cz"><a href="javascript:void(0);" onclick="logout('<?php echo smarty_function_url(array('c'=>'logout'),$_smarty_tpl);?>
');"> 安全退出</a><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php" class="in_l_cor">进入管理中心</a></div>
  </div>
</div>

<?php } else { ?>
<div class="index_logoin">
        <input type="hidden" value="index" name="path" id="path">
        <input type="hidden" value="1" name="usertype" id="usertype">
        <div class="index_logoin_h1">用户登录 </div>
        <div class="index_logoin_t">
          <div class="index_logoin_re">
            <input type="text" id="username" name="username" placeholder="请输入用户名" class="index_logoin_inp" value="">
            <div class="index_logoin_msg" id="show_name" style="display:none">
              <div class="index_logoin_msg_tx">请填写用户名</div>
              <div class="index_logoin_msg_icon"></div>
            </div>
          </div>
          <div class="index_logoin_re_m">
            <input type="password" placeholder="请输入您的密码" class="index_logoin_inp" name="password" value="" id="password">
            <div class="index_logoin_msg" style="display:none" id="show_pass">
              <div class="index_logoin_msg_tx">请填写密码</div>
              <div class="index_logoin_msg_icon"></div>
            </div>
          </div>
        </div>
        <div class="index_logoin_r">
          <input type="submit" value="" class="index_logoin_bth2" onclick="check_login('<?php echo smarty_function_url(array('m'=>'login','c'=>'loginsave'),$_smarty_tpl);?>
');" >
        </div>
        <ul class="index_logoin_cont">
          <li>
            <input type="checkbox" class="index_logoin_check" value="1" name="loginname">
            <em class="index_l_jz">记住登录状态</em><a href="<?php echo smarty_function_url(array('m'=>'forgetpw'),$_smarty_tpl);?>
">忘记密码?</a></li>
          <li class=""> <a id="reg_url_2" href="<?php echo smarty_function_url(array('m'=>'register','usertype'=>2),$_smarty_tpl);?>
" class="index_logoin_submit2">招聘者注册</a> <a id="reg_url_1" href="<?php echo smarty_function_url(array('m'=>'register','usertype'=>1),$_smarty_tpl);?>
" class="index_logoin_submit2">求职者注册</a> </li>
          <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1||$_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1||$_smarty_tpl->tpl_vars['config']->value['sy_wxlogin']==1) {?>
          <li class="index_logoin_Coop" style="margin-top:12px;"> <em style="float:left">快捷登录：</em> <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']==1) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/yun_qq.png" class="png"><a href="<?php echo smarty_function_url(array('m'=>'qqconnect','c'=>'qqlogin'),$_smarty_tpl);?>
">QQ登录</a> <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']==1) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/yun_sina.png" class="png"><a href="<?php echo smarty_function_url(array('m'=>'sinaconnect'),$_smarty_tpl);?>
">新浪</a> <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wxlogin']==1) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/yun_wx.png" class="png"><a href="<?php echo smarty_function_url(array('m'=>'wxconnect'),$_smarty_tpl);?>
">微信</a> <?php }?> </li>
          <?php }?>
        </ul>
      </div>
<?php }?><?php }} ?>
