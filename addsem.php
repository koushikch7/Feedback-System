<?php
require 'dhead.php';
session_start();
$dept = $_SESSION['dept'] ;
?>

<script>  
$(document).ready(function(){
    
    $("#assignsubject").hide();
       $("#assignlab").hide();
    
 $("#year").on("change",function(){
    if($(this).val() == "1st"){
        $("#sem").html("<option>1</option><option>2</option>");
    }
    else  if($(this).val() == "2nd"){
        $("#sem").html("<option>3</option><option>4</option>");
    }
    else  if($(this).val() == "3rd"){
        $("#sem").html("<option>5</option><option>6</option>");
    }
    else if($(this).val() == "4th") {
     $("#sem").html("<option>7</option><option>8</option>");   
    }
    });
    
   $("#select").on("click",function(){
       var year = $("#year").val();
       var degree = $("#degree").val();
       var dept = $("#dept").val();
       var sem = $("#sem").val();
       var sec = $("#sec").val();
       var theory = $("#theory").val();
       var lab = $("#lab").val();
             if(year == "" || degree == "" || dept =="" || sem == "" || sec == "" || theory == "" || lab == "")
             {
                 alert("fill all the details");
             }else{
                 var url = "addsem1.php?year="+year+"&degree="+degree+"&dept="+dept+"&sem="+sem+"&sec="+sec+"&theory="+theory+"&lab="+lab;
            $.get(url, function(data, status){
                      if(status == "success"){
                        alert("semester added successfully"); 
                       $("#year").prop('disabled', true);
                       $("#degree").prop('disabled', true);
                       $("#dept").prop('disabled', true);
                       $("#sem").prop('disabled', true);
                       $("#sec").prop('disabled', true);
                       $("#theory").prop('disabled', true);
                       $("#lab").prop('disabled', true);
                      var url2="getfac.php?dept="+$("#dept").val();
                      $.get(url2, function(data1, status1){
                          alert(data1+status1);
                          if(status1 == "success"){
                              $("#facid").html(data1);
                          $("#fid1").html(data1);
                          $("#fid2").html(data1);
                          $("#fid3").html(data1);
                          $("#fid4").html(data1);
                          $("#fid5").html(data1);
                          $("#fid6").html(data1);
                          $("#fid7").html(data1);
                          $("#fid8").html(data1);
                          $("#fid9").html(data1);
                          $("#fid10").html(data1);
                          $("#assignsubject").show();
                          $("#select").attr("disabled","disabled");
                      }
                      });
                      }
                      else
                      {
                          alert("semester already exsists");
                      }
                  
                  });
             }
             
   }); 
   
   $("#submit").on("click",function(){
       var year = $("#year").val();
       var degree = $("#degree").val();
       var dept = $("#dept").val();
       var sem = $("#sem").val();
       var sec = $("#sec").val();
       var theory = $("#theory").val();
       var lab = $("#lab").val();
       var scode1 = $("#scode1").val();
       var sname1 = $("#sname1").val();
       var fid1 = $("#fid1").val();
       var scode2 = $("#scode2").val();
       var sname2 = $("#sname2").val();
       var fid2 = $("#fid2").val();
       var scode3 = $("#scode3").val();
       var sname3 = $("#sname3").val();
       var fid3 = $("#fid3").val();
       var scode4 = $("#scode4").val();
       var sname4 = $("#sname4").val();
       var fid4 = $("#fid4").val();
       var scode5 = $("#scode5").val();
       var sname5 = $("#sname5").val();
       var fid5 = $("#fid5").val();
       var scode6 = $("#scode6").val();
       var sname6 = $("#sname6").val();
       var fid6 = $("#fid6").val();
    
             if(scode1 == "" || sname1 == "" || fid1 =="" || scode2 == "" || sname2 == "" || fid2 == "" || scode3 == "" || sname3 == "" || fid3 == "" || scode4 == "" || sname4 == "" || fid4 == "" || scode5 == "" || sname5 == "" || fid5 == "" || scode6 == "" || sname6 == "" || fid6 == "")
             {
                 alert("fill all the details");
             }
             else{
                 var url3 = "getfac1.php?year="+year+"&degree="+degree+"&dept="+dept+"&sem="+sem+"&sec="+sec+"&theory="+theory+"&lab="+lab+"&scode="+scode1+"&sname="+sname1+"&fid="+fid1;
                var url4 = "getfac1.php?year="+year+"&degree="+degree+"&dept="+dept+"&sem="+sem+"&sec="+sec+"&theory="+theory+"&lab="+lab+"&scode="+scode2+"&sname="+sname2+"&fid="+fid2;
                 var url5 = "getfac1.php?year="+year+"&degree="+degree+"&dept="+dept+"&sem="+sem+"&sec="+sec+"&theory="+theory+"&lab="+lab+"&scode="+scode3+"&sname="+sname3+"&fid="+fid3;
                 var url6 = "getfac1.php?year="+year+"&degree="+degree+"&dept="+dept+"&sem="+sem+"&sec="+sec+"&theory="+theory+"&lab="+lab+"&scode="+scode4+"&sname="+sname4+"&fid="+fid4;
                 var url7 = "getfac1.php?year="+year+"&degree="+degree+"&dept="+dept+"&sem="+sem+"&sec="+sec+"&theory="+theory+"&lab="+lab+"&scode="+scode5+"&sname="+sname5+"&fid="+fid5;
                 var url8 = "getfac1.php?year="+year+"&degree="+degree+"&dept="+dept+"&sem="+sem+"&sec="+sec+"&theory="+theory+"&lab="+lab+"&scode="+scode6+"&sname="+sname6+"&fid="+fid6;
            $.get(url3, function(data2, status2){
             });
             $.get(url4, function(data2, status2){
             });
             $.get(url5, function(data2, status2){
             });
             $.get(url6, function(data2, status2){
             });
             $.get(url7, function(data2, status2){
             });
             $.get(url8, function(data2, status2){
             });  
             $("#assignsubject").hide();
                $("#assignlab").show();
               }
             }); 
   
     $("#submit1").on("click",function(){
       var year = $("#year").val();
       var degree = $("#degree").val();
       var dept = $("#dept").val();
       var sem = $("#sem").val();
       var sec = $("#sec").val();
       var theory = $("#theory").val();
       var lab = $("#lab").val();
       var lid1 = $("#lid1").val();
       var lname1 = $("#lname1").val();
       var fid7 = $("#fid7").val();
       var lid2 = $("#lid2").val();
       var lname2 = $("#lname2").val();
       var fid8 = $("#fid8").val();
       var lid3 = $("#lid3").val();
       var lname3 = $("#lname3").val();
       var fid9 = $("#fid9").val();
       var lid4 = $("#lid4").val();
       var lname4 = $("#lname4").val();
       var fid10 = $("#fid10").val();
    
             if(lid1 == "" || lname1 == "" || fid7 =="" || lid2 == "" || lname2 == "" || fid8 == "" || lid3 == "" || lname3 == "" || fid9 == "" || lid4 == "" || lname4 == "" || fid10 == "")
             {
                 alert("fill all the details");
             }
             else{
                 var url9 = "getfac2.php?year="+year+"&degree="+degree+"&dept="+dept+"&sem="+sem+"&sec="+sec+"&theory="+theory+"&lab="+lab+"&lid="+lid1+"&lname="+lname1+"&fid="+fid7;
                var url10 = "getfac2.php?year="+year+"&degree="+degree+"&dept="+dept+"&sem="+sem+"&sec="+sec+"&theory="+theory+"&lab="+lab+"&lid="+lid2+"&lname="+lname2+"&fid="+fid8;
                 var url11 = "getfac2.php?year="+year+"&degree="+degree+"&dept="+dept+"&sem="+sem+"&sec="+sec+"&theory="+theory+"&lab="+lab+"&lid="+lid3+"&lname="+lname3+"&fid="+fid9;
                 var url12 = "getfac2.php?year="+year+"&degree="+degree+"&dept="+dept+"&sem="+sem+"&sec="+sec+"&theory="+theory+"&lab="+lab+"&lid="+lid4+"&lname="+lname4+"&fid="+fid10;
                 
            $.get(url9, function(data3, status3){
             });
             $.get(url10, function(data3, status3){
             });
             $.get(url11, function(data3, status3){
             });
             $.get(url12, function(data3, status3){
                 alert("Lab Details Added Successfully");
                  $("#assignlab").hide();
             });  
               }
             }); 
   
   
   
   
   
});
</script>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            <div h1>SEMESTER DETAILS</div><br>
            <div id="addsubject">
                <div class="form-group">
      <label>YEAR:</label>
      <select id="year" class="form-control" required="">
     <option value=""><--select year--></option>
     <option value="1st">1</option>
  <option value="2nd">2</option>
  <option value="3rd">3</option>
  <option value="4th">4</option>
 </select>  
 </div>
     <div class="form-group">
      <label>DEGREE:</label>
 <select id="degree" class="form-control" required="">
     <option value=""><--select degree--></option>
  <option value="btech">BE/BTECH</option>
