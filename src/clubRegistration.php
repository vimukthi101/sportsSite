<?PHP
error_reporting(E_ALL & ~E_NOTICE);
if(!isset($_SESSION[''])){
	session_start();
}
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

<body background="../images/white-paper-seamless-pattern-for-website-background2.jpg">
<div>
<?php
include('../includes/mainHeader.php');
?>
</div>
<div class="container" style="padding:20px;">
<div class="col-lg-12" style="padding:20px;">
<div class="col-lg-3"></div>
<div class="col-lg-6 center-block" style="padding:20px;">
<form name="club" id="club" method="post" action="clubValidation.php" role="form">
<table class="table table-responsive form-group">
<tr>
<td><label for="clubname">Name of the Club <span style="color:#F00;">*</span> : </label></td>
<td><input type="text" id="clubname" name="clubname" class="form-control"/></td>
</tr>
<tr> 
<td><label for="clubemail">Email Address <span style="color:#F00;">*</span> : </label></td>
<td><input type="email" id="clubemail" name="clubemail" class="form-control"/></td>
</tr>
<tr>
<td><label for="clubetp">Contact Number <span style="color:#F00;">*</span> : </label></td>
<td><input type="tel" id="clubtp" name="clubtp" class="form-control"/></td>
</tr>
<tr>
<td><label for="clubeaddress">Address <span style="color:#F00;">*</span> : </label></td>
<td><input type="text" id="clubaddress" name="clubaddress" class="form-control"/></td>
</tr>
<tr>
<td><label for="clubpassword">Password <span style="color:#F00;">*</span> : </label></td>
<td><input type="password" id="clubpassword" name="clubpassword" class="form-control"/></td>
</tr>
<tr>
<td><label for="clubconfirm">Confirm Password <span style="color:#F00;">*</span> : </label></td>
<td><input type="password" id="clubconfirm" name="clubconfirm" class="form-control"/></td>
</tr>
<tr>
<td><input type="submit" id="submit" name="submit" class="btn btn-info pull-right"/></td>
<td><input type="reset" id="reset" name="reset" class="btn btn-danger" />
</tr>
</table>
</form>
</div>
<div class="col-lg-3"></div>
</div>
</div>
<div style="padding:20px;">
     <?php
		include('../includes/mainFooter.php');
		?>
</div>
</body>
</html>