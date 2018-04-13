<?php
session_start();
$role = $_POST['role'];

if($role == "student")
{
 require 'connection.php';
$usnno = $_POST['usnno'];
$pass = $_POST['pass'];
$result1 = mysqli_query($con,"select * from student where usnno='".$usnno."' and pass='".$pass."'");

if ($row = mysqli_fetch_assoc($result1))   
    {
    $_SESSION["stuid"] = $row ['stuid'];
    $_SESSION["usnno"] = $row ['usnno'];
    $_SESSION["name"] = $row ['name'];
    $_SESSION["year"] = $row ['year'];
    $_SESSION["dept"] = $row ['dept'];
    $_SESSION["degree"] = $row ['degree'];
     $_SESSION["sem"] = $row ['sem'];
      $_SESSION["sec"] = $row ['sec'];
    header('Location: shome.php');
}
else
{
     header('Location: mmsg.php?msg=Incorrect Details&color=red');
}
}
elseif ($role == "dept")
  {
 require 'connection.php';
$deptid = $_POST['deptid'];
$pass = $_POST['pass1'];

$result1 = mysqli_query($con,"select * from dept where email='".$deptid."' and pass='".$pass."'");

if ($row =  mysqli_fetch_assoc($result1))
        
    {
    $_SESSION["dept"] = $row ['dept'];
header('Location: depthome.php');
     }
    else
{
     header('Location: mmsg.php?msg=Incorrect Details&color=red');
}
} 
else {
    $email =$_POST['adminid'];
$password =$_POST['pass2'];
    if($email == "admin" && $password == "admin")
    {
      header('Location: adminhome.php');  
    }
    else
    {
         header('Location: mmsg.php?msg=Invalid Credentials&color=red');
    }
}
?>

