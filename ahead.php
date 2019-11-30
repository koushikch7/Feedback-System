<?php
session_start();
if(isset($_SESSION['role'])){
	if($_SESSION['role']!='Admin')
		header('Location: index.php');
}
else
	header('Location: logout.php');

?>
<?php require 'xampp.php';
//$it=idealtime();
?>

<nav class="navbar navbar-expand-sm navbar-default">
  <ul class="navbar-nav">
    <li class="nav-item">
        <strong> <a class="nav-link" href="adminhome.php">Home</a></strong>
    </li>
	 <li class="nav-item">
        <strong> <a class="nav-link" href="deptmgmt.php">Department Management</a></strong>
    </li>
      <li class="nav-item">
           <strong>  <a class="nav-link" href="deptmgmt2.php"> View Department List</a></strong> 
    </li>
       <li class="nav-item">
       <strong>  <a class="nav-link" href="facmgmt.php"> Add Faculty</a></strong> 
    </li>
    <li class="nav-item">
       <strong>  <a class="nav-link" href="facmgmt2.php"> View Faculty List</a></strong> 
    </li>
   
     <li class="nav-item">
       <strong>  <a class="nav-link" href="feedback.php">Feedback</a></strong> 
    </li> 
    <li class="nav-item">
        <strong> <a class="nav-link" href="apass.php">Change Password</a></strong>
    </li>
     </li>
     <li class="nav-item">
         <strong> <a class="nav-link" href="logout.php">Logout</a></strong> 
    </li>
    
    </ul>
</nav>