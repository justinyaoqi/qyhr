<?php
/*
* $Author ��PHPYUN�����Ŷ�
*
* ����: http://www.phpyun.com
*
* ��Ȩ���� 2009-2015 ��Ǩ�γ���Ϣ�������޹�˾������������Ȩ����
*
* ���������δ����Ȩǰ���£�����������ҵ��Ӫ�����ο����Լ��κ���ʽ���ٴη�����
 */
if($config['sy_web_site']=="1"){
	$host =  "http://".$_SERVER['HTTP_HOST'];
	if(!strpos($host,"localhost")&&!strpos($host,"127.0.0.1")){
		if($host!=$config['sy_weburl']){
			if($_COOKIE['sy_weburl'] == $host){
				$config['sy_weburl']	=  $_COOKIE['sy_weburl'];
				$config['cityid']		=  $_COOKIE['cityid'];
				$config['three_cityid']	=  $_COOKIE['three_cityid'];
				$config['cityname']		=  $_COOKIE['cityname'];
				$config['did']			=  $_COOKIE['did'];
				$config['fz_type']		=  $_COOKIE['fz_type'];
				$config['hyclass']		=  $_COOKIE['hyclass'];
				$config['style']		=  $_COOKIE['style'];

				if($_COOKIE['sy_webtitle']!=""){
					$config['sy_webtitle']	=  $_COOKIE['sy_webtitle'];
				}
				if($_COOKIE['sy_webname']!=""){
					$config['sy_webname']	=  $_COOKIE['sy_webname'];
				}
				if($_COOKIE['sy_webkeyword']!=""){
					$config['sy_webkeyword']	=  $_COOKIE['sy_webkeyword'];
				}
				if($_COOKIE['sy_webmeta']!=""){
					$config['sy_webmeta']	=  $_COOKIE['sy_logsy_webmetao'];
				}
				if($_COOKIE['sy_logo']!=""){
					$config['sy_logo']	=  $_COOKIE['sy_logo'];
				}
			}else{
				include(PLUS_PATH."/domain_cache.php");
				include(PLUS_PATH."/city.cache.php");
				include(PLUS_PATH."/industry.cache.php");
				setcookies(
					array(
					'sy_weburl'=>'',
					'did'=>'',
					'fz_type'=>'',
					'cityid'=>'',
					'hyclass'=>'',
					'three_cityid'=>'',
					'cityname'=>'',
					'sy_webkeyword'=>'',
					'sy_weburl'=>'',
					'sy_logo'=>'',
					'style'=>'',
					'sy_webtitle'=>'',
					'sy_webmeta'=>'',
					'sy_webname'=>''

				),time()-86400,$config['sy_onedomain']);
				if(is_array($site_domain)){
					foreach($site_domain as $key=>$value){
						if($value['host']==$_SERVER['HTTP_HOST']){
							$parseDate['did']=$value['id'];
							$parseDate['fz_type']=$value['fz_type'];
							if($parseDate['fz_type']=='1'){
								if($value['three_cityid']>0){
									$parseDate['three_cityid']	=	$value['three_cityid'];
									$parseDate['cityname']		=	$city_name[$value['three_cityid']];
								}else{
									$parseDate['cityid']	=	$value['cityid'];
									$parseDate['cityname']	=	$city_name[$value['cityid']];
								}
								setcookies('hyclass',time()-86400,$config['sy_onedomain']);
							}else if($parseDate['fz_type']=='2'&&$value['hy']){
								$parseDate['hyclass']=$value['hy'];
								$parseDate['cityname']		=	$industry_name[$value['hy']];
								setcookies(
									array(
									'cityid'=>'',
									'three_cityid'=>''
									),time()-86400,$config['sy_onedomain']
								);
							}
							if($value['webname']){$parseDate['sy_webname']  =	$value['webname'];}
							if($value['webtitle']){$parseDate['sy_webtitle']  =	$value['webtitle'];}
							if($value['weblogo']){$parseDate['sy_logo']  =	$value['weblogo'];}
							if($value['webkeyword']){$parseDate['sy_webkeyword']  =	$value['webkeyword'];}
							if($value['webmeta']){$parseDate['sy_webmeta']  =	$value['webmeta'];}
							if($value['style']){$parseDate['style']  =	$value['style'];}
							$parseDate['sy_weburl']  =	$host;
							if(strpos($host,$config['sy_onedomain'])!==false){
								$domainUrl  = $config['sy_onedomain'];
							}else{
								$domainUrlAll  = parse_url($host);
								$domainUrl = $domainUrlAll['host'];
							}
							setcookies($parseDate,time()+86400,$domainUrl);
							$config = array_merge($config,$parseDate);
						}
					}
				}
			}
		}
	}
}

function setcookies($parseDate=array(),$time,$domain){
	$domain = get_domain($domain);
	if(is_array($parseDate)){
		foreach($parseDate as $key=>$value){
			SetCookie($key,$value,$time,"/",$domain);
		}
	}
}

?>