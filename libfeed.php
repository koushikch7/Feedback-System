<?php
require 'shome.php';
require 'connection.php';
session_start();
?>
<script>
$(document).ready(function(){
   var opt="<option>10</option><option>9</option><option>8</option><option>7</option><option>6</option><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option>";
$("#libfeed").html(opt);

$("#next").on("click",function(){
       var libfeed = $("#libfeed").val();
             var usnno = $("#usnno").val();
                 var url3 = "setfeed3.php?libfeed="+libfeed+"&usnno="+usnno;
                 $.get(url3, function(data2, status2){
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
    <div class="text-center h3">LIBRARY</div>
    
    <table class="table table-bordered"><tr>
            <th class="text-center" >SNo</th>
                  <th class="text-center">Name of the Section</th>
                  <th class="text-center">Grade</th>
    </tr>
           
         
             <tr>
              <td>1</td>
            <td><p>Library Department</p></td> 
                 <td class="select" align="right"> <select id="libfeed">        
       </select> </td>
            </tr>
</table>

                <input id="next" class="btn btn-primary btn-block" type="submit" value="NEXT"/>
              </div>
   <br>
<br>







