<?php

require 'connection.php';
$c9to10=0;
$c8to9=0;
$c7to8=0;
$cblow7=0;
 $fname=$_GET['frfname'];
 $degree=$_GET['frdegree'];
 $dept=$_GET['frdept'];
 $names="[";
 $sql = "select fname,sum((rfeed+ifeed+pfeed+afeed+sfeed+crfeed+bfeed+ffeed+cofeed+vfeed)/10)/count(fname),sem,sec,ayear from feedback where fname='".$fname."' and degree='".$degree."' and dept='".$dept."' group by fname,sem,sec";
//$sql = "select fname,sem,sec,((sum((rfeed+ifeed+pfeed+afeed+sfeed+crfeed+bfeed+ffeed+cofeed+vfeed)/10))/count(fname)),,sem,sec,ayear from feedback where ayear='2018' and degree='BE' and dept='ECE' group by fname,sem,sec";
$result1 = mysqli_query($con, $sql);
   $row1 = mysqli_fetch_array($result1);
      
       $sql2="select fname,((sum((rfeed+ifeed+pfeed+afeed+sfeed+crfeed+bfeed+ffeed+cofeed+vfeed)/10))/count(fname)),sem,sec,ayear from feedback1 where fname='".$fname."' and degree='".$degree."' and dept='".$dept."'";
     //  echo $sql2;  
       $result2 = mysqli_query($con, $sql2);
     
           $row2 = mysqli_fetch_array($result2);
           
           if($row2[1]>0&&$row1[1]>0)
           {
                $tot=($row1[1]+$row2[1])/2;
                $names=$names."{\"batch\":\"".$row1[4]."\",\"sem\":\"".$row1[2]."\",\"sec\":\"".$row1[3]."\",\"avg\":".$tot."}";
           }else if($row1[1]>0){
               $tot=$row1[1];
               $names=$names."{\"batch\":\"".$row1[4]."\",\"sem\":\"".$row1[2]."\",\"sec\":\"".$row1[3]."\",\"avg\":".$tot."}";
           }else{
               $tot=$row2[1];
               $names=$names."{\"batch\":\"".$row2[4]."\",\"sem\":\"".$row2[2]."\",\"sec\":\"".$row2[3]."\",\"avg\":".$tot."}";
           }
           

 //      echo $row1[4]."  ".$row1[2]."  ".$row1[3]."  ".$row1[1];
       
    
    $names=$names."]";
    echo $names;
//    echo $c9to10."<br>";
//    echo $c8to9."<br>";
//    echo $c7to8."<br>";
//    echo $cblow7."<br>";

//    echo "{\"c9to10\":".$c9to10.",\"c8to9\":".$c8to9.",\"c7to8\":".$c7to8.",\"cblow7\":".$cblow7."}";