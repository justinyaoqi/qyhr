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
//---------------------------------------------------------
//�Ƹ�ͨ��ʱ����֧������ʾ�����̻����մ��ĵ����п�������
//---------------------------------------------------------
error_reporting(0);

require_once ("classes/PayRequestHandler.class.php");

require_once ("tenpay_data.php");
require_once(dirname(dirname(dirname(__FILE__)))."/config/db.config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/config/db.safety.php");
require_once(dirname(dirname(dirname(__FILE__)))."/app/include/mysql.class.php");
require_once(dirname(dirname(dirname(__FILE__)))."/data/plus/config.php");

$db = new mysql($db_config['dbhost'], $db_config['dbuser'], $db_config['dbpass'], $db_config['dbname'], ALL_PS, $db_config['charset']);
if(!is_numeric($_POST['dingdan']))
{
	die;
}

$_COOKIE['uid']=(int)$_COOKIE['uid'];
$member_sql=$db->query("SELECT * FROM `".$db_config["def"]."member` WHERE `uid`='".$_COOKIE['uid']."' limit 1");
$member=mysql_fetch_array($member_sql);
if($member['username'] != $_COOKIE['username'] || $member['usertype'] != $_COOKIE['usertype']||md5($member['username'].$member['password'].$member['salt'])!=$_COOKIE['shell']){
	echo '��¼��Ϣ��֤���������µ�¼��';die;
}
$sql=$db->query("select * from `".$db_config["def"]."company_order` where `order_id`='$_POST[dingdan]' AND `order_price`>=0");
$row=mysql_fetch_array($sql);
if(!$row['uid'] || $row['uid']!=$_COOKIE['uid'])
{
	die;
}
mysql_query("update `".$db_config[def]."company_order` set `order_type`='tenpay' where `id`='".$row['id']."'");
 
/* �̻��� */
$bargainor_id = $tenpaydata[sy_tenpayid];

/* ��Կ */
$key = $tenpaydata[sy_tenpaycode];

/* ���ش����ַ */
$return_url = $tenpaydata[sy_weburl]."/api/tenpay/return_url.php";

//date_default_timezone_set(PRC);
$strDate = date("Ymd");
$strTime = date("His");

//4λ�����
$randNum = rand(1000, 9999);

$attach=$_POST[pay_type];

//10λ���к�,�������е�����
$strReq = $strTime . $randNum;

/* �̼Ҷ�����,����������32λ��ȡǰ32λ���Ƹ�ֻͨ��¼�̼Ҷ����ţ�����֤Ψһ�� */
$sp_billno = $_POST[dingdan];

/* �Ƹ�ͨ���׵��ţ�����Ϊ��10λ�̻���+8λʱ�䣨YYYYmmdd)+10λ��ˮ�� */
$transaction_id =trim($bargainor_id.$strDate.$strReq);

/* ��Ʒ�۸񣨰����˷ѣ����Է�Ϊ��λ */
$total_fee = $row[order_price]*100;
//$total_fee = 1;

/* ��Ʒ���� */
$desc = "�����ţ�" . $transaction_id;

/* ����֧��������� */
$reqHandler = new PayRequestHandler();
$reqHandler->init();
$reqHandler->setKey($key);
//----------------------------------------
//����֧������
//----------------------------------------
$reqHandler->setParameter("bargainor_id", $bargainor_id);			//�̻���
$reqHandler->setParameter("transaction_id", $transaction_id);		//�Ƹ�ͨ���׵���
$reqHandler->setParameter("sp_billno", $sp_billno);					//�̻�������
$reqHandler->setParameter("total_fee", $total_fee);					//��Ʒ�ܽ��,�Է�Ϊ��λ
$reqHandler->setParameter("return_url", $return_url);				//���ش����ַ
$reqHandler->setParameter("desc", "�����ţ�" . $transaction_id);	    //��Ʒ����
$reqHandler->setParameter("attach", $attach);			        	//�Զ������
//�û�ip,���Ի���ʱ��Ҫ�����ip��������ʽ�����ټӴ˲���
//$reqHandler->setParameter("spbill_create_ip", $_SERVER['REMOTE_ADDR']);



//�����URL
$reqUrl = $reqHandler->getRequestURL();


//debug��Ϣ
//$debugInfo = $reqHandler->getDebugInfo();

//echo "<br/>" . $reqUrl . "<br/>";
//echo "<br/>" . $debugInfo . "<br/>";

//�ض��򵽲Ƹ�֧ͨ��
//$reqHandler->doSend();
Header("Location:$reqUrl");
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gbk">
	<title>�Ƹ�ͨ��ʱ���ʳ���</title>
</head>
<body>
<script>//location.href='<?php echo $reqUrl;?>';</script>
</body>
</html>
