<?php /*%%SmartyHeaderCode:208155f8e31ba692c9-88064759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12905150ffe8221b760ffebbe13e92bfb006fe4f' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\mobile\\index.htm',
      1 => 1442303060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208155f8e31ba692c9-88064759',
  'variables' => 
  array (
    'config' => 0,
    'wap_style' => 0,
    'lunbo' => 0,
    'config_weburl' => 0,
    'keylist' => 0,
    'job' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f8e31bc95e33_20003941',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f8e31bc95e33_20003941')) {function content_55f8e31bc95e33_20003941($_smarty_tpl) {?>
<script src="/js/slides.jquery.js" type="text/javascript"></script>
<script src="/app/template/wap/js/flickity-docs.min.js"></script>
<link rel="stylesheet" type="text/css" href="/app/template/wap/css/normalize.css" />
<link rel="stylesheet" href="/app/template/wap/css/flickity-docs.css" media="screen" />
<section>
    <div class="example">        
        <div class="example__demo">
            <div class="gallery gallery--images-loaded-demo js-flickity"
                 data-flickity-options='{ "imagesLoaded": true,"autoPlay": true }'>
                <!-- images from unsplash.com -->
                            </div>
        </div>
    </div>
</section>
<section>
  <div class="index_warp_content clear">
     <form method="get" action="/mobile/index.php">
      <input type="hidden" name="c" value="job" />
      <div class="index_formFiled">
        <input type="text" value="" name="keyword" class="index_input_search" placeholder="请输入关键字，如：会计">
        <input type="submit" value="搜职位" class="index_input_btn">
      </div>
    </form>
    <nav>
      <dl class="nav_list">
        <a href="/index.php?m=mobile&c=job">
        <dt class="cor_1"><i class="nav_icon fa fa-briefcase"></i></dt>
        <dd>找职位</dd>
        </a>
      </dl>
      <dl class="nav_list">
        <a href="/index.php?m=mobile&c=resume">
        <dt class="cor_2"><i class="nav_icon fa fa-graduation-cap"></i></dt>
        <dd>找人才</dd>
        </a>
      </dl>
      <dl class="nav_list">
        <a href="/index.php?m=mobile&c=company">
        <dt class="cor_3"><i class="nav_icon fa fa-building-o"></i></dt>
        <dd>找企业</dd>
        </a>
      </dl>
      <dl class="nav_list">
        <a href="/index.php?m=mobile&c=job&rec=1">
        <dt class="cor_4"><i class="nav_icon fa fa-thumbs-up"></i></dt>
        <dd>职位推荐</dd>
        </a>
      </dl>
           <dl class="nav_list">
        <a href="/index.php?m=mobile&c=map">
        <dt class="cor_5"><i class="nav_icon fa fa-map-marker"></i></dt>
        <dd>附近职位</dd>
        </a>
      </dl> <dl class="nav_list">
        <a href="/index.php?m=mobile&c=once">
        <dt class="cor_6"><i class="nav_icon fa fa-tasks"></i></dt>
        <dd>微招聘</dd>
        </a>
      </dl>
      <dl class="nav_list">
        <a href="/index.php?m=mobile&c=tiny">
        <dt class="cor_7"><i class="nav_icon fa fa-users"></i></dt>
        <dd>微简历</dd>
        </a>
      </dl>
      <dl class="nav_list">
        <a href="/index.php?m=mobile&c=article">
        <dt class="cor_8"><i class="nav_icon fa fa-newspaper-o"></i></dt>
        <dd>看资讯</dd>
        </a>
      </dl>

    </nav>
  </div>
</section>

<div class="clear"></div>
<section>
  <div  class="index_hotlist">  </div>
</section>
<div class="clear"></div>
<section>
  <div class="index_warp_content mt10">
    <div class="wap_title"><span class="">职位推荐</span><a href="/index.php?m=mobile&c=job&rec=1" class="more">更多>></a></div>
     </div>
</section>
<style>
    .previous, .next, .flickity-page-dots {
        display: none;
    }
    .example,.gallery {margin-bottom:0px !important;
    }
</style>
<script type="text/javascript">
    $(function () {
        $(".example__demo img").width($(document.body).width());
    }); 
</script>
<?php }} ?>
