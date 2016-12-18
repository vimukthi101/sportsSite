<?php
error_reporting(E_ALL & ~E_NOTICE);
//checks whether the user already logged in or not
if(!isset($_SESSION[''])){
	session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body background="../images/3_red.jpg" style="background-repeat:no-repeat;">
<div>
<?php
include('../includes/mainHeader.php');
?>
</div>
<div class="container" style="width:100%;height:100%;border-color:#000;border-style:dashed;">
<div class="text-center center-block">
<?php
if(isset($_REQUEST['error'])){
	$errorNo = urldecode($_REQUEST['error']);
	$array = json_decode($errorNo);
	foreach($array as $key){
		switch($key){
		case 1:
			echo "<h4 style=\"color:#000;\">".'Please enter the user name'."</h4><br/>";
			break;
		case 2:
			echo "<h4 style=\"color:#000;\">".'Please enter the password'."</h4><br/>";
			break;
		case 3:
			echo "<h4 style=\"color:#000;\">".'Please select the user role'."</h4><br/>";
			break;
		case 4:
			echo "<h4 style=\"color:#000;\">".'Invalid Login!'."</h4><br/>";
			break;
		case 5:
			echo "<h4 style=\"color:#000;\">".'Please enter the email'."</h4><br/>";
			break;
		case 6:
			echo "<h4 style=\"color:#000;\">".'Please enter the contact number'."</h4><br/>";
			break;
		case 7:
			echo "<h4 style=\"color:#000;\">".'Please enter the address'."</h4><br/>";
			break;
		case 8:
			echo "<h4 style=\"color:#000;\">".'Please enter the confirm password'."</h4><br/>";
			break;
		case 9:
			echo "<h4 style=\"color:#000;\">".'Passwords do not match'."</h4><br/>";
			break;
		case 9:
			echo "<h4 style=\"color:#000;\">".'Please enter the event name'."</h4><br/>";
			break;
		case 10:
			echo "<h4 style=\"color:#000;\">".'Please enter the date'."</h4><br/>";
			break;
		case 11:
			echo "<h4 style=\"color:#000;\">".'Please enter the time'."</h4><br/>";
			break;
		default:
			echo "<h4 style=\"color:#000;\">".'Error, Please try again later!'."</h4><br/>";
			break;
		}
	}
}
?>
</div>
</div>
</body>
</html>