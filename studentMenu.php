<?php
require 'shead.php';

?>
<div class="contaier">
    <div class="container" style="margin-top: 100px;box-shadow: 1px slategrey ">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
           
            <div class="card">
                <div class="card-heading"></div>
                <div class="card-body">
                     
                    <div class="">Choose Details</div>
                    <form action="studentMenu1.php">
                    <div class="form-group">
                        <label>Academic Year</label>
                        <select class="form-control" name="ayear" required>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
    
                        </select>
                         
                    
                     <div class="form-group">
                        <label>Semester</label>
                        <select class="form-control" name="sem" required>
                        <option value=""><--select semester--></option>
                        <option >1</option>     
                        <option >2</option>
                        <option >3</option>
                        <option >4</option>
                        <option >5</option>
                        <option >6</option>
                        <option >7</option>
                        <option >8</option>
                        </select>
                    </div>
                        <div class="form-group">
                        <label>Selection</label>
                        <select class="form-control" name="sec" required>
                            <option value=""><--select selection--></option>
                            <option value="A">A</option>  
                            <option value="B">B</option>  
                            <option value="C">C</option>  
                            <option value="D">D</option>  
                            <option value="E">E</option>  
                            <option value="F">F</option>  
                            <option value="G">G</option>  
                            <option value="H">H</option>  
                            <option value="I">I</option>  
                            <option value="J">J</option>  
                            <option value="K">K</option>  
                            <option value="L">L</option>  
                            <option value="M">M</option>  
                        </select>
                    </div>
                        
                        <input type="submit" value="Enter" class="btn btn-info btn-block">
                </div>
            </div>
        </div>
            </div>
            </div>
    </div>
</div>
