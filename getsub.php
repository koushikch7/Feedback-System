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
$sql = "select * from addsem where ayear='".$ayear."' and year='".$year."' and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."'";
$result = mysqli_query($con,$sql);
if($row = mysqli_fetch_array($result))
                {
    echo "Details already exsists. Update the Details";
}
else
{
$result1 = mysqli_query($con,"insert into addsem (ayear,year,degree,dept,sem,sec,theory,lab) values ('".$ayear."','".$year."','".$degree."','".$dept."','".$sem."','".$sec."','".$theory."','".$lab."')");
echo "Semister Added Successfully";

}
?>