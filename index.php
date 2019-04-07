<?php require 'mhead.php';?>
 <!DOCTYPE html>
<html>
<script>
$(document).ready(function(){  
      $("#student").show();
      $("#admin").hide();
      $("#dept").hide();
      
  $("#student_btn").on("click",function(){
      $("#student").show();
      $("#admin").hide();
      $("#dept").hide();
      
  });
  $("#admin_btn").on("click",function(){
      $("#student").hide();
      $("#admin").show();
      $("#dept").hide();
      
  });
  $("#dept_btn").on("click",function(){
      $("#student").hide();
      $("#admin").hide();
      $("#dept").show();
      
  });
});
</script>
        <title>STUDENT LOGIN</title>
        <div style="margin-top:8% ">
        <div class="container">
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <a id="student_btn"> STUDENT LOGIN</a>
        <a id="dept_btn">    DEPARTMENT LOGIN</a>
        <a id="admin_btn">   ADMIN LOGIN</a>
        
<form action="login.php" id="student" method="POST">
    <label>Enter USN/Registered Number:</label>
     <input type="text" class="form-control" id="usnno" placeholder="Enter USN/Registered Number" name="usnno">
     <input type="hidden" name="role" id="role" value="student">
     <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
    </div>
<input id="stu_log" class="btn btn-primary btn-block" type="submit" value="LOGIN"/>
</form> 

<form action="login.php" id="dept" method="POST">
    <label>Department Id:</label>
     <input type="text" class="form-control" id="deptid" placeholder="Enter Department id" name="deptid">
     <input type="hidden" name="role" id="role" value="dept">
     <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" id="pass1" placeholder="Enter password" name="pass1">
    </div>
<input id="dept_log" class="btn btn-primary btn-block" type="submit" value="LOGIN"/>
</form>
            
<form action="login.php" id="admin" method="POST">
     <label>Username:</label>
     <input type="text" class="form-control" id="adminid" placeholder="Enter Username" name="adminid">
     <input type="hidden" name="role" id="role" value="admin">
     <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" id="pass2" placeholder="Enter password" name="pass2">
    </div>
   <input name="admin_log" class="btn btn-primary btn-block" type="submit" value="Login"/>
</form>
        </div>
            </div>
        </body>
</html>
 