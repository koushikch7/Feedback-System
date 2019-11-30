<?php
require 'connection.php';
$dept =$_GET['dept'];
$sem = $_GET['sem'];
$sec = $_GET['sec'];
$ayear =$_GET['ayear'];
$degree = $_GET['degree'];
$result1 = mysqli_query($con,"insert into libfeed(dept,sem,sec,ayear,degree,usnno,lq1,lq2, lq3,lq4,lq5,lq6,ads1,ads2,ads3,ads4,exs1,exs2,exs3,exs4,acs1,acs2,acs3,acs4,css1,css2,css3,css4,sugg,datee) values('".$dept."','".$sem."','".$sec."','".$ayear."','".$degree."','".$_GET['usnno']."','".$_GET['lq1']."','".$_GET['lq2']."','".$_GET['lq3']."','".$_GET['lq4']."','".$_GET['lq5']."','".$_GET['lq6']."','".$_GET['ads1']."','".$_GET['ads2']."','".$_GET['ads3']."','".$_GET['ads4']."','".$_GET['exs1']."','".$_GET['exs2']."','".$_GET['exs3']."','".$_GET['exs4']."','".$_GET['acs1']."','".$_GET['acs2']."','".$_GET['acs3']."','".$_GET['acs4']."','".$_GET['css1']."','".$_GET['css2']."','".$_GET['css3']."','".$_GET['css4']."','".$_GET['sugg']."',now())");

?>