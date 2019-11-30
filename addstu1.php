<html>
<?php

require 'connection.php';
$usnno = strtoupper($_POST['usnno']);
$email = strtoupper($_POST['email']);
$degree = $_POST['degree'];
$dept = $_POST['dept'];
$sql = "select * from student where usnno='".$usnno."' ";
$result = mysqli_query($con,$sql);
if($row = mysqli_fetch_array($result))
         {

			header('Location: dmsg.php?msg=Details Already Exsists&color=red');
}
else
    {
       
$result1 = mysqli_query($con,"insert into student (usnno,pass,email,degree,dept,pdate) values ('".$usnno."','no','".$email."','".$degree."','".$dept."',now())");
 			#echo "<script>alert('Admin Login Done');";
			echo "<script>window.location.href = 'addstu.php'; </script>";
 #header('Location: dmsg.php?msg=Student Added Successfully&color=green');

    }
?>
 </html>
