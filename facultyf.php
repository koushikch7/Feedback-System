
<?php
require 'fhead.php';
require 'connection.php';
$namee = $_SESSION['name'];
?>
<script src="js/feedback.js"></script>
<div class="container-fluid" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-3">
            
                    <input type="button" class="btn btn-primary btn-block btn-lg" id="frbtn"  value="FACULTY REPORT" style="margin-top: 20%;"/>
                    <a href="cfaculty.php"> <input type="button" class="btn btn-primary btn-block btn-lg" id="frbtn"  value="CHANGE PASSWORD" style="margin-top: 20%;"/></a>
        </div>
        <div class="col-md-8">
            <div id="fr">

                <div class="card">
                    <div class="card-heading h5 text-center">FACULTY REPORT</div>                    
                    <div class="card-body">
                     
                        <div class="row">
                                    <!--<label>Faculty Name</label>-->
                                    <select hidden="" id="frfname" class="form-control">
                                        <option hidden="" readonly="" value="<?php echo $namee; ?>" > <?php echo strtoupper($namee) ?> </option>
                                   </select>                                 
                                
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
                                    <select id="frdept" class="form-control"><option selected disabled hidden>------------Select Department----------</option><option value="CSE">CSE</option><option value="ECE">ECE</option><option value="CIVIL">CIVIL</option><option value="MECH">MECH</option><option value="EEE">EEE</option><option value="IS">IS</option><option value="MATHS">MATHS</option><option value="C-C">C-C</option><option value="P-C">P-C</option></select>
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
            <div id="factavg"></div>
        </div>
    </div>
</div>