<?php
/**
* 
*/
class send_email
{
	
	function sendEmail($_send_to,$_subject,$date,$key,$user){

					//echo "$_send_to,$_subject $date ,$key";
					$mail_to = $_send_to;
					$from_mail = "no-reply@wuttinunt.me";
					$from_name = "SPORT Club";
					$reply_to = "";
					$subject = $_subject;
					$message = "
ยืนยันการสมัครสมาชิก Sport Club
วันที่ทำรายการ : $date
Username : $user
Password : *****

กรุณาคลิกลิงค์ เพื่อยินยันการสมัครสมาชิก
http://sport.wuttinunt.me/confirmation.php?user=$user&key=$key";

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

  					// Multipart wraps the Email Content and attachment
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
						//echo "Sent";
						file_put_contents("logsTU/log-topup-pm.txt", date("Y-m-d H:i:s") . " - send mail OK date:$date to:$mail_to sub:$subject \n", FILE_APPEND);
						return ("Send mail Success!");
					} else {
						echo "Error";
						return ("Send mail Fail!");
					}
				}
}


?>