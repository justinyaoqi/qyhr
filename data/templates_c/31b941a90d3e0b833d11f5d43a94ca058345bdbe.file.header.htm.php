<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:03:56
         compiled from "D:\wamp\www\qyhr\\app\template\hy\header.htm" */ ?>
<?php /*%%SmartyHeaderCode:170355f968bc231349-95355149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31b941a90d3e0b833d11f5d43a94ca058345bdbe' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\\\app\\template\\hy\\header.htm',
      1 => 1440861548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170355f968bc231349-95355149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'navmap' => 0,
    'maplist' => 0,
    'ishtml' => 0,
    'adlist_51' => 0,
    'nlist' => 0,
    'nalist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f968bc317472_17692017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f968bc317472_17692017')) {function content_55f968bc317472_17692017($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\wamp\\www\\qyhr\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_function_readloginhead')) include 'D:\\wamp\\www\\qyhr\\app\\include\\libs\\plugins\\function.readloginhead.php';
?><!--header-->
<div class="top">
  <div class="top_cot">
    <div class="top_cot_content">
      <div class="top_left fl">
        <div class="yun_welcome fl">��ӭ����<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
��</div>
        <span class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/wap" class="wap_icon">�ֻ���</a> | <a href="<?php echo smarty_function_url(array('m'=>'subscribe'),$_smarty_tpl);?>
">����</a></span> </div>
      <div class="top_right_re fr">
        <div class="top_right">
          <div class="yun_topNav fr"> 
		  <a class="yun_navMore" href="javascript:;">��վ����</a>
            <div class="yun_webMoredown" style="display:none">
              <div class="yun_top_nav_box"> 
			  <?php  $_smarty_tpl->tpl_vars['navmap'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navmap']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
global $db,$db_config,$config;eval('$paramer=array("key"=>"\'key\'","item"=>"\'navmap\'","nocache"=>"")
;');
		include(PLUS_PATH."/navmap.cache.php");$Navlist=array();
		if(is_array($navmap)){
			$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
			$paramer = $ParamerArr[arr];
			$Purl =  $ParamerArr[purl];
		}
		$Navlist =$navmap[0];
		if(is_array($navmap)){
			foreach($navmap as $k=>$v){
				foreach($Navlist as $key=>$val){
					if($k==$val[id]){
						foreach($v as $kk=>$value){
							if($value[type]=='1'){
								if($config[sy_seo_rewrite]=="1" && $value[furl]!=''){
									$v[$kk][url] = $config[sy_weburl]."/".$value[furl];
								}else{
									$v[$kk][url] = $config[sy_weburl]."/".$value[url];
								}
							}
						}
						$Navlist[$key]['list']=$v;
					}
				}
			}
			foreach($Navlist as $key=>$value){
				if($value[type]=='1'){
					if($config[sy_seo_rewrite]=="1" && $value[furl]!=''){
						$Navlist[$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$Navlist[$key][url] = $config[sy_weburl]."/".$value[url];
					}
				}
			}
		}$Navlist = $Navlist; if (!is_array($Navlist) && !is_object($Navlist)) { settype($Navlist, 'array');}
foreach ($Navlist as $_smarty_tpl->tpl_vars['navmap']->key => $_smarty_tpl->tpl_vars['navmap']->value) {
$_smarty_tpl->tpl_vars['navmap']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['navmap']->key;
?>
                <div class="yun_top_nav_h1"><a href="<?php echo $_smarty_tpl->tpl_vars['navmap']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['navmap']->value['eject']) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['navmap']->value['name'];?>
</a></div>
                <ul>
                  <?php  $_smarty_tpl->tpl_vars['maplist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maplist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navmap']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maplist']->key => $_smarty_tpl->tpl_vars['maplist']->value) {
$_smarty_tpl->tpl_vars['maplist']->_loop = true;
?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['maplist']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['maplist']->value['eject']) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['maplist']->value['name'];?>
</a></li>
                  <?php } ?>
                </ul>
                <?php } ?> </div>
            </div>
          </div>
            <?php if ($_smarty_tpl->tpl_vars['ishtml']->value) {?>
            <?php echo '<script'; ?>
 language='JavaScript' src='<?php echo smarty_function_url(array('m'=>'ajax','c'=>'RedLoginHead'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
            <?php } else { ?>
            <?php echo smarty_function_readloginhead(array(),$_smarty_tpl);?>

            <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="header_zt"><?php  $_smarty_tpl->tpl_vars['adlist_51'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_51']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[51];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 5;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0')&&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_51']->key => $_smarty_tpl->tpl_vars['adlist_51']->value) {
$_smarty_tpl->tpl_vars['adlist_51']->_loop = true;
echo $_smarty_tpl->tpl_vars['adlist_51']->value['html'];
} ?></div>
<div class="header">
  <div class="w980">
    <div class="header_cont">
      <div class="logo fl"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_logo'];?>
" class="png"></a></div>
      <nav>
        <ul class="header_nav">
          <?php  $_smarty_tpl->tpl_vars['nlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nlist']->_loop = false;
global $db,$db_config,$config;include(PLUS_PATH."/menu.cache.php");$Navlist=array();
		if(is_array($menu_name)){
            eval('$paramer=array("item"=>"\'nlist\'","hovclass"=>"\'header_nav_cur\'","nid"=>"1","nocache"=>"")
;');
			$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
			$paramer = $ParamerArr[arr];
			$Purl =  $ParamerArr[purl];
			foreach($menu_name[12] as $key=>$val){
				if($val['type']=='2'){
					if($config['sy_seo_rewrite']=="1" && $val[furl]!=''){
						$menu_name[12][$key][url] = $val[furl];
					}else{
						$menu_name[12][$key][url] = $val[url];
					}
					$menu_name[12][$key][navclass] = navcalss($val,$paramer[hovclass]);
				}
			}
			foreach($menu_name[1] as $key=>$value){
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[1][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[1][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[1][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
			foreach($menu_name[2] as $key=>$value){
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[2][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[2][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[2][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
            $isCurrentFind=false;
			foreach($menu_name[4] as $key=>$value){
				if($value['type']=='1' && $value[furl]!=''){
					if($config['sy_seo_rewrite']=="1"){
						$menu_name[4][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[4][$key][url] = $config[sy_weburl]."/".$value[url];
					}
				}
                if($isCurrentFind==false){
				    $menu_name[4][$key][navclass] = navcalss($value,$paramer[hovclass]);
                }
                if($menu_name[4][$key][navclass]){
                    $isCurrentFind=true;
                }
			}
			foreach($menu_name[5] as $key=>$value){
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[5][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[5][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[5][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
		}
		if($paramer[nid]){
			$Navlist =$menu_name[$paramer[nid]];
		}else{
			$Navlist =$menu_name[1];
		}$Navlist = $Navlist; if (!is_array($Navlist) && !is_object($Navlist)) { settype($Navlist, 'array');}
foreach ($Navlist as $_smarty_tpl->tpl_vars['nlist']->key => $_smarty_tpl->tpl_vars['nlist']->value) {
$_smarty_tpl->tpl_vars['nlist']->_loop = true;
?>
          <li class="<?php echo $_smarty_tpl->tpl_vars['nlist']->value['navclass'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['nlist']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['nlist']->value['eject']) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['nlist']->value['name'];?>
</a></li>
          <?php } ?>
          <?php  $_smarty_tpl->tpl_vars['nalist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nalist']->_loop = false;
global $db,$db_config,$config;include(PLUS_PATH."/menu.cache.php");$Navlist=array();
		if(is_array($menu_name)){
            eval('$paramer=array("item"=>"\'nalist\'","hovclass"=>"\'header_fixed_list_cur\'","nid"=>"5","nocache"=>"")
;');
			$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
			$paramer = $ParamerArr[arr];
			$Purl =  $ParamerArr[purl];
			foreach($menu_name[12] as $key=>$val){
				if($val['type']=='2'){
					if($config['sy_seo_rewrite']=="1" && $val[furl]!=''){
						$menu_name[12][$key][url] = $val[furl];
					}else{
						$menu_name[12][$key][url] = $val[url];
					}
					$menu_name[12][$key][navclass] = navcalss($val,$paramer[hovclass]);
				}
			}
			foreach($menu_name[1] as $key=>$value){
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[1][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[1][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[1][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
			foreach($menu_name[2] as $key=>$value){
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[2][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[2][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[2][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
            $isCurrentFind=false;
			foreach($menu_name[4] as $key=>$value){
				if($value['type']=='1' && $value[furl]!=''){
					if($config['sy_seo_rewrite']=="1"){
						$menu_name[4][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[4][$key][url] = $config[sy_weburl]."/".$value[url];
					}
				}
                if($isCurrentFind==false){
				    $menu_name[4][$key][navclass] = navcalss($value,$paramer[hovclass]);
                }
                if($menu_name[4][$key][navclass]){
                    $isCurrentFind=true;
                }
			}
			foreach($menu_name[5] as $key=>$value){
				if($value['type']=='1'){
					if($config['sy_seo_rewrite']=="1" && $value[furl]!=''){
						$menu_name[5][$key][url] = $config[sy_weburl]."/".$value[furl];
					}else{
						$menu_name[5][$key][url] = $config[sy_weburl]."/".$value[url];
					}
					$menu_name[5][$key][navclass] = navcalss($value,$paramer[hovclass]);
				}
			}
		}
		if($paramer[nid]){
			$Navlist =$menu_name[$paramer[nid]];
		}else{
			$Navlist =$menu_name[1];
		}$Navlist = $Navlist; if (!is_array($Navlist) && !is_object($Navlist)) { settype($Navlist, 'array');}
foreach ($Navlist as $_smarty_tpl->tpl_vars['nalist']->key => $_smarty_tpl->tpl_vars['nalist']->value) {
$_smarty_tpl->tpl_vars['nalist']->_loop = true;
?>
          <li class="<?php echo $_smarty_tpl->tpl_vars['nalist']->value['navclass'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['nalist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['nalist']->value['name'];?>
</a></li>
          <?php } ?>
        </ul>
      </nav>

        
        
        
        
        
        
    </div>
  </div>
</div><?php }} ?>
