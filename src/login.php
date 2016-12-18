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

<body background="../images/login.jpg">
<div>
<?php
include('../includes/mainHeader.php');
?>
</div>
<div class="container">
<div class="col-lg-6 center-block" style="padding-top:160px;margin-left:200px;padding-bottom:150px;">
<form name="login" method="post" action="loginCheck.php" role="form">
<table class="table table-responsive form-group" >
<tr>
<td><label for="userName" style="color:#000;">User Name</label></td>
<td><input type="text" name="userName" id="userName" class="form-control"/></td>
</tr>
<tr>
<td><label for="password" style="color:#000;">Password</label></td>
<td><input type="password" name="password" id="password" class="form-control"/></td>
</tr>
<tr>
<td><label for="role" style="color:#000;">Role</label></td>
<td><select name="role" id="role" class="dropdown form-control">
<option value="">Select the role</option>
<option value="1">Administrator</option>
<option value="2">Athlete</option>
<option value="3">Club Officer</option>
</select></td>
</tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info center-block"/></td>
<td><input type="reset" class="btn btn-danger"/></td>
</tr>
</table>
</form>
</div>
</div>
<?php
include('../includes/mainFooter.php');
?>
</body>
</html>