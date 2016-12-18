<?php
//checking whether the data is sent
if(isset($_POST['submit'])){
		$eventname = $_POST['eventname'];
		$organize = $_POST['organize'];
		$tp = $_POST['clubtp'];
		$address = $_POST['clubaddress'];
		$date = $_POST['date'];
		$time = $_POST['time'];
	//validating data
	if($_POST['eventname'] == ""){
		$error[] = 10;
	}
	if($_POST['organize'] == ""){
		$error[] = 1;
	}
	if($_POST['clubtp'] == ""){
		$error[] = 6;
	}
	if($_POST['clubaddress'] == ""){
		$error[] = 7;
	}
	if($_POST['date'] == ""){
		$error[] = 10;
	}
	if($_POST['time'] == ""){
		$error[] = 11;
	}
	//checking errors
	if(empty($error)){
		//input data to files
		$filename = "events/".$eventname.".txt";
		$file = fopen($filename, 'a');
		$record = $eventname.",".$organize.",".$tp.",".$address.",".$date.",".$time.", PENDING";
		fputs($file,$record);
		header('Location:home.php');
	} else {
		$array = json_encode($error);
		$text = urlencode($array);
		header('Location:error.php?error='.$text);	
	}
}
?>