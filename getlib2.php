<?php
require 'connection.php';
$ayear = $_GET['ayear'];
$degree = $_GET['degree'];
$dept = $_GET['dept'];
$sem =$_GET['sem'];
$sec = $_GET['sec'];


$sql = "select avg(lq1),avg(lq2),avg(lq3),avg(lq4),avg(lq5),avg(lq6),avg(ads1),avg(ads2),avg(ads3),avg(ads4),avg(exs1),avg(exs2),avg(exs3),avg(exs4),avg(acs1),avg(acs2),avg(acs3),avg(acs4),avg(css1),avg(css2),avg(css3),avg(css4),sugg from libfeed where ayear='".$ayear."'  and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."'";

$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
   echo "{\"lq1\":".$row[0].",\"lq2\":".$row[1].",\"lq3\":".$row[2].",\"lq4\":".$row[3].",\"lq5\":".$row[4].",\"lq6\":".$row[5].",\"ads1\":".$row[6].",\"ads2\":".$row[7].",\"ads3\":".$row[8].",\"ads4\":".$row[9].",\"exs1\":".$row[10].",\"exs2\":".$row[11].",\"exs3\":".$row[12].",\"exs4\":".$row[13].",\"acs1\":".$row[14].",\"acs2\":".$row[15].",\"acs3\":".$row[16].",\"acs4\":".$row[17].",\"css1\":".$row[18].",\"css2\":".$row[19].",\"css3\":".$row[20].",\"css4\":".$row[21].",\"sugg\":\"".$row[22]."\"}";
}

?>