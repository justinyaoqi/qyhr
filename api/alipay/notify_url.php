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

/////////////////////////////////////
error_reporting(0);
require_once("class/alipay_notify.php");
require_once("alipay_config.php");

require_once(dirname(dirname(dirname(__FILE__)))."/config/db.config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/data/plus/config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/app/include/mysql.class.php");
$db = new mysql($db_config['dbhost'], $db_config['dbuser'], $db_config['dbpass'], $db_config['dbname'], ALL_PS, $db_config['charset']);

$alipay = new alipay_notify($partner,$security_code,$sign_type,$_input_charset,$transport);    //����֪ͨ������Ϣ
$verify_result = $alipay->notify_verify();  //����ó�֪ͨ��֤���

if($verify_result) {

	if(!preg_match('/^[0-9]+$/', $_POST['out_trade_no'])){
		die;
	}
    //��֤�ɹ�
    //��ȡ֧�����ķ�������
    $dingdan           = $_POST['out_trade_no'];	    //��ȡ֧�������ݹ����Ķ�����
    $total             = $_POST['total_fee'];	    //��ȡ֧�������ݹ������ܼ۸�
	$sql=$db->query("select * from `".$db_config["def"]."company_order` where `order_id`='".$dingdan."'");
    $row=mysql_fetch_array($sql);
    $sOld_trade_status =$row['order_state'];		    //��ȡ�̻����ݿ��в�ѯ�õ��ñʽ��׵�ǰ�Ľ���״̬
    /*���裺
	sOld_trade_status="0";��ʾ����δ����
	sOld_trade_status="1";��ʾ���׳ɹ���TRADE_FINISHED/TRADE_SUCCESS����
    */
    if($_POST['trade_status'] == 'TRADE_FINISHED' ||$_POST['trade_status'] == 'TRADE_SUCCESS') {    //���׳ɹ�����
         //���붩��������ɺ�����ݿ���³�����룬����ر�֤echo��������Ϣֻ��success
        //Ϊ�˱�֤�����ظ����ã����ظ�ִ�����ݿ���³������жϸñʽ���״̬�Ƿ��Ƕ���δ����״̬

		if($sOld_trade_status=="1"){
			$mselect=$db->query("select  `usertype` from `".$db_config[def]."member` where `uid`='".$row['uid']."'");
			$member=mysql_fetch_array($mselect);
			if($member['usertype']=='1'){
				$table='member_statis';
			}else if($member['usertype']=='2'){
				$table='company_statis';
				$tvalue=",`all_pay`=`all_pay`+'".$row["order_price"]."'";
			}
			if($row['type']=="1"&&$row['rating']&&$member['usertype']!='1'){//�����Ա
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

			}else if($row['type']=='2'&&$row['integral']){//��ֵ����
				mysql_query("update `".$db_config[def].$table."` set `integral`=`integral`+'".$row['integral']."'".$tvalue." where `uid`='".$row["uid"]."'");
				mysql_query("INSERT INTO `".$db_config[def]."company_order`  SET `order_id`='".$row['order_id']."',`order_price`='".$row['integral']."',`pay_time`='".time()."',`pay_state`='2',`com_id`='".$row["uid"]."',`pay_remark`='"."����".$config['integral_pricename']."',`type`='1',`pay_type`='2',`did`='".$config['did']."'");
			}else if($row['type']=='3'||$row['type']=='4'){//����ת��
				mysql_query("update `".$db_config[def].$table."` set `pay`=`pay`+'".$row["order_price"]."'".$tvalue." where `uid`='".$row["uid"]."'");
			}
			@file_get_contents($alipaydata["sy_weburl"]."/index.php?m=ajax&c=paypost&dingdan=".$row[order_id]);
			mysql_query("update `".$db_config["def"]."company_order` set order_state='2',`order_bank`='alipay' where `order_id`='$row[order_id]'");

			if($sOld_trade_status < 1) {
				//���ݶ����Ÿ��¶������Ѷ�������ɽ��׳ɹ�
			}
			echo "success";

			//�����ã�д�ı�������¼������������Ƿ�����
			//log_result("����д����Ҫ���ԵĴ������ֵ�����������еĽ����¼");
		}
	}

    else {
        echo "success";		//����״̬�жϡ���ͨ��ʱ�����У�����״̬�����жϣ�ֱ�Ӵ�ӡsuccess��

        //�����ã�д�ı�������¼������������Ƿ�����
        //log_result ("����д����Ҫ���ԵĴ������ֵ�����������еĽ����¼");
    }
}
else {
    //��֤ʧ��
    echo "fail";

    //�����ã�д�ı�������¼������������Ƿ�����
    //log_result ("����д����Ҫ���ԵĴ������ֵ�����������еĽ����¼");
}
?>