<?php
session_start();
if(isset($_SESSION['role'])){
	if($_SESSION['role']!='dept')
		header('Location: index.php');
}
else
	header('Location: logout.php');

?>
<?php require 'xampp.php';?>
<nav class="navbar navbar-expand-sm navbar-default">
  <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link" href="depthome.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="addsem.php">Add Semester</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="addstu.php">Add Student</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="viewstu.php">View Student List</a>
    </li>
     <li class="nav-item">
         <a class="nav-link" href="deppas.php">Change Password</a>
    </li>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
    <ul>
    </nav>