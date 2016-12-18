<?php
//checks whether the user already logged in or not
if(!isset($_SESSION[''])){
	session_start();
}
if($_SESSION['role'] == "admin"){
	$msg = "Welcome ".$_SESSION['userName'];
} else {
	header('Location:login.php');	
}
$athletename = $_REQUEST['aname'];
$id = $_REQUEST['id'];
if($id==1){
	$athlete = "athletes/".$athletename.".txt";
	$fo = fopen($athlete,'r');
		while(!feof($fo)){
			$line = fgets($fo);
			$arr = explode(',',$line);
			$newRecord = $arr[0].",".$arr[1].",".$arr[2].",".$arr[3].",".$arr[4].", APPROVED";
			$row = "\n".$newRecord;
			$c = "athletes_approved.txt";
			$foo = fopen($c,'a');
			fputs($foo,$row);
			fclose($foo);
		}
	fclose($fo);
	unlink($athlete);
}
if($id==0){
	$club = "athletes/".$athletename.".txt";
	$fo = fopen($club,'r');
		while(!feof($fo)){
			$line = fgets($fo);
			$arr = explode(',',$line);
			$newRecord = $arr[0].",".$arr[1].",".$arr[2].",".$arr[3].",".$arr[4].", REJECTED";
			$row = "\n".$newRecord;
			$c = "athletes_rejected.txt";
			$foo = fopen($c,'a');
			fputs($foo,$row);
			fclose($foo);
		}
	fclose($fo);
	unlink($club);
}
header('Location:admin.php');
?>