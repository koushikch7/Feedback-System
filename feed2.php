<?php
require 'shome.php';
require 'connection.php';
session_start();
?>
<script>
$(document).ready(function(){
   var opt="<option>10</option><option>9</option><option>8</option><option>7</option><option>6</option><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option>";
$("#rfeed1").html(opt);
$("#rfeed2").html(opt);
$("#rfeed3").html(opt);
$("#rfeed4").html(opt);

$("#ifeed1").html(opt);
$("#ifeed2").html(opt);
$("#ifeed3").html(opt);
$("#ifeed4").html(opt);

$("#pfeed1").html(opt);
$("#pfeed2").html(opt);
$("#pfeed3").html(opt);
$("#pfeed4").html(opt);

$("#afeed1").html(opt);
$("#afeed2").html(opt);
$("#afeed3").html(opt);
$("#afeed4").html(opt);

$("#sfeed1").html(opt);
$("#sfeed2").html(opt);
$("#sfeed3").html(opt);
$("#sfeed4").html(opt);

$("#crfeed1").html(opt);
$("#crfeed2").html(opt);
$("#crfeed3").html(opt);
$("#crfeed4").html(opt);

$("#bfeed1").html(opt);
$("#bfeed2").html(opt);
$("#bfeed3").html(opt);
$("#bfeed4").html(opt);

$("#ffeed1").html(opt);
$("#ffeed2").html(opt);
$("#ffeed3").html(opt);
$("#ffeed4").html(opt);

$("#cofeed1").html(opt);
$("#cofeed2").html(opt);
$("#cofeed3").html(opt);
$("#cofeed4").html(opt);

$("#vfeed1").html(opt);
$("#vfeed2").html(opt);
$("#vfeed3").html(opt);
$("#vfeed4").html(opt);


var opt1="<option>100%</option><option>90%</option><option>80%</option><option>70%</option><option>60%</option><option>50%</option><option>40%</option><option>30%</option><option>20%</option><option>10%</option>";
$("#scover1").html(opt1);
$("#scover2").html(opt1);
$("#scover3").html(opt1);
$("#scover4").html(opt1);

$("select").on("change",function(){
    var tm1 = parseInt($("#rfeed1").val())+parseInt($("#ifeed1").val())+parseInt($("#pfeed1").val())+parseInt($("#afeed1").val())+parseInt($("#sfeed1").val())+parseInt($("#crfeed1").val())+parseInt($("#bfeed1").val())+parseInt($("#ffeed1").val())+parseInt($("#cofeed1").val())+parseInt($("#vfeed1").val());
    $("#tm1").html(tm1);
    $("#am1").html(tm1/10);
    
    var tm2 = parseInt($("#rfeed2").val())+parseInt($("#ifeed2").val())+parseInt($("#pfeed2").val())+parseInt($("#afeed2").val())+parseInt($("#sfeed2").val())+parseInt($("#crfeed2").val())+parseInt($("#bfeed2").val())+parseInt($("#ffeed2").val())+parseInt($("#cofeed2").val())+parseInt($("#vfeed2").val()); 
    $("#tm2").html(tm2);
    $("#am2").html(tm2/10);
    
    var tm3 = parseInt($("#rfeed3").val())+parseInt($("#ifeed3").val())+parseInt($("#pfeed3").val())+parseInt($("#afeed3").val())+parseInt($("#sfeed3").val())+parseInt($("#crfeed3").val())+parseInt($("#bfeed3").val())+parseInt($("#ffeed3").val())+parseInt($("#cofeed3").val())+parseInt($("#vfeed3").val());
    $("#tm3").html(tm3);
    $("#am3").html(tm3/10);
    
    var tm4 = parseInt($("#rfeed4").val())+parseInt($("#ifeed4").val())+parseInt($("#pfeed4").val())+parseInt($("#afeed4").val())+parseInt($("#sfeed4").val())+parseInt($("#crfeed4").val())+parseInt($("#bfeed4").val())+parseInt($("#ffeed4").val())+parseInt($("#cofeed4").val())+parseInt($("#vfeed4").val());
    $("#tm4").html(tm4);
    $("#am4").html(tm4/10);

});

$("#next").on("click",function(){
       var lname1 = $("#lname1").html();
       var lname2 = $("#lname2").html();
       var lname3 = $("#lname3").html();
       var lname4 = $("#lname4").html();
       
       var fname1 = $("#fname1").html();
       var fname2 = $("#fname2").html();
       var fname3 = $("#fname3").html();
       var fname4 = $("#fname4").html();
       
       var rfeed1 = $("#rfeed1").val();
       var rfeed2 = $("#rfeed2").val();
        var rfeed3 = $("#rfeed3").val();
       var rfeed4 = $("#rfeed4").val();
       
       var ifeed1 = $("#ifeed1").val();
       var ifeed2 = $("#ifeed2").val();
        var ifeed3 = $("#ifeed3").val();
       var ifeed4 = $("#ifeed4").val();
        
       var pfeed1 = $("#pfeed1").val();
       var pfeed2 = $("#pfeed2").val();
        var pfeed3 = $("#pfeed3").val();
       var pfeed4 = $("#pfeed4").val();
       
       var afeed1 = $("#afeed1").val();
       var afeed2 = $("#afeed2").val();
        var afeed3 = $("#afeed3").val();
       var afeed4 = $("#afeed4").val();
        
       var sfeed1 = $("#sfeed1").val();
       var sfeed2 = $("#sfeed2").val();
        var sfeed3 = $("#sfeed3").val();
       var sfeed4 = $("#sfeed4").val();
       
       var crfeed1 = $("#crfeed1").val();
       var crfeed2 = $("#crfeed2").val();
        var crfeed3 = $("#crfeed3").val();
       var crfeed4 = $("#crfeed4").val();
       
       var bfeed1 = $("#bfeed1").val();
       var bfeed2 = $("#bfeed2").val();
        var bfeed3 = $("#bfeed3").val();
       var bfeed4 = $("#bfeed4").val();
     
       var ffeed1 = $("#ffeed1").val();
       var ffeed2 = $("#ffeed2").val();
        var ffeed3 = $("#ffeed3").val();
       var ffeed4 = $("#ffeed4").val();
       
       var cofeed1 = $("#cofeed1").val();
       var cofeed2 = $("#cofeed2").val();
        var cofeed3 = $("#cofeed3").val();
       var cofeed4 = $("#cofeed4").val();
     
       var vfeed1 = $("#vfeed1").val();
       var vfeed2 = $("#vfeed2").val();
        var vfeed3 = $("#vfeed3").val();
       var vfeed4 = $("#vfeed4").val();
       
       var scover1 = $("#scover1").val();
       var scover2 = $("#scover2").val();
       var scover3 = $("#scover3").val();
       var scover4 = $("#scover4").val();
   
        var usnno = $("#usnno").val();
       
       
             
             
                 var url3 = "setfeed2.php?lname="+lname1+"&fname="+fname1+"&rfeed="+rfeed1+"&ifeed="+ifeed1+"&pfeed="+pfeed1+"&afeed="+afeed1+"&sfeed="+sfeed1+"&crfeed="+crfeed1+"&bfeed="+bfeed1+"&ffeed="+ffeed1+"&cofeed="+cofeed1+"&vfeed="+vfeed1+"&scover="+scover1+"&usnno="+usnno;
                 var url4 = "setfeed2.php?lname="+lname2+"&fname="+fname2+"&rfeed="+rfeed2+"&ifeed="+ifeed2+"&pfeed="+pfeed2+"&afeed="+afeed2+"&sfeed="+sfeed2+"&crfeed="+crfeed2+"&bfeed="+bfeed2+"&ffeed="+ffeed2+"&cofeed="+cofeed2+"&vfeed="+vfeed2+"&scover="+scover2+"&usnno="+usnno;
                 var url5 = "setfeed2.php?lname="+lname3+"&fname="+fname3+"&rfeed="+rfeed3+"&ifeed="+ifeed3+"&pfeed="+pfeed3+"&afeed="+afeed3+"&sfeed="+sfeed3+"&crfeed="+crfeed3+"&bfeed="+bfeed3+"&ffeed="+ffeed3+"&cofeed="+cofeed3+"&vfeed="+vfeed3+"&scover="+scover3+"&usnno="+usnno;
                 var url6 = "setfeed2.php?lname="+lname4+"&fname="+fname4+"&rfeed="+rfeed4+"&ifeed="+ifeed4+"&pfeed="+pfeed4+"&afeed="+afeed4+"&sfeed="+sfeed4+"&crfeed="+crfeed4+"&bfeed="+bfeed4+"&ffeed="+ffeed4+"&cofeed="+cofeed4+"&vfeed="+vfeed4+"&scover="+scover4+"&usnno="+usnno;
                
        
             $.get(url3, function(data2, status2){
             });
             $.get(url4, function(data2, status2){
             });
             $.get(url5, function(data2, status2){
             });
             $.get(url6, function(data2, status2){
             }); 
           
               
             }); 






});

