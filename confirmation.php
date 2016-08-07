<!DOCTYPE html>
<html>
<head>
	<title>เปิดใช้งานบัญชี Activate account</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
		body{
			background: url("img/bg_1.jpg") no-repeat center center fixed;
			-moz-background-size: cover;
			-webkit-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			font-family: 'Itim', cursive;
		}
	</style>
</head>
<body>

	<?php
	require_once("connect_db_sport.php");
	ini_set('date.timezone', 'Asia/Bangkok');
	ini_set("display_errors", 1);
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));


	if(!empty($_GET)){
		$user = $_GET['user'];
		$key = $_GET['key'];
		$check_active = false;

		$sql_show_key = "SELECT * FROM `users` WHERE `username` = '$user'";


		$result = mysqli_query($con,$sql_show_key);

		if($result->num_rows > 0){
			while($row = $result->fetch_array(MYSQL_BOTH)){
				if($row['status'] == 'active'){
					$check_active = false;
				}else {
					$check_active = true;
				}
			}
		}else {
			$check_active = false;
		}

		if($check_active == true){

			$sql = "UPDATE users set status='active' WHERE username='$user' AND _key='$key'";

			if(mysqli_query($con,$sql)){
				$html = "<br><br><br><br><font size='6'>
				<center><p>Congratulations ! </p><br>
				<p>Your account has been activated.</p><br>
				บัญชีของคุณเปิดใช้งานเรียบร้อยแล้ว</center><br>
				<center>
				<a href='http://sport.wuttinunt.me/'><input style='width:200px; ' class='btn btn-primary btn-block login' type='button' value='เข้าสู่ระบบ'
				></center></a>
				";
			}else {
				echo "".mysqli_error($con);
			}

		}else {
			$html = "<br><br><br><br><font size='6'>
				<center><p>Something wrong ! </p><br>
				<p>Your account can't activate.</p><br>
				<p>มีบางอย่างผิดพลาดไม่สามารถเปิดใช้งานบัญชีของคุณได้ </p><br>
				<font color='red'><p>สาเหตุ : 1. บัญชีนี้ถูกเปิดใช้งานเรียบร้อยแล้ว 2. key ไม่ถูกต้อง</p></font><br>
				<p>โปรดติดต่อ เจ้าหน้าที่</p>
				</center>
				";
		}
		echo $html;

	}
	?>


</body>
</html>