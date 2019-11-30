<?php
require 'ahead.php';
require 'connection.php';
$sql = "select * from faculty";
 if($result1 = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result1) > 0){
        ?>
<br>
<div class="container">
    <div class="h2 text-center">Faculty Details</div>
<table class="table table-bordered"><tr>
                 <th>NAME</th>
                 <th>EMAIL</th>
                
                  <!--<th>PHONE#</th>-->
                
                <th>DEPT</th>
            </tr>
        <?php
        while($row = mysqli_fetch_array($result1)){
  ?>
            <tr><td><?php echo strtoupper($row['name']) ?>
                </td><td><?php echo strtoupper($row['email']) ?>
  <!-- </td><td><?php echo $row['phno'] ?> -->

      </td><td><?php echo  $row['dept'] ?>
  </td></tr>
  <?php
        }
        ?>
        </table>
            <?php
    }
    else
        {
        echo "No records matching your query were found.";
    }
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
?>
</div>