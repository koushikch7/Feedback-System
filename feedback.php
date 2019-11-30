<?php
require 'ahead.php';
require 'connection.php';
?>
<script src="js/feedback.js"></script>
<div class="container-fluid" style="margin-top: 5px;">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body" style="height: 75vh">
                    <input type="button" class="btn btn-primary btn-block btn-lg" id="drbtn" value="DEPARTMENT REPORT"  style="margin-top: 20%;"/>
                    <input type="button"  class="btn btn-primary btn-block btn-lg" id="frbtn"  value="FACULTY REPORT" style="margin-top: 20%;"/>
                    <input type="button"  class="btn btn-primary btn-block btn-lg" id="srbtn" value="SECTION REPORT" style="margin-top: 20%;" />
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div id="dr">
                <div class="card">
                    <div class="card-heading h5 text-center">DEPARTMENT REPORT</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group input-group-sm">
                                    <!--<label>Academic Year</label>-->
                                    <select id="ayear" class="form-control"><option selected disabled hidden>-----Select Academic Year-----</option><option>2018</option><option>2019</option><option>2020</option><option>2021</option><option>2022</option></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group input-group-sm">
                                    <!--<label>Degree</label>-->
                                    <select id="degree" class="form-control"><option selected disabled hidden>-----Select Degree-----</option><option value="BE">BE</option></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group input-group-sm">
                                    <!--<label>Department</label>-->
                                    <select id="dept" class="form-control"><option selected disabled hidden>-----Select Department-----</option><option value="CSE">CSE</option><option value="ECE">ECE</option><option value="CIVIL">CIVIL</option><option value="MECH">MECH</option><option value="EEE">EEE</option><option value="IS">IS</option><option value="C-C">C-C</option><option value="P-C">P-C</option></select>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <table class="table table-bordered table-striped">
                                <tr><th>RATING</th><th>NUMBER OF FACULTIES</th></tr>
                                <tr><td><a href="#" id="a9to10">9-10</a></td><td id="9to10"></td></tr>
                                <tr><td><a href="#" id="a8to9">8-9</a></td><td id="8to9"></td></tr>
                                <tr><td><a href="#" id="a7to8">7-8</a></td><td id="7to8"></td></tr>
                                <tr><td><a href="#" id="abelow7"><7</a></td><td id="below7"></td></tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fr">

                <div class="card">
                    <div class="card-heading h5 text-center">FACULTY REPORT</div>                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group input-group-sm">
                                    <!--<label>Faculty Name</label>-->
                                    <select id="frfname" class="form-control">
                                        <?php
                                        require 'connection.php';
//                                        $dept = $_GET['dept'];
                                        $result1 = mysqli_query($con, "select * from faculty");
                                        ?> 
                                        <option selected disabled hidden>-----------Select Faculties----------</option>
                                            <?php
                                        while ($row = mysqli_fetch_assoc($result1)) {
                                            ?>
                                        <option value="<?php echo $row ['name']  ?>"> <?php echo strtoupper($row ['name']) ?> </option>
                                            <?php
                                        }
                                        ?>
                                      
                                        
                                    </select>                                 
                                </div>                                
                            </div>
                            <div class="col-md-4">
                                <div class="form-group input-group-sm">
                                    <!--<label>Degree</label>-->
                                    
                                    <select id="frdegree" class="form-control">
                                        <option selected disabled hidden>-----------Select Degree----------</option>
                                        <option value="BE">BE</option></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group input-group-sm">
                                    <!--<label>Department</label>-->
                                    <select id="frdept" class="form-control"><option selected disabled hidden>------------Select Department----------</option><option value="CSE">CSE</option><option value="ECE">ECE</option><option value="CIVIL">CIVIL</option><option value="MECH">MECH</option><option value="EEE">EEE</option><option value="IS">IS</option><option value="MATHS">MATHS</option><option value="P-C">P-C</option><option value="C-C">C-C</option></select>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <table class="table table-bordered table-striped" id="frtable">


                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sr">

                <div class="card">
                    <div class="card-heading h5 text-center">SECTION REPORT</div>
                    <div class="card-body">
                        <form action="feedback2.php" >
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <div class="form-group input-group-sm">
                                    <!--<label>Batch</label>-->
                                    <select id="srayear" class="form-control" name="ayear">
                                        <option selected disabled hidden>Academic Year</option><option>2018</option><option>2019</option><option>2020</option><option>2021</option><option>2022</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group input-group-sm">
                                    <!--<label>Degree</label>-->
                                    <select id="srdegree" class="form-control" name="degree"><option selected disabled hidden>Degree</option><option value="BE">BE</option></select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group input-group-sm">
                                    <!--<label>Department</label>-->
                                    <select id="srdept" class="form-control" name="dept"><option selected disabled hidden>Department</option><option value="CSE">CSE</option><option value="ECE">ECE</option><option value="CIVIL">CIVIL</option><option value="MECH">MECH</option><option value="EEE">EEE</option><option value="IS">IS</option><option value="C-C">C-C</option><option value="P-C">P-C</option></select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                 <div class="form-group input-group-sm">
                                    <!--<label>Semester</label>-->
                                    <select id="srsem" class="form-control" name="sem"><option selected disabled hidden>Semester</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option></select>
                                
                                 </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group input-group-sm">
                                    <!--<label>Section</label>-->
                                    <select id="srsec" class="form-control" name="sec">
                                      <?php
                                        
                                        $sec = $_GET['sec'];
                                        $result1 = mysqli_query($con, "select DISTINCT(sec) from addsem order by sec");
                                        ?> 
                                        <option selected disabled hidden>Select</option>
                                            <?php
                                        while ($row = mysqli_fetch_assoc($result1)) {
                                            ?>
                                        <option value="<?php echo $row ['sec']  ?>"> <?php echo strtoupper($row ['sec']) ?> </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                            <div class="text-center">
                                
                            <input type="submit" value="View Section Report" class="btn btn-primary">
                            
                        </div>
                        </form>
                        <div class="container">
                            <div class="secreport">

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div id="factavg"></div>
        </div>
    </div>
</div>