<?php require 'mhead.php';
if(isset($_SESSION['role'])){
    $r=$_SESSION['role'];
    #echo $r;
    if($r=="Admin"){
        header('Location: adminhome.php');
    }
    else if($r=="dept"){
        header('Location: depthome.php');
    }
    else if($r=="student"){
        header('Location: declaration.php');
    }
    else if($r=="Faculty"){
        header('Location: facultyf.php');
    }
}
else {
?>
<style>
.av {
    vertical-align: right;
    width: 80px;
    height: 80px;
    border-radius: 110%;
.alignleft {
	float: left;
}
.alignright {
	float: right;
}
}

.tabcontent {
    float: right;
    padding: 1px 12px;
    border: 1px solid #ccc;
    width: 42%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    height: 100px;
    border-radius: 25px;
    margin-right: 0px;
</style>
 <!DOCTYPE html>
<html>
<!--    <body background="images/pro.jpg" background-height:10%;>
    <div layout="row" layout-align="right" class="container">
        <img style="margin-top: 1`5%;width: 10%;height: 10%" src="images/bitm.jpg" href="index.php">
      <span flex="5" class="flex-5"></span>
       <h2>Login</h2>
    </div>--><br>
    <p align="center">(Login is restricted for authorised users only)</p>

<script>

$(document).ready(function(){  
      $("#student").show();
      $("#admin").hide();
      $("#dept").hide();
      $("#faculty").hide();
      
      
      
  $("#student_btn").on("click",function(){
      $("#student").show();
      $("#admin").hide();
      $("#faculty").hide();
      $("#dept").hide();
      $(this).css("border-bottom","3px solid #00aeef");
       $("#dept_btn").css("border-bottom","0");
       $("#admin_btn").css("border-bottom","0");
       $("#faculty_btn").css("border-bottom","0");
  });
    $("#faculty_btn").on("click",function(){
      $("#student").hide();
      $("#faculty").show();
      $("#admin").hide();
      $("#dept").hide();
      $(this).css("border-bottom","3px solid #00aeef");
       $("#dept_btn").css("border-bottom","0");
       $("#admin_btn").css("border-bottom","0");
       $("#student_btn").css("border-bottom","0");
       
  });
  $("#admin_btn").on("click",function(){
      $("#student").hide();
      $("#admin").show();
      $("#faculty").hide();
      $("#dept").hide();
      $(this).css("border-bottom","3px solid #00aeef");
      $("#dept_btn").css("border-bottom","0");
       $("#student_btn").css("border-bottom","0");
       $("#faculty_btn").css("border-bottom","0");
  });
  $("#dept_btn").on("click",function(){
      $("#student").hide();
      $("#admin").hide();
      $("#faculty").hide();
      $("#dept").show();
      $(this).css("border-bottom","3px solid #00aeef");
       $("#admin_btn").css("border-bottom","0");
       $("#student_btn").css("border-bottom","0");
       $("#faculty_btn").css("border-bottom","0");
  });
});
function hide()
{
document.getElementById('sidebar').src='images/chkk.jpg';
}

function show()
{
	document.getElementById('sidebar').src='images/chk.jpg';
}
function zoom() {
            document.body.style.zoom = "90%" 
        }
</script>
<style>
    .mycontainer{
        padding: 10px;
        
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    #stu_log,#dept_log,#admin_log,#faculty_log{
        background-color: #00aeef;
        color: white;
    }
    </style>
        <title>RESTRICTED LOGIN</title>
        <div style="margin-top:1%">
        <div class="container">
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="container">
                <div class="mycontainer">
            <div class="row">
                <div class="col-md-4"><div id="student_btn" class="text-center" style="padding-bottom: 10px;"><strong>STUDENT LOGIN</strong></div></div>
                <!-- <div class="col-md-4"> <div id="faculty_btn" class="text-center" style="padding-bottom: 10px;"><strong>FACULTY LOGIN</strong></div></div> -->
               <div class="col-md-4"><div id="dept_btn" class="text-center" style="padding-bottom: 10px;"><strong>DEPT LOGIN</strong></div></div>
                <div class="col-md-4"> <div id="admin_btn" class="text-center" style="padding-bottom: 10px;"><strong>ADMIN LOGIN</strong></div></div>
                
               
            </div>
                    <hr style="margin-top: 0px;">
                    
<form action="login.php" id="student" method="POST">
    <div class="form-group">
    <label>Enter USN: </label>
     <input type="text" class="form-control" id="usnno" placeholder="Enter USN" name="usnno" required pattern="[a-zA-Z0-9]+">
     </div>
     <input type="hidden" name="role" id="role" value="student">
     <div class="form-group">
     <label for="pwd">Password: </label>
     <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass"required pattern="[a-zA-Z0-9]+">
    </div>
<input id="stu_log" class="btn btn-block" type="submit" value="LOGIN"/>
</form> 
                    
<form action="login.php" id="faculty" method="POST">
    <div class="form-group">
    <label>Faculty Email: </label>
     <input type="email" class="form-control" id="email" placeholder="Enter Faculty Email" name="email" pattern="[a-zA-Z.@_-!&$,?]*">
     </div>
     <input type="hidden" name="role" id="role" value="Faculty">
     <div class="form-group">
     <label for="pwd">Password: </label>
     <input type="password" class="form-control" id="pass3" placeholder="Enter password" name="pass3" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
    </div>
<input id="faculty_log" class="btn btn-block" type="submit" value="LOGIN"/>
<a href="fforgot.php"><input id="forgot" class="btn btn-block" type="button" value="FORGOT PASSWORD"/></a>
</form>

<form action="login.php" id="dept" method="POST">
    <div class="form-group">
    <label>Department Email:</label>
    <input type="email" class="form-control" id="deptid" placeholder="Enter Department Email" name="deptid" pattern="[a-zA-Z.@_-!&$,?]*">
    </div>
     <input type="hidden" name="role" id="role" value="dept">
     <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" id="pass1" placeholder="Enter password" name="pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
    </div>
<input id="dept_log" class="btn  btn-block" type="submit" value="LOGIN"/>
<a href="dforgot.php"><input id="forgot" class="btn btn-block" type="button" value="FORGOT PASSWORD"/></a>
</form>
            
<form action="login.php" id="admin" method="POST">
    <div class="form-group">
     <label>Admin Id:</label>
     <input type="email" class="form-control" id="adminid" placeholder="Admin Id" name="adminid">
    </div>
     <input type="hidden" name="role" id="role" value="Admin">
     <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" id="pass2" placeholder="Enter password" name="pass2">
    </div>
   <input id="admin_log" class="btn  btn-block" type="submit" value="LOGIN"/>
   <a href="forgotadmin.php"><input id="forgot" class="btn btn-block" type="button" value="FORGOT PASSWORD"/></a>
</form>
            </div></div>
        </div>
        <br>
        <br>
        </div>
        </body>
        </html>
        <html>
            <body onload='zoom()'><br>
                <div align='center'><a href='http://www.linkedin.com/in/koushik-ch-a5343b150' target="_blank"><img style='width:80%;height:50%' src='images/Team.png'></a></div>
                <div style="margin-top:1%;margin-right:1%;margin-left:1%; ">
           <b>Note:</b> This is a restricted access site and is intended for the exclusive use by Staff / Stakeholders / students of BIIRED tiedup educational institutes only. CHK reserves all rights to the site and any violation or unauthorized access to the site will be dealt in accordance with the applicable laws.
           <br>
        </br><b>For Students &amp; Staff of COLLEGE / INSTITUE:</b> You are required to strictly abide by Indian Information and Security policies, especially in maintaining the confidentiality of your ID and Password. Any unauthorized use, distribution or transmission of the contents of the site for public or commercial purposes is strictly prohibited. Any copies made from the site, whether hardcopy or electronic, must be handled with confidentiality and the use of such information shall be restricted only to the intended use. You agree to comply with applicable laws and regulations governing the use of computer and telecommunication technology. Violation may result in immediate loss of access privileges and lead to disciplinary action by Criminal law. Any suspected criminal violation shall be reported to the appropriate regulatory and/or law enforcement agencies. 
        
     <!--  </div><div align='right' class="tabcontent">
        <div align="right"><a href="#"><img id='sidebar' onmouseover='hide()' onmouseout='show()' src="images/chk.jpg"  style= "vertical-align: right; width: 100px; height: 95px; border-radius: 30%;" ><img  src="images/suresh.png"   class="av"  ><img  src="images/naveed.png"   class="av" ><img src="images/giri.jpg"   class="av" ><img src="images/sir.jpeg"   class="av" > </a></div>

                
       <div style="margin-top:2%;margin-right:1%;margin-left:1%; ">
           <b>Note:</b> This is a restricted access site and is intended for the exclusive use by Staff / Stakeholders / students of Ballari Institute of Technology and Management (BITM) and BITM Industrial Relations and Entrepreneur Development Cell (BIIRED). BITM reserves all rights to the site and any violation or unauthorized access to the site will be dealt in accordance with the applicable laws.
           <br><br>
        <b>For Students &amp; Staff of BITM / BIIRED:</b> You are required to strictly abide by BITM Information and Security policies, especially in maintaining the confidentiality of your ID and Password. Any unauthorized use, distribution or transmission of the contents of the site for public or commercial purposes is strictly prohibited. Any copies made from the site, whether hardcopy or electronic, must be handled with confidentiality and the use of such information shall be restricted only to the intended use. You agree to comply with applicable laws and regulations governing the use of computer and telecommunication technology. Violation may result in immediate loss of access privileges and lead to disciplinary action by BITM. Any suspected criminal violation shall be reported to the appropriate regulatory and/or law enforcement agencies. 
        -->
       </div>
	   <div align='center' style='color:red;margin-top:5%;'><br><br>&copy; Copyright 2018-2037 by <a href='http://copyright.gov.in/'>GovOfIndia</a> under the Act 1957. All Rights Reserved.</div>
        </body>
</html>
 <!-- No Person have the authorisation of source code from this site, this is completely authorised by Koushik CH, kindly contact for any changes required!!! 
 -->
 
 
<?php } ?>