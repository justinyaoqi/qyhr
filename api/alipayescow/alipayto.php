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

error_reporting(0);
require_once("alipay.config.php");
require_once("lib/alipay_submit.class.php");
require_once(dirname(dirname(dirname(__FILE__)))."/config/db.safety.php");
require_once(dirname(dirname(dirname(__FILE__)))."/config/db.config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/data/plus/config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/app/include/mysql.class.php");
$db = new mysql($db_config['dbhost'], $db_config['dbuser'], $db_config['dbpass'], $db_config['dbname'], ALL_PS, $db_config['charset']);
if(!is_numeric($_POST['dingdan'])){die;}
$_COOKIE['uid']=(int)$_COOKIE['uid'];
$member_sql=$db->query("SELECT * FROM `".$db_config["def"]."member` WHERE `uid`='".$_COOKIE['uid']."' limit 1");
$member=mysql_fetch_array($member_sql);
if($member['username'] != $_COOKIE['username'] || $member['usertype'] != $_COOKIE['usertype']||md5($member['username'].$member['password'].$member['salt'])!=$_COOKIE['shell']){
	echo '��¼��Ϣ��֤���������µ�¼��';die;
}
$sql=$db->query("select * from `".$db_config["def"]."company_order` where `order_id`='".$_POST['dingdan']."' AND `order_price`>=0");
$row=mysql_fetch_array($sql);
if(!$row['uid'] || $row['uid']!=$_COOKIE['uid'])
{
	die;
}

mysql_query("update `".$db_config[def]."company_order` set `order_type`='alipayescow' where `id`='".$row['id']."'");
 



/**************************�������**************************/

        //֧������
        $payment_type = "1";
        //��������޸�
        //�������첽֪ͨҳ��·��
        //��http://��ʽ������·�������ܼ�?id=123�����Զ������
        //ҳ����תͬ��֪ͨҳ��·��
        
        //��http://��ʽ������·�������ܼ�?id=123�����Զ������������д��http://localhost/
        //�̻�������
        $out_trade_no = $_POST['dingdan'];
        //�̻���վ����ϵͳ��Ψһ�����ţ�����
        //��������
        $subject = $_POST['subject'];
        //����
        //������
        $price = $row['order_price'];
        //����
        //��Ʒ����
        $quantity = "1";
        //�������Ĭ��Ϊ1�����ı�ֵ����һ�ν��׿�����һ���¶������ǹ���һ����Ʒ
        //��������
        $logistics_fee = "0.00";
        //������˷�
        //��������
        $logistics_type = "EXPRESS";
        //�������ֵ��ѡ��EXPRESS����ݣ���POST��ƽ�ʣ���EMS��EMS��
        //����֧����ʽ
        $logistics_payment = "BUYER_PAY";
        //�������ֵ��ѡ��SELLER_PAY�����ҳе��˷ѣ���BUYER_PAY����ҳе��˷ѣ�
        //��������
        $body = $row['order_remark'];
        //��Ʒչʾ��ַ
        $show_url = trim($aliapy_config['showurl']);
        //����http://��ͷ������·�����磺http://www.�̻���վ.com/myorder.html
        //�ջ�������
        $receive_name = trim($aliapy_config['receive_name']);
        //�磺����
        //�ջ��˵�ַ
        $receive_address = trim($aliapy_config['receive_address']);
        //�磺XXʡXXX��XXX��XXX·XXXС��XXX��XXX��ԪXXX��
        //�ջ����ʱ�
        $receive_zip = '123456';
        //�磺123456
        //�ջ��˵绰����
        $receive_phone = trim($aliapy_config['receive_phone']);
        //�磺0571-88158090
        //�ջ����ֻ�����
        $receive_mobile = trim($aliapy_config['receive_phone']);
        //�磺13312341234


/************************************************************/

//����Ҫ����Ĳ������飬����Ķ�
$parameter = array(
		"service" => "create_partner_trade_by_buyer",
		"partner" => trim($alipay_config['partner']),
		"seller_email" => trim($alipay_config['seller_email']),
		"payment_type"	=> $payment_type,
		"notify_url"	=> $notify_url,
		"return_url"	=> $return_url,
		"out_trade_no"	=> $out_trade_no,
		"subject"	=> $subject,
		"price"	=> $price,
		"quantity"	=> $quantity,
		"logistics_fee"	=> $logistics_fee,
		"logistics_type"	=> $logistics_type,
		"logistics_payment"	=> $logistics_payment,
		"body"	=> $body,
		"show_url"	=> $show_url,
		"receive_name"	=> $receive_name,
		"receive_address"	=> $receive_address,
		"receive_zip"	=> $receive_zip,
		"receive_phone"	=> $receive_phone,
		"receive_mobile"	=> $receive_mobile,
		"_input_charset"	=> trim(strtolower($alipay_config['input_charset']))
);

//��������
$alipaySubmit = new AlipaySubmit($alipay_config);
$html_text = $alipaySubmit->buildRequestForm($parameter,"get", "ȷ��");
echo $html_text;

?>

