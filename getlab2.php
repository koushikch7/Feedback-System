<?php
require 'connection.php';
$ayear = $_GET['ayear'];
$degree = $_GET['degree'];
$dept = $_GET['dept'];
$sem =$_GET['sem'];
$sec = $_GET['sec'];
$fname = trim($_GET['fname']);
$lname = trim($_GET['lname']);

$sql = "select avg(rfeed),avg(ifeed),avg(pfeed),avg(afeed),avg(sfeed),avg(crfeed),avg(bfeed),avg(ffeed),avg(cofeed),avg(vfeed),avg(scover) from feedback1 where ayear='".$ayear."'  and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."' and lname='".$lname."' and fname='".$fname."'";

$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
   echo "{\"rfeed\":".$row[0].",\"ifeed\":".$row[1].",\"pfeed\":".$row[2].",\"afeed\":".$row[3].",\"sfeed\":".$row[4].",\"crfeed\":".$row[5].",\"bfeed\":".$row[6].",\"ffeed\":".$row[7].",\"cofeed\":".$row[8].",\"vfeed\":".$row[9].",\"scover\":".$row[10]."}";
}

?>