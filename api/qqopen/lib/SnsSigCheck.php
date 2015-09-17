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
/**
 * ����ǩ����
 *
 * @version 3.0.0
 * @author open.qq.com
 * @copyright ? 2011, Tencent Corporation. All rights reserved.
 * @ History:
 *               3.0.0 | nemozhang | 2011-12-10 11:24:01 | initialization
 */



/**
 * ����ǩ����
 */
class SnsSigCheck
{
	/**
	 * ����ǩ��
	 *
	 * @param string 	$method ���󷽷� "get" or "post"
	 * @param string 	$url_path
	 * @param array 	$params ������
	 * @param string 	$secret ��Կ
	 */
    static public function makeSig($method, $url_path, $params, $secret)
    {
        $mk = self::makeSource($method, $url_path, $params);
        $my_sign = hash_hmac("sha1", $mk, strtr($secret, '-_', '+/'), true);
        $my_sign = base64_encode($my_sign);

        return $my_sign;
    }

	static private function makeSource($method, $url_path, $params)
    {
        $strs = strtoupper($method) . '&' . rawurlencode($url_path) . '&';

        ksort($params);
        $query_string = array();
        foreach ($params as $key => $val )
        {
            array_push($query_string, $key . '=' . $val);
        }
        $query_string = join('&', $query_string);

        return $strs . rawurlencode($query_string);
    }
}


// end of script
