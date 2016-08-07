<!DOCTYPE html>
<html>
<head>
	<title>ผลการสมัครสมาชิก</title>
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
			require_once("send_email.php");
			
			ini_set('date.timezone', 'Asia/Bangkok');
			ini_set("display_errors", 1);
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));

			$_send = new send_email();

			if(!empty($_POST)){

				if($_POST['fname'] != '' && $_POST['lname'] != '' && $_POST['weight'] != '' && $_POST['height'] != '' && $_POST['id_student'] != '' && $_POST['txt_pass'] != '' && $_POST['txt_email'] != '' && $_POST['tel'] != '' ){

				$prefix = $_POST['prefix'];
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$gender = $_POST['sex'];
				$day = $_POST['day'];
				$month = $_POST['month'];
				$year = $_POST['year'];
				$weight = $_POST['weight'];
				$height = $_POST['height'];
				$major = $_POST['major'];
				$student_id = $_POST['id_student'];
				$_pass = $_POST['txt_pass'];
				$email = $_POST['txt_email'];
				$tel = $_POST['tel'];

				$md5_pass = md5($_pass);
					//convert string to date format
				$birthday = strtotime("$month/$day/$year");
				$new_birthday = date('Y-m-d',$birthday);
				$key = md5( rand(0,1000) );

				$check_regis = false;
					// register user

				$sql_all_user = "SELECT username FROM users";

				$result = mysqli_query($con,$sql_all_user);

				// check user in database not same new user
				if($result->num_rows > 0){
					while($row = $result->fetch_array(MYSQL_BOTH)){
						if($student_id == $row['username']){
							$check_regis = false;
							break;
						}else {
							$check_regis = true;
						}
					}
				}else {
					$check_regis = true;
				}

				/*if(mysqli_query($con,$sql_user)){
						//echo "update succeses";
						$check_regis = true;
				}else {
					echo "Error updating record: " . mysqli_error($con);

				}
				*/
				if($check_regis == true){

					$sql_user = "INSERT INTO users (username,password,status,_key) VALUES('$student_id','$md5_pass','deactive','$key')";

					$res_add_user = mysqli_query($con,$sql_user);

					/// Code send Email
					$sql_members = "INSERT INTO members (username,prefix,fname,lname,gender,birthday,weight,height,major,tel,email) 
					VALUES('$student_id','$prefix','$fname','$lname','$gender','$new_birthday','$weight','$height','$major','$tel','$email')";


					if(mysqli_query($con,$sql_members)){
							//echo "update succeses";
						$sub = "Verrify your accout";
						$_send -> sendEmail($email,$sub,date("Y-m-d H:i:s"),$key,$student_id);

					}else {
						echo "Error updating record: " . mysqli_error($con);

					}

						$html = "<br><br><br><br><font size='6'>
						<center>สมัครสมาชิก <font color='green'><b>สำเร็จ</b></font></center><br>
						<center>ระบบได้ทำการส่งลิงค์สำหรับยืนยันการสมัครสมาชิกไปยังอีเมล $email<center><br>
						<center>หากไม่พบอีเมลโปรดตรวจสอบที่ Junk mail</center></font>
						";
				
				}else {
					$html = "<br><br><br><br><font size='7'>
						<center>สมัครสมาชิก <font color='red'><b>ล้มเหลว !!!</b></font></center><br>
						<center>รหัสนักศึกษา <font color='red'><b>$student_id</b></font> มีในระบบแล้ว<center></font><br>
						<button style='width:200px; ' class='btn btn-primary btn-block login' type='button' onclick='history.go(-1);''>กลับไปหน้าสมัครสมาชิก </button>
						";
				}

				echo $html;
				}else {
					echo "<br><br><br><br><font size='7'>
						<center>สมัครสมาชิก <font color='red'><b>ล้มเหลว !!!</b></font></center><br>
						<center>มีบางอย่างผิดพลาด กรุณาสมัครสมาชิกใหม่<center></font><br>
						<button style='width:200px; ' class='btn btn-primary btn-block login' type='button' onclick='history.go(-1);''>กลับไปหน้าสมัครสมาชิก </button>";
				}
			}else {
				header("Location: http://sport.wuttinunt.me/index.php"); /* Redirect browser */
				exit();
			}

			?>

</body>
</html>