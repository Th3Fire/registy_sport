<?php
	session_start();
	require_once("connect_db_sport.php");
	
	$strUsername = mysqli_real_escape_string($con,$_POST['us']);
	$strPassword = mysqli_real_escape_string($con,$_POST['ps']);
	$md5_pass = md5($strPassword);
	if($strUsername == null || $md5_pass == null){
		header("location:index.php");
	}else 

	$sql = "SELECT * FROM `users` WHERE `username` = $strUsername AND `password` = $md5_pass AND `status` = \'active\'";

	$strSQL = "SELECT * FROM users WHERE username = '".$strUsername."' 
	and password = '".$md5_pass."' and status = `active`";
	$objQuery = mysqli_query($con,$sql);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "Username and Password Incorrect!";
		exit();
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			session_write_close();
			echo "'".$_SESSION["UserID"]."'";
			//*** Go to Main page
			header("location:admin.php");
	}
	mysqli_close($con);

?>