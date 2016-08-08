<?php

session_start();
require_once("connect_db_sport.php");

if(!empty($_POST)){

$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);

echo $username."<br>";
echo $password."<br>";

$strSQL  = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";

$objQuery = mysqli_query($con,$strSQL) or die(mysql_error());
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			echo "Login pass";
			$_SESSION["UserID"] = $objResult["username"];

			session_write_close();

	}

mysqli_close($con);
}

?>