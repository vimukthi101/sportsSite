<?php
error_reporting(E_ALL & ~E_NOTICE);
//checks whether the user already logged in or not
if(!isset($_SESSION[''])){
	session_start();
}
if($_SESSION['role'] == "Club Officer"){
	$msg = "Welcome ".$_SESSION['userName'];
} else {
	header('Location:login.php');	
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
<div class="container">
<div class="text-right" style="padding:10px;">
<?php
echo $msg."&nbsp; ||<a href=\"club.php\">".' Club Profile'."</a>"."&nbsp; ||<a href=\"logout.php\">".' Log out'."</a>";
?>
</div>
<div class="col-lg-2" style="padding-top:10px;"></div>
<div class="col-lg-8" style="padding:20px;">
<form name="event" id="event" method="post" action="eventValidation.php" role="form">
<table class="table table-responsive form-group">
<tr>
<td><label for="eventname">Name of the Event <span style="color:#F00;">*</span> : </label></td>
<td><input type="text" id="eventname" name="eventname" class="form-control"/></td>
</tr>
<tr>
<td><label for="organize">Organized by <span style="color:#F00;">*</span> : </label></td>
<td><input type="text" id="organize" name="organize" class="form-control" value="<?php echo $_SESSION['userName']; ?>"/></td>
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
<td><label for="date">Date <span style="color:#F00;">*</span> : </label></td>
<td><input type="date" id="date" name="date" class="form-control"/></td>
</tr>
<tr>
<td><label for="time">Time <span style="color:#F00;">*</span> : </label></td>
<td><input type="time" id="time" name="time" class="form-control"/></td>
</tr>
<tr>
<td class="text-right"><input type="submit" id="submit" name="submit" class="btn btn-info center-block"/></td>
<td><input type="reset" id="reset" name="reset" class="btn btn-danger"/></td>
</tr>
</table>
</form>
</div>
<div class="col-lg-2"></div>
</div>
<div style="padding:20px;margin-top:40px;">
              <?php
		include('../includes/mainFooter.php');
		?>
</div>
</body>
</html>