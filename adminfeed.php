<?php
require 'shome.php';
require 'connection.php';

?>
<script>
    $(document).ready(function () {
        var opt = "<option value=''> </option><option>10</option><option>9</option><option>8</option><option>7</option><option>6</option><option>5</option><option>4</option><option>3</option>";
        $("#q1").html(opt);
        $("#q2").html(opt);
        $("#q3").html(opt);
        $("#q4").html(opt);
        $("#q5").html(opt);
        $("#q6").html(opt);
        $("#q7").html(opt);
        $("#q8").html(opt);
        $("#q9").html(opt);
        $("#q10").html(opt);

        $("select").on("change", function () {
            var tm1 = parseInt($("#q1").val()) + parseInt($("#q2").val()) + parseInt($("#q3").val()) + parseInt($("#q4").val()) + parseInt($("#q5").val()) + parseInt($("#q6").val()) + parseInt($("#q7").val()) + parseInt($("#q8").val()) + parseInt($("#q9").val()) + parseInt($("#q10").val());
            $("#tm").html(tm1);
            $("#am").html(tm1 / 10);


        });



        $("#submit").on("click", function () {

            var usnno = $("#usnno").val();
            var q1 = $("#q1").val();
            var q2 = $("#q2").val();
            var q3 = $("#q3").val();
            var q4 = $("#q4").val();
            var q5 = $("#q5").val();
            var q6 = $("#q6").val();
            var q7 = $("#q7").val();
            var q8 = $("#q8").val();
            var q9 = $("#q9").val();
            var q10 = $("#q10").val();

            var sugg = $("#sugg").val();
            var usnno = $("#usnno").val();
            var dept = $("#dept").val();
            var ayear = $("#ayear").val();
            var sem = $("#sem").val();
            var sec = $("#sec").val();
            var degree = $("#degree").val();
            if ($.trim($("#tm").html())=='')
            {
                alert("Fill all the fields");
            }else{
            var url3 = "setfeed4.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&usnno=" + usnno + "&q1=" + q1 + "&q2=" + q2 + "&q3=" + q3 + "&q4=" + q4 + "&q5=" + q5 + "&q6=" + q6 + "&q7=" + q7 + "&q8=" + q8 + "&q9=" + q9 + "&usnno=" + usnno+ "&q10=" + q10;
            
            
            $.get(url3, function (data2, status2) {
            });
            alert("Values Inserted Succesfully");
            window.location.href = 'logout.php';
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
$dept = $_SESSION["dept"];
$usnno = $_SESSION['usnno'];
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

    <label>Date: <?php echo date("Y/m/d"); ?></label>



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
    </table>
    <div class="text-center h3">ADMIN</div>

    <table class="table table-bordered">
        <tr><th>SN</th><th>General</th><th>Marks</th><th>SN</th><th>General</th><th>Marks</th><th>SN</th><th>General</th><th>Marks</th></tr>
        <tr>
            <td>01</td><td>Interaction with the Principal</td>
            <td class="select" align="right"> <select id="q1">        
                </select> </td>
            <td>04</td><td>Extra Curricular Activities</td>
            <td class="select" align="right"> <select id="q4">        
                </select> </td>
            <td>07</td><td>House Keeping College campus</td>
            <td class="select" align="right"> <select id="q7">        
                </select> </td>
        </tr>
        <tr>
            <td>02</td><td>Interaction with HODs</td>
            <td class="select" align="right"> <select id="q2">        
                </select> </td>
            <td>05</td><td>Discipline in Campus</td>
            <td class="select" align="right"> <select id="q5">        
                </select> </td>
            <td>08</td><td>Drinking Water Facility</td>
            <td class="select" align="right"> <select id="q8">        
                </select> </td>
        </tr>
        <tr>
            <td>03</td><td>Response at the Reception</td>
            <td class="select" align="right"> <select id="q3">        
                </select> </td>
            <td>06</td><td>Internet Facility at Internet Center</td>
            <td class="select" align="right"> <select id="q6">        
                </select> </td>
            <td>09</td><td>Sports Activities</td>
            <td class="select" align="right"> <select id="q9">        
                </select> </td>
        </tr>
        <tr><td colspan="2" style="text-align: right">Total Marks </td><td id="tm" colspan="4"></td>
            <td>10</td>
            <td>Protering System</td>

            <td class="select" align="right"> <select id="q10">        
                </select> </td>
        </tr>
        <tr><td colspan="2" style="text-align: right">Grade Point Average  =<br>
                Total Points/10;
            </td>
            <td colspan="7" id="am"></td></tr>
    </table>
    <div class="text-right">
        <input id="submit" class="btn btn-primary" type="button" value="Submit"/>
    </div>




