<?php
// Catatan: 
// Jika perlu, sesuaikan nama user dan password 

$host = 'localhost'; 
$user = 'root'; 
$pass = 'debian'; 
$db   = 'myweb'; 
 
$cnn = mysql_connect($host, $user, $pass); 
if (!$cnn) { 
  exit('Koneksi Gagal'); 
} else{
	echo 'Koneksi berhasil ';
}

$dbs = mysql_select_db($db); 

if (!$dbs) { 
  //exit('Gagal Memilih Database'); 
  $res = mysql_query('CREATE DATABASE '. $db);
	if($res){
		echo 'Database ' .$db. ' Created';
	}else{
	echo 'gagal buat database';}
} 
 
?>