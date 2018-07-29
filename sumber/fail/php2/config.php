<?php
# 1. laporan tahap kesilapan kod PHP
error_reporting(E_ALL);
 
# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');
 
# 3. setkan tatarajah sistem
require '../../../tatarajah.php'; # rujuk contoh i-tatarajah.php
//require '../../../Aplikasi/Kelas/Kitab/DB/DB_Pdo.php';
//$connect = new \Aplikasi\Kitab\DB_Pdo(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);

$connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($connect->connect_errno):
	echo 'Failed to connect to MySQL : ' . $connect->error;
else:
	//echo '<h1>Berjaya masuk ke database<hr>';
endif;