</select>
 </div>
     <div class="form-group">
      <label>DEPARTMENT:</label>
      <input type="text" id="dept" class="form-control" name="dept" readonly="" value="<?php echo $dept; ?>"  /> 
 </div>
      <div class="form-group">
      <label>SEMESTER:</label>
       <select id="sem" class="form-control" required="">
           <option value=""><--select semester--></option>
    
 </select> 
  
 </div>         
            <div class="form-group">
      <label>SECTION:</label>
 <select id="sec" class="form-control" required="">
     <option value=""><--select section--></option>
     <option value="a">A</option>
  <option value="b">B</option>
  <option value="c">C</option>
  <option value="d">D</option>
  <option value="e">E</option>
 </select>  
 </div>     
                <div class="form-group">
      <label>#THEORY CLASSES:</label>
 <select id="theory" class="form-control" required="">
     <option value=""><--select theory classes--></option>
     <option value="4 Subjects">4</option>
  <option value="5 Subjects">5</option>
  <option value="6 Subjects">6</option>
 </select>  
 </div>
                <div class="form-group">
      <label>#LABORATORIES:</label>
 <select id="lab" class="form-control" required="">
     <option value=""><--select labs--></option>
     <option value="1 Lab">1</option>
  <option value="2 Labs">2</option>
 </select>  
 </div>
                <input id="select" class="btn btn-primary btn-block" type="submit" value="SELECT"/>
              </div>
            </div>
         <div class="col-md-8">
        <div id="assignsubject">
       
            <div h1>SUBJECT ASSIGNMENT DETAILS</div><br>

                <div class="form-group">
            <table class="table table-bordered"><tr>
                 <th>SUBJECT CODE</th>
                 <th>SUBJECT NAME</th>
                 <th>FACULTY NAME</th>
            </tr>
