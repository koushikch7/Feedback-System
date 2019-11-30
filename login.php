
<?php
SESSION_start();
if(isset($_POST['role'])) {
$role = $_POST['role'];

if($role == "student")
{
 require 'connection.php';
$usnno = $_POST['usnno'];
$pass = $_POST['pass'];
/*if(!ctype_alnum($usnno)){
    header('Location: mmsg.php?msg=Incorrect Details&color=red');
    return(0);
}*/
$result1 = mysqli_query($con,"select * from student where usnno='".$usnno."' and pass='".$pass."' and pass!='no' and datediff(now(),pdate)<=2");

if ($row = mysqli_fetch_assoc($result1))   
    {
    $_SESSION["stuid"] = $row ['stuid'];
    $_SESSION["usnno"] = $row ['usnno'];
    $_SESSION["dept"] = $row ['dept'];
    $_SESSION["degree"] = $row ['degree'];
    $_SESSION["role"] = $role;
    header('Location: declaration.php');
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
     $_SESSION["deptid"] = $row ['email'];
    $_SESSION["dept"] = $row ['dept'];
    $_SESSION["degree"] = 'BE';
    $_SESSION["role"] = $role;
    $_SESSION["name"] = $row['name'];
header('Location: depthome.php');
     }
    else
{
     header('Location: mmsg.php?msg=Incorrect Details&color=red');
}
} 
elseif ($role == "Faculty")
  {
 require 'connection.php';
$emaillid = $_POST['email'];
$pass = $_POST['pass3'];


$result1 = mysqli_query($con,"select * from faculty where email='".$emaillid."' and pass='".$pass."'");

if ($row =  mysqli_fetch_assoc($result1))
        
    {
    $_SESSION["name"] = $row ['name'];
     $_SESSION["email"] = $row ['email'];
    $_SESSION["dept"] = $row ['dept'];
    $_SESSION["degree"] = 'BE';
    $_SESSION["role"] = $role;
header('Location: facultyf.php');
     }
    else
{
     header('Location: mmsg.php?msg=Incorrect Details&color=red');
}
} 
elseif ($role == "Admin")
  {
 require 'connection.php';
$adminemail = $_POST['adminid'];
$adminpass= $_POST['pass2'];

$result1 = mysqli_query($con,"select * from admin where email='".$adminemail."' and password='".$adminpass."'");

if ($row =  mysqli_fetch_assoc($result1))
        
   {
     $_SESSION["email"] = $row ['email'];
    #$_SESSION["degree"] = $row ['degree'];
    $_SESSION["role"] = $role;
    header('Location: adminhome.php');  
    }
    else
    {
        header('Location: mmsg.php?msg=Invalid Credentials&color=red');
    }
} 
else{
    header('Location: mmsg.php?msg=Invalid Credentials&color=red');
}
}
else
	header('Location: index.php');
?>

