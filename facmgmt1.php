<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$phno = $_POST['phno'];
$skills = $_POST['skills'];
$desgn = $_POST['desgn'];
$dept = $_POST['dept'];
$con = mysqli_connect("localhost:3306", "root", "") or die("unable to connect");
mysqli_select_db($con, 'college');
$result = mysqli_query($con,"insert into faculty (name,email,pass,phno,skills,desgn,dept) values ('".$name."','".$email."','".$pass."','".$phno."','".$skills."','".$desgn."','".$dept."')");
 header('Location: admsg.php?msg=Details Added&color=green');
?>

