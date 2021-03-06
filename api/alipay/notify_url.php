<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2015 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */

/////////////////////////////////////
error_reporting(0);
require_once("class/alipay_notify.php");
require_once("alipay_config.php");

require_once(dirname(dirname(dirname(__FILE__)))."/config/db.config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/data/plus/config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/app/include/mysql.class.php");
$db = new mysql($db_config['dbhost'], $db_config['dbuser'], $db_config['dbpass'], $db_config['dbname'], ALL_PS, $db_config['charset']);

$alipay = new alipay_notify($partner,$security_code,$sign_type,$_input_charset,$transport);    //构造通知函数信息
$verify_result = $alipay->notify_verify();  //计算得出通知验证结果

if($verify_result) {

	if(!preg_match('/^[0-9]+$/', $_POST['out_trade_no'])){
		die;
	}
    //验证成功
    //获取支付宝的反馈参数
    $dingdan           = $_POST['out_trade_no'];	    //获取支付宝传递过来的订单号
    $total             = $_POST['total_fee'];	    //获取支付宝传递过来的总价格
	$sql=$db->query("select * from `".$db_config["def"]."company_order` where `order_id`='".$dingdan."'");
    $row=mysql_fetch_array($sql);
    $sOld_trade_status =$row['order_state'];		    //获取商户数据库中查询得到该笔交易当前的交易状态
    /*假设：
	sOld_trade_status="0";表示订单未处理；
	sOld_trade_status="1";表示交易成功（TRADE_FINISHED/TRADE_SUCCESS）；
    */
    if($_POST['trade_status'] == 'TRADE_FINISHED' ||$_POST['trade_status'] == 'TRADE_SUCCESS') {    //交易成功结束
         //放入订单交易完成后的数据库更新程序代码，请务必保证echo出来的信息只有success
        //为了保证不被重复调用，或重复执行数据库更新程序，请判断该笔交易状态是否是订单未处理状态

		if($sOld_trade_status=="1"){
			$mselect=$db->query("select  `usertype` from `".$db_config[def]."member` where `uid`='".$row['uid']."'");
			$member=mysql_fetch_array($mselect);
			if($member['usertype']=='1'){
				$table='member_statis';
			}else if($member['usertype']=='2'){
				$table='company_statis';
				$tvalue=",`all_pay`=`all_pay`+'".$row["order_price"]."'";
			}
			if($row['type']=="1"&&$row['rating']&&$member['usertype']!='1'){//购买会员
				$select=$db->query("select * from `".$db_config["def"]."company_rating` where `id`='".$row["rating"]."'");
				$comuid=mysql_fetch_array($select);
				$value="`rating`='".$comuid["id"]."',";
				$value.="`rating_name`='".$comuid["name"]."',";
				$value.="`rating_type`='".$comuid['type']."',";
				if($comuid['service_time']>0){
					$viptime=time()+$comuid['service_time']*86400;
				}else{
					$viptime=0;
				}
				$value.="`vip_etime`='".$viptime."',";
				$value.="`all_pay`=`all_pay`+'".$row["order_price"]."',";
				$value.="`job_num`=".$comuid["job_num"].",";
				$value.="`down_resume`=".$comuid["resume"].",";
				$value.="`invite_resume`=".$comuid["interview"].",";
				$value.="`editjob_num`=".$comuid["editjob_num"].",";
				$value.="`breakjob_num`=".$comuid["breakjob_num"]."";
				mysql_query("update `".$db_config["def"].$table."` SET ".$value." where `uid`='".$row["uid"]."'");

			}else if($row['type']=='2'&&$row['integral']){//充值积分
				mysql_query("update `".$db_config[def].$table."` set `integral`=`integral`+'".$row['integral']."'".$tvalue." where `uid`='".$row["uid"]."'");
				mysql_query("INSERT INTO `".$db_config[def]."company_order`  SET `order_id`='".$row['order_id']."',`order_price`='".$row['integral']."',`pay_time`='".time()."',`pay_state`='2',`com_id`='".$row["uid"]."',`pay_remark`='"."购买".$config['integral_pricename']."',`type`='1',`pay_type`='2',`did`='".$config['did']."'");
			}else if($row['type']=='3'||$row['type']=='4'){//银行转账
				mysql_query("update `".$db_config[def].$table."` set `pay`=`pay`+'".$row["order_price"]."'".$tvalue." where `uid`='".$row["uid"]."'");
			}
			@file_get_contents($alipaydata["sy_weburl"]."/index.php?m=ajax&c=paypost&dingdan=".$row[order_id]);
			mysql_query("update `".$db_config["def"]."company_order` set order_state='2',`order_bank`='alipay' where `order_id`='$row[order_id]'");

			if($sOld_trade_status < 1) {
				//根据订单号更新订单，把订单处理成交易成功
			}
			echo "success";

			//调试用，写文本函数记录程序运行情况是否正常
			//log_result("这里写入想要调试的代码变量值，或其他运行的结果记录");
		}
	}

    else {
        echo "success";		//其他状态判断。普通即时到帐中，其他状态不用判断，直接打印success。

        //调试用，写文本函数记录程序运行情况是否正常
        //log_result ("这里写入想要调试的代码变量值，或其他运行的结果记录");
    }
}
else {
    //验证失败
    echo "fail";

    //调试用，写文本函数记录程序运行情况是否正常
    //log_result ("这里写入想要调试的代码变量值，或其他运行的结果记录");
}
?>