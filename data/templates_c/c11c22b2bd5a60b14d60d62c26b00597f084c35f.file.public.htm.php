<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:25:38
         compiled from "D:\wamp\www\qyhr\\app\template\wap\public.htm" */ ?>
<?php /*%%SmartyHeaderCode:125155f96dd232fe53-11231602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c11c22b2bd5a60b14d60d62c26b00597f084c35f' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\\\app\\template\\wap\\public.htm',
      1 => 1440861570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125155f96dd232fe53-11231602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'job_index' => 0,
    'v' => 0,
    'job_name' => 0,
    'job_type' => 0,
    'val' => 0,
    'value' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'city_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f96dd246c0e2_67870354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f96dd246c0e2_67870354')) {function content_55f96dd246c0e2_67870354($_smarty_tpl) {?><div id="joblist" class="mask selecter hide " style="display:none;height:100%; width:auto;right: 0;top:0;">
<div class="mask_wap_bg" style=" background-color: rgba(51, 51, 51, 0.8); height:100%;width:100%; position:fixed;left:0px;top:0px;bottom:0px;right:0px;"></div>

<div class="f_body" style="float: right; background: none repeat scroll 0% 0% transparent; width: 280px;">
<h2 style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;">职位类别
<button class="ok selectorOk" onclick="realy();">确定</button>
<button class="clear_sub clear_sub_gb" onclick="Close('job');">关闭</button>
<button class="clear_sub clear_sub_qic" onclick="removes();">清除</button> 
</h2>

<div class="contentbody position" style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<dl class="lookshow onelist" id="job<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" style="position:relative">
<dt class="current position" onclick="checkjob1('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','job');"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</dt>
<dd id="joblist<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" class="lookhide" style="display: none;">
    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['v']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
    <ul id="u2000" style="position:relative;" data-c="show">
    <li onclick="checkjob2('<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
','job');" class="contentbody_li"><i class="contentbody_li_icon fa fa-plus-square"></i><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['val']->value];?>
</li>
    <div class="post_show_three" id="jobpost<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" style="display: none;">
        <li>
        <input id="r<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" data="<?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['val']->value];?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" name="jobclass" onclick="checked_input('<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
');">
        <label for="r<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" style="margin-left:5px;">全部</label>
        </li>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['val']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <li>
        <input id="r<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" data="<?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['value']->value];?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" name="jobclass" onclick="checked_input('<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
');">
        <label for="r<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" style="margin-left:5px;"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['value']->value];?>
</label>
        </li>
        <?php } ?>
    </div>
    </ul>
    <?php } ?>
</dd>
</dl>
<?php } ?>
</div>
</div>
</div>


<div id="citylist" class="mask selecter hide " style="display:none;  height:100%; width:auto;right: 0;top:0;">
<div class="mask_wap_bg" style=" background-color: rgba(51, 51, 51, 0.8); height:100%;width:100%; position:fixed;left:0px;top:0px;bottom:0px;right:0px;"></div>
<div class="f_body" style="float: right; background: none repeat scroll 0% 0% transparent; width: 280px;">
<h2 style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;">城市类别
<button class="clear_sub selectorClear" onclick="Close('city');">关闭</button>

</h2>

<div class="contentbody position" style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<dl class="lookshow onelist" id="city<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" style="position:relative">
<dt class="current position" onclick="checkjob1('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','city');"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</dt>
<dd id="citylist<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" class="lookhide" style="display: none;">
    <ul style="position:relative;" data-c="show">
    <li onclick="check_city_li('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','provinceid');" style="padding-left:35px;"><i class="check_city_li_icon fa fa-circle-o"></i>全部</li>
    </ul>
    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['v']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
    <ul style="position:relative;" data-c="show">
    <li onclick="check_city_li('<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
','cityid');" style="padding-left:35px;"><i class="check_city_li_icon fa fa-circle-o"></i><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['val']->value];?>
</li>
    </ul>
    <?php } ?>
</dd>
</dl>
<?php } ?>
</div>
</div>
</div>

<!--<div id="citylist" class="mask selecter hide " style="display:none;  height:100%; width:auto;right: 0;top:0;">
<div class="mask_wap_bg" style=" background-color: rgba(51, 51, 51, 0.8); height:100%;width:100%; position:fixed;left:0px;top:0px;bottom:0px;right:0px;"></div>
<div class="f_body" style="float: right; background: none repeat scroll 0% 0% transparent; width: 280px;">
<h2 style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;">城市类别
<button class="clear_sub selectorClear" onclick="Close('city');">关闭</button>
</h2>

<div class="contentbody position" style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<dl class="lookshow onelist" id="city<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" style="position:relative">
<dt class="current position" onclick="checkjob1('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','city');"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</dt>
<dd id="citylist<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" class="lookhide" style="display: none;">
    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['v']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
    <ul id="u2000" style="position:relative;" data-c="show">
    <li onclick="checkjob2('<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
','city');"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['val']->value];?>
</li>
    <div class="post_show_three" id="citypost<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" style="display: none;">
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['val']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <li onclick="checkedcity('<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['value']->value];?>
');"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['value']->value];?>
</li>
        <?php } ?>
    </div>
    </ul>
    <?php } ?>
</dd>
</dl>
<?php } ?>
</div>
</div>
</div>--><?php }} ?>
