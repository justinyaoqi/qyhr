<?php
header("Content-Type: text/html; charset=gb2312");
function Post($data, $target) {
    $url_info = parse_url($target);
    $httpheader = "POST " . $url_info['path'] . " HTTP/1.0\r\n";
    $httpheader .= "Host:" . $url_info['host'] . "\r\n";
    $httpheader .= "Content-Type:application/x-www-form-urlencoded\r\n";
    $httpheader .= "Content-Length:" . strlen($data) . "\r\n";
    $httpheader .= "Connection:close\r\n\r\n";
    //$httpheader .= "Connection:Keep-Alive\r\n\r\n";
    $httpheader .= $data;

    $fd = fsockopen($url_info['host'], 80);
    fwrite($fd, $httpheader);
    $gets = "";
    while(!feof($fd)) {
        $gets .= fread($fd, 128);
    }
    fclose($fd);
    return $gets;
}

$target = "http://sms.106jiekou.com/gbk/sms.aspx";
//�滻���Լ��Ĳ����˺�,����˳���wenservice��Ӧ
$post_data = "account=�ʺ�&password=�ӿ�����&mobile=�ֻ�����&content=".rawurlencode("���Ķ������룺4557�������������ϵ�ͷ���");

echo $gets = Post($post_data, $target);

//���Լ�����$gets�ַ�����ʵ���Լ����߼�
//100 ��ʾ�ɹ�,�����Ĳο��ĵ�
?>