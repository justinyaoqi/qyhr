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
 * PHP SDK for  OpenAPI V3
 *
 * @version 3.0.2
 * @author open.qq.com
 * @copyright ? 2011, Tencent Corporation. All rights reserved.
 * @ History:
 *               3.0.2 | sparkeli | 2012-03-06 17:58:20 | add statistic fuction which can report API's access time and number to background server
 *               3.0.1 | nemozhang | 2012-02-14 17:58:20 | resolve a bug: at line 108, change  'post' to  $method
 *               3.0.0 | nemozhang | 2011-12-12 11:11:11 | initialization
 */

require_once 'lib/SnsNetwork.php';
require_once 'lib/SnsSigCheck.php';
require_once 'lib/SnsStat.php';

/**
 * ������� PHP û�а�װ cURL ��չ�����Ȱ�װ
 */
if (!function_exists('curl_init'))
{
	throw new Exception('OpenAPI needs the cURL PHP extension.');
}

/**
 * ������� PHP ��֧��JSON���������� PHP 5.2.x ���ϰ汾
 */
if (!function_exists('json_decode'))
{
	throw new Exception('OpenAPI needs the JSON PHP extension.');
}

/**
 * �����붨��
 */
define('OPENAPI_ERROR_REQUIRED_PARAMETER_EMPTY', 2001); // ����Ϊ��
define('OPENAPI_ERROR_REQUIRED_PARAMETER_INVALID', 2002); // ������ʽ����
define('OPENAPI_ERROR_RESPONSE_DATA_INVALID', 2003); // ���ذ���ʽ����
define('OPENAPI_ERROR_CURL', 3000); // �������, ƫ����3000, ��� http://curl.haxx.se/libcurl/c/libcurl-errors.html

/**
 * �ṩ������Ѷ����ƽ̨ OpenApiV3 �Ľӿ�
 */
class OpenApiV3
{
	private $appid  = 0;
	private $appkey = '';
	private $server_name = '';
	private $format = 'json';
	private $stat_url = "apistat.tencentyun.com";
	private $is_stat = true;

	/**
	 * ���캯��
	 *
	 * @param int $appid Ӧ�õ�ID
	 * @param string $appkey Ӧ�õ���Կ
	 */
	function __construct($appid, $appkey)
	{
		$this->appid = $appid;
		$this->appkey = $appkey;
	}

	public function setServerName($server_name)
	{
		$this->server_name = $server_name;
	}

	public function setStatUrl($stat_url)
	{
		$this->stat_url = $stat_url;
	}

	public function setIsStat($is_stat)
	{
		$this->is_stat = $is_stat;
	}

	/**
	 * ִ��API���ã����ؽ������
	 *
	 * @param array $script_name ���õ�API���� �ο� http://wiki.open.qq.com/wiki/API_V3.0%E6%96%87%E6%A1%A3
	 * @param array $params ����APIʱ���Ĳ���
	 * @param string $method ���󷽷� post / get
	 * @param string $protocol Э������ http / https
	 * @return array �������
	 */
	public function api($script_name, $params, $method='post', $protocol='http')
	{
		// ��� openid �Ƿ�Ϊ��
		if (!isset($params['openid']) || empty($params['openid']))
		{
			return array(
				'ret' => OPENAPI_ERROR_REQUIRED_PARAMETER_EMPTY,
				'msg' => 'openid is empty');
		}
		// ��� openkey �Ƿ�Ϊ��
		if (!isset($params['openkey']) || empty($params['openkey']))
		{
			return array(
				'ret' => OPENAPI_ERROR_REQUIRED_PARAMETER_EMPTY,
				'msg' => 'openkey is empty');
		}
		// ��� openid �Ƿ�Ϸ�
		if (!self::isOpenId($params['openid']))
		{
			return array(
				'ret' => OPENAPI_ERROR_REQUIRED_PARAMETER_INVALID,
				'msg' => 'openid is invalid');
		}

		// ���贫sig, ���Զ�����
		unset($params['sig']);

		// ���һЩ����
		$params['appid'] = $this->appid;
		$params['format'] = $this->format;

		// ����ǩ��
		$secret = $this->appkey . '&';
		$sig = SnsSigCheck::makeSig( $method, $script_name, $params, $secret);
		$params['sig'] = $sig;

		$url = $protocol . '://' . $this->server_name . $script_name;
		$cookie = array();

		//��¼�ӿڵ��ÿ�ʼʱ��
		$start_time = SnsStat::getTime();

		// ��������
		$ret = SnsNetwork::makeRequest($url, $params, $cookie, $method, $protocol);

		if (false === $ret['result'])
		{
			$result_array = array(
				'ret' => OPENAPI_ERROR_CURL + $ret['errno'],
				'msg' => $ret['msg'],
			);
		}

		$result_array = json_decode($ret['msg'], true);

		// Զ�̷��صĲ��� json ��ʽ, ˵�����ذ�������
		if (is_null($result_array)) {
			$result_array = array(
				'ret' => OPENAPI_ERROR_RESPONSE_DATA_INVALID,
				'msg' => $ret['msg']
			);
		}

		// ͳ���ϱ�
		if ($this->is_stat)
		{
			$stat_params = array(
					'appid' => $this->appid,
					'pf' => $params['pf'],
					'rc' => $result_array['ret'],
					'svr_name' => $this->server_name,
					'interface' => $script_name,
					'protocol' => $protocol,
					'method' => $method,
			);
			SnsStat::statReport($this->stat_url, $start_time, $stat_params);
		}

		return $result_array;
	}

	/**
	 * ��� openid �ĸ�ʽ
	 *
	 * @param string $openid openid
	 * @return bool (true|false)
	 */
	private static function isOpenId($openid)
	{
		return (0 == preg_match('/^[0-9a-fA-F]{32}$/', $openid)) ? false : true;
	}
}

// end of script
