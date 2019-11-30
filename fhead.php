<?php
session_start();
if(isset($_SESSION['role'])){
	if($_SESSION['role']!='Faculty')
		header('Location: index.php');
}
else
	header('Location: logout.php');

?>
<?php require 'xampp.php';
$nami = $_SESSION['name']; ?><br>
<h3 align="center" >Welcome to feedback page Mr/Mrs.<u><strong><?php echo strtoupper($nami); ?></u>,</strong> Have a good day.</h3>