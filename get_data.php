<?php
require_once("connect_db_sport.php");
ini_set('date.timezone', 'Asia/Bangkok');
ini_set("display_errors", 1);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));



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
echo " md5 = $md5_pass <br>";
$birthday = strtotime("$month/$day/$year");
$new_birthday = date('Y-m-d',$birthday);
$key = md5( rand(0,1000) );

// register user
$sql_user = "INSERT INTO users (username,password,status,_key) VALUES('$student_id','$md5_pass','deactive','$key')";

if(mysqli_query($con,$sql_user)){
	//echo "update succeses";
}else {
	echo "Error updating record: " . mysqli_error($con);

}

/// Code send Email
$sql_members = "INSERT INTO members (username,prefix,fname,lname,gender,birthday,weight,height,major,tel,email) 
VALUES('$student_id','$prefix','$fname','$lname','$gender','$new_birthday','$weight','$height','$major','$tel','$email')";


if(mysqli_query($con,$sql_members)){
	//echo "update succeses";
	$sub = "Verrify your accout";
	sendEmail($email,$sub,date("Y-m-d H:i:s"),$key,$student_id);

}else {
	echo "Error updating record: " . mysqli_error($con);

}


function sendEmail($_send_to,$_subject,$date,$key,$user){

		echo "$_send_to,$_subject $date ,$key";
		$mail_to = $_send_to;
		$from_mail = "no-reply@wuttinunt.me";
		$from_name = "SPORT CLub";
		$reply_to = "";
		$subject = $_subject;
		$message = "please click sport.wuttinunt.me/confirmation.php?user=$user&key=$key";

		/* Attachment File */
  // Attachment location
		$file_name = "";
		$path = "";

  // Read the file content
		$file = $path.$file_name;
		$file_size = filesize($file);
		$handle = fopen($file, "r");
		$content = fread($handle, $file_size);
		fclose($handle);
		$content = chunk_split(base64_encode($content));

		/* Set the email header */
  // Generate a boundary
		$boundary = md5(uniqid(time()));

  // Email header
		$header = "From: ".$from_name." <".$from_mail.">".PHP_EOL;
		$header .= "Reply-To: ".$reply_to.PHP_EOL;
		$header .= "MIME-Version: 1.0".PHP_EOL;

  // Multipart wraps the Email Content and Attachment
		$header .= "Content-Type: multipart/mixed; boundary=\"".$boundary."\"".PHP_EOL;
		$header .= "This is a multi-part message in MIME format.".PHP_EOL;
		$header .= "--".$boundary.PHP_EOL;

  // Email content
  // Content-type can be text/plain or text/html
		$header .= "Content-type:text/plain; charset=iso-8859-1".PHP_EOL;
		$header .= "Content-Transfer-Encoding: 7bit".PHP_EOL.PHP_EOL;
		$header .= "$message".PHP_EOL;
		$header .= "--".$boundary.PHP_EOL;

  // Attachment
  // Edit content type for different file extensions
		//$header .= "Content-Type: application/xml; name=\"".$file_name."\"".PHP_EOL;
		//$header .= "Content-Transfer-Encoding: base64".PHP_EOL;
		//$header .= "Content-Disposition: attachment; filename=\"".$file_name."\"".PHP_EOL.PHP_EOL;
		//$header .= $content.PHP_EOL;
		//$header .= "--".$boundary."--";

  // Send email
		if (mail($mail_to, $subject, "", $header)) {
			echo "Sent";
			file_put_contents("logsTU/log-topup-pm.txt", date("Y-m-d H:i:s") . " - send mail OK date:$date to:$mail_to sub:$subject \n", FILE_APPEND);
			return ("Send mail Success!");
		} else {
			echo "Error";
			return ("Send mail Fail!");
		}
	}






?>