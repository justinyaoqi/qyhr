<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:04:22
         compiled from "D:\wamp\www\qyhr\\app\template\yun3.2\backtop.htm" */ ?>
<?php /*%%SmartyHeaderCode:940855f968d6410169-67785141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fb85a51926a4f1720690c50920394c2981bf3ff' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\\\app\\template\\yun3.2\\backtop.htm',
      1 => 1442377205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '940855f968d6410169-67785141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f968d641aae2_20651733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f968d641aae2_20651733')) {function content_55f968d641aae2_20651733($_smarty_tpl) {?><?php echo '<script'; ?>
>
	function goTopEx(){
        var obj=document.getElementById("goTopBtn");
        function getScrollTop(){
                return document.documentElement.scrollTop;
            }
        function setScrollTop(value){
                document.documentElement.scrollTop=value;
            }    
        window.onscroll=function(){getScrollTop()>0?obj.style.display="":obj.style.display="none";}
        obj.onclick=function(){
            var goTop=setInterval(scrollMove,10);
            function scrollMove(){
                    setScrollTop(getScrollTop()/1.1);
                    if(getScrollTop()<1)clearInterval(goTop);
                }
        }
    }
<?php echo '</script'; ?>
>
<div class="clear"></div>
<div style="display:none;" id="goTopBtn" class="png" ><img  border=0 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/lanren_top.png" class="png"></div>
<SCRIPT type=text/javascript>goTopEx();</SCRIPT>
<style>
#goTopBtn {
	POSITION: fixed; 
	TEXT-ALIGN: center; 
	WIDTH: 47px; 
	BOTTOM:3px; 
	HEIGHT: 78px; 
	FONT-SIZE: 12px; 
	CURSOR: pointer; 
	RIGHT:  40px; 
	_position: absolute; 
	_right: 40;
	_position:absolute;
	_bottom:auto;
	_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||15)-(parseInt(this.currentStyle.marginBottom,10)||15)));
	_background:url(<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/lanren_top.png) no-repeat
}
*html{
background-image:url(about:blank);
background-attachment:fixed;
}
</style><?php }} ?>
