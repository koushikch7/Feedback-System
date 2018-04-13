<?php
require 'ahead.php';
?>
<div class="container" >
    <div class="row">
        <div class="col-md-3">
        </div>
         <div class="col-md-6">
<?php

$msg =$_GET['msg'];
$color =$_GET['color'];
if($color == "red")
{
?>
       <div class="text-center h4 bg-danger text-white" style="margin-top: 20%; border-radius: 5px; padding:5px;"><?php echo $msg?></div>
       <?php 
}elseif($color == "green")
{
 ?>
       <div class="text-center h4 bg-success text-white" style="margin-top: 20%; border-radius: 5px;padding:5px;"><?php echo $msg?></div>
       <?php    
}
?>