</script>
<?php

$year = $_SESSION['year'] ;
$degree = $_SESSION['degree'] ;
$dept = $_SESSION['dept'] ;
$sem = $_SESSION['sem'] ;
$sec = $_SESSION['sec'] ;
$usnno = $_SESSION['usnno'];
$result = mysqli_query($con, "select * from lab where year='".$year."' and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and  sec='".$sec."'" );
$result1 = mysqli_query($con, "select * from lab where year='".$year."' and degree='".$degree."' and dept='".$dept."' and sem='".$sem."' and  sec='".$sec."'" );
?>
<input type="hidden" id="usnno" value="<?php echo $usnno; ?>" >
<div class="container" >
    
<br><div class="text-center h2">STUDENT FEEDBACK FORM</div>

   <label>Department: <?php echo $dept; ?></label>
    
    <label>Semester: <?php echo $sem; ?></label>
      
     <label>Section: <?php echo $sec; ?></label>
    
    <label>Date: <?php  echo date("Y/m/d"); ?></label>
    
    
    
<table class="table table-bordered" ><tr>
        <th class="text-center" colspan="6">GRADING</th>
                  <th class="text-center">INSTRUCTIONS</th>
                   <tr>
                       <td><b>Grade</b></td>
            <td>Excellent</td>
            <td>Very Good</td>
            <td>Satisfactory</td>
            <td>Average</td>
            <td>Below Average</td>
            <td rowspan="2"><p>
                    1.Give your feed back in the form of marks(interger value) only (3 to 10)</p>   
                   <p> 2.The total and average marks for each component are calculated automatically.
                </p></td>
         </tr>
             <tr>
                       <td><b>Marks</b></td>
            <td>9-10</td>
            <td>8-9</td>
            <td>7-8</td>
            <td>5-7</td>
            <td>3-5</td>
            
         </tr>
            </tr>
