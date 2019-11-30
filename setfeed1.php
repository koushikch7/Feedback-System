<?php
require 'connection.php';
$sname = trim($_GET['sname']);
$fname = trim($_GET['fname']);
$rfeed = $_GET['rfeed'];
$ifeed =$_GET['ifeed'];
$pfeed = $_GET['pfeed'];
$afeed = $_GET['afeed'];
$sfeed =$_GET['sfeed'];
$crfeed = $_GET['crfeed'];
$bfeed = $_GET['bfeed'];
$ffeed =$_GET['ffeed'];
$cofeed = $_GET['cofeed'];
$vfeed = $_GET['vfeed'];
$scover =$_GET['scover'];
$usnno = $_GET['usnno'];

$dept =$_GET['dept'];
$sem = $_GET['sem'];
$sec = $_GET['sec'];
$ayear =$_GET['ayear'];
$degree = $_GET['degree'];

$result1 = mysqli_query($con,"insert into feedback (dept,sem,sec,ayear,degree,sname,fname,rfeed,ifeed,pfeed,afeed,sfeed,crfeed,bfeed,ffeed,cofeed,vfeed,scover,usnno,date) values ('".$dept."','".$sem."','".$sec."','".$ayear."','".$degree."','".$sname."','".$fname."','".$rfeed."','".$ifeed."','".$pfeed."','".$afeed."','".$sfeed."','".$crfeed."','".$bfeed."','".$ffeed."','".$cofeed."','".$vfeed."','".$scover."','".$usnno."',now())");
?>