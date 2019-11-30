<?php
require 'dhead.php';
require 'connection.php';
$dept=$_SESSION['dept'];
$sql = "select * from student where dept='".$dept."'";
 if($result1 = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result1) > 0){
        ?>
<div class="container"><br>
    <div class="row">
        <div class="col-md-10"></div>
       

        <!--<form method="get" action="del.php"><input type="text" name="usnn"/><input type="hidden" name="dept" value="$dept"/>-->

</form>
    </div>
    <div class="h2 text-center">Student Details</div>
<table class="table table-bordered"><tr>
                <th>usnno</th>
                 <th>email</th>
                 <th>degree</th>
                 <th>dept</th>
            </tr>
        <?php
        while($row = mysqli_fetch_array($result1)){
  ?>
            <tr><td><?php echo strtoupper($row['usnno']) ?>
            </td><td><?php echo strtoupper($row['email']) ?>
            </td><td><?php echo  strtoupper($row['degree']) ?>
            </td><td><?php echo  strtoupper($row['dept']) ?>
          
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
    
