<?php

require 'connection.php';
$c9to10=0;
$c8to9=0;
$c7to8=0;
$cblow7=0;
 $ayear=$_GET['ayear'];
 $degree=$_GET['degree'];
 $dept=$_GET['dept'];
 $names="[";
 $sql = "select fname,sum((rfeed+ifeed+pfeed+afeed+sfeed+crfeed+bfeed+ffeed+cofeed+vfeed)/10)/count(fname) from feedback where ayear='".$ayear."' and degree='".$degree."' and dept='".$dept."' group by fname";
//$sql = "select fname,((sum((rfeed+ifeed+pfeed+afeed+sfeed+crfeed+bfeed+ffeed+cofeed+vfeed)/10))/count(fname)) from feedback where ayear='2018' and degree='BE' and dept='ECE' group by fname";
$result1 = mysqli_query($con, $sql);
   while($row1 = mysqli_fetch_array($result1)) {
      
       $sql2="select fname,((sum((rfeed+ifeed+pfeed+afeed+sfeed+crfeed+bfeed+ffeed+cofeed+vfeed)/10))/count(fname)) from feedback1 where ayear='".$ayear."' and degree='".$degree."' and dept='".$dept."'  and fname='".$row1[0]."'";
      
       $result2 = mysqli_query($con, $sql2);
       if(mysqli_num_rows($result2) > 0){ 
           if($row2 = mysqli_fetch_array($result2)){
           if($row2[1]>0)
           {
                $tot=($row1[1]+$row2[1])/2;
           }else{
               $tot=$row1[1];
           }
           
           //  echo $row1[0]."  ".$tot;
             if($tot>=9)
             {    
                 $c9to10++;
                  
             }else if($tot>8&&$tot<9)
             {
                 if($c8to9===0){
                 
                  }else{
                 $names=$names.",";
                   }
                 $names=$names."{\"name\":\"".$row1[0]."\",\"avg\":".$tot."}";
                 
                 $c8to9++;
             }
             else if($tot>7&&$tot<8)
             {
                 $c7to8++;
             }else{
                 $cblow7++;
             }
            
           }
       }
       $result2=null;
    }
    
     $sql22="select fname,((sum((rfeed+ifeed+pfeed+afeed+sfeed+crfeed+bfeed+ffeed+cofeed+vfeed)/10))/count(fname)) from feedback1 where ayear='".$ayear."' and degree='".$degree."' and dept='".$dept."'  and fname not in (select fname  from feedback where ayear='".$ayear."' and degree='".$degree."' and dept='".$dept."' group by fname)  group by fname;";
    
       $result22 = mysqli_query($con, $sql22);
     
           while($row22 = mysqli_fetch_array($result22)){
         
               $tot=$row22[1];
         
           
           //  echo $row1[0]."  ".$tot;
             if($tot>=9)
             {
                 $c9to10++;
             }else if($tot>8&&$tot<9)
             {
                 if($c8to9===0){
                 
                  }else{
                 $names=$names.",";
                   }
                 $names=$names."{\"name\":\"".$row22[0]."\",\"avg\":".$tot."}";
                 
                 $c8to9++;
             }
             else if($tot>7&&$tot<8)
             {
                 $c7to8++;
             }else{
                 $cblow7++;
             }
            
           }
           
           
$names=$names."]";

echo $names;
   