<?php
require 'connection.php';
$usnn = $_GET['usnn'];
$de = $_GET['dept'];
$sql = "DELETE FROM `college`.`student` WHERE `usnno`='".$usnn."' AND `dept`='".$de."' ";
if (mysqli_query($con,$sql) === TRUE) {
    echo 'Record deleted successfully';
} else {
    echo 'Error deleting record: ' . $con->error;
}

?>