<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 21:05:45
         compiled from "D:\wamp\www\qyhr\\app\template\yun3.2\client_header.htm" */ ?>
<?php /*%%SmartyHeaderCode:1340755f96929d48586-67770232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '229ae7617795b6cc11945d1f31ddf18bb6516343' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\\\app\\template\\yun3.2\\client_header.htm',
      1 => 1442377195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1340755f96929d48586-67770232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'navlist_client' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f96929d84522_10953453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f96929d84522_10953453')) {function content_55f96929d84522_10953453($_smarty_tpl) {?><div class="header_top fl"></div>
<div class="w980">
  <div class="header_nav fl">
    <div class="header_logo fl"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_logo'];?>
" class="png"></a></div>
    <ul class="header_right_nav fr">
	  <li> <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/">ÍøÕ¾Ê×Ò³</a></li>	  
	  <?php  $_smarty_tpl->tpl_vars['navlist_client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navlist_client']->_loop = false;
global $db,$db_config,$config;include(PLUS_PATH."/menu.cache.php");$Navlist=array();
		if(is_array($menu_name)){
            eval('$paramer=array("item"=>"\'navlist_client\'","hovclass"=>"\'nav_cur\'","nid"=>"11","nocache"=>"")
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
foreach ($Navlist as $_smarty_tpl->tpl_vars['navlist_client']->key => $_smarty_tpl->tpl_vars['navlist_client']->value) {
$_smarty_tpl->tpl_vars['navlist_client']->_loop = true;
?>
      <li><a <?php if ($_smarty_tpl->tpl_vars['navlist_client']->value['eject']) {?> target="_self" <?php }?>  href="<?php echo $_smarty_tpl->tpl_vars['navlist_client']->value['url'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['navlist_client']->value['navclass'];?>
"><?php echo $_smarty_tpl->tpl_vars['navlist_client']->value['name'];?>
</a> </li>
	  <?php } ?>
    </ul>
  </div>
</div>
<div style=" clear:both"></div><?php }} ?>
