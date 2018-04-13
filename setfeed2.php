<?php
require 'connection.php';
$lname = $_GET['lname'];
$fname = $_GET['fname'];
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

$result1 = mysqli_query($con,"insert into feedback1 (lname,fname,rfeed,ifeed,pfeed,afeed,sfeed,crfeed,bfeed,ffeed,cofeed,vfeed,scover,usnno,date) values ('".$lname."','".$fname."','".$rfeed."','".$ifeed."','".$pfeed."','".$afeed."','".$sfeed."','".$crfeed."','".$bfeed."','".$ffeed."','".$cofeed."','".$vfeed."','".$scover."','".$usnno."',now())");
?>