<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:25:38
         compiled from "D:\wamp\www\qyhr\\app\template\wap\footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:2838455f96dd253fbe7-81288870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bca44992445d0deba12865d119d6d2d0ccba98c' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\\\app\\template\\wap\\footer.htm',
      1 => 1442074138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2838455f96dd253fbe7-81288870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cookie' => 0,
    'config' => 0,
    'layer' => 0,
    'wxAppid' => 0,
    'wxTimestamp' => 0,
    'wxNonceStr' => 0,
    'wxSignature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f96dd25bb001_66808901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f96dd25bb001_66808901')) {function content_55f96dd25bb001_66808901($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\wamp\\www\\qyhr\\app\\include\\libs\\plugins\\function.url.php';
?><footer>
<?php echo '<script'; ?>
 type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"><?php echo '</script'; ?>
>
<div class="footer">
<div class="footer_t">
<?php if (!$_smarty_tpl->tpl_vars['cookie']->value['username']) {?> 
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
">ע��</a><em class="line">|</em><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
">��¼</a> 
<?php } else { ?>
<span class="footer_member_span_a">��ã�</span><span class="footer_member_span"><?php echo $_smarty_tpl->tpl_vars['cookie']->value['username'];?>
</span><a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
/member" class="footer_member">�����û�����>></a><a href="javascript:;" onclick="islogout('<?php echo smarty_function_url(array('m'=>'wap','c'=>'loginout'),$_smarty_tpl);?>
','ȷ���˳���');" class="footer_member_out">�˳�</a> 
<?php }?>
<a href="#"><div class="footer_top"><i class="fa fa-angle-up"></i></div></a></div>
<div class="footer_bot"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webcopyright'];
echo $_smarty_tpl->tpl_vars['config']->value['sy_webrecord'];?>
 <br></div>
</div>
</footer> 
<?php if ($_smarty_tpl->tpl_vars['layer']->value) {?>
<input id="layermsg" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['msg'];?>
" type="hidden">
<input id="layerurl" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['url'];?>
" type="hidden">
<?php echo '<script'; ?>
>window.onload=islayer(); <?php echo '</script'; ?>
>
<?php }?>
<?php echo '<script'; ?>
>wapurl="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
";<?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
>var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
"<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	
	wx.config({
    debug: true, // ��������ģʽ,���õ�����api�ķ���ֵ���ڿͻ���alert��������Ҫ�鿴����Ĳ�����������pc�˴򿪣�������Ϣ��ͨ��log���������pc��ʱ�Ż��ӡ��
    appId: "<?php echo $_smarty_tpl->tpl_vars['wxAppid']->value;?>
", // ������ںŵ�Ψһ��ʶ
    timestamp: "<?php echo $_smarty_tpl->tpl_vars['wxTimestamp']->value;?>
", // �������ǩ����ʱ���
    nonceStr: "<?php echo $_smarty_tpl->tpl_vars['wxNonceStr']->value;?>
", // �������ǩ���������
    signature: "<?php echo $_smarty_tpl->tpl_vars['wxSignature']->value;?>
",// ���ǩ��������¼1
    jsApiList: [
    	'checkJsApi',
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onRecordEnd',
        'playVoice',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'

    ] // �����Ҫʹ�õ�JS�ӿ��б�����JS�ӿ��б����¼2
});
wx.ready(function() {
    // ����Ȧ����
    wx.onMenuShareTimeline({
        title:document.title,
        link:window.location.href,
        imgUrl:"http://www.qyhr.org.cn/data/logo/20150821/14492222609.PNG",
        success:function() {
            alert("����������Դ��������������ɹ�");
        },
        cancel:function () {
            
        }
    });
    wx.onMenuShareAppMessage({
        title:document.title,
        link:window.location.href,
        imgUrl:"http://www.qyhr.org.cn/data/logo/20150821/14492222609.PNG",
        success:function() {
            alert("����������Դ��������������ɹ�");
        },
        cancel:function () {
            
        }
    });
    wx.onMenuShareQQ({
        title:document.title,
        link:window.location.href,
        imgUrl:"http://www.qyhr.org.cn/data/logo/20150821/14492222609.PNG",
        success:function() {
            alert("����������Դ��������������ɹ�");
        },
        cancel:function () {
            
        }
    });
    wx.onMenuShareWeibo({
        title:document.title,
        link:window.location.href,
        imgUrl:"http://www.qyhr.org.cn/data/logo/20150821/14492222609.PNG",
        success:function() {
            alert("����������Դ��������������ɹ�");
        },
        cancel:function () {
            
        }
    });
    wx.onMenuShareQZone({
        title:document.title,
        link:window.location.href,
        imgUrl:"http://www.qyhr.org.cn/data/logo/20150821/14492222609.PNG",
        success:function() {
            alert("����������Դ��������������ɹ�");
        },
        cancel:function () {
            
        }
    });
});

<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
