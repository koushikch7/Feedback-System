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
$scode = $_GET['scode'];
$sname = $_GET['sname'];
$fid = $_GET['fid'];
$count=0;
if($theory==='4 Subjects')
{
    $count=4;
}else if($theory==='6 Subjects')
{
    $count=6;
}else if($theory==='7 Subjects')
{
    $count=7;
}else if($theory==='8 Subjects'){
    $count=8;
}
$sql="select count(sname) as mycount from subject where  ayear='".$ayear."' and year='".$year."' and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."'";
echo $sql;
$result2 = mysqli_query($con,$sql);
if ($row2 = mysqli_fetch_assoc($result2))
{   
    
if($row2["mycount"]==$count)
{
$result1 = mysqli_query($con,"delete from  subject where  ayear='".$ayear."' and year='".$year."' and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."'");
}
$result1 = mysqli_query($con,"insert into subject(ayear,year,degree,dept,sem,sec,theory,lab,scode,sname,fid) values ('".$ayear."','".$year."','".$degree."','".$dept."','".$sem."','".$sec."','".$theory."','".$lab."','".$scode."','".$sname."','".$fid."')");
}else{
$result1 = mysqli_query($con,"insert into subject(ayear,year,degree,dept,sem,sec,theory,lab,scode,sname,fid) values ('".$ayear."','".$year."','".$degree."','".$dept."','".$sem."','".$sec."','".$theory."','".$lab."','".$scode."','".$sname."','".$fid."')");
    
}
?>