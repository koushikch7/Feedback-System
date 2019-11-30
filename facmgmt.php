<?php
require 'ahead.php';
?>    
<form action="facmgmt1.php" method="POST">
<div class="text-center h2">ADD FACULTY</div>
<div class="container" >
    <div class="row">
        <div class="col-md-4">
        </div>
         <div class="col-md-4">
<div class="form-group">
<label>Name:</label>
     <input type="text" required class="form-control" id="name" placeholder="Enter Name" name="name">
     </div>
<div class="form-group">
     <label>Email:</label>
     <input type="email" required class="form-control" id="email" placeholder="Enter email" name="email">
     </div>
    
     <div class="form-group">
<!--     <label>Phone no:</label>
     <input type="number" required class="form-control" id="phno" placeholder="Enter Phone no" name="phno" pattern="[0-9]{10}" minlength=10 maxlength=11 ></div>
    -->
  <div class="form-group">
      <label>Department:</label>
 <select id="dept" class="form-control" name="dept" required>
  <option value="CSE">CSE</option>
  <option value="ECE">ECE</option>
  <option value="CIV">CIVIL</option>
  <option value="MECH">MECH</option>
  <option value="EEE">EEE</option>
  <option value="IS">IS</option>
  <option value="MATHS">MATHS</option>
  <option value="C-C">C-C</option>
  <option value="P-C">P-C</option>
</select>
  
</div>
     <input id="stu_log" class="btn btn-primary btn-block" type="submit" value="SUBMIT"/>
     </div>    
  
         </div></div></div></form>