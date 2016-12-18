<?php
error_reporting(E_ALL & ~E_NOTICE);
//checks whether the user already logged in or not
if(!isset($_SESSION[''])){
	session_start();
}
if($_SESSION['role'] == "admin"){
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
<div class="text-right" style="padding-bottom:10px;">
<?php
echo $msg."&nbsp; ||<a href=\"logout.php\">".' Log out'."</a>";
?>
</div>
<div style="padding-bottom:20px;">
<h2>Club Authorization</h2>
<table class="table table-responsive">
    	<tr>
        	<th>Club Name</th>
            <th>email</th>
            <th>tel no</th>
            <th>address</th>
            <th>&nbsp;</th>
        </tr>
         <?php
		$dir = "groups";
		$d = opendir($dir);
		if(is_dir($dir)){
			while(($files = readdir($d)) != false){
				if($files == "." || $files == "..")continue;
				$f = $dir."/".$files;
				$fo = fopen($f,'r');
				while(!feof($fo)){
					$line = fgets($fo);
					$arr = explode(',',$line);
					echo "<tr>";
					echo "<td>".$arr[0]."</td>";
					echo "<td>".$arr[1]."</td>";
					echo "<td>".$arr[2]."</td>";
					echo "<td>".$arr[3]."</td>";
					?>
                    <td>
                    <a href="clubApprove.php?cname=<?php echo $arr[0]; ?>&id=1">
                    <button type="button" class="btn btn-info">Approve</button></a>
                    <a href="clubApprove.php?cname=<?php echo $arr[0]; ?>&id=0">
                    <button type="button"  class="btn btn-danger">Reject</button></a>
                    </td>
                    <?php
					echo "</tr>";
				}
			}
		}
		?>
        </table>
</div>
<div style="padding-bottom:20px;">
<h2>Athlete Authorization</h2>
<table class="table table-responsive">
    	<tr>
        	<th>Athlete Name</th>
            <th>email</th>
            <th>tel no</th>
            <th>address</th>
            <th>&nbsp;</th>
        </tr>
         <?php
		$dir1 = "athletes";
		$d1 = opendir($dir1);
		if(is_dir($dir1)){
			while(($files1 = readdir($d1)) != false){
				if($files1 == "." || $files1 == "..")continue;
				$f1 = $dir1."/".$files1;
				$fo1 = fopen($f1,'r');
				while(!feof($fo1)){
					$line1 = fgets($fo1);
					$arr1 = explode(',',$line1);
					echo "<tr>";
					echo "<td>".$arr1[0]."</td>";
					echo "<td>".$arr1[1]."</td>";
					echo "<td>".$arr1[2]."</td>";
					echo "<td>".$arr1[3]."</td>";
					?>
                    <td>
                    <a href="athleteApprove.php?aname=<?php echo $arr1[0]; ?>&id=1">
                    <button type="button" class="btn btn-info">Approve</button></a>
                    <a href="athleteApprove.php?aname=<?php echo $arr1[0]; ?>&id=0">
                    <button type="button" class="btn btn-danger">Reject</button></a>
                    </td>
                    <?php
					echo "</tr>";
				}
			}
		}
		?>
        </table>
</div>
<div style="padding-bottom:20px;">
<h2>Event Authorization</h2>
<table class="table table-responsive">
    	<tr>
        	<th>Event Name</th>
            <th>Organized By</th>
            <th>tel no</th>
            <th>address</th>
            <th>date</th>
            <th>time</th>
            <th>&nbsp;</th>
        </tr>
         <?php
		$dir3 = "events";
		$d3 = opendir($dir3);
		if(is_dir($dir3)){
			while(($files3= readdir($d3)) != false){
				if($files3 == "." || $files3 == "..")continue;
				$f3 = $dir3."/".$files3;
				$fo3 = fopen($f3,'r');
				while(!feof($fo3)){
					$line3 = fgets($fo3);
					$arr3 = explode(',',$line3);
					echo "<tr>";
					echo "<td>".$arr3[0]."</td>";
					echo "<td>".$arr3[1]."</td>";
					echo "<td>".$arr3[2]."</td>";
					echo "<td>".$arr3[3]."</td>";
					echo "<td>".$arr3[4]."</td>";
					echo "<td>".$arr3[5]."</td>";
					?>
                    <td>
                    <a href="eventApprove.php?ename=<?php echo $arr3[0]; ?>&id=1">
                    <button type="button" class="btn btn-info">Approve</button></a>
                    <a href="eventApprove.php?ename=<?php echo $arr3[0]; ?>&id=0">
                    <button type="button" class="btn btn-danger">Reject</button></a>
                    </td>
                    <?php
					echo "</tr>";
				}
			}
		}
		?>
        </table>
</div>
</div>
        <?php
		include('../includes/mainFooter.php');
		?>

</body>
</html>