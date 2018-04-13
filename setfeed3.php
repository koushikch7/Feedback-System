<?php
require 'connection.php';
$libfeed = $_GET['libfeed'];
$usnno = $_GET['usnno'];

$result1 = mysqli_query($con,"insert into feedback2 (libfeed,usnno,date) values ('".$libfeed."','".$usnno."',now())");
?>