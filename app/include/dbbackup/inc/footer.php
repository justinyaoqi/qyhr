<?php
$waitbaktime=(int)$_GET['waitbaktime'];
$stime=$_GET['stime'];
if(empty($stime)){
	$stime=time();
}
$t=$_GET['t'];
if(empty($t))
{$t=0;}
$p=$_GET['p'];
if(empty($p))
{$p=1;}
$btb=explode(",",$b_table);
$tbcount=count($btb);
if($p>=$tb[$btb[$t]]){
	$t++;
	if($t>=$tbcount){
		echo"<script>alert('�ָ��ɹ���\\n\\n��ʱ".ToChangeUseTime($stime)."');self.location.href='".$config['sy_weburl']."/admin/index.php?m=database';</script>";
		exit();
	}
	$nfile=$btb[$t]."_1.php";
	echo"<meta http-equiv=\"refresh\" content=\"".$waitbaktime.";url=$nfile?t=$t&p=0&mydbname=$mydbname&mypath=$mypath&stime=$stime&waitbaktime=$waitbaktime\">".$fun_r['OneTableReSuccOne'].$btb[$t-1].$fun_r['OneTableReSuccTwo'];
	exit();
}
$p++;
$nfile=$btb[$t]."_".$p.".php";

echo"<meta http-equiv=\"refresh\" content=\"".$waitbaktime.";url=$nfile?t=$t&p=$p&mydbname=$mydbname&mypath=$mypath&stime=$stime&waitbaktime=$waitbaktime\">".$fun_r['ReOneDataSuccess'].EchoBackupProcesserEchoReDataSt($btb[$t],$tbcount,$t,$tb[$btb[$t]],$p);
@mysql_close();
$empire=null;
?>