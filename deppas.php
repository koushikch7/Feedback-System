
<?php
require 'dhead.php';
session_start();
$dept = $_SESSION['dept'] ;
?>
<div class="container" >
    <br>
    <div class="row">
        <div class="col-md-4">
            <form action="deppas1.php"  method="POST">
     <div class="form-group">
    <label>Enter the Email ID:</label>
    <input type="email" class="form-control" id="emaill" placeholder="Enter Email ID" name="emaill" required>
     </div>
     <div class="form-group">
    <label>Enter the old passwword:</label>
    <input type="password" class="form-control" id="oldpass" placeholder="Enter old password" name="oldpass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" title="Strong Password should contains min one uppercase, numerics and should be 10 characters long">
     </div>
     <div class="form-group">
    <label>Enter the new password:</label>
    <input type="password" class="form-control" id="newpass" placeholder="Enter new password" name="newpass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" title="Strong Password should contains min one uppercase, special characters, numerics and should be 10 characters long">
     </div>
                <div class="form-group">
    <label>Confirm new password:</label>
    <input type="password" class="form-control" id="newpass" placeholder="Confirm new password" name="cnewpass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" title="Strong Password should contains min one uppercase, special characters, numerics and should be 10 characters long">
     </div>
                <input type="text" id="dept" class="form-control" name="dept" readonly="" value="<?php echo $dept ?>" hidden /> 
     
<input id="submit" class="btn btn-primary btn-block" type="submit" value="SUBMIT"/>
</form> 
        </div></div></div>