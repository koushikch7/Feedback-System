<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$dept = $_POST['dept'];
$con = mysqli_connect("localhost:3306", "root", "") or die("unable to connect");
mysqli_select_db($con, 'college');
$result = mysqli_query($con,"insert into dept (name,email,pass,dept) values ('".$name."','".$email."','".$pass."','".$dept."')");
 header('Location: admsg.php?msg=Details Added&color=green');
?>

