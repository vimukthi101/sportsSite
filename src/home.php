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
<body background="../images/Sports-Background-Wallpapers-Hd-3.jpg" style="width:100%;background-repeat:round;">
<div>
<?php
include('../includes/mainHeader.php');
?>
</div>
<div class="clearfix">
</div>
<div class="col-lg-12">
<h3 class="text-center pull-left"><u>LATEST UPDATES OF SPORTS EVENTS</u></h3>
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
			?>
            <div class="col-lg-8">
        <table class="table table-responsive table-hover" style="">
             <tr>
            	<td><b>Event :</b> </td>
             	<td><i><?php echo $arr[0] ?></i></td>
                </tr>
                <tr>
                 <td><b>Organized By :</b></td>
                 <td><i><?php echo $arr[1]; ?></i></td>
               </tr>      
       <tr>
       <td><b>Location :</b> </td>
       <td><i><?php echo $arr[3]; ?></i></td>
       </tr>
       <tr>
       <td><b>Date and Time :</b> </td>
       <td><i> <?php echo $arr[4]." (".$arr[5].")"; ?></i></td>
       </tr>   
         </table>
         <hr /><hr />
         </div>
       <?PHP
                         }
                        }
                        ?>
    <?php } ?>
    <div class="container-fluid" style="padding-bottom:40px;">
   <marquee direction="left" behavior="scroll" loop="-1" hspace="20">
   <img src="../images/club1.png" class="img-responsive" style="width:200px;float:left"/>
  <img src="../images/club2.png" class="img-responsive" style="width:200px;float:left"/>
  <img src="../images/club3.png" class="img-responsive" style="width:200px;float:left"/>
   <img src="../images/club4.png" class="img-responsive" style="width:200px;float:left"/>
   <img src="../images/club5.png" class="img-responsive" style="width:200px;float:left"/>
   <img src="../images/club6.png" class="img-responsive" style="width:200px;float:left"/>
   </marquee>
    </div>
        <div>
        </div>
        <?php
		include('../includes/mainFooter.php');
		?>
</body>
</html>