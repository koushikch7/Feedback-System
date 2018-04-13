<?php
require 'connection.php';
$year = $_GET['year'];
$degree = $_GET['degree'];
$dept = $_GET['dept'];
$sem =$_GET['sem'];
$sec = $_GET['sec'];
$theory = $_GET['theory'];
$lab = $_GET['lab'];
$scode = $_GET['scode'];
$sname = $_GET['sname'];
$fid = $_GET['fid'];
$result1 = mysqli_query($con,"insert into subject(year,degree,dept,sem,sec,theory,lab,scode,sname,fid) values ('".$year."','".$degree."','".$dept."','".$sem."','".$sec."','".$theory."','".$lab."','".$scode."','".$sname."','".$fid."')");
?>