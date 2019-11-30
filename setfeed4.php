<?php
require 'connection.php';
$dept =$_GET['dept'];
$sem = $_GET['sem'];
$sec = $_GET['sec'];
$ayear =$_GET['ayear'];
$degree = $_GET['degree'];

$result1 = mysqli_query($con,"insert into adminfeed (dept,sem,sec,ayear,degree,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,usnno,datee) values ('".$dept."','".$sem."','".$sec."','".$ayear."','".$degree."','".$_GET['q1']."','".$_GET['q2']."','".$_GET['q3']."','".$_GET['q4']."','".$_GET['q5']."','".$_GET['q6']."','".$_GET['q7']."','".$_GET['q8']."','".$_GET['q9']."','".$_GET['q10']."','".$_GET['usnno']."',now())");

?>