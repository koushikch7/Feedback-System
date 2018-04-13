<?php
require 'dhead.php';
session_start();
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
    <input type="text" class="form-control" id="usnno" placeholder="Enter USN/Registered Number" name="usnno">
     </div>
    <div class="form-group">
    <label>Password:</label>
    <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
    </div>
     <div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
     </div>
     <div class="form-group">
    <label>Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
     </div>
    <div class="form-group">
    <label>Phone no:</label>
    <input type="number" class="form-control" id="phno" placeholder="Enter Phone no" name="phno">
    </div>
      <div class="form-group">
     <label>YEAR:</label>
      <select id="year" class="form-control" name="year" required="">
     <option value=""><--select year--></option>
     <option value="1st">1</option>
  <option value="2nd">2</option>
  <option value="3rd">3</option>
  <option value="4th">4</option>
 </select>  
 </div>
     <div class="form-group">
      <label>DEGREE:</label>
 <select id="degree" class="form-control" name="degree" required="">
     <option value=""><--select degree--></option>
  <option value="btech">BE/BTECH</option>
</select>
 </div>
   <div class="form-group">
      <label>DEPARTMENT:</label>
      <input type="text" id="dept" class="form-control" name="dept" readonly="" value="<?php echo $dept ?>"  /> 
 </div>
      <div class="form-group">
      <label>SEMESTER:</label>
       <select id="sem" class="form-control" name="sem" required="">
           <option value=""><--select semester--></option>
    
 </select> 
  
 </div>         
            <div class="form-group">
      <label>SECTION:</label>
 <select id="sec" class="form-control" name="sec" required="">
     <option value=""><--select section--></option>
     <option value="a">A</option>
  <option value="b">B</option>
  <option value="c">C</option>
  <option value="d">D</option>
  <option value="e">E</option>
 </select>  
 </div>     
<input id="submit" class="btn btn-primary btn-block" type="submit" value="SUBMIT"/>
</form> 
        </div></div></div>