<?php
require 'connection.php';
$adminfeed = $_GET['adminfeed'];
$examfeed = $_GET['examfeed'];
$accfeed = $_GET['accfeed'];
$cerfeed = $_GET['cerfeed'];
$usnno = $_GET['usnno'];

$result1 = mysqli_query($con,"insert into feedback3 (adminfeed,examfeed,accfeed,cerfeed,usnno,date) values ('".$adminfeed."','".$examfeed."','".$accfeed."','".$cerfeed."','".$usnno."',now())");
?>