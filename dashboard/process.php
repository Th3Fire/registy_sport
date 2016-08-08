<?php
session_start();
require_once("connect_db_sport.php");

if(!empty($_POST)){
	if($_POST['cmd'] == 'logout'){
		//file_put_contents("logout.txt", date("Y-m-d H:i:s") . " - logout passed \n", FILE_APPEND);
		session_destroy();
		
	}else if($_POST['cmd'] == 'reverv'){
		$status = $_POST['status'];

		if($status == 'close'){
			$sql = "UPDATE reservation SET status= 0 ";
			$res = mysqli_query($con,$sql);
			if($res){
				return true;
			}else return false;

		}else if($status == 'open'){
			$sql = "UPDATE reservation SET status= 1 ";
			$res = mysqli_query($con,$sql);
			if($res){
				return true;
			}else return false;

		}
	}
}


?>