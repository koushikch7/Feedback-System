<?php
require 'connection.php';
$usnno = $_POST['usnno'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$year = $_POST['year'];
$degree = $_POST['degree'];
$dept = $_POST['dept'];
$sem =$_POST['sem'];
$sec = $_POST['sec'];
$sql = "select * from student where usnno='".$usnno."' ";
$result = mysqli_query($con,$sql);
if($row = mysqli_fetch_array($result))
                {
   header('Location: dmsg.php?msg=Details Already Exsists&color=red');
}
else
    {
$result1 = mysqli_query($con,"insert into student (usnno,pass,name,email,phno,year,degree,dept,sem,sec) values ('".$usnno."','".$pass."','".$name."','".$email."','".$phno."','".$year."','".$degree."','".$dept."','".$sem."','".$sec."')");
 header('Location: dmsg.php?msg=Student Added Successfully&color=green');

    }
?>
 
