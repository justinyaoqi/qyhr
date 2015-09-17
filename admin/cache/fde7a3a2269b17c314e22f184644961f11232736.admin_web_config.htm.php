<?php /*%%SmartyHeaderCode:2475255e2d015870129-83330971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fde7a3a2269b17c314e22f184644961f11232736' => 
    array (
      0 => 'D:\\wamp\\www\\qyhr\\app\\template\\admin\\admin_web_config.htm',
      1 => 1440861575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2475255e2d015870129-83330971',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e2d02a9b4249_25000442',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e2d02a9b4249_25000442')) {function content_55e2d02a9b4249_25000442($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />  
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.8.0.min.js"></script>
<script src="../js/layer/layer.min.js" language="javascript"></script> 
<script src="js/admin_public.js" type="text/javascript"></script> 
<script src="http://api.map.baidu.com/api?v=1.4"></script>
<script type="text/javascript" src="../js/map.js"></script> 
<title>后台管理</title>
</head>
<body class="body_ifm">

<div class="infoboxp" style="position:relative;">
<div class="infoboxp_top_bg"></div>

<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute; z-index:10000"></div>

<div class="main_tag" >
<div class="admin_h1_bg"> 
<span class="infoboxp_top_span infoboxp_top_wz">网站配置</span>
<ul>
	<li class="on">基本设置</li>
    <li>安全设置</li>
    <li>验证码设置</li>
    <li>网站LOGO</li>
    <li>地图设置</li>
    <li>缓存设置</li>
</ul>
</div>
<div class="tag_box">
<div> 
<table width="100%" class="table_form">
<tr class="admin_table_trbg">
    <th width="160">参数说明：</th>
    <td >参数值</td>
    <td width="160">变量</td>
</tr>
<tr>
<th width="160">网站名称：</th>
<td>
<input class="input-text" type="text" name="sy_webname" id="sy_webname" value="phpyun人才系统" size="60" maxlength="255"/>
<font color="gray" style="display:none">如：hr135人才网</font></td>
<td width="160">sy_webname</td>
</tr>
<tr class="admin_table_trbg">
		<th width="160">网址地址：</th>
		<td><input class="input-text tips_class" type="text" name="sy_weburl" id="sy_weburl" value="http://localhost/qyhr" size="60" maxlength="255"/><font color="gray" style="display:none">如：http://www.hr135.com</font></td>
        <td width="160">sy_weburl</td>
	</tr>
    <tr>
    	<th width="160">网站开启：</th>
		<td  >
          <input type="radio" name="sy_web_online" value="1" id="RadioGroup1_12" checked>
          <label for="RadioGroup1_12">开启</label>&nbsp;
          <input type="radio" name="sy_web_online" value="2" id="RadioGroup1_13" >
          <label for="RadioGroup1_13">关闭</label>
        </td>
        <td width="160">sy_web_online</td>
    </tr>
    <tr class="admin_table_trbg">
    	<th width="160">开启分站：</th>
		<td>
          <input type="radio" name="sy_web_site" value="1" id="RadioGroup3_12" >
          <label for="RadioGroup3_12">开启</label>&nbsp;
          <input type="radio" name="sy_web_site" value="0" id="RadioGroup3_13" checked>
          <label for="RadioGroup3_13">关闭</label> <br/><font color="gray">提示：开启多城市并且绑定域名不支持2级目录，本地测试如 http://localhost/phpyun 请解析测试域名</font></td>
        <td width="160">sy_web_site</td>
    </tr>
    <tr>
		<th width="160">设定默认城市：</th>
		<td><input class="input-text tips_class" type="text" name="sy_indexcity" id="sy_indexcity" size="40" maxlength="255" value=""/><font color="gray">提示：当您开启分站后默认显示的城市 如：全国</font></td>
        <td width="160">sy_indexcity</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="160">一级域名：</th>
		<td><input class="input-text tips_class" type="text" name="sy_onedomain" id="sy_onedomain" size="40" maxlength="255" value=""/><font color="gray">提示：如果默认域名为二级域名，则请填写一级域名</font></td>
        <td width="160">sy_onedomain</td>
	</tr>
    <tr>
		<th width="160">默认域名：</th>
		<td><input class="input-text tips_class" type="text" name="sy_indexdomain" id="sy_indexdomain" size="40" maxlength="255" value=""/><font color="gray" style="display:none">提示：默认城市对应的域名 如全站对应域名 http://www.hr135.com 而不是 beijing.hr135.com</font></td>
        <td width="160">sy_indexdomain</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="160">后台列表页显示条数：</th>
		<td><input class="input-text tips_class" type="text" name="sy_listnum" id="sy_listnum" value="13" size="10" maxlength="255" /> 条</td>
         <td width="160">sy_listnum</td>
	</tr>
    <tr>
    	<th width="160">网站关闭原因：</th>
		<td>
          <textarea name="sy_webclose" id="sy_webclose" rows="3" cols="50" class="text">网站升级中请联系管理员！</textarea>
        </td>
        <td width="160">sy_webclose</td>
    </tr>  
  <tr class="admin_table_trbg">
		<th width="160">网站关键词：</th>
		<td class="y-bg"><textarea name="sy_webkeyword" id="sy_webkeyword" rows="3" cols="50" class="text tips_class">phpyun人才网,phpyun招聘网,phpyun求职,phpyun招聘会</textarea>
        <font color="gray">提示：网站关键词作为公共部分详细设置请到系统-》SEO设置单独设置</font></td>
        <td width="160">sy_webkeyword</td>
	</tr>
	<tr>
		<th width="160">网站描述：</th>
		<td class="y-bg"><textarea name="sy_webmeta" id="sy_webmeta" rows="3" cols="50" class="text">PHP云人才系统，是专为中文用户设计和开发，程序源代码100%完全开放的一个采用 PHP 和 MySQL 数据库构建的高效的人才与企业求职招、聘解决方案。</textarea><font color="gray">提示：网站描述作为公共部分，详细设置请到系统-》SEO管理设置</font></td>
         <td width="160">sy_webmeta</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">网站版权信息：</th>
        <td><textarea name="sy_webcopyright" id="sy_webcopyright" rows="3" cols="80" class="text">Copyright C 20092014 All Rights Reserved 版权所有 鑫潮人力资源服务</textarea></td>
        <td width="160">sy_webcopyright</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">统计代码：</th>
        <td><textarea name="sy_webtongji" id="sy_webtongji" rows="3" cols="80" class="text"></textarea></td>
        <td width="160">sy_webtongji</td>
	</tr>
	<tr>
		<th width="160">站长EMAIL：</th>
		<td><input class="input-text tips_class" type="text" name="sy_webemail" id="sy_webemail" value="admin@admin.com" size="40" maxlength="255" /></td>
         <td width="160">sy_webemail</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">备案号：</th>
		<td><input class="input-text tips_class" type="text" name="sy_webrecord" id="sy_webrecord" value="苏ICP备12049413号-3" size="40" maxlength="255" /></td>
        <td width="160">sy_webrecord</td>
	</tr>
	<tr>
		<th width="160">电 话：</th>
		<td><input class="input-text tips_class" type="text" name="sy_webtel" id="sy_webtel" value="400-880-5523" size="40" maxlength="255"/> <font color="gray" style="display:none">如：021-61190281</font></td>
        <td width="160">sy_webtel</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">免费电话：</th>
		<td><input class="input-text tips_class" type="text" name="sy_freewebtel" id="sy_freewebtel" value="400-880-5523" size="40" maxlength="255"/> <font color="gray" style="display:none">如：400-8888-888</font></td>
        <td width="160">sy_freewebtel</td>
	</tr>
	<tr>
		<th width="160">客服QQ：</th>
		<td><input class="input-text tips_class" type="text" name="sy_qq" id="sy_qq" value="3367562" size="40" maxlength="255"/> <font color="gray" style="display:none">多个则用半角逗号隔开！</font></td>
        <td width="160">sy_qq</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">公司地址：</th>
		<td><input class="input-text tips_class" type="text" name="sy_webadd" id="sy_webadd" value="江苏省沭阳县软件园B栋10楼" size="80" maxlength="255"/><font color="gray" style="display:none">如：上海徐汇区零陵路爱和大厦14A座</font></td>
        <td width="160">sy_webadd</td>
	</tr>
    
<tr  >
		<td colspan="3" align="center" class="admin_table_trbg"><input class="admin_submit4" id="config" type="button" name="config" value="提交">&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="重置"/></td>
	</tr>
</table>  
</div>
<div class="hiddendiv"> 
    <table width="100%" class="table_form">
      <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
	<tr>
		<th width="160">系统安全码：</th>
		<td><input class="input-text tips_class" type="text" name="sy_safekey" id="sy_safekey" value="WxM0xRIzRt" size="40" maxlength="255"/><font color="gray" style="display:none">系统部分功能使用的加密串，请自定义修改，如：986jhgyutw.*x</font></td>
        <td width="160">sy_safekey</td>
	</tr>
    <tr class="admin_table_trbg">
    	<th width="160">后台修改模板：</th>
		<td  >
          <input type="radio" name="sy_istemplate" value="1" id="sy_istemplate" >
          <label for="RadioGroup1_12">开启</label>&nbsp;
          <input type="radio" name="sy_istemplate" value="2" id="sy_istemplate" checked>
          <label for="RadioGroup1_13">关闭</label>
        </td>
        <td width="160">sy_template</td>
    </tr>
    
        <tr >
            <th width="160">过滤关键词：</th>
            <td><textarea name="sy_fkeyword" id="sy_fkeyword" rows="3" cols="50" class="text tips_class"></textarea>
            <font color="gray" style="display:none">如：台湾,台独</font></td>
             <td width="160">sy_fkeyword</td>
        </tr>
        <tr class="admin_table_trbg">
            <th width="160">替换过滤关键词：</th>
            <td><textarea name="sy_fkeyword_all" id="sy_fkeyword_all" rows="3" cols="50" class="text tips_class">***</textarea>
            <font color="gray" style="display:none">将敏感关键词替换</font></td>
            <td width="160">sy_fkeyword_all</td>
        </tr>
        <tr  >
		<th>禁止IP访问：</th>
			<td><textarea id="sy_bannedip" class='tips_class' name="sy_bannedip" cols="100" rows="2" style="width:317px;height:100px;"></textarea><font color="gray" style="display:none">多个IP用|(竖线)隔开,例：127.0.0.1|192.168.1.1</font>
            </td>
             <td width="160">sy_bannedip</td>
		</tr>
        <tr class="admin_table_trbg">
            <th width="160">禁止IP访问提示：</th>
            <td><textarea name="sy_bannedip_alert" id="sy_bannedip_alert" rows="3" cols="50" class="text tips_class">您的当前IP，该站已经禁止访问，请联系管理员处理。</textarea>
            <font color="gray" style="display:none">禁止访问提示</font></td>
            <td width="160">sy_bannedip_alert</td>
        </tr>
        <tr>
            <td colspan="3" align="center">
            <input class="admin_submit4" id="otherconfig" type="button" name="otherconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>            
        </tr>
    </table> 
	 
</div>
<div class="hiddendiv"> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
	<tr>
		<th width="160">开启系统验证码：</th>
		<td>
        <input type="checkbox" name="code_web" value="注册会员" id="checkboxgroup1_0" checked>
        <label for="checkboxgroup1_0">注册会员</label>&nbsp;&nbsp;
        <input type="checkbox" name="code_web" value="前台登陆" id="checkboxgroup1_1" checked>
        <label for="checkboxgroup1_1">前台登陆</label>&nbsp;&nbsp;
        <input type="checkbox" name="code_web" value="一句话招聘" id="checkboxgroup1_2" checked>
        <label for="checkboxgroup1_2">一句话招聘</label>&nbsp;&nbsp;
        <input type="checkbox" name="code_web" value="后台登陆" id="checkboxgroup1_3" >
        <label for="checkboxgroup1_3">后台登陆</label>
          </td>
         <td width="160">code_web</td> 
	</tr>
      <tr class="admin_table_trbg">
		<th width="160">验证码生成类型：</th>
		<td>
		    <input type="radio" name="code_type" value="1" id="RadioGroup3_0" >
		    <label for="RadioGroup3_0">数字</label>&nbsp;&nbsp;
		    <input type="radio" name="code_type" value="2" id="RadioGroup3_1" >
		    <label for="RadioGroup3_1">英文</label>&nbsp;&nbsp;
            <input type="radio" name="code_type" value="3" id="RadioGroup3_2" checked>
		    <label for="RadioGroup3_2">英文+数字</label>
		  </td>
          <td width="160">code_type</td> 
 
	</tr>
    <tr>
		<th width="160">选择验证码文件类型：</th>
		<td>
        	<input type="radio" name="code_filetype" value="jpg" id="RadioGroup4_0" checked>
		    <label for="RadioGroup4_0">jpg</label>&nbsp;&nbsp;
		    <input type="radio" name="code_filetype" value="png" id="RadioGroup4_2" >
		    <label for="RadioGroup4_2">png</label>&nbsp;&nbsp;
            <input type="radio" name="code_filetype" value="gif" id="RadioGroup4_3" >
		    <label for="RadioGroup4_3">gif</label></td>
           <td width="160">code_filetype</td>  
	</tr>
  <tr class="admin_table_trbg">
		<th width="160">验证码图片大小：</th>
		<td>宽：<input class="input-text" type="text" name="code_width" id="code_width" value="75" size="10" maxlength="255"/>px&nbsp;&nbsp;
        高：<input class="input-text" type="text" name="code_height" id="code_height" value="35" size="10" maxlength="255"/>px
        </td>
        <td width="160">code_width</td> 
	</tr>
    <tr>
		<th width="160">验证码字符数：</th>
		<td><input class="input-text" type="text" name="code_strlength" id="code_strlength" value="4" size="10" maxlength="1" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/>&nbsp;&nbsp;提示：字符数不要大于5</td>
         <td width="160">code_strlength</td> 
	</tr>
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4" id="codeconfig" type="button" name="codeconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>  
</div>
<div class="hiddendiv">
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
    <form action="index.php?m=config&c=save_logo" method="post" enctype= "multipart/form-data" target="supportiframe">
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
    
        <tr>
		<th width="160">整站LOGO：</th>
		<td><input  type="file" size="45" name="logo" class="input-text">
                <img src="http://localhost/qyhr/data/logo/20150505/14383375306.PNG" >
                    </td>
             <td width="160">sy_logo</td>
		</tr>

         <tr>
		<th width="160">朋友圈LOGO：</th>
		<td><input  type="file" size="45" name="friend_logo" class="input-text">
                <img src="http://localhost/qyhr/data/logo/20130721/13756154999.PNG">
                  </td>
           <td width="160">sy_friend_logo</td>
		</tr>
         <tr class="admin_table_trbg">
		<th width="160">个人会员中心LOGO：</th>
		<td><input  type="file" size="45" name="member_logo" class="input-text">
                        <img src="http://localhost/qyhr/data/logo/20140306/13970739013.PNG">
                  </td>
          <td width="160">sy_member_logo</td>
		</tr>
         <tr>	
		<th width="160">企业会员中心LOGO：</th>
		<td><input  type="file" size="45" name="unit_logo" class="input-text">
                    <img src="http://localhost/qyhr/data/logo/20150616/14392109489.PNG">
                  </td>
          <td width="160">sy_unit_logo</td>
		</tr>
		
        
        <tr class="admin_table_trbg">	
		<th width="160">手机LOGO</th>
		<td><input  type="file" size="45" name="wap_logo" class="input-text">
                    <img src="http://localhost/qyhr/data/logo/20150525/14345913234.PNG">
                  </td>
          <td width="160">sy_wap_logo</td>
		</tr>
        
        <tr class="admin_table_trbg">	
		<th width="160">WAP二维码</th>
		<td><input  type="file" size="45" name="sy_wap_qcode" class="input-text">
                <img src="http://localhost/qyhr/data/logo/20150623/14368316019.PNG">
                  </td>
          <td width="160">sy_wap_qcode</td>
		</tr>

		<tr class="admin_table_trbg">
		<th width="160">公众号二维码</th>
		<td><input  type="file" size="45" name="sy_wx_qcode" class="input-text">
                    <img src="http://localhost/qyhr/data/logo/20150623/14368616115.JPG">
                  </td>
          <td width="160">sy_wx_qcode</td>
		</tr>
	
        
        <tr>
            <td colspan="3" align="center">
            <input class="admin_submit4"  type="submit" name="waterconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table> 
	<input type="hidden" name="pytoken" id='pytoken' value="6dd985061a91">
    </form>
</div>

<div class="hiddendiv"> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th>参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
    <tr>
		<th>IP跳转到当前城市：</th>
		<td>
        <input type="radio" name="map_tocity" value="1" id="map_0" >
		    <label for="map_0">跳转</label>&nbsp;&nbsp;
		    <input type="radio" name="map_tocity" value="2" id="map_1" checked>
		    <label for="map_1">保持默认坐标</label>
        </td>
        <td width="160">map_tocity</td>
	</tr>
    <tr class="admin_table_trbg">
		<th>百度地图KEY：</th>
		<td><input class="input-text  " type="text" name="map_key" id="map_key" value="F9bfbeb26054d97898571a1df965d8af" size="45" maxlength="255"/>
        <font color="gray"><a href="http://lbsyun.baidu.com/apiconsole/key?application=key" target="_blank">申请地址</a> 地图版本：1.5</font>
        </td>
        <td width="160">map_key</td>
	</tr>
        <tr>
			<th>默认坐标：</th>
			<td>X：<input class="input-text" type="text" name="map_x" id="map_x" value="116.41363" size="20" maxlength="255"/>&nbsp;&nbsp;Y：<input class="input-text" type="text" name="map_y" id="map_y" value="39.910664" size="20" maxlength="255"/> 
        <a href="javascript:;" id="getclick">点击获取坐标</a>
        </td>
        <td width="160">map_x / map_y</td>       
    <tr id="getmapxy" style="display:none;" class="admin_table_trbg">
			<th>获取坐标：</th>
			<td style=" position:relative; z-index:0px"><div id="map_container" style="width:100%;height:300px; position:relative; z-index:1"></div></td>
            <td width="160"></td>
        </tr>
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4" id="mapconfig" type="button" name="mapconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>  
</div>

<div class="hiddendiv"> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
        <tr>
		<th width="160">Memcache缓存：</th>
		<td>
		    <input type="radio" class='tips_class' name="ismemcache" value="1" id="RadioGroup3_0" >
		    <label for="RadioGroup3_0">开启</label>&nbsp;&nbsp;
		    <input type="radio" name="ismemcache" class='tips_class' value="2" id="RadioGroup3_1" checked>
		    <label for="RadioGroup3_1">关闭</label>&nbsp;&nbsp;
            <font color="gray" style="display:none">注：服务器上未安装Memcache,请不要打开。</font>
		  </td>
          <td width="160">ismemcache</td>
		</tr>

        <tr class="admin_table_trbg">
        <th width="160">Memcache服务器：</th>
		<td>
		    <input class="input-text tips_class" type="text" name="memcachehost" id="memcachehost3" value="127.0.0.1" size="20" maxlength="255"/><font color="gray" style="display:none">服务器IP，本机127.0.0.1</font>
		  </td>
           <td width="160">memcachehost</td>
		</tr>
        <tr>
        <th width="160">Memcache端口：</th>
		<td>
		    <input class="input-text tips_class" type="text" name="memcacheport" id="memcacheport3" value="11211" size="20" maxlength="255"/><font color="gray" style="display:none">默认11211</font>
		  </td>
          <td width="160">memcacheport</td>
		</tr>
        <tr class="admin_table_trbg">
        <th width="160">Memcache缓存时间：</th>
		<td>
		    <input class="input-text tips_class" type="text" name="memcachetime" id="memcachetime" value="3600" size="20" maxlength="255"/><font color="gray" style="display:none">秒为单位,一般为3600秒</font>
		  </td>
          <td width="160">memcachetime</td>
		</tr>  
        <tr>
		<th width="160">页面缓存：</th>
		<td>
		    <input type="radio" class="tips_class" name="webcache" value="1" id="RadioGroup3_0" >
		    <label for="RadioGroup3_0">开启</label>&nbsp;&nbsp;
		    <input type="radio" name="webcache" value="2" id="RadioGroup3_1" checked>
		    <label for="RadioGroup3_1">关闭</label>&nbsp;&nbsp;
		  </td>
          <td width="160">webcache</td>
		</tr>   
        <tr class="admin_table_trbg">
        <th width="160">页面缓存时间：</th>
		<td>
		    <input class="input-text tips_class" type="text" name="webcachetime" id="webcachetime" value="1000" size="20" maxlength="255"/><font color="gray" style="display:none">秒为单位,一般为3600秒</font>
		  </td>
          <td width="160">webcachetime</td>
		</tr>    
        <tr class="admin_table_trbg">
		<th width="160">smarty缓存：</th>
		<td>
		    <input type="radio" name="issmartycache" value="1" id="RadioGroup4_0" >
		    <label for="RadioGroup4_0">开启</label>&nbsp;&nbsp;
		    <input type="radio" name="issmartycache" value="2" id="RadioGroup4_1" checked>
		    <label for="RadioGroup4_1">关闭</label>&nbsp;&nbsp;
		  </td>
          <td width="160">issmartycache</td>
		</tr>
        <tr style="display:none;">
        <th width="160">smarty缓存时间：</th>
		<td>
		    <input class="input-text tips_class" type="text" name="smartycachetime" id="smartycachetime" value="3600" size="20" maxlength="255"/><font color="gray" style="display:none">秒为单位,一般为3600秒</font>
		  </td>
           <td width="160">smartycachetime</td>
		</tr>        
        <tr>
            <td colspan="3" align="center">
            <input class="admin_submit4" id="cacheconfig" type="button" name="mapconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>  
</div>

</div>
</div>
<script> 
var $switchtag = $("div.main_tag ul li");
$switchtag.click(function(){
	$(this).addClass("on").siblings().removeClass("on");
	var index = $switchtag.index(this);
	$("div.tag_box > div").eq(index).show().siblings().hide();
});
$(".tips_class").hover(function(){ 
	var msg_id=$(this).attr('id'); 
	var msg=$('#'+msg_id+' + font').html();
	if($.trim(msg)!=''){
		layer.tips(msg, this, {
		guide: 1, 
		style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']
		}); 
	} 
},function(){
	var msg_id=$(this).attr('id');
	var msg=$('#'+msg_id+' + font').html();
	if($.trim(msg)!=''){
		layer.closeTips();
	} 
});
getmapnoshowcont('map_container',"116.41363","39.910664","map_x","map_y");
$(function(){  
	$("#getclick").click(function(){
		$('#getmapxy').toggle();
		var bodycont=$('#getmapxy').css("display");
		if(bodycont=="none"){
			$(this).html("点击获取坐标");
		}else{
			$(this).html("关闭获取坐标");
		}
	})
	$("#cacheconfig").click(function(){
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#cacheconfig").val(),
			ismemcache : $("input[name=ismemcache]:checked").val(),
			issmartycache : $("input[name=issmartycache]:checked").val(),
			memcachehost : $("input[name=memcachehost]").val(),
			memcacheport : $("input[name=memcacheport]").val(),
			memcachetime : $("input[name=memcachetime]").val(),
			smartycachetime : $("input[name=smartycachetime]").val(),
			webcache : $("input[name=webcache]:checked").val(),
			pytoken : $("#pytoken").val(),
			webcachetime : $("input[name=webcachetime]").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	$("#mapconfig").click(function(){
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#mapconfig").val(),
			map_tocity : $("input[name=map_tocity]:checked").val(),
			map_key : $("#map_key").val(),
			pytoken : $("#pytoken").val(),
			map_x : $("#map_x").val(),
			map_y : $("#map_y").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	$("#otherconfig").click(function(){
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#otherconfig").val(),
			sy_safekey : $("#sy_safekey").val(),
			sy_istemplate : $("input[name=sy_istemplate]:checked").val(),
			sy_bannedip : $("#sy_bannedip").val(),
			sy_fkeyword_all : $("#sy_fkeyword_all").val(),
			sy_bannedip_alert : $("#sy_bannedip_alert").val(),
			pytoken : $("#pytoken").val(),
			sy_fkeyword : $("#sy_fkeyword").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	$("#codeconfig").click(function(){
		loadlayer();
		var codewebarr="";
		$("input[name=code_web]:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出 
			if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
		}); 
		$.post("index.php?m=config&c=save",{
			config : $("#codeconfig").val(),
			code_web : codewebarr,
			code_type : $("input[name=code_type]:checked").val(),
			code_filetype : $("input[name=code_filetype]:checked").val(),
			code_width : $("#code_width").val(),
			code_height : $("#code_height").val(),
			pytoken : $("#pytoken").val(),
			code_strlength:$("#code_strlength").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	}); 
	$("#config").click(function(){ 
		loadlayer();
		$.post("index.php?m=config&c=save",{
			config : $("#config").val(),
			sy_webname : $("#sy_webname").val(),
			sy_weburl : $("#sy_weburl").val(),
			sy_webkeyword : $("#sy_webkeyword").val(),
			sy_webmeta : $("#sy_webmeta").val(),
			sy_webcopyright : $("#sy_webcopyright").val(),
			sy_webtongji : $("#sy_webtongji").val(),
			sy_webemail : $("#sy_webemail").val(),
			sy_webrecord : $("#sy_webrecord").val(),
			sy_webtel : $("#sy_webtel").val(),
			sy_qq : $("#sy_qq").val(),
			sy_freewebtel : $("#sy_freewebtel").val(),
			sy_listnum : $("#sy_listnum").val(), 
			sy_webadd : $("#sy_webadd").val(),
			sy_rand : $("#sy_rand").val(),
			sy_city_online: $("input[name=sy_city_online]:checked").val(),
			sy_webclose: $("#sy_webclose").val(),
			sy_indexcity: $("#sy_indexcity").val(),
			sy_onedomain: $("#sy_onedomain").val(),
			sy_wapdomain: $("#sy_wapdomain").val(),
			sy_indexdomain: $("#sy_indexdomain").val(),
			sy_qqkey: $("#sy_qqkey").val(),
			sy_sinakey: $("#sy_sinakey").val(), 
			sy_web_online: $("input[name=sy_web_online]:checked").val(),
			pytoken : $("#pytoken").val(),
			sy_web_site: $("input[name=sy_web_site]:checked").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
});
</script>
</div>
</body>
</html><?php }} ?>
