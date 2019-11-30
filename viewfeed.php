<?php
require 'ahead.php';
require 'connection.php';

$result = mysqli_query($con, "select * from subject" );
$result1 = mysqli_query($con, "select * from subject" );
?>
<input type="hidden" id="usnno" value="<?php echo $usnno; ?>" >
<div class="container" >
    
<br><div class="text-center h2">EVALUATION OF THE FORM</div>

    
    <?php
$sql = "select feedid,sname,fname,avg(rfeed),avg(ifeed),avg(pfeed),avg(afeed),avg(sfeed),avg(crfeed),avg(bfeed),avg(ffeed),avg(cofeed),avg(vfeed),avg(scover) from feedback group by sname";
 if($result2 = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result2) > 0){
        ?>
<table class="table table-bordered"><tr>
                 <div class="text-center h3">TEACHING EVALUATION</div>
                 <th>Subject Name</th>
                 <th>Faculty Name</th>
                 <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                 <th>6</th>
                 <th>7</th>
                 <th>8</th>
                 <th>9</th>
                  <th>10</th>
                  <th>Syllabus Covered</th>
                  


            </tr>
        <?php
        
        while($row = mysqli_fetch_array($result2)){
  ?>
 <tr>
  <td><?php echo $row['sname'] ?></td>
  <td><?php echo $row['fname'] ?></td>
  <td><?php echo $row[3] ?>
  </td>
  <td><?php echo $row[4] ?>
  </td>
  <td><?php echo  $row[5] ?>
      </td>
  <td><?php echo  $row[6] ?>
          </td>
  <td><?php echo $row[7] ?>
  </td>
  <td><?php echo $row[8] ?>
  </td>
  <td><?php echo  $row[9] ?>
      </td>
  <td><?php echo  $row[10] ?>
          </td>
  <td><?php echo $row[11] ?>
  </td>
  <td><?php echo $row[12] ?>
  </td>
  <td><?php echo  $row[13] ?>
      
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
    
    
     <?php
$sql = "select feedid1,lname,fname,avg(rfeed),avg(ifeed),avg(pfeed),avg(afeed),avg(sfeed),avg(crfeed),avg(bfeed),avg(ffeed),avg(cofeed),avg(vfeed),avg(scover) from feedback1 group by lname";
 if($result3 = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result3) > 0){
        ?>
    
<table class="table table-bordered"><tr>
                 <div class="text-center h3">LAB EVALUATION</div>
                 <th>Lab Name</th>
                 <th>Faculty Name</th>
                 <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                 <th>6</th>
                 <th>7</th>
                 <th>8</th>
                 <th>9</th>
                  <th>10</th>
                  <th>Syllabus Covered</th>
                  


            </tr>
        <?php
        
        while($row = mysqli_fetch_array($result3)){
  ?>
 
  <tr>
  <td><?php echo $row['lname'] ?></td>
  <td><?php echo $row['fname'] ?></td>
  <td><?php echo $row[3] ?></td>
  <td><?php echo $row[4] ?></td>
  <td><?php echo  $row[5] ?></td>
  <td><?php echo  $row[6] ?></td>
  <td><?php echo $row[7] ?></td>
  <td><?php echo $row[8] ?></td>
  <td><?php echo  $row[9] ?></td>
  <td><?php echo  $row[10] ?></td>
  <td><?php echo $row[11] ?></td>
  <td><?php echo $row[12] ?></td>
  <td><?php echo  $row[13] ?></td>
  </tr>
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

    
     <?php
$sql = "select avg(libfeed) from feedback2";
 if($result3 = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result3) > 0){
        ?>
    <table class="table table-bordered"><tr>
                 <div class="text-center h3">LIBRARY EVALUATION</div>
                 <th>Name of the Section</th>
                  <th>Grade Average</th>
               </tr>
        <?php
        
        while($row = mysqli_fetch_array($result3)){
  ?>
 
  <tr>
      <td>Library Department</td>
  <td><?php echo $row[0] ?></td>
  </tr>
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
    
    
    
    
    
<?php
$sql = "select avg(adminfeed),avg(examfeed),avg(accfeed),avg(cerfeed) from feedback3";
 if($result4 = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result4) > 0){
        ?>
<table class="table table-bordered"><tr>
                 <div class="text-center h3">ADMIN EVALUATION</div>
                 <th>Name of the Section</th>
                  <th>Grade Average</th>
               </tr>
        <?php
        
        while($row = mysqli_fetch_array($result4)){
  ?>
 
  <tr>
      <td>Admission</td>
  <td><?php echo $row[0] ?></td>
  </tr>
  <tr>
      <td>Examination</td>
  <td><?php echo $row[1] ?></td>
  </tr>
  <tr>
      <td>Accounts</td>
  <td><?php echo $row[2] ?></td>
  </tr>
  <tr>
      <td>Certificate</td>
  <td><?php echo $row[3] ?></td>
  </tr>
  
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






