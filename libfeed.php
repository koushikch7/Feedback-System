<?php
require 'shome.php';
require 'connection.php';
?>
<script>
$(document).ready(function(){
   var opt="<option value=''> </option><option>10</option><option>9</option><option>8</option><option>7</option><option>6</option><option>5</option><option>4</option><option>3</option>";
$("#lq1").html(opt);
$("#lq2").html(opt);
$("#lq3").html(opt);
$("#lq4").html(opt);
$("#lq5").html(opt);
$("#lq6").html(opt);

$("#ads1").html(opt);
$("#exs1").html(opt);
$("#acs1").html(opt);
$("#css1").html(opt);


$("#ads2").html(opt);
$("#exs2").html(opt);
$("#acs2").html(opt);
$("#css2").html(opt);


$("#ads3").html(opt);
$("#exs3").html(opt);
$("#acs3").html(opt);
$("#css3").html(opt);


$("#ads4").html(opt);
$("#exs4").html(opt);
$("#acs4").html(opt);
$("#css4").html(opt);

 $("select").on("change", function () {
            var tm1 = parseInt($("#lq1").val()) + parseInt($("#lq2").val()) + parseInt($("#lq3").val()) + parseInt($("#lq4").val()) + parseInt($("#lq5").val()) + parseInt($("#lq6").val()) ;
            $("#tm1").html(tm1);
            $("#am1").html(tm1 / 6);

            var tm2 = parseInt($("#ads1").val()) + parseInt($("#ads2").val()) + parseInt($("#ads3").val()) + parseInt($("#ads4").val()) ;
            $("#tm2").html(tm2);
            $("#am2").html(tm2 / 4);
  
           var tm3 = parseInt($("#exs1").val()) + parseInt($("#exs2").val()) + parseInt($("#exs3").val()) + parseInt($("#exs4").val()) ;
            $("#tm3").html(tm3);
            $("#am3").html(tm3 / 4);
            
            var tm4 = parseInt($("#acs1").val()) + parseInt($("#acs2").val()) + parseInt($("#acs3").val()) + parseInt($("#acs4").val()) ;
            $("#tm4").html(tm4);
            $("#am4").html(tm4 / 4);
            
            var tm5 = parseInt($("#css1").val()) + parseInt($("#css2").val()) + parseInt($("#css3").val()) + parseInt($("#css4").val()) ;
            $("#tm5").html(tm5);
            $("#am5").html(tm5 / 4);


        });

 $("#next").on("click", function () {
           
            var lq1 = $("#lq1").val();
            var lq2 = $("#lq2").val();
            var lq3 = $("#lq3").val();
            var lq4 = $("#lq4").val();
            var lq5 = $("#lq5").val();
            var lq6 = $("#lq6").val();
            

            var ads1 = $("#ads1").val();
            var ads2 = $("#ads2").val();
            var ads3 = $("#ads3").val();
            var ads4 = $("#ads4").val();

            var exs1 = $("#exs1").val();
            var exs2 = $("#exs2").val();
            var exs3 = $("#exs3").val();
            var exs4 = $("#exs4").val();

            var acs1 = $("#acs1").val();
            var acs2 = $("#acs2").val();
            var acs3 = $("#acs3").val();
            var acs4 = $("#acs4").val();

            var css1 = $("#css1").val();
            var css2 = $("#css2").val();
            var css3 = $("#css3").val();
            var css4 = $("#css4").val();

           
            var sugg = $("#sugg").val();
            var usnno = $("#usnno").val();
            var dept = $("#dept").val();
            var ayear = $("#ayear").val();
            var sem = $("#sem").val();
            var sec = $("#sec").val();
            var degree = $("#degree").val();


             if (sugg='' || $.trim($("#tm1").html())==''|| $.trim($("#tm2").html())=='' || $.trim($("#tm3").html())=='' || $.trim($("#tm4").html())=='' || $.trim($("#tm5").html())=='' )
            {
                alert("Fill all the fields");
            }else{

            var url3 = "setfeed3.php?dept="+ dept +"&ayear="+ayear+"&sem="+sem+"&sec="+sec+"&degree="+degree+"&lq1="+lq1+"&lq2="+lq2+"&lq3="+lq3+"&lq4="+lq4+"&lq5="+lq5+"&lq6="+lq6+"&ads1="+ads1+"&ads2="+ads2+"&ads3="+ads3+"&ads4="+ads4+"&exs1="+exs1+"&exs2="+exs2+"&exs3="+exs3+"&exs4="+exs4+"&acs1="+acs1+"&acs2="+acs2+"&acs3="+acs3+"&acs4="+acs4+"&css1="+css1+"&css2="+css2+"&css3="+css3+"&css4="+css4+"&usnno="+usnno+"&sugg="+sugg;
           

            $.get(url3, function (data2, status2) {
            });
           window.location.href='adminfeed.php';
            }
        });



});

</script>
<?php
$ayear = $_SESSION["ayear"];
$year = $_SESSION["year"];
$degree = $_SESSION["degree"];
$sec = $_SESSION["sec"];
$sem = $_SESSION["sem"];       
$dept = $_SESSION['dept'] ;
$usnno = $_SESSION['usnno'];
$result = mysqli_query($con, "select * from lab where degree='".$degree."' and dept='".$dept."'" );
$result1 = mysqli_query($con, "select * from lab where degree='".$degree."' and dept='".$dept."'" );
?>
<input type="hidden" id="usnno" value="<?php echo $usnno; ?>" >
<input type="hidden" id="dept" value="<?php echo $dept; ?>" >
<input type="hidden" id="ayear" value="<?php echo $ayear; ?>" >
<input type="hidden" id="sem" value="<?php echo $sem; ?>" >
<input type="hidden" id="sec" value="<?php echo $sec; ?>" >
<input type="hidden" id="degree" value="<?php echo $degree; ?>" >

