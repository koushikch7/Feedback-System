<?php
require 'connection.php';
$year = $_GET['year'];
$degree = $_GET['degree'];
$dept = $_GET['dept'];
$sem =$_GET['sem'];
$sec = $_GET['sec'];
$theory = $_GET['theory'];
$lab = $_GET['lab'];
$lid = $_GET['lid'];
$lname = $_GET['lname'];
$fid = $_GET['fid'];
$result1 = mysqli_query($con,"insert into lab(year,degree,dept,sem,sec,theory,lab,lid,lname,fid) values ('".$year."','".$degree."','".$dept."','".$sem."','".$sec."','".$theory."','".$lab."','".$lid."','".$lname."','".$fid."')");
?>