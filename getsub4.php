<?php
require 'connection.php';
$ayear = $_GET['ayear'];
$degree = $_GET['degree'];
$dept = $_GET['dept'];
$sem =$_GET['sem'];
$sec = $_GET['sec'];

$scount=0;
$lcount=0;
$sql = "select count(sname) from subject where ayear='".$ayear."'  and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."'";

$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
    $scount=$row[0];
}

$sql2 = "select count(lname) from lab where ayear='".$ayear."'  and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."'";

$result2 = mysqli_query($con,$sql2);
while($row2 = mysqli_fetch_array($result2))
{
    $lcount=$row2[0];
}
 echo "{\"scount\":".$scount.",\"lcount\":".$lcount."}";
?>