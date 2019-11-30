<?php
require 'connection.php';
$year = $_GET['year'];
$ayear = $_GET['ayear'];
$degree = $_GET['degree'];
$dept = $_GET['dept'];
$sem =$_GET['sem'];
$sec = $_GET['sec'];
$theory = $_GET['theory'];
$lab = $_GET['lab'];
$lid = $_GET['lid'];
$lname = $_GET['lname'];
$fid = $_GET['fid'];

$count=0;
if($lab==='2 Labs')
{
    $count=4;
}else if($lab==='3 Labs')
{
    $count=6;
}
$sql="select count(lname) as mycount from lab where  ayear='".$ayear."' and year='".$year."' and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."'";

$result2 = mysqli_query($con,$sql);
if ($row2 = mysqli_fetch_assoc($result2))
{   
    
if($row2["mycount"]==$count)
{
$result1 = mysqli_query($con,"delete from  lab where  ayear='".$ayear."' and year='".$year."' and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."'");
}
$result1 = mysqli_query($con,"insert into lab(ayear,year,degree,dept,sem,sec,theory,lab,lid,lname,fid) values ('".$ayear."','".$year."','".$degree."','".$dept."','".$sem."','".$sec."','".$theory."','".$lab."','".$lid."','".$lname."','".$fid."')");
}else{
$result1 = mysqli_query($con,"insert into lab(ayear,year,degree,dept,sem,sec,theory,lab,lid,lname,fid) values ('".$ayear."','".$year."','".$degree."','".$dept."','".$sem."','".$sec."','".$theory."','".$lab."','".$lid."','".$lname."','".$fid."')");    
}





?>