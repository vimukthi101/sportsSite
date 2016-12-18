<?PHP
error_reporting(E_ALL & ~E_NOTICE);
include('../includes/links.php');
if(!isset($_SESSION[''])){
	session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="../images/homepage.jpg">
<div>
<?php
include('../includes/mainHeader.php');
?>
</div>
<div class="col-lg-12">
<div class="col-lg-8" style="height:530px;">
<br/>
<h2 class="text-center">Contact Us</h2><br/>
<div style="background-color:#CCC;width:45%;padding:20px;" class="text-center col-lg-4">
<h4>Sri Lanka</h4>
<p>Address : P.B.456, 1st Street, Colombo 07</p>
<p>T.P.Number: (+94) 71 17 90 372</p>
<p>E-mail : hello@striking.lk</p>
</div>
<div style="background-color:#CCC;width:45%;padding:20px;margin-left:5px;" class="text-center col-lg-4">
<h4>England</h4>
<p>Address : P.B.789, 1st Street, London</p>
<p>T.P.Number: (+94) 71 17 90 372</p>
<p>E-mail : hello@striking.lk</p>
</div>
<br/><br/>
<div style="background-color:#CCC;width:45%;padding:20px;margin-top:10px;" class="text-center col-lg-4">
<h4>Sri Lanka</h4>
<p>Address : P.B.456, 1st Street, Colombo 07</p>
<p>T.P.Number: (+94) 71 17 90 372</p>
<p>E-mail : hello@striking.lk</p>
</div>
<div style="background-color:#CCC;width:45%;padding:20px;margin-left:5px;margin-top:10px;" class="text-center col-lg-4">
<h4>England</h4>
<p>Address : P.B.789, 1st Street, London</p>
<p>T.P.Number: (+94) 71 17 90 372</p>
<p>E-mail : hello@striking.lk</p>
</div>
</div>
<div class="col-lg-4" style="height:530px;"><br/><br/><br/><br/>
<img src="../images/contactus.jpg" class="img-responsive"/>
</div>
</div>
<?php
include('../includes/mainFooter.php');
?>
</body>
</html>