<?php
require 'shome.php';
require 'connection.php';

?>
<script>
    $(document).ready(function () {
     
        
        if ($("#scount").html() == 4)
        {
            $(".clm5").hide();
            $(".clm6").hide();
            $(".clm7").hide();
            $(".clm8").hide();
        } else if ($("#scount").html() == 5)
        {
            $(".clm6").hide();
            $(".clm7").hide();
            $(".clm8").hide();
        } else if ($("#scount").html() == 6)
        {
            $(".clm7").hide();
            $(".clm8").hide();
        } else if ($("#scount").html() == 7)
        {
            $(".clm8").hide();
        }

        var opt = "<option value=''></option><option>10</option><option>9</option><option>8</option><option>7</option><option>6</option><option>5</option><option>4</option><option>3</option>";
        $("#rfeed1").html(opt);
        $("#rfeed2").html(opt);
        $("#rfeed3").html(opt);
        $("#rfeed4").html(opt);
        $("#rfeed5").html(opt);
        $("#rfeed6").html(opt);
        $("#rfeed7").html(opt);
        $("#rfeed8").html(opt);

        $("#ifeed1").html(opt);
        $("#ifeed2").html(opt);
        $("#ifeed3").html(opt);
        $("#ifeed4").html(opt);
        $("#ifeed5").html(opt);
        $("#ifeed6").html(opt);
        $("#ifeed7").html(opt);
        $("#ifeed8").html(opt);

        $("#pfeed1").html(opt);
        $("#pfeed2").html(opt);
        $("#pfeed3").html(opt);
        $("#pfeed4").html(opt);
        $("#pfeed5").html(opt);
        $("#pfeed6").html(opt);
        $("#pfeed7").html(opt);
        $("#pfeed8").html(opt);

        $("#afeed1").html(opt);
        $("#afeed2").html(opt);
        $("#afeed3").html(opt);
        $("#afeed4").html(opt);
        $("#afeed5").html(opt);
        $("#afeed6").html(opt);
        $("#afeed7").html(opt);
        $("#afeed8").html(opt);

        $("#sfeed1").html(opt);
        $("#sfeed2").html(opt);
        $("#sfeed3").html(opt);
        $("#sfeed4").html(opt);
        $("#sfeed5").html(opt);
        $("#sfeed6").html(opt);
        $("#sfeed7").html(opt);
        $("#sfeed8").html(opt);

        $("#crfeed1").html(opt);
        $("#crfeed2").html(opt);
        $("#crfeed3").html(opt);
        $("#crfeed4").html(opt);
        $("#crfeed5").html(opt);
        $("#crfeed6").html(opt);
        $("#crfeed7").html(opt);
        $("#crfeed8").html(opt);


        $("#bfeed1").html(opt);
        $("#bfeed2").html(opt);
        $("#bfeed3").html(opt);
        $("#bfeed4").html(opt);
        $("#bfeed5").html(opt);
        $("#bfeed6").html(opt);
        $("#bfeed7").html(opt);
        $("#bfeed8").html(opt);

        $("#ffeed1").html(opt);
        $("#ffeed2").html(opt);
        $("#ffeed3").html(opt);
        $("#ffeed4").html(opt);
        $("#ffeed5").html(opt);
        $("#ffeed6").html(opt);
        $("#ffeed7").html(opt);
        $("#ffeed8").html(opt);

        $("#cofeed1").html(opt);
        $("#cofeed2").html(opt);
        $("#cofeed3").html(opt);
        $("#cofeed4").html(opt);
        $("#cofeed5").html(opt);
        $("#cofeed6").html(opt);
        $("#cofeed7").html(opt);
        $("#cofeed8").html(opt);

        $("#vfeed1").html(opt);
        $("#vfeed2").html(opt);
        $("#vfeed3").html(opt);
        $("#vfeed4").html(opt);
        $("#vfeed5").html(opt);
        $("#vfeed6").html(opt);
        $("#vfeed7").html(opt);
        $("#vfeed8").html(opt);

        var opt1 = "<option value=''></option><option value='100'>100%</option><option value='90'>90%</option><option value='80'>80%</option><option value='70'>70%</option><option value='60'>60%</option><option value='50'>50%</option><option value='40'>40%</option><option value='30'>30%</option><option value='20'>20%</option><option value='10'>10%</option>";
        $("#scover1").html(opt1);
        $("#scover2").html(opt1);
        $("#scover3").html(opt1);
        $("#scover4").html(opt1);
        $("#scover5").html(opt1);
        $("#scover6").html(opt1);
        $("#scover7").html(opt1);
        $("#scover8").html(opt1);


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

            var tm5 = parseFloat($("#rfeed5").val()) + parseFloat($("#ifeed5").val()) + parseFloat($("#pfeed5").val()) + parseFloat($("#afeed5").val()) + parseFloat($("#sfeed5").val()) + parseFloat($("#crfeed5").val()) + parseFloat($("#bfeed5").val()) + parseFloat($("#ffeed5").val()) + parseFloat($("#cofeed5").val()) + parseFloat($("#vfeed5").val());
            $("#tm5").html(tm5);
            $("#am5").html(tm5 / 10);

            var tm6 = parseFloat($("#rfeed6").val()) + parseFloat($("#ifeed6").val()) + parseFloat($("#pfeed6").val()) + parseFloat($("#afeed6").val()) + parseFloat($("#sfeed6").val()) + parseFloat($("#crfeed6").val()) + parseFloat($("#bfeed6").val()) + parseFloat($("#ffeed6").val()) + parseFloat($("#cofeed6").val()) + parseFloat($("#vfeed6").val());
            $("#tm6").html(tm6);
            $("#am6").html(tm6 / 10);

            var tm7 = parseFloat($("#rfeed7").val()) + parseFloat($("#ifeed7").val()) + parseFloat($("#pfeed7").val()) + parseFloat($("#afeed7").val()) + parseFloat($("#sfeed7").val()) + parseFloat($("#crfeed7").val()) + parseFloat($("#bfeed7").val()) + parseFloat($("#ffeed7").val()) + parseFloat($("#cofeed7").val()) + parseFloat($("#vfeed7").val());
            $("#tm7").html(tm7);
            $("#am7").html(tm7 / 10);

            var tm8 = parseFloat($("#rfeed8").val()) + parseFloat($("#ifeed8").val()) + parseFloat($("#pfeed8").val()) + parseFloat($("#afeed8").val()) + parseFloat($("#sfeed8").val()) + parseFloat($("#crfeed8").val()) + parseFloat($("#bfeed8").val()) + parseFloat($("#ffeed8").val()) + parseFloat($("#cofeed8").val()) + parseFloat($("#vfeed8").val());
            $("#tm8").html(tm8);
            $("#am8").html(tm8 / 10);
        });

        $("#next").on("click", function () {
            var sname1 = $("#sname1").html();
            var sname2 = $("#sname2").html();
            var sname3 = $("#sname3").html();
            var sname4 = $("#sname4").html();
            var sname5 = $("#sname5").html();
            var sname6 = $("#sname6").html();
            var sname7 = $("#sname7").html();
            var sname8 = $("#sname8").html();

            var fname1 = $("#fname1").html();
            var fname2 = $("#fname2").html();
            var fname3 = $("#fname3").html();
            var fname4 = $("#fname4").html();
            var fname5 = $("#fname5").html();
            var fname6 = $("#fname6").html();
            var fname7 = $("#fname7").html();
            var fname8 = $("#fname8").html();

            var rfeed1 = $("#rfeed1").val();
            var rfeed2 = $("#rfeed2").val();
            var rfeed3 = $("#rfeed3").val();
            var rfeed4 = $("#rfeed4").val();
            var rfeed5 = $("#rfeed5").val();
            var rfeed6 = $("#rfeed6").val();
            var rfeed7 = $("#rfeed7").val();
            var rfeed8 = $("#rfeed8").val();

            var ifeed1 = $("#ifeed1").val();
            var ifeed2 = $("#ifeed2").val();
            var ifeed3 = $("#ifeed3").val();
            var ifeed4 = $("#ifeed4").val();
            var ifeed5 = $("#ifeed5").val();
            var ifeed6 = $("#ifeed6").val();
            var ifeed7 = $("#ifeed7").val();
            var ifeed8 = $("#ifeed8").val();

            var pfeed1 = $("#pfeed1").val();
            var pfeed2 = $("#pfeed2").val();
            var pfeed3 = $("#pfeed3").val();
            var pfeed4 = $("#pfeed4").val();
            var pfeed5 = $("#pfeed5").val();
            var pfeed6 = $("#pfeed6").val();
            var pfeed7 = $("#pfeed7").val();
            var pfeed8 = $("#pfeed8").val();

            var afeed1 = $("#afeed1").val();
            var afeed2 = $("#afeed2").val();
            var afeed3 = $("#afeed3").val();
            var afeed4 = $("#afeed4").val();
            var afeed5 = $("#afeed5").val();
            var afeed6 = $("#afeed6").val();
            var afeed7 = $("#afeed7").val();
            var afeed8 = $("#afeed8").val();

            var sfeed1 = $("#sfeed1").val();
            var sfeed2 = $("#sfeed2").val();
            var sfeed3 = $("#sfeed3").val();
            var sfeed4 = $("#sfeed4").val();
            var sfeed5 = $("#sfeed5").val();
            var sfeed6 = $("#sfeed6").val();
            var sfeed7 = $("#sfeed7").val();
            var sfeed8 = $("#sfeed8").val();

            var crfeed1 = $("#crfeed1").val();
            var crfeed2 = $("#crfeed2").val();
            var crfeed3 = $("#crfeed3").val();
            var crfeed4 = $("#crfeed4").val();
            var crfeed5 = $("#crfeed5").val();
            var crfeed6 = $("#crfeed6").val();
            var crfeed7 = $("#crfeed7").val();
            var crfeed8 = $("#crfeed8").val();

            var bfeed1 = $("#bfeed1").val();
            var bfeed2 = $("#bfeed2").val();
            var bfeed3 = $("#bfeed3").val();
            var bfeed4 = $("#bfeed4").val();
            var bfeed5 = $("#bfeed5").val();
            var bfeed6 = $("#bfeed6").val();
            var bfeed7 = $("#bfeed7").val();
            var bfeed8 = $("#bfeed8").val();

            var ffeed1 = $("#ffeed1").val();
            var ffeed2 = $("#ffeed2").val();
            var ffeed3 = $("#ffeed3").val();
            var ffeed4 = $("#ffeed4").val();
            var ffeed5 = $("#ffeed5").val();
            var ffeed6 = $("#ffeed6").val();
            var ffeed7 = $("#ffeed7").val();
            var ffeed8 = $("#ffeed8").val();

            var cofeed1 = $("#cofeed1").val();
            var cofeed2 = $("#cofeed2").val();
            var cofeed3 = $("#cofeed3").val();
            var cofeed4 = $("#cofeed4").val();
            var cofeed5 = $("#cofeed5").val();
            var cofeed6 = $("#cofeed6").val();
            var cofeed7 = $("#cofeed7").val();
            var cofeed8 = $("#cofeed8").val();

            var vfeed1 = $("#vfeed1").val();
            var vfeed2 = $("#vfeed2").val();
            var vfeed3 = $("#vfeed3").val();
            var vfeed4 = $("#vfeed4").val();
            var vfeed5 = $("#vfeed5").val();
            var vfeed6 = $("#vfeed6").val();
            var vfeed7 = $("#vfeed7").val();
            var vfeed8 = $("#vfeed8").val();

            var scover1 = $("#scover1").val();
            var scover2 = $("#scover2").val();
            var scover3 = $("#scover3").val();
            var scover4 = $("#scover4").val();
            var scover5 = $("#scover5").val();
            var scover6 = $("#scover6").val();
            var scover7 = $("#scover7").val();
            var scover8 = $("#scover8").val();

            var usnno = $("#usnno").val();
            var dept = $("#dept").val();
            var ayear = $("#ayear").val();
            var sem = $("#sem").val();
            var sec = $("#sec").val();
            var degree = $("#degree").val();
            
            if ($("#scount").html() == 4 && ($.trim($("#tm1").html())==''|| $.trim($("#tm2").html())=='' || $.trim($("#tm3").html())=='' || $.trim($("#tm4").html())=='' || scover1==''|| scover2=='' || scover3=='' || scover4==''))
            {
               alert("Fill all the fields");
            } else if ($("#scount").html() == 6 && ($.trim($("#tm1").html())==''|| $.trim($("#tm2").html())=='' || $.trim($("#tm3").html())=='' || $.trim($("#tm4").html())=='' || $.trim($("#tm5").html())=='' || $.trim($("#tm6").html())=='' || scover1==''|| scover2=='' || scover3=='' || scover4=='' ||  scover5=='' || scover6==''))
            {
                alert("Fill all the fields");
            } 
            else if ($("#scount").html() == 7 && ($.trim($("#tm1").html())==''|| $.trim($("#tm2").html())=='' || $.trim($("#tm3").html())=='' || $.trim($("#tm4").html())=='' || $.trim($("#tm5").html())=='' || $.trim($("#tm6").html())=='' || $.trim($("#tm7").html())=='' || scover1==''|| scover2=='' || scover3=='' || scover4=='' ||  scover5=='' || scover6==''|| scover7==''))
            {
                
            } else if ($("#scount").html() == 8 && ($.trim($("#tm1").html())==''|| $.trim($("#tm2").html())=='' || $.trim($("#tm3").html())=='' || $.trim($("#tm4").html())=='' || $.trim($("#tm5").html())=='' || $.trim($("#tm6").html())=='' || $.trim($("#tm7").html())=='' || $.trim($("#tm8").html())=='' || scover1==''|| scover2=='' || scover3=='' || scover4=='' ||  scover5=='' || scover6==''|| scover7==''|| scover8==''))
            {
                
            } else{
        
            var url3 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname1 + "&fname=" + fname1 + "&rfeed=" + rfeed1 + "&ifeed=" + ifeed1 + "&pfeed=" + pfeed1 + "&afeed=" + afeed1 + "&sfeed=" + sfeed1 + "&crfeed=" + crfeed1 + "&bfeed=" + bfeed1 + "&ffeed=" + ffeed1 + "&cofeed=" + cofeed1 + "&vfeed=" + vfeed1 + "&scover=" + scover1 + "&usnno=" + usnno;
            var url4 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname2 + "&fname=" + fname2 + "&rfeed=" + rfeed2 + "&ifeed=" + ifeed2 + "&pfeed=" + pfeed2 + "&afeed=" + afeed2 + "&sfeed=" + sfeed2 + "&crfeed=" + crfeed2 + "&bfeed=" + bfeed2 + "&ffeed=" + ffeed2 + "&cofeed=" + cofeed2 + "&vfeed=" + vfeed2 + "&scover=" + scover2 + "&usnno=" + usnno;
            var url5 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname3 + "&fname=" + fname3 + "&rfeed=" + rfeed3 + "&ifeed=" + ifeed3 + "&pfeed=" + pfeed3 + "&afeed=" + afeed3 + "&sfeed=" + sfeed3 + "&crfeed=" + crfeed3 + "&bfeed=" + bfeed3 + "&ffeed=" + ffeed3 + "&cofeed=" + cofeed3 + "&vfeed=" + vfeed3 + "&scover=" + scover3 + "&usnno=" + usnno;
            var url6 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname4 + "&fname=" + fname4 + "&rfeed=" + rfeed4 + "&ifeed=" + ifeed4 + "&pfeed=" + pfeed4 + "&afeed=" + afeed4 + "&sfeed=" + sfeed4 + "&crfeed=" + crfeed4 + "&bfeed=" + bfeed4 + "&ffeed=" + ffeed4 + "&cofeed=" + cofeed4 + "&vfeed=" + vfeed4 + "&scover=" + scover4 + "&usnno=" + usnno;

            $.get(url3, function (data2, status2) {
            });
            $.get(url4, function (data2, status2) {
            });
            $.get(url5, function (data2, status2) {
            });
            $.get(url6, function (data2, status2) {
            });


            if ($("#scount").html() == 4)
            {

            } else if ($("#scount").html() == 5)
            {
                var url7 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname5 + "&fname=" + fname5 + "&rfeed=" + rfeed5 + "&ifeed=" + ifeed5 + "&pfeed=" + pfeed5 + "&afeed=" + afeed5 + "&sfeed=" + sfeed5 + "&crfeed=" + crfeed5 + "&bfeed=" + bfeed5 + "&ffeed=" + ffeed5 + "&cofeed=" + cofeed5 + "&vfeed=" + vfeed5 + "&scover=" + scover5 + "&usnno=" + usnno;
                $.get(url7, function (data2, status2) {
                });

            } else if ($("#scount").html() == 6)
            {
                var url7 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname5 + "&fname=" + fname5 + "&rfeed=" + rfeed5 + "&ifeed=" + ifeed5 + "&pfeed=" + pfeed5 + "&afeed=" + afeed5 + "&sfeed=" + sfeed5 + "&crfeed=" + crfeed5 + "&bfeed=" + bfeed5 + "&ffeed=" + ffeed5 + "&cofeed=" + cofeed5 + "&vfeed=" + vfeed5 + "&scover=" + scover5 + "&usnno=" + usnno;
                var url8 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname6 + "&fname=" + fname6 + "&rfeed=" + rfeed6 + "&ifeed=" + ifeed6 + "&pfeed=" + pfeed6 + "&afeed=" + afeed6 + "&sfeed=" + sfeed6 + "&crfeed=" + crfeed6 + "&bfeed=" + bfeed6 + "&ffeed=" + ffeed6 + "&cofeed=" + cofeed6 + "&vfeed=" + vfeed6 + "&scover=" + scover6 + "&usnno=" + usnno;

                $.get(url7, function (data2, status2) {
                });
                $.get(url8, function (data2, status2) {
                });

            } else if ($("#scount").html() == 7)
            {
                var url7 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname5 + "&fname=" + fname5 + "&rfeed=" + rfeed5 + "&ifeed=" + ifeed5 + "&pfeed=" + pfeed5 + "&afeed=" + afeed5 + "&sfeed=" + sfeed5 + "&crfeed=" + crfeed5 + "&bfeed=" + bfeed5 + "&ffeed=" + ffeed5 + "&cofeed=" + cofeed5 + "&vfeed=" + vfeed5 + "&scover=" + scover5 + "&usnno=" + usnno;
                var url8 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname6 + "&fname=" + fname6 + "&rfeed=" + rfeed6 + "&ifeed=" + ifeed6 + "&pfeed=" + pfeed6 + "&afeed=" + afeed6 + "&sfeed=" + sfeed6 + "&crfeed=" + crfeed6 + "&bfeed=" + bfeed6 + "&ffeed=" + ffeed6 + "&cofeed=" + cofeed6 + "&vfeed=" + vfeed6 + "&scover=" + scover6 + "&usnno=" + usnno;
                var url9 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname7 + "&fname=" + fname7 + "&rfeed=" + rfeed7 + "&ifeed=" + ifeed7 + "&pfeed=" + pfeed7 + "&afeed=" + afeed7 + "&sfeed=" + sfeed7 + "&crfeed=" + crfeed7 + "&bfeed=" + bfeed7 + "&ffeed=" + ffeed7 + "&cofeed=" + cofeed7 + "&vfeed=" + vfeed7 + "&scover=" + scover7 + "&usnno=" + usnno;
                $.get(url7, function (data2, status2) {
                });
                $.get(url8, function (data2, status2) {
                });
                $.get(url9, function (data2, status2) {
                });


            } else {
                var url7 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname5 + "&fname=" + fname5 + "&rfeed=" + rfeed5 + "&ifeed=" + ifeed5 + "&pfeed=" + pfeed5 + "&afeed=" + afeed5 + "&sfeed=" + sfeed5 + "&crfeed=" + crfeed5 + "&bfeed=" + bfeed5 + "&ffeed=" + ffeed5 + "&cofeed=" + cofeed5 + "&vfeed=" + vfeed5 + "&scover=" + scover5 + "&usnno=" + usnno;
                var url8 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname6 + "&fname=" + fname6 + "&rfeed=" + rfeed6 + "&ifeed=" + ifeed6 + "&pfeed=" + pfeed6 + "&afeed=" + afeed6 + "&sfeed=" + sfeed6 + "&crfeed=" + crfeed6 + "&bfeed=" + bfeed6 + "&ffeed=" + ffeed6 + "&cofeed=" + cofeed6 + "&vfeed=" + vfeed6 + "&scover=" + scover6 + "&usnno=" + usnno;
                var url9 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname7 + "&fname=" + fname7 + "&rfeed=" + rfeed7 + "&ifeed=" + ifeed7 + "&pfeed=" + pfeed7 + "&afeed=" + afeed7 + "&sfeed=" + sfeed7 + "&crfeed=" + crfeed7 + "&bfeed=" + bfeed7 + "&ffeed=" + ffeed7 + "&cofeed=" + cofeed7 + "&vfeed=" + vfeed7 + "&scover=" + scover7 + "&usnno=" + usnno;
                var url10 = "setfeed1.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname8 + "&fname=" + fname8 + "&rfeed=" + rfeed8 + "&ifeed=" + ifeed8 + "&pfeed=" + pfeed8 + "&afeed=" + afeed8 + "&sfeed=" + sfeed8 + "&crfeed=" + crfeed8 + "&bfeed=" + bfeed8 + "&ffeed=" + ffeed8 + "&cofeed=" + cofeed8 + "&vfeed=" + vfeed8 + "&scover=" + scover8 + "&usnno=" + usnno;

                $.get(url7, function (data2, status2) {
                });
                $.get(url8, function (data2, status2) {
                });
                $.get(url9, function (data2, status2) {
                });
                $.get(url10, function (data2, status2) {
                });
            }
         window.location.href = 'feed2.php';
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

$degree = $_SESSION['degree'];
$dept = $_SESSION['dept'];

$usnno = $_SESSION['usnno'];
$result = mysqli_query($con, "select * from subject where   degree='" . $degree . "' and dept='" . $dept . "' and sem='" . $sem . "' and sec='" . $sec . "' and ayear='" . $ayear . "'");

$result1 = mysqli_query($con, "select * from subject where degree='" . $degree . "' and dept='" . $dept . "' and sem='" . $sem . "' and sec='" . $sec . "' and ayear='" . $ayear . "'");
$result3 = mysqli_query($con, "select count(*) from subject where  degree='" . $degree . "' and dept='" . $dept . "' and sem='" . $sem . "' and sec='" . $sec . "' and ayear='" . $ayear . "'");
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
    $scount = 0;
    if ($row3 = mysqli_fetch_array($result3)) {
        $scount = $row3[0];
    }
    ?>
    <div style="display:inline;">Number Of Subjects: <span id="scount"><?php echo $scount ?></div>
    <div style="display:inline;text-align: right" >Date: <?php echo date("Y/m/d"); ?></div>



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
    <div class="text-center h3">TEACHING</div>

    <table class="table table-bordered"><tr>
            <th class="text-center" rowspan="3">SNo</th>
            <th class="text-center" rowspan="3">Questions</th>
            <th class="text-center" colspan="6">Name of the Subject</th>
        <tr>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
                ?>  

                <td class="select" align='right' id="sname<?php echo $i; ?>">   
                    <?php
                    echo $row ['sname'];
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
                        echo strtoupper($row3 ['name']);
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
            <td class="select" align="right"> <select required id="rfeed1">        
                </select> </td>
            <td class="select" align="right"> <select required id="rfeed2">        
                </select></td>
            <td class="select" align="right"> <select required id="rfeed3">        
                </select></td>
            <td class="select" align="right"> <select required id="rfeed4">        
                </select></td>
            <td class="select clm5" align="right" > <select required id="rfeed5">        
                </select></td>
            <td class="select clm6" align="right" > <select required id="rfeed6">        
                </select></td>
            <td class="select clm7" align="right" > <select required id="rfeed7">        
                </select></td>
            <td class="select clm8" align="right" > <select required id="rfeed8">        
                </select></td>
        </tr>

        <tr>
            <td>2</td>
            <td><p>Interaction with students</p></td>
            <td class="select" align="right"> <select required id="ifeed1">        
                </select> </td>
            <td class="select" align="right"> <select required id="ifeed2">        
                </select></td>
            <td class="select" align="right"> <select required id="ifeed3">        
                </select></td>
            <td class="select" align="right"> <select required id="ifeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select required id="ifeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select required id="ifeed6">        
                </select></td>
            <td class="select clm7" align="right"> <select required id="ifeed7">        
                </select></td>
            <td class="select clm8" align="right"> <select required id="ifeed8">        
                </select></td>
        </tr>

        <tr>
            <td>3</td>
            <td><p>Presentation of the subject</p></td>
            <td class="select" align="right"> <select required id="pfeed1">        
                </select> </td>
            <td class="select" align="right"> <select required id="pfeed2">        
                </select></td>
            <td class="select" align="right"> <select required id="pfeed3">        
                </select></td>
            <td class="select" align="right"> <select required id="pfeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select required id="pfeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select required id="pfeed6">        
                </select></td>
            <td class="select clm7" align="right"> <select required id="pfeed7">        
                </select></td>
            <td class="select clm8" align="right"> <select required id="pfeed8">        
                </select></td>
        </tr>

        <tr>
            <td>4</td>
            <td><p>Audibility & Clarity of speech</p></td>
            <td class="select" align="right"> <select required id="afeed1">        
                </select> </td>
            <td class="select" align="right"> <select required id="afeed2">        
                </select></td>
            <td class="select" align="right"> <select required id="afeed3">        
                </select></td>
            <td class="select" align="right"> <select required id="afeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select required id="afeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select required id="afeed6">        
                </select></td>
            <td class="select clm7" align="right"> <select required id="afeed7">        
                </select></td>
            <td class="select clm8" align="right"> <select required id="afeed8">        
                </select></td>
        </tr>

        <tr>
            <td>5</td>
            <td><p>Subject knowledge</p></td>
            <td class="select" align="right"> <select required id="sfeed1">        
                </select> </td>
            <td class="select" align="right"> <select required id="sfeed2">        
                </select></td>
            <td class="select" align="right"> <select required id="sfeed3">        
                </select></td>
            <td class="select" align="right"> <select required id="sfeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select required id="sfeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select required id="sfeed6">        
                </select></td>
            <td class="select clm7" align="right"> <select required id="sfeed7">        
                </select></td>
            <td class="select clm8" align="right"> <select required id="sfeed8">        
                </select></td>
        </tr>

        <tr>
            <td>6</td>
            <td><p>Creating interest in the subject</p></td>
            <td class="select" align="right"> <select required id="crfeed1">        
                </select> </td>
            <td class="select" align="right"> <select required id="crfeed2">        
                </select></td>
            <td class="select" align="right"> <select required id="crfeed3">        
                </select></td>
            <td class="select" align="right"> <select required id="crfeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select required id="crfeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select required id="crfeed6">        
                </select></td>   
            <td class="select clm7" align="right"> <select required id="crfeed7">        
                </select></td>
            <td class="select clm8" align="right"> <select required id="crfeed8">        
                </select></td>   
        </tr>

        <tr>
            <td>7</td>
            <td><p>Black Board Presentation /PPTs</p></td>
            <td class="select" align="right"> <select required id="bfeed1">        
                </select> </td>
            <td class="select" align="right"> <select required id="bfeed2">        
                </select></td>
            <td class="select" align="right"> <select required id="bfeed3">        
                </select></td>
            <td class="select" align="right"> <select required id="bfeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select required id="bfeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select required id="bfeed6">        
                </select></td>
            <td class="select clm7" align="right"> <select required id="bfeed7">        
                </select></td>
            <td class="select clm8" align="right"> <select required id="bfeed8">        
                </select></td>
        </tr>

        <tr>
            <td>8</td>
            <td><p>Fulfillment of Course Objectives & Outcomes</p></td>
            <td class="select" align="right"> <select required id="ffeed1">        
                </select> </td>
            <td class="select" align="right"> <select required id="ffeed2">        
                </select></td>
            <td class="select" align="right"> <select required id="ffeed3">        
                </select></td>
            <td class="select" align="right"> <select required id="ffeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select required id="ffeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select required id="ffeed6">        
                </select></td>
            <td class="select clm7" align="right"> <select required id="ffeed7">        
                </select></td>
            <td class="select clm8" align="right"> <select required id="ffeed8">        
                </select></td>
        </tr>

        <tr>
            <td>9</td>
            <td><p>Coordination of staff with students</p></td>
            <td class="select" align="right"> <select required id="cofeed1">        
                </select> </td>
            <td class="select" align="right"> <select required id="cofeed2">        
                </select></td>
            <td class="select" align="right"> <select required id="cofeed3">        
                </select></td>
            <td class="select" align="right"> <select required id="cofeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select required id="cofeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select required id="cofeed6">        
                </select></td>
            <td class="select clm7" align="right"> <select required id="cofeed7">        
                </select></td>
            <td class="select clm8" align="right"> <select required id="cofeed8">        
                </select></td>
        </tr>

        <tr>
            <td>10</td>
            <td><p>Valuation of IA books</p></td>
            <td class="select" align="right"> <select required id="vfeed1">        
                </select> </td>
            <td class="select" align="right"> <select required id="vfeed2">        
                </select></td>
            <td class="select" align="right"> <select required id="vfeed3">        
                </select></td>
            <td class="select" align="right"> <select required id="vfeed4">        
                </select></td>
            <td class="select clm5" align="right"> <select required id="vfeed5">        
                </select></td>
            <td class="select clm6" align="right"> <select required id="vfeed6">        
                </select></td>
            <td class="select clm7" align="right"> <select required id="vfeed7">        
                </select></td>
            <td class="select clm8" align="right"> <select required id="vfeed8">        
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
            <td id="tm7" class="clm7"></td>
            <td id="tm8" class="clm8"></td>

        </tr>

        <tr>
            <td colspan="2" align="right"><p>Average Marks= Total Marks /10</p></td>
            <td id="am1"></td>
            <td id="am2"></td>
            <td id="am3"></td>
            <td id="am4"></td>
            <td id="am5" class="clm5"></td>
            <td id="am6" class="clm6"></td>
            <td id="am7" class="clm7"></td>
            <td id="am8" class="clm8"></td>

        </tr>
        <tr>
            <td colspan="2" align="right"><p>Syllabus Coverage(in % only)</p></td>
            <td class="select" align="right"> <select required id="scover1">        
                </select> </td>
            <td class="select" align="right"> <select required id="scover2">        
                </select></td>
            <td class="select" align="right"> <select required id="scover3">        
                </select></td>
            <td class="select" align="right"> <select required id="scover4">        
                </select></td>
            <td class="select clm5" align="right"> <select required id="scover5">        
                </select></td>
            <td class="select clm6" align="right"> <select required id="scover6">        
                </select></td>
            <td class="select clm7" align="right"> <select required id="scover7">        
                </select></td>
            <td class="select clm8" align="right"> <select required id="scover8">        
                </select></td>

        </tr>


    </table>
    <div class="text-right">
        <input id="next" class="btn btn-primary" type="Button" value="NEXT"/>
    </div>
</div>
<br>
<br>







