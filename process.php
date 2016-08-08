<?php

session_start();
require_once("connect_db_sport.php");

if(!empty($_POST)){
		//file_put_contents("log_.txt", date("Y-m-d H:i:s") . " - POST not empty \n", FILE_APPEND);

		$logout = mysqli_real_escape_string($con,$_POST['cmd']);
		//file_put_contents("log_.txt", date("Y-m-d H:i:s") . " - logout : {$logout} \n", FILE_APPEND);
		if($logout == "logout"){
			session_destroy();
			file_put_contents("log_.txt", date("Y-m-d H:i:s") . " - clear session \n", FILE_APPEND);
			header("Location : http://localhost/sport_server/");
		}

	if($_POST['cmd'] == 'user'){

		$username = mysqli_real_escape_string($con,$_POST['us']);
		$password = mysqli_real_escape_string($con,$_POST['ps']);
		$md5_pass = md5($password);
		//file_put_contents("log_.txt", date("Y-m-d H:i:s") . " - username : {$username} password : {$password} md5pass : {$md5_pass} \n", FILE_APPEND);

		//echo $username."<br>";
		//echo $password."<br>";

		$strSQL  = "SELECT * FROM users WHERE username = '$username' AND password = '$md5_pass' AND status = 'active' ";

		$objQuery = mysqli_query($con,$strSQL) or die(mysql_error());
		$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

		if(!$objResult)
		{
			echo "Username and Password Incorrect!";
		}
		else
		{
			//file_put_contents("log_.txt", date("Y-m-d H:i:s") . " - user login passed \n", FILE_APPEND);
			$_SESSION["User"] = $objResult["username"];
			session_write_close();

		}

	}else if($_POST['cmd'] == 'admin'){
		$username = mysqli_real_escape_string($con,$_POST['us']);
		$password = mysqli_real_escape_string($con,$_POST['ps']);
		//file_put_contents("log_.txt", date("Y-m-d H:i:s") . " - username : {$username} password : {$password} \n", FILE_APPEND);
		$md5_pass_admin = md5($password);
		//echo $username."<br>";
		//echo $password."<br>";

		$strSQL  = "SELECT * FROM admin WHERE username = '$username' AND password = '$md5_pass_admin' ";

		$objQuery = mysqli_query($con,$strSQL) or die(mysql_error());
		$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

		if(!$objResult)
		{
			echo "Username and Password Incorrect!";
		}
		else
		{
			
			$_SESSION["Admin"] = $objResult["username"];
			$_SESSION["Admin_Fname"] = $objResult["fname"];
			$_SESSION["Admin_Lname"] = $objResult["lname"];
			$_SESSION["Admin_Piority"] = $objResult["piority"];
			//file_put_contents("log_.txt", date("Y-m-d H:i:s") . " - admin login passed \n", FILE_APPEND);
			header("Location : dashboard/index.php");
			session_write_close();

		}
		
	}

	mysqli_close($con);
}

?>