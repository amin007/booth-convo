<?php
error_reporting(0);

$host = "localhost";
$username = "root";
$password = "";
$db_name = "booth";

$connect = new mysqli($host, $username, $password, $db_name);
if($connect->connect_errno)
{
	echo "Failed to connect to MySQL : ".$connect->error;
}

//if(isset($_POST['login'])){
$id = $connect->real_escape_string(stripslashes($_POST['id']));
$namevendor = $connect->real_escape_string(stripslashes($_POST['namevendor']));
$nameadmin = $connect->real_escape_string(stripslashes($_POST['nameadmin']));
$password = $connect->real_escape_string(stripslashes($_POST['password']));
$email = $connect->real_escape_string(stripslashes($_POST['email']));
$phoneno = $connect->real_escape_string(stripslashes($_POST['phoneno']));
$address1 = $connect->real_escape_string(stripslashes($_POST['address1']));
$address2 = $connect->real_escape_string(stripslashes($_POST['address2']));
$city = $connect->real_escape_string(stripslashes($_POST['city']));
$postcode = $connect->real_escape_string(stripslashes($_POST['postcode']));
$state = $connect->real_escape_string(stripslashes($_POST['state']));
$gambar = $connect->real_escape_string(stripslashes($_FILES['gambar']['name']));
$target = "../images/vendor/";
$target = $target.basename($gambar);

?>