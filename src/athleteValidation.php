<?php
//checking whether the data is sent
if(isset($_POST['submit'])){
	$athletename = $_POST['athletename'];
	$email = $_POST['athleteemail'];
	$tp = $_POST['athletetp'];
	$address = $_POST['athleteaddress'];
	$pass = $_POST['athletepassword'];
	$confirm = $_POST['athleteconfirm'];
	//validating data
	if($_POST['athletename'] == ""){
		$error[] = 1;
	}
	if($_POST['athleteemail'] == ""){
		$error[] = 5;
	}
	if($_POST['athletetp'] == ""){
		$error[] = 6;
	}
	if($_POST['athleteaddress'] == ""){
		$error[] = 7;
	}
	if($_POST['athletepassword'] == ""){
		$error[] = 2;
	}
	if($_POST['athleteconfirm'] == ""){
		$error[] = 8;
	}
	if($pass != $confirm){
		$error[] = 9;
	}
	//checking errors
	if(empty($error)){
		//input data to files
		$filename = "athletes/".$athletename.".txt";
		$file = fopen($filename, 'a');
		$record = $athletename.",".$email.",".$tp.",".$address.",".$pass.", PENDING";
		fputs($file,$record);
		header('Location:home.php');
	} else {
		$array = json_encode($error);
		$text = urlencode($array);
		header('Location:error.php?error='.$text);	
	}
}
?>