<?php
error_reporting(E_ALL & ~E_NOTICE);
//checks whether the user already logged in or not
if(!isset($_SESSION[''])){
	session_start();
}
if($_SESSION['role'] == "Athlete"){
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
echo $msg."&nbsp; ||<a href=\"eventEnrollment.php\">".' Event Enrollment'."</a>"."&nbsp; ||<a href=\"logout.php\">".' Log out'."</a>";
?>
</div>
<h1><?php echo $msg; ?></h1>
<div class="jumbotron" style="background-color:#FFF;">
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
<h1>Registered Events</h1>
<table class="table table-responsive">
    	<tr>
        	<th>Event Name</th>
            <th>Organized By</th>
            <th>Contact No</th>
            <th>Address</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
         <?php
				$f = "enrollments.txt";
				$fo = fopen($f,'r');
				while(!feof($fo)){
					$line = fgets($fo);
					$arr = explode(',',$line);
					$eventName = $arr[0];				
					$club = $arr[1];
					$tp = $arr[2];
					$adrs = $arr[3];
					$date = $arr[4];
					$time = $arr[5];
					$athlete = $arr[6];
					if($athlete == $_SESSION['userName']){
						echo "<tr>";
						echo "<td>".$eventName."</td>";
						echo "<td>".$club."</td>";
						echo "<td>".$tp."</td>";
						echo "<td>".$adrs."</td>";
						echo "<td>".$date."</td>";
						echo "<td>".$time."</td>";
						echo "</tr>";
					}
				}
				fclose($fo);
		?>
        </table>
        </div>
        </div>
                <?php
		include('../includes/mainFooter.php');
		?>

</body>
</html>