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
//替换成自己的测试账号,参数顺序和wenservice对应
$post_data = "account=帐号&password=接口密码&mobile=手机号码&content=".rawurlencode("您的订单编码：4557。如需帮助请联系客服。");

echo $gets = Post($post_data, $target);

//请自己解析$gets字符串并实现自己的逻辑
//100 表示成功,其它的参考文档
?>