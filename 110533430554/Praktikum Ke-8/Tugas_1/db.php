<?php
$db_host	= 'localhost';
$db_usn		= 'root';
$db_pwd		= 'debian';
$db_name	= 'myweb';

if($conn=mysql_connect($db_host,$db_usn,$db_pwd)){
	$sel = mysql_select_db($db_name);
}
else{
	echo 'Error in db connection';
}
?>