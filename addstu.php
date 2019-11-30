<?php
require 'dhead.php';
$dept = $_SESSION['dept'] ;
?>
<script>  
$(document).ready(function(){
 $("#year").on("change",function(){
    if($(this).val() == "1st"){
        $("#sem").html("<option>1</option><option>2</option>");
    }
    else  if($(this).val() == "2nd"){   
        $("#sem").html("<option>3</option><option>4</option>");
    }
    else  if($(this).val() == "3rd"){
        $("#sem").html("<option>5</option><option>6</option>");
    }
    else if($(this).val() == "4th") {
     $("#sem").html("<option>7</option><option>8</option>");   
    }
});
});
</script>
<div class="container" >
    <br>
    <div class="row">
        <div class="col-md-4">
<form action="addstu1.php"  method="POST">
     <div class="form-group">
    <label>Enter USN/Registered Number:</label>
    <input type="text" class="form-control" id="usnno" placeholder="Enter USN/Registered Number" name="usnno" required pattern="/^[a-zA-Z0-9]*{10}/">
     </div>
     <div class="form-group">
    <label>Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
     </div>
  
     <div class="form-group">
	 <input type='text' id='degree' class='form-control' name='degree' readonly="" hidden value="BE"/>
   <!--   <label>DEGREE:</label>
 <select id="degree" class="form-control" name="degree" required="">
     <option value=""><-select degree-></option>
  <option value="BE" readonly="" hidden >BE</option>
</select> -->
 </div>
   <div class="form-group">
      <!-- <label>DEPARTMENT:</label> -->
      <input type="text" id="dept" class="form-control" name="dept" readonly="" hidden value="<?php echo $dept ?>"  /> 
 </div>
     
<input id="submit" class="btn btn-primary btn-block" type="submit" value="SUBMIT"/>
</form> 
        </div></div></div>