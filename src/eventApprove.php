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
$eventname = $_REQUEST['ename'];
$id = $_REQUEST['id'];
if($id==1){
	$event = "events/".$eventname.".txt";
	$fo = fopen($event,'r');
		while(!feof($fo)){
			$line = fgets($fo);
			$arr = explode(',',$line);
			$newRecord = $arr[0].",".$arr[1].",".$arr[2].",".$arr[3].",".$arr[4].",".$arr[5].", APPROVED";
			$row = "\n".$newRecord;
			$c = "events_approved.txt";
			$foo = fopen($c,'a');
			fputs($foo,$row);
			fclose($foo);
		}
	fclose($fo);
	unlink($event);
}
if($id==0){
	$event = "events/".$eventname.".txt";
	$fo = fopen($event,'r');
		while(!feof($fo)){
			$line = fgets($fo);
			$arr = explode(',',$line);
			$newRecord = $arr[0].",".$arr[1].",".$arr[2].",".$arr[3].",".$arr[4].",".$arr[5].", REJECTED";
			$row = "\n".$newRecord;
			$c = "events_rejected.txt";
			$foo = fopen($c,'a');
			fputs($foo,$row);
			fclose($foo);
		}
	fclose($fo);
	unlink($event);
}
header('Location:admin.php');
?>