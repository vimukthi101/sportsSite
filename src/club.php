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
<div class="text-right">
<?php
echo $msg."&nbsp; ||<a href=\"eventRegistration.php\">".' Event Registration'."</a>"."&nbsp; ||<a href=\"logout.php\">".' Log out'."</a>";
?>
</div>
<h1><?php echo $msg;  ?></h1>
<div class="jumbotron" style="padding-bottom:10px;background-color:#FFF;">
<table class="table table-responsive">
<tr>
<td>Name : </td>
<td><?php
echo $_SESSION['userName'];
 ?></td>
</tr>
<tr>
<td>E mail address : </td>
<td><?php
echo $_SESSION['email'];
 ?></td>
</tr>
<tr>
<td>Telephone Number : </td>
<td><?php
echo $_SESSION['telno'];
 ?></td>
</tr>
<tr>
<td>Address : </td>
<td><?php
echo $_SESSION['address'];
 ?></td>
</tr>
<tr>
<td>Status : </td>
<td><?php
echo $_SESSION['status'];
 ?></td>
</tr>
</table>
</div>
<div style="padding-bottom:10px;">
<h1>Events</h1>
<table class="table table-responsive">
<tr>
<td>Event Name</td>
<td>Date</td>
<td>Time</td>
</tr>
<?php
$event = "events_approved.txt";
	$fo = fopen($event,'r');
		while(!feof($fo)){
			$line = fgets($fo);
			$arr = explode(',',$line);
			if($arr[1] == $_SESSION['userName']){
				?>
				<tr>
                <td><?php echo $arr[0]; ?></td>
                <td><?php echo $arr[4]; ?></td>
                <td><?php echo $arr[5]; ?></td>
                </tr>
				<?php
			}	
		}
	fclose($fo);
	?>
    </table>
    </div>
     <?php
		include('../includes/mainFooter.php');
		?>
        </div>
</body>
</html>