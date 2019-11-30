
<?php

require 'connection.php';
$email = strtoupper($_POST['emaill']);
$oldpass = $_POST['oldpass'];
$newpass = $_POST['newpass'];
$cnewpass = $_POST['cnewpass'];
if($newpass==$cnewpass)
{
    $sql = "select * from admin where email='".$email."' and password='".$oldpass."'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_array($result))
      {
        $sql0="UPDATE admin SET password ='".$newpass."' WHERE email='".$email."' ";
         
        if(mysqli_query($con,$sql0))
        {
        header('Location: admsg.php?msg=Password changed sucessfully&color=green');
         }
        else
        {
         header('Location: admsg.php?msg=could not proceed please try again &color=red');
        }
      }
      else
        {
        header('Location: admsg.php?msg=Email/Password Does not matched!! &color=red');
        }
}
else
    {
     header('Location: admsg.php?msg=Password Doesnt matched please try again &color=red');
    }
?>
 
