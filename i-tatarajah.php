<?php
# 4 folder utama
define('KAWAL', 'Aplikasi/Kelas/Utama/Kawal');
define('TANYA', 'Aplikasi/Kelas/Utama/Tanya');
define('PAPAR', 'Aplikasi/Fail/Papar');
define('KITAB', 'Aplikasi/Kelas/Kitab');
define('FUNGSI', 'Aplikasi/Fungsi');

# Fungsi Global
require FUNGSI . '/Fungsi.php';

# Sentiasa menyediakan garis condong di belakang (/) pada hujung jalan
define('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']) . '/');
define('Tajuk_Muka_Surat', 'Event Convo System');

# setkan jquery, bootstrap dan font awesome sama ada local atau cdn
## cdn
      $jquery_cdn = 'https://code.jquery.com/jquery-2.2.3.min.js';
 $bootstrapJS_cdn = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js';
$bootstrapCSS_cdn = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css';
 $ceruleanCSS_cdn = 'https://maxcdn.bootstrapcdn.com/bootswatch/4.1.1/cerulean/bootstrap.min.css';
 $fontawesome_cdn = 'https://maxcdn.bootstrapcdn.com/font-awesome/5.1.0/css/all.css';
## local
            $sumber = URL . 'sumber/utama/';
	  $jquery_local = $sumber . 'jquery/jquery-2.2.3.min.js';
 $bootstrapJS_local = $sumber . 'bootstrap/4.1.1/js/bootstrap.min.js';
$bootstrapCSS_local = $sumber . 'bootstrap/4.1.1/css/bootstrap.min.css';
 $fontawesome_local = $sumber . 'font-awesome/5.1.0/css/all.css';
############################################################################################
## isytihar konsan MYSQL dan GAMBAR ikut lokasi $server
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$server = $_SERVER['SERVER_NAME'];

/*
echo "<br>Alamat IP : <font color='red'>" . $ip . "</font> |
\r<br>Nama PC : <font color='red'>" . $hostname . "</font> |
\r<br>Server : <font color='red'>" . $server . "</font>\r";
//*/

if ($server == 'laman.web.anda')
{	# isytihar tatarajah mysql
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', '***');
	define('DB_USER', '***');
	define('DB_PASS', '***');
	# isytihar lokasi folder js
	define('SUMBER', 'http://' . $_SERVER['SERVER_NAME'] . '/sumberonline/');
	define('JQUERY', $jquery_cdn);
	define('FONTAWESOME', $fontawesome_cdn);
	define('BOOTSTRAPJS', $bootstrapJS_cdn);
	define('BOOTSTRAPCSS', $bootstrapCSS_cdn);
}
else 
{	# isytihar tatarajah mysql
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', '***');
	define('DB_USER', '***');
	define('DB_PASS', '***');
	# isytihar lokasi folder js
	define('SUMBER', 'http://' . $_SERVER['SERVER_NAME'] . '/sumberoffline/');
	define('JQUERY', $jquery_local);
	define('FONTAWESOME', $fontawesome_local);
	define('BOOTSTRAPJS', $bootstrapJS_local);
	define('BOOTSTRAPCSS', $bootstrapCSS_local);
}
//echo DB_HOST . "," . DB_USER . "," . DB_PASS . ",," . DB_NAME . "<br>";
############################################################################################
# buat tatasusunan ikut serialize
define('KAKITANGAN', serialize( 
	array ('abu','bakar','umar','osman','ali','hasan')
	));
define('ALAMAT_IP', serialize( 
	array ('8.8.8.8','1.1.1.1')
	));
## data dalam database lain
$e = 'db_lain.';
define('MSICBARU', serialize (
	array($e.'msic08',$e.'msic2008',
		$e.'msic_v1',$e.'msic_bandingan',
		$e.'msic',$e.'msic_nota_kaki')
	));	
# namaPenuh,namaPendek,kataLaluan,level
$medanLogin = '`username`,`fullusername`,`password`,`level`,'
	. '`email`,`phoneno`,`address1`,`address2`,'
	. '`city`,`postcode`,`state`';
define('JADUAL_LOGIN', serialize( 
	array('login', 'username', 'password', $medanLogin)
	));
$medanLogin02 = '`id`,`username`,`fullusername`,`password`,`level`,'
	. '`email`,`phoneno`,`address1`,`address2`,'
	. '`city`,`postcode`,`state`,`gambar`';
define('JADUAL_LOGIN2', serialize(
	array('login', 'username', 'password', $medanLogin02)
	));