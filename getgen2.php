<?php
require 'connection.php';
$ayear = $_GET['ayear'];
$degree = $_GET['degree'];
$dept = $_GET['dept'];
$sem =$_GET['sem'];
$sec = $_GET['sec'];


$sql = "select avg(q1),avg(q2),avg(q3),avg(q4),avg(q5),avg(q6),avg(q7),avg(q8),avg(q9),avg(q10) from adminfeed where ayear='".$ayear."'  and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."'";

$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
   echo "{\"q1\":".$row[0].",\"q2\":".$row[1].",\"q3\":".$row[2].",\"q4\":".$row[3].",\"q5\":".$row[4].",\"q6\":".$row[5].",\"q7\":".$row[6].",\"q8\":".$row[7].",\"q9\":".$row[8].",\"q10\":".$row[9]."}";
}

?>