<?php
//checking whether the data is sent
if(isset($_POST['submit'])){
	$clubname = $_POST['clubname'];
		$email = $_POST['clubemail'];
		$tp = $_POST['clubtp'];
		$address = $_POST['clubaddress'];
		$pass = $_POST['clubpassword'];
		$confirm = $_POST['clubconfirm'];
	//validating data
	if($_POST['clubname'] == ""){
		$error[] = 1;
	}
	if($_POST['clubemail'] == ""){
		$error[] = 5;
	}
	if($_POST['clubtp'] == ""){
		$error[] = 6;
	}
	if($_POST['clubaddress'] == ""){
		$error[] = 7;
	}
	if($_POST['clubpassword'] == ""){
		$error[] = 2;
	}
	if($_POST['clubconfirm'] == ""){
		$error[] = 8;
	}
	if($pass != $confirm){
		$error[] = 9;
	}
	//checking errors
	if(empty($error)){
		//input data to files
		$filename = "groups/".$clubname.".txt";
		$file = fopen($filename, 'a');
		$record = $clubname.",".$email.",".$tp.",".$address.",".$pass.", PENDING";
		fputs($file,$record);
		header('Location:home.php');
	} else {
		$array = json_encode($error);
		$text = urlencode($array);
		header('Location:error.php?error='.$text);	
	}
}
?>