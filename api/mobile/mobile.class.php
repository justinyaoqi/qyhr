<?php 


/**
* 
*/
class mobile extends common
{
	
	protected $mtoken='';
	function __construct() {
		$this->mem = new Memcache();
		$this->mem->connect('localhost',11211);
	}
	function checkLogin()
	{
		
			$token = $_GET['token']?$_GET['token']:$_POST['token'];
			$userlist = $this->get_mobiles_cache();
			if (is_array($userlist)) {
				foreach ($$userlist as $key => $val) {
					if ($v['token'] == $token){
						$username = $key;
					}
				}
				if (!username) {
					$this->apiShow(1,'登录过期');
				}
			}
			

		
	}
	


	//获取token

	function token_set($token='',$userid='')
	{
		return $this->Memcache_set($token,$userid);
	}


	//以json格式显示数据
	//$content 推送内容$msg 错误消息  $num错误号
	public function apiShow($error,$msg,$content = array())
	{
		$data['error'] = $error;
		$data['msg'] = iconv("gbk","utf-8",$msg);;
		if ($content){
			$data['data'] = $content;
		}
		echo json_encode($data);die;
	}

	//获取手机用户登录缓存
	function get_mobiles_cache(){
		include(PLUS_PATH."/mobiles.cache.php");
		return $row=unserialize(base64_decode($userlist));
	}
	//写入手机用户缓存
	function write_mobiles_cache($data){
		$content=base64_encode(serialize($data));
		$cont="<?php";
		$cont.="\r\n";
		$cont.="\$userlist='".$content."';";
		$cont.="?>";
		$fp=@fopen(PLUS_PATH."/mobiles.cache.php","w+");
		$filetouid=@fwrite($fp,$cont);
		@fclose($fp);
	}
	
}









 ?>