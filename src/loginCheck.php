<?php
//checks whether the user already logged in or not
if(!isset($_SESSION[''])){
	session_start();
}
//checks whether the user sends the data or not
if(isset($_POST['submit'])){
	//validate username
	if($_POST['userName'] == ""){
		$error[] = 1;
	}
	//validate password
	if($_POST['password'] == ""){
		$error[] = 2;
	}
	//vaidate user role
	if($_POST['role'] == ""){
		$error[] = 3;
	}
	//getting errors
	if(empty($error)){
		$userName = $_POST['userName'];
		$password = $_POST['password'];
		$role = $_POST['role'];
		//checking the administrator
		if($role == 1){
			$filename = "userDetails.txt";
			$file = fopen($filename,'r');
			while(!feof($file)){
				$line = fgets($file);
				$arr = explode(',',$line);
				if($arr[0] == $userName && $arr[1] == $password){
					$check = 1;
					$_SESSION['userName'] = $arr[0];
					$_SESSION['password'] = $arr[1];
					$_SESSION['role'] = $arr[2];
					break;
				} else {
					$check = 0;	
				}
			}
			if($check == 1){
				header('Location:admin.php');
			} else {
				$msg[] = 4;
				$msgArray = json_encode($msg);
				$request = urlencode($msgArray);
				header('Location:error.php?error='.$request);	
			}
			fclose($file);
		}
		//checking the athlete
		if($role == 2){
			$filename = "athletes_approved.txt";
			$file = fopen($filename,'r');
			while(!feof($file)){
				$line = fgets($file);
				$arr = explode(',',$line);
				if($arr[0] == $userName && $arr[4] == $password && $arr[5] == " APPROVED"){
					$check = 1;
					$_SESSION['userName'] = $arr[0];
					$_SESSION['email'] = $arr[1];
					$_SESSION['telno'] = $arr[2];
					$_SESSION['address'] =$arr[3];
					$_SESSION['password'] = $arr[4];
					$_SESSION['status'] = $arr[5];
					$_SESSION['role'] = "Athlete";
					break;
				} else {
					$check = 0;	
				}
			}
			if($check == 1){
				header('Location:user.php');
			} else {
				$msg[] = 4;
				$msgArray = json_encode($msg);
				$request = urlencode($msgArray);
				header('Location:error.php?error='.$request);	
			}
			fclose($file);
		}
		//checking the club officer
		if($role == 3){
			$filename = "clubs_approved.txt";
			$file = fopen($filename,'r');
			while(!feof($file)){
				$line = fgets($file);
				$arr = explode(',',$line);
				if($arr[0] == $userName && $arr[4] == $password && $arr[5] == " APPROVED"){
					$check = 1;
					$_SESSION['userName'] = $arr[0];
					$_SESSION['email'] = $arr[1];
					$_SESSION['telno'] = $arr[2];
					$_SESSION['address'] =$arr[3];
					$_SESSION['password'] = $arr[4];
					$_SESSION['status'] = $arr[5];
					$_SESSION['role'] = "Club Officer";
					break;
				} else {
					$check = 0;	
				}
			}
			if($check == 1){
				header('Location:club.php');
			} else {
				$msg[] = 4;
				$msgArray = json_encode($msg);
				$request = urlencode($msgArray);
				header('Location:error.php?error='.$request);	
			}
			fclose($file);
		} 
	} else {
		$msgArray = json_encode($error);
		$request = urlencode($msgArray);
		header('Location:error.php?error='.$request);	
	}
}
?>