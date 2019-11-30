
<?php
require 'ahead.php';
?>    
<form action="deptmgmt1.php" method="POST">
    <br><div class="text-center h2">ADD DEPARTMENT HEAD</div>
<div class="container" ><br>
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
     <label>Department:</label>
      <select id="dept" class="form-control" name="dept" required>
     <option value=""><--select department--></option>
     <option value="CSE">CSE</option>
  <option value="ECE">ECE</option>
  <option value="CIVIL">CIVIL</option>
  <option value="MECH">MECH</option>
  <option value="EEE">EEE</option>
  <option value="IS">IS</option>
  <option value="IS">C-C</option>
  <option value="IS">P-C</option>
 </select> 
     </div>
     <input id="stu_log" class="btn btn-primary btn-block" type="submit" value="SUBMIT"/>
    
  
         </div></div></div></form>