<?php
//checks whether the user already logged in or not
if(!isset($_SESSION[''])){
	session_start();
}
if($_SESSION['role'] == "Athlete"){
$eventName = $_REQUEST['event'];
$text = urldecode($_REQUEST['event']);
$arr = json_decode($text);
$user = $_REQUEST['user'];
$club = "enrollments.txt";
$fo = fopen($club,'a');
$newRecord = $arr[0].",".$arr[1].",".$arr[2].",".$arr[3].",".$arr[4].",".$arr[5].",".$_REQUEST['user'];
$row = "\n".$newRecord;
fputs($fo,$row);
fclose($fo);
header('Location:user.php');
} else {
	header('Location:login.php');	
}
?>