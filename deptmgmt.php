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
     <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
     </div>
<div class="form-group">
     <label>Email:</label>
     <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
     </div>
     <div class="form-group">
     <label>Password:</label>
     <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="pass"></div>
     <div class="form-group">
     <label>Department:</label>
      <select id="dept" class="form-control" name="dept" required="">
     <option value=""><--select department--></option>
     <option value="CSE">CSE</option>
  <option value="ECE">ECE</option>
  <option value="CIVIL">CIVIL</option>
  <option value="MECH">MECH</option>
  <option value="EEE">EEE</option>
  <option value="IS">IS</option>
 </select> 
     <input id="stu_log" class="btn btn-primary btn-block" type="submit" value="SUBMIT"/>
     </div>    
  
         </div></div></div></form>