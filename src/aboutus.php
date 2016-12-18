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

<body background="../images/sports-faith-background.jpg">
<div>
<?php
include('../includes/mainHeader.php');
?>
</div>
<div class="col-lg-12">
<div class="col-lg-5"><br/><br/><br/><br/>
<img src="../images/aboutus.jpg" class="img-responsive"/>
</div>
<div class="col-lg-7">
<h2 class="text-center">About Our Company</h2><br/>
<p class="text-justify">
The Striking Sports Club is responsible for organising and monitoring a program that promotes the development of sporting skills and abilities to a standard that will enable athletes to be selected in regional sporting teams capable of competing at a state level. An extended program is available for students to be selected from state championships to compete at national championships and interstate exchanges.<br/> <br/>Paralleling this is the incentive and encouragement of a skilled and professional group of teachers to demonstrate their abilities while working with highly motivated and talented students, and to be rewarded for their efforts by recognition of appointment to various levels of regional, state and national officialdom.We have an extensive array of sports on offer to students within the region. Secondary school students are offered a choice of 20 affiliated sports (44 teams) and primary students 16 sports (23 teams). The sports offered within the South Coast region mirror the State program. Please refer to list of all sports available in the representative sport program.All state and non–state schools within this area are affiliated with School Sport South Coast. The region is comprised of 55 secondary schools and 112 primary schools.<br/><br/> Schools range in size from quite small with an enrolment of 13 students to our largest with over 2000 students.he students who participate in School Sport South Coast activities at a district, regional or state level come from all sectors including students from primary, secondary and special schools as well as Schools of Distance Education and registered Home Schoolers. The students range in age from 10 yrs old to 19yrs old.Approximately 5000+ students’ trial for School Sport South Coast teams. Of this number around 1500 students are chosen to represent the Region at the respective State Championships throughout the year. Of these 67% are secondary (13-19 year old) students and 33% are primary (10-12 year old) students. A small number of these students are students with disabilities.
</p><br/>
</div>
</div>
<?php
include('../includes/mainFooter.php');
?>
</body>
</html>