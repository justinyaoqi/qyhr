<?php 




/**
* 
*/
class vote_model extends model
{
	public $vtype;//1.文字投票
	 function getVoteList($Where=array())
	{
		$Where = $this->FormatWhere($Where);
		return $this->DB_select_all('vote',$Where);
	}
}



 ?>