</table>
    <div class="text-center h3">TEACHING</div>
    
    <table class="table table-bordered"><tr>
            <th class="text-center" rowspan="3">SNo</th>
            <th class="text-center" rowspan="3">Questions</th>
                  <th class="text-center" colspan="4">Name of the Lab</th>
                   <tr>
                       <?php
                       $i=1;
                       while($row = mysqli_fetch_array($result))
                {
                       ?>  
                       
                       <td class="select" align="right" id="lname<?php echo $i;?>">   
                               <?php
                               echo $row ['lname'];
                               ?>
                         </td>
                         <?php  
                           $i++;
                       }
                       
                       ?>
                   </tr>
             
             <tr>
                       <?php
                       $j=1;
                       while($row2 = mysqli_fetch_array($result1))
                {
                           $result3 = mysqli_query($con, "select * from faculty where facid='".$row2['fid']."'");
                       if($row3 = mysqli_fetch_array($result3)){
                     ?>  
                       
                           <td class="select" align="right" id="fname<?php echo $j;?>">   
                               <?php
                               echo $row3 ['name'];
                               ?>
                         </td>
                         <?php  
                       } 
                       $j++;
                       }
                       
                       ?>
                   </tr>
           
         
             <tr>
              <td>1</td>
            <td><p>Regularity in handling classes</p></td>
                 <td class="select" align="right"> <select id="rfeed1">        
       </select> </td>
              <td class="select" align="right"> <select id="rfeed2">        
        </select></td>
          <td class="select" align="right"> <select id="rfeed3">        
        </select></td>
          <td class="select" align="right"> <select id="rfeed4">        
        </select></td>
            </tr>
            
             <tr>
              <td>2</td>
            <td><p>Interaction with students</p></td>
                <td class="select" align="right"> <select id="ifeed1">        
       </select> </td>
              <td class="select" align="right"> <select id="ifeed2">        
        </select></td>
          <td class="select" align="right"> <select id="ifeed3">        
        </select></td>
          <td class="select" align="right"> <select id="ifeed4">        
        </select></td>
            </tr>
            
              <tr>
              <td>3</td>
            <td><p>Presentation of the subject</p></td>
        <td class="select" align="right"> <select id="pfeed1">        
       </select> </td>
              <td class="select" align="right"> <select id="pfeed2">        
        </select></td>
          <td class="select" align="right"> <select id="pfeed3">        
        </select></td>
          <td class="select" align="right"> <select id="pfeed4">        
        </select></td>
            </tr>
            
              <tr>
              <td>4</td>
            <td><p>Audibility & Clarity of speech</p></td>
       <td class="select" align="right"> <select id="afeed1">        
       </select> </td>
              <td class="select" align="right"> <select id="afeed2">        
        </select></td>
          <td class="select" align="right"> <select id="afeed3">        
        </select></td>
          <td class="select" align="right"> <select id="afeed4">        
        </select></td>
          
            </tr>
            
              <tr>
              <td>5</td>
            <td><p>Subject knowledge</p></td>
         <td class="select" align="right"> <select id="sfeed1">        
       </select> </td>
              <td class="select" align="right"> <select id="sfeed2">        
        </select></td>
          <td class="select" align="right"> <select id="sfeed3">        
        </select></td>
          <td class="select" align="right"> <select id="sfeed4">        
        </select></td>
         
            </tr>
            
              <tr>
              <td>6</td>
            <td><p>Creating interest in the subject</p></td>
                        <td class="select" align="right"> <select id="crfeed1">        
       </select> </td>
              <td class="select" align="right"> <select id="crfeed2">        
        </select></td>
          <td class="select" align="right"> <select id="crfeed3">        
        </select></td>
          <td class="select" align="right"> <select id="crfeed4">        
        </select></td>
          
            </tr>
            
              <tr>
              <td>7</td>
            <td><p>Black Board Presentation /PPTs</p></td>
            <td class="select" align="right"> <select id="bfeed1">        
       </select> </td>
              <td class="select" align="right"> <select id="bfeed2">        
        </select></td>
          <td class="select" align="right"> <select id="bfeed3">        
        </select></td>
          <td class="select" align="right"> <select id="bfeed4">        
        </select></td>
       
            </tr>
            
              <tr>
              <td>8</td>
            <td><p>Fulfillment of Course Objectives & Outcomes</p></td>
           <td class="select" align="right"> <select id="ffeed1">        
       </select> </td>
              <td class="select" align="right"> <select id="ffeed2">        
        </select></td>
          <td class="select" align="right"> <select id="ffeed3">        
        </select></td>
          <td class="select" align="right"> <select id="ffeed4">        
        </select></td>
            </tr>
            
              <tr>
              <td>9</td>
            <td><p>Coordination of staff with students</p></td>
                    <td class="select" align="right"> <select id="cofeed1">        
       </select> </td>
              <td class="select" align="right"> <select id="cofeed2">        
        </select></td>
          <td class="select" align="right"> <select id="cofeed3">        
        </select></td>
          <td class="select" align="right"> <select id="cofeed4">        
        </select></td>
            </tr>
            
              <tr>
              <td>10</td>
            <td><p>Valuation of IA books</p></td>
                  <td class="select" align="right"> <select id="vfeed1">        
       </select> </td>
              <td class="select" align="right"> <select id="vfeed2">        
        </select></td>
          <td class="select" align="right"> <select id="vfeed3">        
        </select></td>
          <td class="select" align="right"> <select id="vfeed4">        
        </select></td>
            </tr>
              
            <tr>
            <td colspan="2" align="right"><p>Total Marks</p></td>
            <td id="tm1"></td>
            <td id="tm2"></td>
            <td id="tm3"></td>
            <td id="tm4"></td>
            
            
            </tr>
            
             <tr>
            <td colspan="2" align="right"><p>Average Marks= Total Marks /10</p></td>
            <td id="am1"></td>
            <td id="am2"></td>
            <td id="am3"></td>
            <td id="am4"></td>
            
            
            </tr>
             <tr>
            <td colspan="2" align="right"><p>Syllabus Coverage(in % only)</p></td>
                 <td class="select" align="right"> <select id="scover1">        
       </select> </td>
              <td class="select" align="right"> <select id="scover2">        
        </select></td>
          <td class="select" align="right"> <select id="scover3">        
        </select></td>
          <td class="select" align="right"> <select id="scover4">        
        </select></td>
            </tr>
            
            </tr>
</table>

                <input id="next" class="btn btn-primary btn-block" type="submit" value="NEXT"/>
              </div>
   <br>
<br>







