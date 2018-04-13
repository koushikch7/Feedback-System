<?php
require 'connection.php';
$dept = $_GET['dept'];
$result1 = mysqli_query($con,"select * from faculty where dept='".$dept."'");

while ($row = mysqli_fetch_assoc($result1))
        {?>
<option value=" <?php echo $row ['facid']?> "> <?php echo $row ['name'] ?> </option>
        <?php
        
        }
?>