<?php
require 'connection.php';
$year = $_GET['year'];
$degree = $_GET['degree'];
$dept = $_GET['dept'];
$sem =$_GET['sem'];
$sec = $_GET['sec'];
$theory = $_GET['theory'];
$lab = $_GET['lab'];
$sql = "select * from addsem where year='".$year."' and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."' and theory='".$theory."' and lab='".$lab."' ";
$result = mysqli_query($con,$sql);
if($row = mysqli_fetch_array($result))
                {
    echo "Details already exsists";
}
else
    {
$result1 = mysqli_query($con,"insert into addsem (year,degree,dept,sem,sec,theory,lab) values ('".$year."','".$degree."','".$dept."','".$sem."','".$sec."','".$theory."','".$lab."')");
}
?>