<?php
require 'connection.php';
$ayear = $_GET['ayear'];
$degree = $_GET['degree'];
$dept = $_GET['dept'];
$sem =$_GET['sem'];
$sec = $_GET['sec'];


$sql = "select * from lab where ayear='".$ayear."'  and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."'";
$count=0;
$data="[";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
    if($count===0)
    {
        $data=$data."{\"lid\":\"".$row["lid"]."\",\"lname\":\"".$row["lname"]."\",\"fid\":\"".$row["fid"]."\"}";

    }else{
       $data=$data.",{\"lid\":\"".$row["lid"]."\",\"lname\":\"".$row["lname"]."\",\"fid\":\"".$row["fid"]."\"}";

    }
   
   $count++;
    }
$data=$data."]";
echo $data;
?>