<?php
require 'ahead.php';
require 'connection.php';
$sql = "select * from dept";
 if($result1 = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result1) > 0){
        ?>
<table class="table table-bordered"><tr>
                 <th>name</th>
                 <th>email</th>
                 <th>pass</th>
                <th>dept</th>
            </tr>
        <?php
        while($row = mysqli_fetch_array($result1)){
  ?>
  <tr><td><?php echo $row['name'] ?>
  </td><td><?php echo $row['email'] ?>
  </td><td><?php echo $row['pass'] ?>
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