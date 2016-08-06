<?php
require_once("connect_db_sport.php");
ini_set('date.timezone', 'Asia/Bangkok');
ini_set("display_errors", 1);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));


if(!empty($_GET)){
$user = $_GET['user'];
$key = $_GET['key'];
}else {
	echo "varible is empty";
}

$sql = "UPDATE users set status='active' WHERE username='$user' AND _key='$key'";

if(mysqli_query($con,$sql)){
	echo "<br>Your accout activated !";
}else {
	echo "Can not activate your account".mysqli_error($con);
}


?>