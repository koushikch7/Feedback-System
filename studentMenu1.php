<?php
require 'shead.php';
require 'connection.php';


$ayear = $_GET['ayear'] ;
$sem = $_GET['sem'] ;
$sec = $_GET['sec'] ;

$degree = $_SESSION['degree'] ;
$dept = $_SESSION['dept'] ;
$usnno = $_SESSION['usnno'];

$sql = "select * from addsem where ayear='".$ayear."'  and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."'";
$result = mysqli_query($con,$sql);
if($row = mysqli_fetch_array($result))
                {
    $result2 = mysqli_query($con,"select * from feedback where ayear='".$ayear."'  and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and sec='".$sec."' and usnno='".$usnno."'");
if($row2 = mysqli_fetch_array($result2)){
     header('Location: mmsg.php?msg=Feedback Already Submited Sucessfully!!&color=red');
}else{
 $_SESSION["ayear"] = $ayear;
 $_SESSION["degree"] = $degree;
 $_SESSION["sec"] = $sec ;
 $_SESSION["sem"] = $sem;
 if($sem==1||$sem==2)
 {
      $_SESSION["year"] = "1st";
 }else if($sem==3||$sem==4){
     $_SESSION["year"] = "2nd";
 }
 else if($sem==5||$sem==6){
     $_SESSION["year"] = "3rd";
 }
 else if($sem==7||$sem==8){
     $_SESSION["year"] = "4th";
 }
 header('Location: feed1.php');
}
    
                }
else
{
    echo "Details Not Added";
 
 
}
