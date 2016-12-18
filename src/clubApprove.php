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
$clubname = $_REQUEST['cname'];
$id = $_REQUEST['id'];
if($id==1){
	$club = "groups/".$clubname.".txt";
	$fo = fopen($club,'r');
		while(!feof($fo)){
			$line = fgets($fo);
			$arr = explode(',',$line);
			$newRecord = $arr[0].",".$arr[1].",".$arr[2].",".$arr[3].",".$arr[4].", APPROVED";
			$row = "\n".$newRecord;
			$c = "clubs_approved.txt";
			$foo = fopen($c,'a');
			fputs($foo,$row);
			fclose($foo);
		}
	fclose($fo);
	unlink($club);
}
if($id==0){
	$club = "groups/".$clubname.".txt";
	$fo = fopen($club,'r');
		while(!feof($fo)){
			$line = fgets($fo);
			$arr = explode(',',$line);
			$newRecord = $arr[0].",".$arr[1].",".$arr[2].",".$arr[3].",".$arr[4].", REJECTED";
			$row = "\n".$newRecord;
			$c = "clubs_rejected.txt";
			$foo = fopen($c,'a');
			fputs($foo,$row);
			fclose($foo);
		}
	fclose($fo);
	unlink($club);
}
header('Location:admin.php');
?>