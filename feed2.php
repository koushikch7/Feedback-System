<?php
require 'shome.php';
require 'connection.php';
?>
<script>
    $(document).ready(function () {
        if ($("#lcount").html() == 4)
        {
            $(".clm5").hide();
            $(".clm6").hide();

        } else if ($("#lcount").html() == 5)
        {
        }
        var opt = "<option value=''> </option><option>10</option><option>9</option><option>8</option><option>7</option><option>6</option><option>5</option><option>4</option><option>3</option>";
        $("#rfeed1").html(opt);
        $("#rfeed2").html(opt);
        $("#rfeed3").html(opt);
        $("#rfeed4").html(opt);

        $("#ifeed1").html(opt);
        $("#ifeed2").html(opt);
        $("#ifeed3").html(opt);
        $("#ifeed4").html(opt);

        $("#pfeed1").html(opt);
        $("#pfeed2").html(opt);
        $("#pfeed3").html(opt);
        $("#pfeed4").html(opt);

        $("#afeed1").html(opt);
        $("#afeed2").html(opt);
        $("#afeed3").html(opt);
        $("#afeed4").html(opt);

        $("#sfeed1").html(opt);
        $("#sfeed2").html(opt);
        $("#sfeed3").html(opt);
        $("#sfeed4").html(opt);

        $("#crfeed1").html(opt);
        $("#crfeed2").html(opt);
        $("#crfeed3").html(opt);
        $("#crfeed4").html(opt);

        $("#bfeed1").html(opt);
        $("#bfeed2").html(opt);
        $("#bfeed3").html(opt);
        $("#bfeed4").html(opt);

        $("#ffeed1").html(opt);
        $("#ffeed2").html(opt);
        $("#ffeed3").html(opt);
        $("#ffeed4").html(opt);

        $("#cofeed1").html(opt);
        $("#cofeed2").html(opt);
        $("#cofeed3").html(opt);
        $("#cofeed4").html(opt);

        $("#vfeed1").html(opt);
        $("#vfeed2").html(opt);
        $("#vfeed3").html(opt);
        $("#vfeed4").html(opt);


        var opt1 = "<option value=''> </option><option>100%</option><option>90%</option><option>80%</option><option>70%</option><option>60%</option><option>50%</option><option>40%</option><option>30%</option><option>20%</option><option>10%</option>";
        $("#scover1").html(opt1);
        $("#scover2").html(opt1);
        $("#scover3").html(opt1);
        $("#scover4").html(opt1);

        $("select").on("change", function () {
            var tm1 = parseFloat($("#rfeed1").val()) + parseFloat($("#ifeed1").val()) + parseFloat($("#pfeed1").val()) + parseFloat($("#afeed1").val()) + parseFloat($("#sfeed1").val()) + parseFloat($("#crfeed1").val()) + parseFloat($("#bfeed1").val()) + parseFloat($("#ffeed1").val()) + parseFloat($("#cofeed1").val()) + parseFloat($("#vfeed1").val());
            $("#tm1").html(tm1);
            $("#am1").html(tm1 / 10);

            var tm2 = parseFloat($("#rfeed2").val()) + parseFloat($("#ifeed2").val()) + parseFloat($("#pfeed2").val()) + parseFloat($("#afeed2").val()) + parseFloat($("#sfeed2").val()) + parseFloat($("#crfeed2").val()) + parseFloat($("#bfeed2").val()) + parseFloat($("#ffeed2").val()) + parseFloat($("#cofeed2").val()) + parseFloat($("#vfeed2").val());
            $("#tm2").html(tm2);
            $("#am2").html(tm2 / 10);

            var tm3 = parseFloat($("#rfeed3").val()) + parseFloat($("#ifeed3").val()) + parseFloat($("#pfeed3").val()) + parseFloat($("#afeed3").val()) + parseFloat($("#sfeed3").val()) + parseFloat($("#crfeed3").val()) + parseFloat($("#bfeed3").val()) + parseFloat($("#ffeed3").val()) + parseFloat($("#cofeed3").val()) + parseFloat($("#vfeed3").val());
            $("#tm3").html(tm3);
            $("#am3").html(tm3 / 10);

            var tm4 = parseFloat($("#rfeed4").val()) + parseFloat($("#ifeed4").val()) + parseFloat($("#pfeed4").val()) + parseFloat($("#afeed4").val()) + parseFloat($("#sfeed4").val()) + parseFloat($("#crfeed4").val()) + parseFloat($("#bfeed4").val()) + parseFloat($("#ffeed4").val()) + parseFloat($("#cofeed4").val()) + parseFloat($("#vfeed4").val());
            $("#tm4").html(tm4);
            $("#am4").html(tm4 / 10);

        });

        $("#next").on("click", function () {
            var lname1 = $("#lname1").html();
            var lname2 = $("#lname2").html();
            var lname3 = $("#lname3").html();
            var lname4 = $("#lname4").html();

            var fname1 = $("#fname1").html();
            var fname2 = $("#fname2").html();
            var fname3 = $("#fname3").html();
            var fname4 = $("#fname4").html();

            var rfeed1 = $("#rfeed1").val();
            var rfeed2 = $("#rfeed2").val();
            var rfeed3 = $("#rfeed3").val();
            var rfeed4 = $("#rfeed4").val();

            var ifeed1 = $("#ifeed1").val();
            var ifeed2 = $("#ifeed2").val();
            var ifeed3 = $("#ifeed3").val();
            var ifeed4 = $("#ifeed4").val();

            var pfeed1 = $("#pfeed1").val();
            var pfeed2 = $("#pfeed2").val();
            var pfeed3 = $("#pfeed3").val();
            var pfeed4 = $("#pfeed4").val();

            var afeed1 = $("#afeed1").val();
            var afeed2 = $("#afeed2").val();
            var afeed3 = $("#afeed3").val();
            var afeed4 = $("#afeed4").val();

            var sfeed1 = $("#sfeed1").val();
            var sfeed2 = $("#sfeed2").val();
            var sfeed3 = $("#sfeed3").val();
            var sfeed4 = $("#sfeed4").val();

            var crfeed1 = $("#crfeed1").val();
            var crfeed2 = $("#crfeed2").val();
            var crfeed3 = $("#crfeed3").val();
            var crfeed4 = $("#crfeed4").val();

            var bfeed1 = $("#bfeed1").val();
            var bfeed2 = $("#bfeed2").val();
            var bfeed3 = $("#bfeed3").val();
            var bfeed4 = $("#bfeed4").val();

            var ffeed1 = $("#ffeed1").val();
            var ffeed2 = $("#ffeed2").val();
            var ffeed3 = $("#ffeed3").val();
            var ffeed4 = $("#ffeed4").val();

            var cofeed1 = $("#cofeed1").val();
            var cofeed2 = $("#cofeed2").val();
            var cofeed3 = $("#cofeed3").val();
            var cofeed4 = $("#cofeed4").val();

            var vfeed1 = $("#vfeed1").val();
            var vfeed2 = $("#vfeed2").val();
            var vfeed3 = $("#vfeed3").val();
            var vfeed4 = $("#vfeed4").val();

            var scover1 = $("#scover1").val();
            var scover2 = $("#scover2").val();
            var scover3 = $("#scover3").val();
            var scover4 = $("#scover4").val();

            var usnno = $("#usnno").val();
            var dept = $("#dept").val();
            var ayear = $("#ayear").val();
            var sem = $("#sem").val();
            var sec = $("#sec").val();
            var degree = $("#degree").val();

             if ($.trim($("#lcount").html()) == 4 && ($.trim($("#tm1").html())==''|| $.trim($("#tm2").html())=='' || $.trim($("#tm3").html())=='' || $.trim($("#tm4").html())=='' || scover1==''|| scover2=='' || scover3=='' || scover4==''))
            {
              alert("Fill all the fields");

            } else if ($.trim($("#lcount").html()) == 6 && ($.trim($("#tm1").html())==''|| $.trim($("#tm2").html())=='' || $.trim($("#tm3").html())=='' || $.trim($("#tm4").html())=='' || $.trim($("#tm5").html())=='' || $.trim($("#tm6").html())=='' || scover1==''|| scover2=='' || scover3=='' || scover4=='' ||  scover5=='' || scover6==''))
            {
                alert("Fill all the fields");
            }else{


            var url3 = "setfeed2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&lname=" + lname1 + "&fname=" + fname1 + "&rfeed=" + rfeed1 + "&ifeed=" + ifeed1 + "&pfeed=" + pfeed1 + "&afeed=" + afeed1 + "&sfeed=" + sfeed1 + "&crfeed=" + crfeed1 + "&bfeed=" + bfeed1 + "&ffeed=" + ffeed1 + "&cofeed=" + cofeed1 + "&vfeed=" + vfeed1 + "&scover=" + scover1 + "&usnno=" + usnno;
            var url4 = "setfeed2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&lname=" + lname2 + "&fname=" + fname2 + "&rfeed=" + rfeed2 + "&ifeed=" + ifeed2 + "&pfeed=" + pfeed2 + "&afeed=" + afeed2 + "&sfeed=" + sfeed2 + "&crfeed=" + crfeed2 + "&bfeed=" + bfeed2 + "&ffeed=" + ffeed2 + "&cofeed=" + cofeed2 + "&vfeed=" + vfeed2 + "&scover=" + scover2 + "&usnno=" + usnno;
            var url5 = "setfeed2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&lname=" + lname3 + "&fname=" + fname3 + "&rfeed=" + rfeed3 + "&ifeed=" + ifeed3 + "&pfeed=" + pfeed3 + "&afeed=" + afeed3 + "&sfeed=" + sfeed3 + "&crfeed=" + crfeed3 + "&bfeed=" + bfeed3 + "&ffeed=" + ffeed3 + "&cofeed=" + cofeed3 + "&vfeed=" + vfeed3 + "&scover=" + scover3 + "&usnno=" + usnno;
            var url6 = "setfeed2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&lname=" + lname4 + "&fname=" + fname4 + "&rfeed=" + rfeed4 + "&ifeed=" + ifeed4 + "&pfeed=" + pfeed4 + "&afeed=" + afeed4 + "&sfeed=" + sfeed4 + "&crfeed=" + crfeed4 + "&bfeed=" + bfeed4 + "&ffeed=" + ffeed4 + "&cofeed=" + cofeed4 + "&vfeed=" + vfeed4 + "&scover=" + scover4 + "&usnno=" + usnno;


            $.get(url3, function (data2, status2) {
            });
            $.get(url4, function (data2, status2) {
            });
            $.get(url5, function (data2, status2) {
            });
            $.get(url6, function (data2, status2) {
            });

            if ($("#lcount").html() == 4)
            {


            } else if ($("#lcount").html() == 6)
            {
                var url7 = "setfeed2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&lname=" + lname5 + "&fname=" + fname5 + "&rfeed=" + rfeed5 + "&ifeed=" + ifeed5 + "&pfeed=" + pfeed5 + "&afeed=" + afeed5 + "&sfeed=" + sfeed5 + "&crfeed=" + crfeed5 + "&bfeed=" + bfeed5 + "&ffeed=" + ffeed5 + "&cofeed=" + cofeed5 + "&vfeed=" + vfeed5 + "&scover=" + scover5 + "&usnno=" + usnno;
                var url8 = "setfeed2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&lname=" + lname6 + "&fname=" + fname6 + "&rfeed=" + rfeed6 + "&ifeed=" + ifeed6 + "&pfeed=" + pfeed6 + "&afeed=" + afeed6 + "&sfeed=" + sfeed6 + "&crfeed=" + crfeed6 + "&bfeed=" + bfeed6 + "&ffeed=" + ffeed6 + "&cofeed=" + cofeed6 + "&vfeed=" + vfeed6 + "&scover=" + scover6 + "&usnno=" + usnno;
                $.get(url7, function (data2, status2) {
                });
                $.get(url8, function (data2, status2) {
                });

            }
         window.location.href = 'libfeed.php';
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


$dept = $_SESSION['dept'];
$usnno = $_SESSION['usnno'];
$result = mysqli_query($con, "select * from lab where degree='" . $degree . "' and dept='" . $dept . "' and sem='" . $sem . "' and sec='" . $sec . "' and ayear='" . $ayear . "'");
$result1 = mysqli_query($con, "select * from lab where  degree='" . $degree . "' and dept='" . $dept . "' and sem='" . $sem . "' and sec='" . $sec . "' and ayear='" . $ayear . "'");
$result3 = mysqli_query($con, "select count(*) from lab where  degree='" . $degree . "' and dept='" . $dept . "' and sem='" . $sem . "' and sec='" . $sec . "' and ayear='" . $ayear . "'");
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
    <?php
    $lcount = 0;
    if ($row3 = mysqli_fetch_array($result3)) {
        $lcount = $row3[0];
    }
    ?>

    <div style="display:inline;">Number Of Feedbacks: <span id="lcount"><?php echo $lcount ?></div>
    <div style="display:inline;">Number Of Labs: <span><?php echo $lcount / 2 ?></div>

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
        </tr>
    </table>
    <div class="text-center h3">TEACHING</div>

    <table class="table table-bordered"><tr>
            <th class="text-center" rowspan="3">SNo</th>
            <th class="text-center" rowspan="3">Questions</th>
            <th class="text-center" colspan="4">Name of the Lab</th>
        <tr>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
                ?>  

                <td class="select" align="right" id="lname<?php echo $i; ?>">   
                    <?php
                    echo $row ['lname'];
                    ?>
                </td>
                <?php
                $i++;
            }
            ?>
        </tr>

        <tr>
            <?php
            $j = 1;
            while ($row2 = mysqli_fetch_array($result1)) {
                $result3 = mysqli_query($con, "select * from faculty where facid='" . $row2['fid'] . "'");
                if ($row3 = mysqli_fetch_array($result3)) {
                    ?>  

                    <td class="select" align="right" id="fname<?php echo $j; ?>">   
                        <?php
                        echo $row3 ['name'];
                        ?>
                    </td>
                    <?php
                }
                $j++;
            }
            ?>
        </tr>


        <tr>
            <td>1</td>
            <td><p>Regularity in handling classes</p></td>
            <td class="select" align="right"> <select id="rfeed1">        
                </select> </td>
            <td class="select" align="right"> <select id="rfeed2">        
                </select></td>
            <td class="select" align="right"> <select id="rfeed3">        
                </select></td>
            <td class="select" align="right"> <select id="rfeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select id="rfeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select id="rfeed6">        
                </select></td>
        </tr>

        <tr>
            <td>2</td>
            <td><p>Interaction with students</p></td>
            <td class="select" align="right"> <select id="ifeed1">        
                </select> </td>
            <td class="select" align="right"> <select id="ifeed2">        
                </select></td>
            <td class="select" align="right"> <select id="ifeed3">        
                </select></td>
            <td class="select" align="right"> <select id="ifeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select id="ifeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select id="ifeed6">        
                </select></td>
        </tr>

        <tr>
            <td>3</td>
            <td><p>Presentation of the subject</p></td>
            <td class="select" align="right"> <select id="pfeed1">        
                </select> </td>
            <td class="select" align="right"> <select id="pfeed2">        
                </select></td>
            <td class="select" align="right"> <select id="pfeed3">        
                </select></td>
            <td class="select" align="right"> <select id="pfeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select id="pfeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select id="pfeed6">        
                </select></td>
        </tr>

        <tr>
            <td>4</td>
            <td><p>Audibility & Clarity of speech</p></td>
            <td class="select" align="right"> <select id="afeed1">        
                </select> </td>
            <td class="select" align="right"> <select id="afeed2">        
                </select></td>
            <td class="select" align="right"> <select id="afeed3">        
                </select></td>
            <td class="select" align="right"> <select id="afeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select id="afeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select id="afeed6">        
                </select></td>

        </tr>

        <tr>
            <td>5</td>
            <td><p>Subject knowledge</p></td>
            <td class="select" align="right"> <select id="sfeed1">        
                </select> </td>
            <td class="select" align="right"> <select id="sfeed2">        
                </select></td>
            <td class="select" align="right"> <select id="sfeed3">        
                </select></td>
            <td class="select" align="right"> <select id="sfeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select id="sfeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select id="sfeed6">        
                </select></td>
        </tr>

        <tr>
            <td>6</td>
            <td><p>Creating interest in the subject</p></td>
            <td class="select" align="right"> <select id="crfeed1">        
                </select> </td>
            <td class="select" align="right"> <select id="crfeed2">        
                </select></td>
            <td class="select" align="right"> <select id="crfeed3">        
                </select></td>
            <td class="select" align="right"> <select id="crfeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select id="crfeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select id="crfeed6">        
                </select></td>
        </tr>

        <tr>
            <td>7</td>
            <td><p>Black Board Presentation /PPTs</p></td>
            <td class="select" align="right"> <select id="bfeed1">        
                </select> </td>
            <td class="select" align="right"> <select id="bfeed2">        
                </select></td>
            <td class="select" align="right"> <select id="bfeed3">        
                </select></td>
            <td class="select" align="right"> <select id="bfeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select id="bfeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select id="bfeed6">        
                </select></td>
        </tr>

        <tr>
            <td>8</td>
            <td><p>Fulfillment of Course Objectives & Outcomes</p></td>
            <td class="select" align="right"> <select id="ffeed1">        
                </select> </td>
            <td class="select" align="right"> <select id="ffeed2">        
                </select></td>
            <td class="select" align="right"> <select id="ffeed3">        
                </select></td>
            <td class="select" align="right"> <select id="ffeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select id="ffeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select id="ffeed6">        
                </select></td>
        </tr>

        <tr>
            <td>9</td>
            <td><p>Coordination of staff with students</p></td>
            <td class="select" align="right"> <select id="cofeed1">        
                </select> </td>
            <td class="select" align="right"> <select id="cofeed2">        
                </select></td>
            <td class="select" align="right"> <select id="cofeed3">        
                </select></td>
            <td class="select" align="right"> <select id="cofeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select id="cofeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select id="cofeed6">        
                </select></td>
        </tr>

        <tr>
            <td>10</td>
            <td><p>Valuation of IA books</p></td>
            <td class="select" align="right"> <select id="vfeed1">        
                </select> </td>
            <td class="select" align="right"> <select id="vfeed2">        
                </select></td>
            <td class="select" align="right"> <select id="vfeed3">        
                </select></td>
            <td class="select" align="right"> <select id="vfeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select id="vfeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select id="vfeed6">        
                </select></td>
        </tr>

        <tr>
            <td colspan="2" align="right"><p>Total Marks</p></td>
            <td id="tm1"></td>
            <td id="tm2"></td>
            <td id="tm3"></td>
            <td id="tm4"></td>
            <td id="tm5" class="clm5"></td>
            <td id="tm6" class="clm6"></td>


        </tr>

        <tr>
            <td colspan="2" align="right"><p>Average Marks= Total Marks /10</p></td>
            <td id="am1"></td>
            <td id="am2"></td>
            <td id="am3"></td>
            <td id="am4"></td>
            <td id="am5" class="clm5"></td>
            <td id="am6" class="clm6"></td>


        </tr>
        <tr>
            <td colspan="2" align="right"><p>Syllabus Coverage(in % only)</p></td>
            <td class="select" align="right"> <select id="scover1">        
                </select> </td>
            <td class="select" align="right"> <select id="scover2">        
                </select></td>
            <td class="select" align="right"> <select id="scover3">        
                </select></td>
            <td class="select" align="right"> <select id="scover4">        
                </select></td>
            <td class="select clm5" align="right"> <select id="scover5">        
                </select></td>
            <td class="select clm6" align="right"> <select id="scover6">        
                </select></td>
        </tr>

        </tr>
    </table>
    <div class="text-right">
        <input id="next" class="btn btn-primary" type="button" value="NEXT"/>
    </div>
</div>
<br>
<br>







