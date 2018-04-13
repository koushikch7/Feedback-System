<?php
require 'dhead.php';
require 'connection.php';
$sql = "select * from student";
 if($result1 = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result1) > 0){
        ?>
<table class="table table-bordered"><tr>
                <th>usnno</th>
                 <th>pass</th>
                 <th>name</th>
                 <th>email</th>
                <th>phno</th>
                 <th>year</th>
                 <th>degree</th>
                 <th>dept</th>
                <th>sem</th>
                <th>sec</th>
            </tr>
        <?php
        while($row = mysqli_fetch_array($result1)){
  ?>
            <tr><td><?php echo $row['usnno'] ?>
            </td><td><?php echo $row['pass'] ?>
            </td><td><?php echo $row['name'] ?>
            </td><td><?php echo $row['email'] ?>
            </td><td><?php echo  $row['phno'] ?>
            </td><td><?php echo  $row['year'] ?>
            </td><td><?php echo  $row['degree'] ?>
            </td><td><?php echo  $row['dept'] ?>
            </td><td><?php echo  $row['sem'] ?>
            </td><td><?php echo  $row['sec'] ?>
          
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