<div class="container" >
    
<br><div class="text-center h2">STUDENT FEEDBACK FORM</div>

 <div class="text-left" style="display:inline;">Department: <?php echo $dept; ?></div>
    <div class="text-left" style="display:inline;">Semester: <?php echo $sem; ?></div>
    <div class="text-left" style="display:inline;">Section: <?php echo $sec; ?></div>
    <div class="text-left" style="display:inline;">Degree: <?php echo $degree; ?></div>
    <div class="text-left" style="display:inline;">Year: <?php echo $ayear; ?></div>
 
    <label>Date: <?php  echo date("Y/m/d"); ?></label>
    
    
    
<table class="table table-bordered" ><tr>
        <th class="text-center" colspan="6">GRADING</th>
                  <th class="text-center">INSTRUCTIONS</th>
                   <tr>
                       <td><b>Grade</b></td>
            <td>Excellent</td>
            <td>Very Good</td>
            <td>Satisfactory</td>
            <td>Average</td>
            <td>Below Average</td>
            <td rowspan="2"><p>
                    1.Give your feed back in the form of marks(interger value) only (3 to 10)</p>   
                   <p> 2.The total and average marks for each component are calculated automatically.
                </p></td>
         </tr>
             <tr>
                       <td><b>Marks</b></td>
            <td>9-10</td>
            <td>8-9</td>
            <td>7-8</td>
            <td>5-7</td>
            <td>3-5</td>
            
         </tr>
            </tr>
</table>
    <div class="text-center h3">LIBRARY & Office</div>
    
    <table class="table table-bordered">
                <tr><th style="text-align: center;">SN</th><th>
                        <table class="table table-bordered">
                        <tr><th style="text-align: center;">LIBRARY</th></tr>
                        <tr><th style="text-align: center;">QUESTIONS</th></tr>
                    </table>
            </th><th  style="text-align: center;">Marks</th><th style="text-align: center;">SN</th><th>
            <table class="table table-bordered">
                        <tr><th style="text-align: center;">OFFICE</th></tr>
                        <tr><th style="text-align: center;">QUESTIONS</th></tr>
            </table>
            </th><th style="text-align: center;">Admission <br><br> Section</th><th style="text-align: center;">Examination <br><br> Section</th><th style="text-align: center;">Accounts <br><br> Section</th><th style="text-align: center;">Certificate <br><br> Section </th></tr>
                        <tr><td>01</td><td>Book Bank facility</td>
                            <td class="select" align="right"> <select id="lq1">        
                           </select> </td>
                <td>01</td>
                <td>Rating of the Office</td>
                <td class="select" align="right"> <select id="ads1">        
                           </select> </td>
                <td class="select" align="right"> <select id="exs1">        
                           </select> </td>
                 <td class="select" align="right"> <select id="acs1">        
                           </select> </td>
                 <td class="select" align="right"> <select id="css1">        
                           </select> </td>
                        </tr>
                <tr><td>02</td><td>Reference Books</td>
                    <td class="select" align="right"> <select id="lq2">        
                           </select> </td>
                <td>02</td>
                <td>Interaction with Students</td>
                 <td class="select" align="right"> <select id="ads2">        
                           </select> </td>
                <td class="select" align="right"> <select id="exs2">        
                           </select> </td>
                 <td class="select" align="right"> <select id="acs2">        
                           </select> </td>
                 <td class="select" align="right"> <select id="css2">        
                           </select> </td>
                <tr><td>03</td><td>Journals & e- Journals</td>
                    <td class="select" align="right"> <select id="lq3">        
                           </select> </td>
                <td>03</td>
                <td>Availability of Staff in Woking Hours</td>
                 <td class="select" align="right"> <select id="ads3">        
                           </select> </td>
                <td class="select" align="right"> <select id="exs3">        
                           </select> </td>
                 <td class="select" align="right"> <select id="acs3">        
                           </select> </td>
                 <td class="select" align="right"> <select id="css3">        
                           </select> </td>
                <tr><td>04</td><td>News papers & Magazines</td>
                    <td class="select" align="right"> <select id="lq4">        
                           </select> </td>
                    <td>04</td>
                    <td>Behavior of Staff with Students</td>
                <td class="select" align="right"> <select id="ads4">        
                           </select> </td>
                <td class="select" align="right"> <select id="exs4">        
                           </select> </td>
                 <td class="select" align="right"> <select id="acs4">        
                           </select> </td>
                 <td class="select" align="right"> <select id="css4">        
                           </select> </td>
                <tr><td>05</td><td>Availability News papers & Magazines</td>
                    <td class="select" align="right"> <select id="lq5">        
                           </select> </td>
                           <td colspan="2" style="text-align: right">Total Marks</td><td id="tm2"></td><td id="tm3"></td><td id="tm4"></td><td id="tm5"></td></tr>
                <tr><td>06</td><td>Interaction with Students</td>
                    <td class="select" align="right"> <select id="lq6">        
                           </select> </td>
                           <td colspan="2" style="text-align: right">Average Marks=Total Marks/4</td><td id="am2"></td><td id="am3"></td><td id="am4"></td><td id="am5"></td></tr>
                <tr><td colspan="2" style="text-align: right">Total Marks</td><td id="tm1"></td><td rowspan="2" colspan="6"><textarea id="sugg" rows="3" cols="100" placeholder="Suggestions"></textarea></td></tr>
                <tr><td colspan="2" style="text-align: right">Average Marks=Total Marks/6</td><td id="am1"></td></tr>
    </table>

<div class="text-right">
    <input id="next" class="btn btn-primary" type="button" value="NEXT"/>
</div>




