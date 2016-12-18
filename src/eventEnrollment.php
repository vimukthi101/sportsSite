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
echo $msg."&nbsp; ||<a href=\"user.php\">".' My Profile'."</a>"."&nbsp; ||<a href=\"logout.php\">".' Log out'."</a>";
?>
</div>
<div style="padding-top:20px;">
<h1>Events</h1>
<div style="padding-top:20px;padding-bottom:20px;">
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
    $f="events_approved.txt";
    if(is_file($f)){
    ?>
    <?php
    $cid=date('Y-m-d');
    $fo=fopen($f,'r');
			while(!feof($fo)){
				$line=fgets($fo);
                if($line=="") continue;
				$arr=explode(',',$line);
                   if($arr[4]>=$cid){
        			echo "<tr>";
					echo "<td>".$arr[0]."</td>";
					echo "<td>".$arr[1]."</td>";
					echo "<td>".$arr[2]."</td>";
					echo "<td>".$arr[3]."</td>";
					echo "<td>".$arr[4]."</td>";
					echo "<td>".$arr[5]."</td>";
					$array = json_encode($arr);
					$text = urlencode($array);
					?>
                    <td>
                    <a href="enroll.php?event=<?php echo $text; ?>&user=<?php echo $_SESSION['userName']; ?>">
                    <button type="button" class="btn btn-info">Enroll</button></a>
                    </td>
                    <?php
					echo "</tr>";	
                         }
                        }
                        ?>
    <?php } ?>
    </table>
    </div>
    </div></div>
<div style="margin-top:130px;">
                <?php
		include('../includes/mainFooter.php');
		?>
</div>

</body>
</html>