<tr><td><input id="scode1" class="form-control" type="text" name="scode1"/></td>
    <td><input id="sname1" class="form-control" type="text" name="sname1"/></td>
    <td><select id="fid1" class="form-control" required="">
        <option value=""><--select faculty--></option>
        </select> </td></tr>
<tr><td><input id="scode2" class="form-control" type="text" name="scode2"/></td>
    <td><input id="sname2" class="form-control" type="text" name="sname2"/></td>
    <td><select id="fid2" class="form-control" required="">
        <option value=""><--select faculty--></option>
        </select> </td></tr>
<tr><td><input id="scode3" class="form-control" type="text" name="scode3"/></td>
    <td><input id="sname3" class="form-control" type="text" name="sname3"/></td>
    <td><select id="fid3" class="form-control" required="">
        <option value=""><--select faculty--></option>
        </select> </td></tr>
<tr><td><input id="scode4" class="form-control" type="text" name="scode4"/></td>
    <td><input id="sname4" class="form-control" type="text" name="sname4"/></td>
    <td><select id="fid4" class="form-control" required="">
        <option value=""><--select faculty--></option>
        </select> </td></tr>
<tr><td><input id="scode5" class="form-control" type="text" name="scode5"/></td>
    <td><input id="sname5" class="form-control" type="text" name="sname5"/></td>
    <td><select id="fid5" class="form-control" required="">
        <option value=""><--select faculty--></option>
        </select> </td></tr>
<tr><td><input id="scode6" class="form-control" type="text" name="scode6"/></td>
    <td><input id="sname6" class="form-control" type="text" name="sname6"/></td>
    <td><select id="fid6" class="form-control" required="">
        <option value=""><--select faculty--></option>
        </select> </td></tr>
</table>
<input id="submit" class="btn btn-primary btn-block" type="submit" value="SUBMIT"/>
</div>
</div>
             
<div id="assignlab">
        <div>
            <div h1>LAB ASSIGNMENT DETAILS</div><br>

                <div class="form-group">
            <table class="table table-bordered"><tr>
                 <th>LAB ID</th>
                 <th>LAB NAME</th>
                 <th>FACULTY NAME</th>
            </tr>
<tr><td><input id="lid1" class="form-control" type="text" name="lid1"/></td>
    <td><input id="lname1" class="form-control" type="text" name="lname1"/></td>
    <td><select id="fid7" class="form-control" required="">
        <option value=""><--select faculty--></option>
        </select> </td></tr>
<tr><td><input id="lid2" class="form-control" type="text" name="lid2"/></td>
    <td><input id="lname2" class="form-control" type="text" name="lname2"/></td>
    <td><select id="fid8" class="form-control" required="">
        <option value=""><--select faculty--></option>
        </select> </td></tr>
<tr><td><input id="lid3" class="form-control" type="text" name="lid3"/></td>
    <td><input id="lname3" class="form-control" type="text" name="lname3"/></td>
    <td><select id="fid9" class="form-control" required="">
        <option value=""><--select faculty--></option>
        </select> </td></tr>
<tr><td><input id="lid4" class="form-control" type="text" name="lid4"/></td>
    <td><input id="lname4" class="form-control" type="text" name="lname4"/></td>
    <td><select id="fid10" class="form-control" required="">
        <option value=""><--select faculty--></option>
        </select> </td></tr>
</table>
<input id="submit1" class="btn btn-primary btn-block" type="submit" value="SUBMIT"/>
</div>
</div>
</div>
</div>
</div>