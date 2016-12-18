<?php
error_reporting(E_ALL & ~E_NOTICE);
if(!isset($_SESSION[''])){
	session_start();
}
unset($_SESSION['userName']);
unset($_SESSION['password']);
unset($_SESSION['role']);
header("refresh:5,url=login.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
include('../includes/links.php');
?>

</head>

<body background="../images/login.jpg">
<div>
<?php
include('../includes/mainHeader.php');
?>
</div>
<div class="container">
<div style="padding-top:170px;" class="text-center">
<h3 style="color:#FFF;">Succesfully Log Out!</h3>
<a href="login.php"><p style="color:#FFF;">log in</p></a>
</div>
<div style="margin-top:280px;">
                <?php
		include('../includes/mainFooter.php');
		?>
</div>
</div>
</body>
</html>