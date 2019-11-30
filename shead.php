<?php
session_start();
if(isset($_SESSION['role'])){
	if($_SESSION['role']!='student')
		header('Location: index.php');
}
else
	header('Location: logout.php');

?>
<?php 
require 'xampp.php';?>
