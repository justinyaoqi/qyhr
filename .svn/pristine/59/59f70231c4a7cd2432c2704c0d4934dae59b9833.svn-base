<?php 





/**
* 
*/
class index_controller extends common
{
	function wxlogin_check_action()
	{
		if($_POST['username']!="" && $_POST['password']!="")
		{
			$user = $this->obj->DB_select_once("member","`username`='$username'","`uid`,`salt`,`password`");
			if(is_array($user))
			{
				$pass = md5(md5($_POST['password']).$user['salt']);
				if($pass==$user['password']){
					$this->obj->DB_update_all("member","`login_date`='".time()."'","`uid`='".$user[uid]."'");
					echo "成功";
				}
			}else{
				echo "<font color='red'>该用户不存在</font>";
			}
		}else{
			echo "<font color='red'>用户名或密码不能为空！</font>";
		}
	}
	public function index_action()
	{
		
	}
}





 ?>