<?php
require 'ahead.php';
require 'connection.php';
?>
<script>
    $(document).ready(function () {

        var dept = $("#dept").val();
        var ayear = $("#ayear").val();
        var sem = $("#sem").val();
        var sec = $("#sec").val();
        var degree = $("#degree").val();
        var sname1 = $("#sname1").html();
        var fname1 = $("#fname1").html();

        var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname1 + "&fname=" + fname1;
        $.get(url, function (mydata, status) {
            var data = JSON.parse(mydata)
            $("#rfeed1").html(data.rfeed.toFixed(2));
            $("#ifeed1").html(data.ifeed.toFixed(2));
            $("#pfeed1").html(data.pfeed.toFixed(2));
            $("#afeed1").html(data.afeed.toFixed(2));
            $("#sfeed1").html(data.sfeed.toFixed(2));
            $("#crfeed1").html(data.crfeed.toFixed(2));
            $("#bfeed1").html(data.bfeed.toFixed(2));
            $("#ffeed1").html(data.ffeed.toFixed(2));
            $("#cofeed1").html(data.cofeed.toFixed(2));
            $("#vfeed1").html(data.vfeed.toFixed(2));
            $("#scover1").html(data.scover.toFixed(2) + "%");

            var tm1 = parseFloat($("#rfeed1").html()) + parseFloat($("#ifeed1").html()) + parseFloat($("#pfeed1").html()) + parseFloat($("#afeed1").html()) + parseFloat($("#sfeed1").html()) + parseFloat($("#crfeed1").html()) + parseFloat($("#bfeed1").html()) + parseFloat($("#ffeed1").html()) + parseFloat($("#cofeed1").html()) + parseFloat($("#vfeed1").html());
            $("#tm1").html(tm1.toFixed(2));
            $("#am1").html((tm1 / 10).toFixed(2));

        });


        var sname2 = $("#sname2").html();
        var fname2 = $("#fname2").html();
        var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname2 + "&fname=" + fname2;
        $.get(url, function (mydata, status) {
            var data = JSON.parse(mydata)
            $("#rfeed2").html(data.rfeed.toFixed(2));
            $("#ifeed2").html(data.ifeed.toFixed(2));
            $("#pfeed2").html(data.pfeed.toFixed(2));
            $("#afeed2").html(data.afeed.toFixed(2));
            $("#sfeed2").html(data.sfeed.toFixed(2));
            $("#crfeed2").html(data.crfeed.toFixed(2));
            $("#bfeed2").html(data.bfeed.toFixed(2));
            $("#ffeed2").html(data.ffeed.toFixed(2));
            $("#cofeed2").html(data.cofeed.toFixed(2));
            $("#vfeed2").html(data.vfeed.toFixed(2));
            $("#scover2").html(data.scover.toFixed(2) + "%");

            var tm2 = parseFloat($("#rfeed2").html()) + parseFloat($("#ifeed2").html()) + parseFloat($("#pfeed2").html()) + parseFloat($("#afeed2").html()) + parseFloat($("#sfeed2").html()) + parseFloat($("#crfeed2").html()) + parseFloat($("#bfeed2").html()) + parseFloat($("#ffeed2").html()) + parseFloat($("#cofeed2").html()) + parseFloat($("#vfeed2").html());
            $("#tm2").html(tm2.toFixed(2));
            $("#am2").html((tm2 / 10).toFixed(2));


        });

        var sname3 = $("#sname3").html();
        var fname3 = $("#fname3").html();
        var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname3 + "&fname=" + fname3;
        $.get(url, function (mydata, status) {
            var data = JSON.parse(mydata)
            $("#rfeed3").html(data.rfeed.toFixed(2));
            $("#ifeed3").html(data.ifeed.toFixed(2));
            $("#pfeed3").html(data.pfeed.toFixed(2));
            $("#afeed3").html(data.afeed.toFixed(2));
            $("#sfeed3").html(data.sfeed.toFixed(2));
            $("#crfeed3").html(data.crfeed.toFixed(2));
            $("#bfeed3").html(data.bfeed.toFixed(2));
            $("#ffeed3").html(data.ffeed.toFixed(2));
            $("#cofeed3").html(data.cofeed.toFixed(2));
            $("#vfeed3").html(data.vfeed.toFixed(2));
            $("#scover3").html(data.scover.toFixed(2) + "%");

            var tm3 = parseFloat($("#rfeed3").html()) + parseFloat($("#ifeed3").html()) + parseFloat($("#pfeed3").html()) + parseFloat($("#afeed3").html()) + parseFloat($("#sfeed3").html()) + parseFloat($("#crfeed3").html()) + parseFloat($("#bfeed3").html()) + parseFloat($("#ffeed3").html()) + parseFloat($("#cofeed3").html()) + parseFloat($("#vfeed3").html());
            $("#tm3").html(tm3.toFixed(2));
            $("#am3").html((tm3 / 10).toFixed(2));


        });


        var sname4 = $("#sname4").html();
        var fname4 = $("#fname4").html();
        var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname4 + "&fname=" + fname4;
        $.get(url, function (mydata, status) {
            var data = JSON.parse(mydata)
            $("#rfeed4").html(data.rfeed.toFixed(2));
            $("#ifeed4").html(data.ifeed.toFixed(2));
            $("#pfeed4").html(data.pfeed.toFixed(2));
            $("#afeed4").html(data.afeed.toFixed(2));
            $("#sfeed4").html(data.sfeed.toFixed(2));
            $("#crfeed4").html(data.crfeed.toFixed(2));
            $("#bfeed4").html(data.bfeed.toFixed(2));
            $("#ffeed4").html(data.ffeed.toFixed(2));
            $("#cofeed4").html(data.cofeed.toFixed(2));
            $("#vfeed4").html(data.vfeed.toFixed(2));
            $("#scover4").html(data.scover.toFixed(2) + "%");

            var tm4 = parseFloat($("#rfeed4").html()) + parseFloat($("#ifeed4").html()) + parseFloat($("#pfeed4").html()) + parseFloat($("#afeed4").html()) + parseFloat($("#sfeed4").html()) + parseFloat($("#crfeed4").html()) + parseFloat($("#bfeed4").html()) + parseFloat($("#ffeed4").html()) + parseFloat($("#cofeed4").html()) + parseFloat($("#vfeed4").html());
            $("#tm4").html(tm4.toFixed(2));
            $("#am4").html((tm4 / 10).toFixed(2));

        });
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

            var sname5 = $("#sname5").html();
            var fname5 = $("#fname5").html();
            var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname5 + "&fname=" + fname5;
            $.get(url, function (mydata, status) {
                var data = JSON.parse(mydata)
                $("#rfeed5").html(data.rfeed.toFixed(2));
                $("#ifeed5").html(data.ifeed.toFixed(2));
                $("#pfeed5").html(data.pfeed.toFixed(2));
                $("#afeed5").html(data.afeed.toFixed(2));
                $("#sfeed5").html(data.sfeed.toFixed(2));
                $("#crfeed5").html(data.crfeed.toFixed(2));
                $("#bfeed5").html(data.bfeed.toFixed(2));
                $("#ffeed5").html(data.ffeed.toFixed(2));
                $("#cofeed5").html(data.cofeed.toFixed(2));
                $("#vfeed5").html(data.vfeed.toFixed(2));
                $("#scover5").html(data.scover.toFixed(2) + "%");

                var tm5 = parseFloat($("#rfeed5").html()) + parseFloat($("#ifeed5").html()) + parseFloat($("#pfeed5").html()) + parseFloat($("#afeed5").html()) + parseFloat($("#sfeed5").html()) + parseFloat($("#crfeed5").html()) + parseFloat($("#bfeed5").html()) + parseFloat($("#ffeed5").html()) + parseFloat($("#cofeed5").html()) + parseFloat($("#vfeed5").html());
                $("#tm5").html(tm5.toFixed(2));
                $("#am5").html((tm5 / 10).toFixed(2));

            });
        } else if ($("#scount").html() == 6)
        {
            $(".clm7").hide();
            $(".clm8").hide();

            var sname5 = $("#sname5").html();
            var fname5 = $("#fname5").html();
            var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname5 + "&fname=" + fname5;
            $.get(url, function (mydata, status) {
                var data = JSON.parse(mydata)
                $("#rfeed5").html(data.rfeed.toFixed(2));
                $("#ifeed5").html(data.ifeed.toFixed(2));
                $("#pfeed5").html(data.pfeed.toFixed(2));
                $("#afeed5").html(data.afeed.toFixed(2));
                $("#sfeed5").html(data.sfeed.toFixed(2));
                $("#crfeed5").html(data.crfeed.toFixed(2));
                $("#bfeed5").html(data.bfeed.toFixed(2));
                $("#ffeed5").html(data.ffeed.toFixed(2));
                $("#cofeed5").html(data.cofeed.toFixed(2));
                $("#vfeed5").html(data.vfeed.toFixed(2));
                $("#scover5").html(data.scover.toFixed(2) + "%");
				
				var tm5 = parseFloat($("#rfeed5").html()) + parseFloat($("#ifeed5").html()) + parseFloat($("#pfeed5").html()) + parseFloat($("#afeed5").html()) + parseFloat($("#sfeed5").html()) + parseFloat($("#crfeed5").html()) + parseFloat($("#bfeed5").html()) + parseFloat($("#ffeed5").html()) + parseFloat($("#cofeed5").html()) + parseFloat($("#vfeed5").html());
                $("#tm5").html(tm5.toFixed(2));
                $("#am5").html((tm5 / 10).toFixed(2));
            });

            var sname6 = $("#sname6").html();
            var fname6 = $("#fname6").html();
            var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname6 + "&fname=" + fname6;
            $.get(url, function (mydata, status) {
                var data = JSON.parse(mydata)
                $("#rfeed6").html(data.rfeed.toFixed(2));
                $("#ifeed6").html(data.ifeed.toFixed(2));
                $("#pfeed6").html(data.pfeed.toFixed(2));
                $("#afeed6").html(data.afeed.toFixed(2));
                $("#sfeed6").html(data.sfeed.toFixed(2));
                $("#crfeed6").html(data.crfeed.toFixed(2));
                $("#bfeed6").html(data.bfeed.toFixed(2));
                $("#ffeed6").html(data.ffeed.toFixed(2));
                $("#cofeed6").html(data.cofeed.toFixed(2));
                $("#vfeed6").html(data.vfeed.toFixed(2));
                $("#scover6").html(data.scover.toFixed(2) + "%");

                

                var tm6 = parseFloat($("#rfeed6").html()) + parseFloat($("#ifeed6").html()) + parseFloat($("#pfeed6").html()) + parseFloat($("#afeed6").html()) + parseFloat($("#sfeed6").html()) + parseFloat($("#crfeed6").html()) + parseFloat($("#bfeed6").html()) + parseFloat($("#ffeed6").html()) + parseFloat($("#cofeed6").html()) + parseFloat($("#vfeed6").html());
                $("#tm6").html(tm6.toFixed(2));
                $("#am6").html((tm6 / 10).toFixed(2));


            });

        } else if ($("#scount").html() == 7)
        {
            $(".clm8").hide();

            var sname5 = $("#sname5").html();
            var fname5 = $("#fname5").html();
            var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname5 + "&fname=" + fname5;
            $.get(url, function (mydata, status) {
                var data = JSON.parse(mydata)
                $("#rfeed5").html(data.rfeed.toFixed(2));
                $("#ifeed5").html(data.ifeed.toFixed(2));
                $("#pfeed5").html(data.pfeed.toFixed(2));
                $("#afeed5").html(data.afeed.toFixed(2));
                $("#sfeed5").html(data.sfeed.toFixed(2));
                $("#crfeed5").html(data.crfeed.toFixed(2));
                $("#bfeed5").html(data.bfeed.toFixed(2));
                $("#ffeed5").html(data.ffeed.toFixed(2));
                $("#cofeed5").html(data.cofeed.toFixed(2));
                $("#vfeed5").html(data.vfeed.toFixed(2));
                $("#scover5").html(data.scover.toFixed(2) + "%");

            });

            var sname6 = $("#sname6").html();
            var fname6 = $("#fname6").html();
            var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname6 + "&fname=" + fname6;
            $.get(url, function (mydata, status) {
                var data = JSON.parse(mydata)
                $("#rfeed6").html(data.rfeed.toFixed(2));
                $("#ifeed6").html(data.ifeed.toFixed(2));
                $("#pfeed6").html(data.pfeed.toFixed(2));
                $("#afeed6").html(data.afeed.toFixed(2));
                $("#sfeed6").html(data.sfeed.toFixed(2));
                $("#crfeed6").html(data.crfeed.toFixed(2));
                $("#bfeed6").html(data.bfeed.toFixed(2));
                $("#ffeed6").html(data.ffeed.toFixed(2));
                $("#cofeed6").html(data.cofeed.toFixed(2));
                $("#vfeed6").html(data.vfeed.toFixed(2));
                $("#scover6").html(data.scover.toFixed(2) + "%");


            });

            var sname7 = $("#sname7").html();
            var fname7 = $("#fname7").html();
            var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname7 + "&fname=" + fname7;
            $.get(url, function (mydata, status) {
                var data = JSON.parse(mydata)
                $("#rfeed7").html(data.rfeed.toFixed(2));
                $("#ifeed7").html(data.ifeed.toFixed(2));
                $("#pfeed7").html(data.pfeed.toFixed(2));
                $("#afeed7").html(data.afeed.toFixed(2));
                $("#sfeed7").html(data.sfeed.toFixed(2));
                $("#crfeed7").html(data.crfeed.toFixed(2));
                $("#bfeed7").html(data.bfeed.toFixed(2));
                $("#ffeed7").html(data.ffeed.toFixed(2));
                $("#cofeed7").html(data.cofeed.toFixed(2));
                $("#vfeed7").html(data.vfeed.toFixed(2));
                $("#scover7").html(data.scover.toFixed(2) + "%");

                var tm5 = parseFloat($("#rfeed5").html()) + parseFloat($("#ifeed5").html()) + parseFloat($("#pfeed5").html()) + parseFloat($("#afeed5").html()) + parseFloat($("#sfeed5").html()) + parseFloat($("#crfeed5").html()) + parseFloat($("#bfeed5").html()) + parseFloat($("#ffeed5").html()) + parseFloat($("#cofeed5").html()) + parseFloat($("#vfeed5").html());
                $("#tm5").html(tm5.toFixed(2));
                $("#am5").html((tm5 / 10).toFixed(2));

                var tm6 = parseFloat($("#rfeed6").html()) + parseFloat($("#ifeed6").html()) + parseFloat($("#pfeed6").html()) + parseFloat($("#afeed6").html()) + parseFloat($("#sfeed6").html()) + parseFloat($("#crfeed6").html()) + parseFloat($("#bfeed6").html()) + parseFloat($("#ffeed6").html()) + parseFloat($("#cofeed6").html()) + parseFloat($("#vfeed6").html());
                $("#tm6").html(tm6.toFixed(2));
                $("#am6").html((tm6 / 10).toFixed(2));

                var tm7 = parseFloat($("#rfeed7").html()) + parseFloat($("#ifeed7").html()) + parseFloat($("#pfeed7").html()) + parseFloat($("#afeed7").html()) + parseFloat($("#sfeed7").html()) + parseFloat($("#crfeed7").html()) + parseFloat($("#bfeed7").html()) + parseFloat($("#ffeed7").html()) + parseFloat($("#cofeed7").html()) + parseFloat($("#vfeed7").html());
                $("#tm7").html(tm7.toFixed(2));
                $("#am7").html((tm7 / 10).toFixed(2));
            });

        } else {

            var sname5 = $("#sname5").html();
            var fname5 = $("#fname5").html();
            var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname5 + "&fname=" + fname5;
            $.get(url, function (mydata, status) {
                var data = JSON.parse(mydata)
                $("#rfeed5").html(data.rfeed.toFixed(2));
                $("#ifeed5").html(data.ifeed.toFixed(2));
                $("#pfeed5").html(data.pfeed.toFixed(2));
                $("#afeed5").html(data.afeed.toFixed(2));
                $("#sfeed5").html(data.sfeed.toFixed(2));
                $("#crfeed5").html(data.crfeed.toFixed(2));
                $("#bfeed5").html(data.bfeed.toFixed(2));
                $("#ffeed5").html(data.ffeed.toFixed(2));
                $("#cofeed5").html(data.cofeed.toFixed(2));
                $("#vfeed5").html(data.vfeed.toFixed(2));
                $("#scover5").html(data.scover.toFixed(2) + "%");
            });

            var sname6 = $("#sname6").html();
            var fname6 = $("#fname6").html();
            var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname6 + "&fname=" + fname6;
            $.get(url, function (mydata, status) {
                var data = JSON.parse(mydata)
                $("#rfeed6").html(data.rfeed.toFixed(2));
                $("#ifeed6").html(data.ifeed.toFixed(2));
                $("#pfeed6").html(data.pfeed.toFixed(2));
                $("#afeed6").html(data.afeed.toFixed(2));
                $("#sfeed6").html(data.sfeed.toFixed(2));
                $("#crfeed6").html(data.crfeed.toFixed(2));
                $("#bfeed6").html(data.bfeed.toFixed(2));
                $("#ffeed6").html(data.ffeed.toFixed(2));
                $("#cofeed6").html(data.cofeed.toFixed(2));
                $("#vfeed6").html(data.vfeed.toFixed(2));
                $("#scover6").html(data.scover.toFixed(2) + "%");
            });

            var sname7 = $("#sname7").html();
            var fname7 = $("#fname7").html();
            var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname7 + "&fname=" + fname7;
            $.get(url, function (mydata, status) {
                var data = JSON.parse(mydata)
                $("#rfeed7").html(data.rfeed.toFixed(2));
                $("#ifeed7").html(data.ifeed.toFixed(2));
                $("#pfeed7").html(data.pfeed.toFixed(2));
                $("#afeed7").html(data.afeed.toFixed(2));
                $("#sfeed7").html(data.sfeed.toFixed(2));
                $("#crfeed7").html(data.crfeed.toFixed(2));
                $("#bfeed7").html(data.bfeed.toFixed(2));
                $("#ffeed7").html(data.ffeed.toFixed(2));
                $("#cofeed7").html(data.cofeed.toFixed(2));
                $("#vfeed7").html(data.vfeed.toFixed(2));
                $("#scover7").html(data.scover.toFixed(2) + "%");
            });

            var sname8 = $("#sname8").html();
            var fname8 = $("#fname8").html();
            var url = "getsub2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&sname=" + sname8 + "&fname=" + fname8;
            $.get(url, function (mydata, status) {
                var data = JSON.parse(mydata)
                $("#rfeed8").html(data.rfeed.toFixed(2));
                $("#ifeed8").html(data.ifeed.toFixed(2));
                $("#pfeed8").html(data.pfeed.toFixed(2));
                $("#afeed8").html(data.afeed.toFixed(2));
                $("#sfeed8").html(data.sfeed.toFixed(2));
                $("#crfeed8").html(data.crfeed.toFixed(2));
                $("#bfeed8").html(data.bfeed.toFixed(2));
                $("#ffeed8").html(data.ffeed.toFixed(2));
                $("#cofeed8").html(data.cofeed.toFixed(2));
                $("#vfeed8").html(data.vfeed.toFixed(2));
                $("#scover8").html(data.scover.toFixed(2) + "%");


                var tm5 = parseFloat($("#rfeed5").html()) + parseFloat($("#ifeed5").html()) + parseFloat($("#pfeed5").html()) + parseFloat($("#afeed5").html()) + parseFloat($("#sfeed5").html()) + parseFloat($("#crfeed5").html()) + parseFloat($("#bfeed5").html()) + parseFloat($("#ffeed5").html()) + parseFloat($("#cofeed5").html()) + parseFloat($("#vfeed5").html());
                $("#tm5").html(tm5.toFixed(2));
                $("#am5").html((tm5 / 10).toFixed(2));

                var tm6 = parseFloat($("#rfeed6").html()) + parseFloat($("#ifeed6").html()) + parseFloat($("#pfeed6").html()) + parseFloat($("#afeed6").html()) + parseFloat($("#sfeed6").html()) + parseFloat($("#crfeed6").html()) + parseFloat($("#bfeed6").html()) + parseFloat($("#ffeed6").html()) + parseFloat($("#cofeed6").html()) + parseFloat($("#vfeed6").html());
                $("#tm6").html(tm6.toFixed(2));
                $("#am6").html((tm6 / 10).toFixed(2));

                var tm7 = parseFloat($("#rfeed7").html()) + parseFloat($("#ifeed7").html()) + parseFloat($("#pfeed7").html()) + parseFloat($("#afeed7").html()) + parseFloat($("#sfeed7").html()) + parseFloat($("#crfeed7").html()) + parseFloat($("#bfeed7").html()) + parseFloat($("#ffeed7").html()) + parseFloat($("#cofeed7").html()) + parseFloat($("#vfeed7").html());
                $("#tm7").html(tm7.toFixed(2));
                $("#am7").html((tm7 / 10).toFixed(2));

                var tm8 = parseFloat($("#rfeed8").html()) + parseFloat($("#ifeed8").html()) + parseFloat($("#pfeed8").html()) + parseFloat($("#afeed8").html()) + parseFloat($("#sfeed8").html()) + parseFloat($("#crfeed8").html()) + parseFloat($("#bfeed8").html()) + parseFloat($("#ffeed8").html()) + parseFloat($("#cofeed8").html()) + parseFloat($("#vfeed8").html());
                $("#tm8").html(tm8.toFixed(2));
                $("#am8").html((tm8 / 10).toFixed(2));
            });
        }




        var tm5 = parseFloat($("#rfeed5").html()) + parseFloat($("#ifeed5").html()) + parseFloat($("#pfeed5").html()) + parseFloat($("#afeed5").html()) + parseFloat($("#sfeed5").html()) + parseFloat($("#crfeed5").html()) + parseFloat($("#bfeed5").html()) + parseFloat($("#ffeed5").html()) + parseFloat($("#cofeed5").html()) + parseFloat($("#vfeed5").html());
        $("#tm5").html(tm5.toFixed(2));
        $("#am5").html((tm5 / 10).toFixed(2));

        var tm6 = parseFloat($("#rfeed6").html()) + parseFloat($("#ifeed6").html()) + parseFloat($("#pfeed6").html()) + parseFloat($("#afeed6").html()) + parseFloat($("#sfeed6").html()) + parseFloat($("#crfeed6").html()) + parseFloat($("#bfeed6").html()) + parseFloat($("#ffeed6").html()) + parseFloat($("#cofeed6").html()) + parseFloat($("#vfeed6").html());
        $("#tm6").html(tm6.toFixed(2));
        $("#am6").html((tm6 / 10).toFixed(2));

        var tm7 = parseFloat($("#rfeed7").html()) + parseFloat($("#ifeed7").html()) + parseFloat($("#pfeed7").html()) + parseFloat($("#afeed7").html()) + parseFloat($("#sfeed7").html()) + parseFloat($("#crfeed7").html()) + parseFloat($("#bfeed7").html()) + parseFloat($("#ffeed7").html()) + parseFloat($("#cofeed7").html()) + parseFloat($("#vfeed7").html());
        $("#tm7").html(tm7.toFixed(2));
        $("#am7").html((tm7 / 10).toFixed(2));

        var tm8 = parseFloat($("#rfeed8").html()) + parseFloat($("#ifeed8").html()) + parseFloat($("#pfeed8").html()) + parseFloat($("#afeed8").html()) + parseFloat($("#sfeed8").html()) + parseFloat($("#crfeed8").html()) + parseFloat($("#bfeed8").html()) + parseFloat($("#ffeed8").html()) + parseFloat($("#cofeed8").html()) + parseFloat($("#vfeed8").html());
        $("#tm8").html(tm8.toFixed(2));
        $("#am8").html((tm8 / 10).toFixed(2));

    });

</script>
<style>

    table td{
        height: 0px;
    }
</style>
<?php
$ayear = $_GET["ayear"];
$degree = $_GET["degree"];
$sec = $_GET["sec"];
$dept = $_GET['dept'];
$sem = $_GET['sem'];

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
<div class="container-fluid" >


    <br><div class="text-center h2">STUDENT FEEDBACK FORM</div><br>


    <table class="table table-bordered" ><tr>
            <th class="text-center" colspan="6">GRADING</th>
            <th class="text-center">INSTRUCTIONS</th>
        <tr>
            <th><b>Grade</b></th>
            <th>Excellent</th>
            <th>Very Good</th>
            <th>Satisfactory</th>
            <th>Average</th>
            <th>Below Average</th>
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
    <div class="text-center h3">THEORY</div><br>
	
	
    <div class="text-left" style="display:inline;"><strong>Department: </strong><?php echo $dept; ?> &emsp; </div>
    <div class="text-left" style="display:inline;"><strong>Semester:</strong> <?php echo $sem; ?>&emsp;</div>
    <div class="text-left" style="display:inline;"><strong>Section: </strong><?php echo $sec; ?>&emsp;</div>
    <div class="text-left" style="display:inline;"><strong>Degree:</strong> <?php echo $degree; ?>&emsp;</div>
    <div class="text-left" style="display:inline;"><strong>Year:</strong> <?php echo $ayear; ?>&emsp;</div>
    <?php
    $scount = 0;
    if ($row3 = mysqli_fetch_array($result3)) {
        $scount = $row3[0];
    }
    ?>
    <div style="display:inline;"><strong>Number Of Subjects: </strong><span id="scount"><?php echo $scount ?>&emsp;</div>
    <div style="display:inline;" ><strong>Date: </strong><?php echo date("d/m/Y"); ?>&emsp;</div>

<br><br>
    <table class="table table-bordered"><tr>
            <th class="text-center" rowspan="3">SNo</th>
            <th class="text-center" rowspan="3">Questions</th>
            <th class="text-center" colspan="6">Name of the Subject</th>
        <tr>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
                ?>  

                <th class="select" align='left' id="sname<?php echo $i; ?>">   
                    <?php
                    echo $row ['sname'];
                    ?>
                </th>
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

            <th class="select" align="left" id="fname<?php echo $j; ?>">   
                        <?php
                        echo $row3 ['name'];
                        ?>
                   </th>
                    <?php
                }
                $j++;
            }
            ?>
        </tr>


        <tr>
            <th>1</th>
            <td><p>Regularity in handling classes</p></td>
            <td class="select" align="left"> <div  id="rfeed1">        
                </div> </td>
            <td class="select" align="left"> <div  id="rfeed2">        
                </div></td>
            <td class="select" align="left"> <div  id="rfeed3">        
                </div></td>
            <td class="select" align="left"> <div  id="rfeed4">        
                </div></td>
            <td class="select clm5" align="left" > <div  id="rfeed5">        
                </div></td>
            <td class="select clm6" align="left" > <div  id="rfeed6">        
                </div></td>
            <td class="select clm7" align="left" > <div  id="rfeed7">        
                </div></td>
            <td class="select clm8" align="left" > <div  id="rfeed8">        
                </div></td>
        </tr>

        <tr>
            <th>2</th>
            <td><p>Interaction with students</p></td>
            <td class="select" align="left"> <div  id="ifeed1">        
                </div> </td>
            <td class="select" align="left"> <div  id="ifeed2">        
                </div></td>
            <td class="select" align="left"> <div  id="ifeed3">        
                </div></td>
            <td class="select" align="left"> <div  id="ifeed4">        
                </div></td>
            <td class="select clm5" align="left"> <div  id="ifeed5">        
                </div></td>
            <td class="select clm6" align="left"> <div  id="ifeed6">        
                </div></td>
            <td class="select clm7" align="left"> <div  id="ifeed7">        
                </div></td>
            <td class="select clm8" align="left"> <div  id="ifeed8">        
                </div></td>
        </tr>

        <tr>
            <th>3</th>
            <td><p>Presentation of the subject</p></td>
            <td class="select" align="left"> <div  id="pfeed1">        
                </div> </td>
            <td class="select" align="left"> <div  id="pfeed2">        
                </div></td>
            <td class="select" align="left"> <div  id="pfeed3">        
                </div></td>
            <td class="select" align="left"> <div  id="pfeed4">        
                </div></td>
            <td class="select clm5" align="left"> <div  id="pfeed5">        
                </div></td>
            <td class="select clm6" align="left"> <div  id="pfeed6">        
                </div></td>
            <td class="select clm7" align="left"> <div  id="pfeed7">        
                </div></td>
            <td class="select clm8" align="left"> <div  id="pfeed8">        
                </div></td>
        </tr>

        <tr>
            <th>4</th>
            <td><p>Audibility & Clarity of speech</p></td>
            <td class="select" align="left"> <div  id="afeed1">        
                </div> </td>
            <td class="select" align="left"> <div  id="afeed2">        
                </div></td>
            <td class="select" align="left"> <div  id="afeed3">        
                </div></td>
            <td class="select" align="left"> <div  id="afeed4">        
                </div></td>
            <td class="select clm5" align="left"> <div  id="afeed5">        
                </div></td>
            <td class="select clm6" align="left"> <div  id="afeed6">        
                </div></td>
            <td class="select clm7" align="left"> <div  id="afeed7">        
                </div></td>
            <td class="select clm8" align="left"> <div  id="afeed8">        
                </div></td>
        </tr>

        <tr>
            <th>5</th>
            <td><p>Subject knowledge</p></td>
            <td class="select" align="left"> <div  id="sfeed1">        
                </div> </td>
            <td class="select" align="left"> <div  id="sfeed2">        
                </div></td>
            <td class="select" align="left"> <div  id="sfeed3">        
                </div></td>
            <td class="select" align="left"> <div  id="sfeed4">        
                </div></td>
            <td class="select clm5" align="left"> <div  id="sfeed5">        
                </div></td>
            <td class="select clm6" align="left"> <div  id="sfeed6">        
                </div></td>
            <td class="select clm7" align="left"> <div  id="sfeed7">        
                </div></td>
            <td class="select clm8" align="left"> <div  id="sfeed8">        
                </div></td>
        </tr>

        <tr>
            <th>6</th>
            <td><p>Creating interest in the subject</p></td>
            <td class="select" align="left"> <div  id="crfeed1">        
                </div> </td>
            <td class="select" align="left"> <div  id="crfeed2">        
                </div></td>
            <td class="select" align="left"> <div  id="crfeed3">        
                </div></td>
            <td class="select" align="left"> <div  id="crfeed4">        
                </div></td>
            <td class="select clm5" align="left"> <div  id="crfeed5">        
                </div></td>
            <td class="select clm6" align="left"> <div  id="crfeed6">        
                </div></td>   
            <td class="select clm7" align="left"> <div  id="crfeed7">        
                </div></td>
            <td class="select clm8" align="left"> <div  id="crfeed8">        
                </div></td>   
        </tr>

        <tr>
            <th>7</th>
            <td><p>Black Board Presentation /PPTs</p></td>
            <td class="select" align="left"> <div  id="bfeed1">        
                </div> </td>
            <td class="select" align="left"> <div  id="bfeed2">        
                </div></td>
            <td class="select" align="left"> <div  id="bfeed3">        
                </div></td>
            <td class="select" align="left"> <div  id="bfeed4">        
                </div></td>
            <td class="select clm5" align="left"> <div  id="bfeed5">        
                </div></td>
            <td class="select clm6" align="left"> <div  id="bfeed6">        
                </div></td>
            <td class="select clm7" align="left"> <div  id="bfeed7">        
                </div></td>
            <td class="select clm8" align="left"> <div  id="bfeed8">        
                </div></td>
        </tr>

        <tr>
            <th>8</th>
            <td><p>Fulfillment of Course Objectives & Outcomes</p></td>
            <td class="select" align="left"> <div  id="ffeed1">        
                </div> </td>
            <td class="select" align="left"> <div  id="ffeed2">        
                </div></td>
            <td class="select" align="left"> <div  id="ffeed3">        
                </div></td>
            <td class="select" align="left"> <div  id="ffeed4">        
                </div></td>
            <td class="select clm5" align="left"> <div  id="ffeed5">        
                </div></td>
            <td class="select clm6" align="left"> <div  id="ffeed6">        
                </div></td>
            <td class="select clm7" align="left"> <div  id="ffeed7">        
                </div></td>
            <td class="select clm8" align="left"> <div  id="ffeed8">        
                </div></td>
        </tr>

        <tr>
            <th>9</th>
            <td><p>Coordination of staff with students</p></td>
            <td class="select" align="left"> <div  id="cofeed1">        
                </div> </td>
            <td class="select" align="left"> <div  id="cofeed2">        
                </div></td>
            <td class="select" align="left"> <div  id="cofeed3">        
                </div></td>
            <td class="select" align="left"> <div  id="cofeed4">        
                </div></td>
            <td class="select clm5" align="left"> <div  id="cofeed5">        
                </div></td>
            <td class="select clm6" align="left"> <div  id="cofeed6">        
                </div></td>
            <td class="select clm7" align="left"> <div  id="cofeed7">        
                </div></td>
            <td class="select clm8" align="left"> <div  id="cofeed8">        
                </div></td>
        </tr>

        <tr>
            <th>10</th>
            <td><p>Valuation of IA books</p></td>
            <td class="select" align="left"> <div  id="vfeed1">        
                </div> </td>
            <td class="select" align="left"> <div  id="vfeed2">        
                </div></td>
            <td class="select" align="left"> <div  id="vfeed3">        
                </div></td>
            <td class="select" align="left"> <div  id="vfeed4">        
                </div></td>
            <td class="select clm5" align="left"> <div  id="vfeed5">        
                </div></td>
            <td class="select clm6" align="left"> <div  id="vfeed6">        
                </div></td>
            <td class="select clm7" align="left"> <div  id="vfeed7">        
                </div></td>
            <td class="select clm8" align="left"> <div  id="vfeed8">        
                </div></td>
        </tr>
        <tr>
            <td colspan="2" align="left"><p>Total Marks</p></td>
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
            <th colspan="2" align="left"><p>Average Marks= Total Marks /10</p></th>
            <th id="am1"></th>
            <th id="am2"></th>
            <th id="am3"></th>
            <th id="am4"></th>
            <th id="am5" class="clm5"></th>
            <th id="am6" class="clm6"></th>
            <th id="am7" class="clm7"></th>
            <th id="am8" class="clm8"></th>

        </tr>
        <tr>
            <td colspan="2" align="left"><p>Syllabus Coverage(in % only)</p></td>
            <td class="select" align="left"> <div  id="scover1">        
                </div> </td>
            <td class="select" align="left"> <div  id="scover2">        
                </div></td>
            <td class="select" align="left"> <div  id="scover3">        
                </div></td>
            <td class="select" align="left"> <div  id="scover4">        
                </div></td>
            <td class="select clm5" align="left"> <div  id="scover5">        
                </div></td>
            <td class="select clm6" align="left"> <div  id="scover6">        
                </div></td>
            <td class="select clm7" align="left"> <div  id="scover7">        
                </div></td>
            <td class="select clm8" align="left"> <div  id="scover8">        
                </div></td>

        </tr>


    </table>

</div>
<br>
<br>
<script>
    $(document).ready(function () {

        var dept = $("#dept").val();
        var ayear = $("#ayear").val();
        var sem = $("#sem").val();
        var sec = $("#sec").val();
        var degree = $("#degree").val();
        var lname1 = $("#lname1").html();
        var lfname1 = $("#lfname1").html();
		

        var url = "getlab2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&lname=" + lname1 + "&fname=" + lfname1;
        $.get(url, function (mydata, status) {
            
            var data = JSON.parse(mydata)
            $("#lrfeed1").html(data.rfeed.toFixed(2));
            $("#lifeed1").html(data.ifeed.toFixed(2));
            $("#lpfeed1").html(data.pfeed.toFixed(2));
            $("#lafeed1").html(data.afeed.toFixed(2));
            $("#lsfeed1").html(data.sfeed.toFixed(2));
            $("#lcrfeed1").html(data.crfeed.toFixed(2));
            $("#lbfeed1").html(data.bfeed.toFixed(2));
            $("#lffeed1").html(data.ffeed.toFixed(2));
            $("#lcofeed1").html(data.cofeed.toFixed(2));
            $("#lvfeed1").html(data.vfeed.toFixed(2));
            $("#lscover1").html(data.scover.toFixed(2) + "%");

            var tm1 = parseFloat($("#lrfeed1").html()) + parseFloat($("#lifeed1").html()) + parseFloat($("#lpfeed1").html()) + parseFloat($("#lafeed1").html()) + parseFloat($("#lsfeed1").html()) + parseFloat($("#lcrfeed1").html()) + parseFloat($("#lbfeed1").html()) + parseFloat($("#lffeed1").html()) + parseFloat($("#lcofeed1").html()) + parseFloat($("#lvfeed1").html());
            $("#ltm1").html(tm1.toFixed(2));
            $("#lam1").html((tm1 / 10).toFixed(2));

        });

        var lname2 = $("#lname2").html();
        var lfname2 = $("#lfname2").html();

        var url = "getlab2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&lname=" + lname2 + "&fname=" + lfname2;
        $.get(url, function (mydata, status) {
           
            var data = JSON.parse(mydata)
            $("#lrfeed2").html(data.rfeed.toFixed(2));
            $("#lifeed2").html(data.ifeed.toFixed(2));
            $("#lpfeed2").html(data.pfeed.toFixed(2));
            $("#lafeed2").html(data.afeed.toFixed(2));
            $("#lsfeed2").html(data.sfeed.toFixed(2));
            $("#lcrfeed2").html(data.crfeed.toFixed(2));
            $("#lbfeed2").html(data.bfeed.toFixed(2));
            $("#lffeed2").html(data.ffeed.toFixed(2));
            $("#lcofeed2").html(data.cofeed.toFixed(2));
            $("#lvfeed2").html(data.vfeed.toFixed(2));
            $("#lscover2").html(data.scover.toFixed(2) + "%");

            var tm2 = parseFloat($("#lrfeed2").html()) + parseFloat($("#lifeed2").html()) + parseFloat($("#lpfeed2").html()) + parseFloat($("#lafeed2").html()) + parseFloat($("#lsfeed2").html()) + parseFloat($("#lcrfeed2").html()) + parseFloat($("#lbfeed2").html()) + parseFloat($("#lffeed2").html()) + parseFloat($("#lcofeed2").html()) + parseFloat($("#lvfeed2").html());
            $("#ltm2").html(tm2.toFixed(2));
            $("#lam2").html((tm2 / 10).toFixed(2));

        });

        var lname3 = $("#lname3").html();
        var lfname3 = $("#lfname3").html();

        var url = "getlab2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&lname=" + lname3 + "&fname=" + lfname3;
        $.get(url, function (mydata, status) {
           
            var data = JSON.parse(mydata)
            $("#lrfeed3").html(data.rfeed.toFixed(2));
            $("#lifeed3").html(data.ifeed.toFixed(2));
            $("#lpfeed3").html(data.pfeed.toFixed(2));
            $("#lafeed3").html(data.afeed.toFixed(2));
            $("#lsfeed3").html(data.sfeed.toFixed(2));
            $("#lcrfeed3").html(data.crfeed.toFixed(2));
            $("#lbfeed3").html(data.bfeed.toFixed(2));
            $("#lffeed3").html(data.ffeed.toFixed(2));
            $("#lcofeed3").html(data.cofeed.toFixed(2));
            $("#lvfeed3").html(data.vfeed.toFixed(2));
            $("#lscover3").html(data.scover.toFixed(2) + "%");

            var tm3 = parseFloat($("#lrfeed3").html()) + parseFloat($("#lifeed3").html()) + parseFloat($("#lpfeed3").html()) + parseFloat($("#lafeed3").html()) + parseFloat($("#lsfeed3").html()) + parseFloat($("#lcrfeed3").html()) + parseFloat($("#lbfeed3").html()) + parseFloat($("#lffeed3").html()) + parseFloat($("#lcofeed3").html()) + parseFloat($("#lvfeed3").html());
            $("#ltm3").html(tm3.toFixed(2));
            $("#lam3").html((tm3 / 10).toFixed(2));

        });


        var lname4 = $("#lname4").html();
        var lfname4 = $("#lfname4").html();

        var url = "getlab2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&lname=" + lname4 + "&fname=" + lfname4;
        $.get(url, function (mydata, status) {
            
            var data = JSON.parse(mydata)
            $("#lrfeed4").html(data.rfeed.toFixed(2));
            $("#lifeed4").html(data.ifeed.toFixed(2));
            $("#lpfeed4").html(data.pfeed.toFixed(2));
            $("#lafeed4").html(data.afeed.toFixed(2));
            $("#lsfeed4").html(data.sfeed.toFixed(2));
            $("#lcrfeed4").html(data.crfeed.toFixed(2));
            $("#lbfeed4").html(data.bfeed.toFixed(2));
            $("#lffeed4").html(data.ffeed.toFixed(2));
            $("#lcofeed4").html(data.cofeed.toFixed(2));
            $("#lvfeed4").html(data.vfeed.toFixed(2));
            $("#lscover4").html(data.scover.toFixed(2) + "%");

            var tm4 = parseFloat($("#lrfeed4").html()) + parseFloat($("#lifeed4").html()) + parseFloat($("#lpfeed4").html()) + parseFloat($("#lafeed4").html()) + parseFloat($("#lsfeed4").html()) + parseFloat($("#lcrfeed4").html()) + parseFloat($("#lbfeed4").html()) + parseFloat($("#lffeed4").html()) + parseFloat($("#lcofeed4").html()) + parseFloat($("#lvfeed4").html());
            $("#ltm4").html(tm4.toFixed(2));
            $("#lam4").html((tm4 / 10).toFixed(2));

        });



        if ($("#lcount").html() == 4)
        {
            $(".lclm5").hide();
            $(".lclm6").hide();

        } else if ($("#lcount").html() == 5)
        {
            var lname5 = $("#lname5").html();
            var lfname5 = $("#lfname5").html();

            var url = "getlab2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&lname=" + lname5 + "&fname=" + lfname5;
            $.get(url, function (mydata, status) {

                var data = JSON.parse(mydata)
                $("#lrfeed5").html(data.rfeed.toFixed(2));
                $("#lifeed5").html(data.ifeed.toFixed(2));
                $("#lpfeed5").html(data.pfeed.toFixed(2));
                $("#lafeed5").html(data.afeed.toFixed(2));
                $("#lsfeed5").html(data.sfeed.toFixed(2));
                $("#lcrfeed5").html(data.crfeed.toFixed(2));
                $("#lbfeed5").html(data.bfeed.toFixed(2));
                $("#lffeed5").html(data.ffeed.toFixed(2));
                $("#lcofeed5").html(data.cofeed.toFixed(2));
                $("#lvfeed5").html(data.vfeed.toFixed(2));
                $("#lscover5").html(data.scover.toFixed(2) + "%");

                var tm5 = parseFloat($("#lrfeed5").html()) + parseFloat($("#lifeed5").html()) + parseFloat($("#lpfeed5").html()) + parseFloat($("#lafeed5").html()) + parseFloat($("#lsfeed5").html()) + parseFloat($("#lcrfeed5").html()) + parseFloat($("#lbfeed5").html()) + parseFloat($("#lffeed5").html()) + parseFloat($("#lcofeed5").html()) + parseFloat($("#lvfeed5").html());
                $("#ltm5").html(tm5.toFixed(2));
                $("#lam5").html((tm5 / 10).toFixed(2));

            });

            var lname6 = $("#lname6").html();
            var lfname6 = $("#lfname6").html();

            var url = "getlab2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree + "&lname=" + lname6 + "&fname=" + lfname6;
            $.get(url, function (mydata, status) {

                var data = JSON.parse(mydata)
                $("#lrfeed6").html(data.rfeed.toFixed(2));
                $("#lifeed6").html(data.ifeed.toFixed(2));
                $("#lpfeed6").html(data.pfeed.toFixed(2));
                $("#lafeed6").html(data.afeed.toFixed(2));
                $("#lsfeed6").html(data.sfeed.toFixed(2));
                $("#lcrfeed6").html(data.crfeed.toFixed(2));
                $("#lbfeed6").html(data.bfeed.toFixed(2));
                $("#lffeed6").html(data.ffeed.toFixed(2));
                $("#lcofeed6").html(data.cofeed.toFixed(2));
                $("#lvfeed6").html(data.vfeed.toFixed(2));
                $("#lscover6").html(data.scover.toFixed(2) + "%");

                var tm6 = parseFloat($("#lrfeed6").html()) + parseFloat($("#lifeed6").html()) + parseFloat($("#lpfeed6").html()) + parseFloat($("#lafeed6").html()) + parseFloat($("#lsfeed6").html()) + parseFloat($("#lcrfeed6").html()) + parseFloat($("#lbfeed6").html()) + parseFloat($("#lffeed6").html()) + parseFloat($("#lcofeed6").html()) + parseFloat($("#lvfeed6").html());
                $("#ltm6").html(tm6.toFixed(2));
                $("#lam6").html((tm6 / 10).toFixed(2));

            });
        }
    });
</script>

<?php
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

<div class="container-fluid" >

    <br><div class="text-center h2">Lab FEEDBACK FORM</div>

 
    <?php
    $lcount = 0;
    if ($row3 = mysqli_fetch_array($result3)) {
        $lcount = $row3[0];
    }
    ?>

    <div hidden style="display:inline;">Number Of Feedbacks: <span id="lcount"><?php echo $lcount ?></div>
    <div style="display:inline;"><strong>Number Of Labs: </strong><span><?php echo $lcount / 2 ?>&emsp;</div>

    <label><strong>Date: </strong><?php echo date("Y/m/d"); ?></label>



   
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

                <th class="select" align="left" id="lname<?php echo $i; ?>">   
                    <?php
                    echo $row ['lname'];
                    ?>
                </th>
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

                    <th class="select" align="left" id="lfname<?php echo $j; ?>">   
                        <?php
                        echo $row3 ['name'];
                        ?>
                    </th>
                    <?php
                }
                $j++;
            }
            ?>
        </tr>


        <tr>
            <th>1</th>
            <td><p>Regularity in handling classes</p></td>
            <td class="select" align="left"> <div id="lrfeed1">        
                </div> </td>
            <td class="select" align="left"> <div id="lrfeed2">        
                </div></td>
            <td class="select" align="left"> <div id="lrfeed3">        
                </div></td>
            <td class="select" align="left"> <div id="lrfeed4">        
                </div></td>
            <td class="select lclm5" align="left"> <div id="lrfeed5">        
                </div></td>
            <td class="select lclm6" align="left"> <div id="lrfeed6">        
                </div></td>
        </tr>

        <tr>
            <th>2</th>
            <td><p>Interaction with students</p></td>
            <td class="select" align="left"> <div id="lifeed1">        
                </div> </td>
            <td class="select" align="left"> <div id="lifeed2">        
                </div></td>
            <td class="select" align="left"> <div id="lifeed3">        
                </div></td>
            <td class="select" align="left"> <div id="lifeed4">        
                </div></td>
            <td class="select lclm5" align="left"> <div id="lifeed5">        
                </div></td>
            <td class="select lclm6" align="left"> <div id="lifeed6">        
                </div></td>
        </tr>

        <tr>
            <th>3</th>
            <td><p>Presentation of the subject</p></td>
            <td class="select" align="left"> <div id="lpfeed1">        
                </div> </td>
            <td class="select" align="left"> <div id="lpfeed2">        
                </div></td>
            <td class="select" align="left"> <div id="lpfeed3">        
                </div></td>
            <td class="select" align="left"> <div id="lpfeed4">        
                </div></td>
            <td class="select lclm5" align="left"> <div id="lpfeed5">        
                </div></td>
            <td class="select lclm6" align="left"> <div id="lpfeed6">        
                </div></td>
        </tr>

        <tr>
            <th>4</th>
            <td><p>Audibility & Clarity of speech</p></td>
            <td class="select" align="left"> <div id="lafeed1">        
                </div> </td>
            <td class="select" align="left"> <div id="lafeed2">        
                </div></td>
            <td class="select" align="left"> <div id="lafeed3">        
                </div></td>
            <td class="select" align="left"> <div id="lafeed4">        
                </div></td>
            <td class="select lclm5" align="left"> <div id="lafeed5">        
                </div></td>
            <td class="select lclm6" align="left"> <div id="lafeed6">        
                </div></td>

        </tr>

        <tr>
            <th>5</th>
            <td><p>Subject knowledge</p></td>
            <td class="select" align="left"> <div id="lsfeed1">        
                </div> </td>
            <td class="select" align="left"> <div id="lsfeed2">        
                </div></td>
            <td class="select" align="left"> <div id="lsfeed3">        
                </div></td>
            <td class="select" align="left"> <div id="lsfeed4">        
                </div></td>
            <td class="select lclm5" align="left"> <div id="lsfeed5">        
                </div></td>
            <td class="select lclm6" align="left"> <div id="lsfeed6">        
                </div></td>
        </tr>

        <tr>
            <th>6</th>
            <td><p>Creating interest in the subject</p></td>
            <td class="select" align="left"> <div id="lcrfeed1">        
                </div> </td>
            <td class="select" align="left"> <div id="lcrfeed2">        
                </div></td>
            <td class="select" align="left"> <div id="lcrfeed3">        
                </div></td>
            <td class="select" align="left"> <div id="lcrfeed4">        
                </div></td>
            <td class="select lclm5" align="left"> <div id="lcrfeed5">        
                </div></td>
            <td class="select lclm6" align="left"> <div id="lcrfeed6">        
                </div></td>
        </tr>

        <tr>
            <th>7</th>
            <td><p>Black Board Presentation /PPTs</p></td>
            <td class="select" align="left"> <div id="lbfeed1">        
                </div> </td>
            <td class="select" align="left"> <div id="lbfeed2">        
                </div></td>
            <td class="select" align="left"> <div id="lbfeed3">        
                </div></td>
            <td class="select" align="left"> <div id="lbfeed4">        
                </div></td>
            <td class="select lclm5" align="left"> <div id="lbfeed5">        
                </div></td>
            <td class="select lclm6" align="left"> <div id="lbfeed6">        
                </div></td>
        </tr>

        <tr>
            <th>8</th>
            <td><p>Fulfillment of Course Objectives & Outcomes</p></td>
            <td class="select" align="left"> <div id="lffeed1">        
                </div> </td>
            <td class="select" align="left"> <div id="lffeed2">        
                </div></td>
            <td class="select" align="left"> <div id="lffeed3">        
                </div></td>
            <td class="select" align="left"> <div id="lffeed4">        
                </div></td>
            <td class="select lclm5" align="left"> <div id="lffeed5">        
                </div></td>
            <td class="select lclm6" align="left"> <div id="lffeed6">        
                </div></td>
        </tr>

        <tr>
            <th>9</th>
            <td><p>Coordination of staff with students</p></td>
            <td class="select" align="left"> <div id="lcofeed1">        
                </div> </td>
            <td class="select" align="left"> <div id="lcofeed2">        
                </div></td>
            <td class="select" align="left"> <div id="lcofeed3">        
                </div></td>
            <td class="select" align="left"> <div id="lcofeed4">        
                </div></td>
            <td class="select lclm5" align="left"> <div id="lcofeed5">        
                </div></td>
            <td class="select lclm6" align="left"> <div id="lcofeed6">        
                </div></td>
        </tr>

        <tr>
            <th>10</th>
            <td><p>Valuation of Journals</p></td>
            <td class="select" align="left"> <div id="lvfeed1">        
                </div> </td>
            <td class="select" align="left"> <div id="lvfeed2">        
                </div></td>
            <td class="select" align="left"> <div id="lvfeed3">        
                </div></td>
            <td class="select" align="left"> <div id="lvfeed4">        
                </div></td>
            <td class="select lclm5" align="left"> <div id="lvfeed5">        
                </div></td>
            <td class="select lclm6" align="left"> <div id="lvfeed6">        
                </div></td>
        </tr>

        <tr>
            <td colspan="2" align="left"><p>Total Marks</p></td>
            <td id="ltm1"></td>
            <td id="ltm2"></td>
            <td id="ltm3"></td>
            <td id="ltm4"></td>
            <td id="ltm5" class="lclm5"></td>
            <td id="ltm6" class="lclm6"></td>


        </tr>

        <tr>
            <th colspan="2" align="left"><p>Average Marks= Total Marks /10</p></th>
            <th id="lam1"></th>
            <th id="lam2"></th>
            <th id="lam3"></th>
            <th id="lam4"></th>
            <th id="lam5" class="lclm5"></th>
            <th id="lam6" class="lclm6"></th>


        </tr>
        <tr>
            <td colspan="2" align="left"><p>Syllabus Coverage(in % only)</p></td>
            <td class="select" align="left"> <div id="lscover1">        
                </div> </td>
            <td class="select" align="left"> <div id="lscover2">        
                </div></td>
            <td class="select" align="left"> <div id="lscover3">        
                </div></td>
            <td class="select" align="left"> <div id="lscover4">        
                </div></td>
            <td class="select lclm5" align="left"> <div id="lscover5">        
                </div></td>
            <td class="select lclm6" align="left"> <div id="lscover6">        
                </div></td>
        </tr>

        
    </table>

</div>
<br>
<br>



<script>
$(document).ready(function(){

var dept = $("#dept").val();
        var ayear = $("#ayear").val();
        var sem = $("#sem").val();
        var sec = $("#sec").val();
        var degree = $("#degree").val();
        

        var url = "getlib2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree;
        $.get(url, function (mydata, status) {
         
            var data = JSON.parse(mydata)
            $("#lq1").html(data.lq1.toFixed(2));
            $("#lq2").html(data.lq2.toFixed(2));
            $("#lq3").html(data.lq3.toFixed(2));
            $("#lq4").html(data.lq4.toFixed(2));
            $("#lq5").html(data.lq5.toFixed(2));
            $("#lq6").html(data.lq6.toFixed(2));
            $("#ads1").html(data.ads1.toFixed(2));
            $("#ads2").html(data.ads2.toFixed(2));
            $("#ads3").html(data.ads3.toFixed(2));
            $("#ads4").html(data.ads4.toFixed(2));
            
            $("#exs1").html(data.exs1.toFixed(2));
            $("#exs2").html(data.exs2.toFixed(2));
            $("#exs3").html(data.exs3.toFixed(2));
            $("#exs4").html(data.exs4.toFixed(2));
            
            $("#acs1").html(data.acs1.toFixed(2));
            $("#acs2").html(data.acs2.toFixed(2));
            $("#acs3").html(data.acs3.toFixed(2));
            $("#acs4").html(data.acs4.toFixed(2));
            
            $("#css1").html(data.css1.toFixed(2));
            $("#css2").html(data.css2.toFixed(2));
            $("#css3").html(data.css3.toFixed(2));
            $("#css4").html(data.css4.toFixed(2));
            $("#sugg").html(data.sugg);

           
           var litm1 = parseFloat($("#lq1").html()) + parseFloat($("#lq2").html()) + parseFloat($("#lq3").html()) + parseFloat($("#lq4").html()) + parseFloat($("#lq5").html()) + parseFloat($("#lq6").html()) ;
            $("#litm1").html(litm1.toFixed(2));
            $("#liam1").html((litm1 / 6).toFixed(2));

            var litm2 = parseFloat($("#ads1").html()) + parseFloat($("#ads2").html()) + parseFloat($("#ads3").html()) + parseFloat($("#ads4").html()) ;
            $("#litm2").html(litm2.toFixed(2));
            $("#liam2").html((litm2 / 4).toFixed(2));
  
           var litm3 = parseFloat($("#exs1").html()) + parseFloat($("#exs2").html()) + parseFloat($("#exs3").html()) + parseFloat($("#exs4").html()) ;
            $("#litm3").html(litm3.toFixed(2));
            $("#liam3").html((litm3 / 4).toFixed(2));
            
            var litm4 = parseFloat($("#acs1").html()) + parseFloat($("#acs2").html()) + parseFloat($("#acs3").html()) + parseFloat($("#acs4").html()) ;
            $("#litm4").html(litm4.toFixed(2));
            $("#liam4").html((litm4 / 4).toFixed(2));
            
            var litm5 = parseFloat($("#css1").html()) + parseFloat($("#css2").html()) + parseFloat($("#css3").html()) + parseFloat($("#css4").html()) ;
            $("#litm5").html(litm5.toFixed(2));
            $("#liam5").html((litm5 / 4).toFixed(2));
            
            

        });

});

</script>
<?php

$result = mysqli_query($con, "select * from lab where degree='".$degree."' and dept='".$dept."'" );
$result1 = mysqli_query($con, "select * from lab where degree='".$degree."' and dept='".$dept."'" );
?>
<input type="hidden" id="usnno" value="<?php echo $usnno; ?>" >
<input type="hidden" id="dept" value="<?php echo $dept; ?>" >
<input type="hidden" id="ayear" value="<?php echo $ayear; ?>" >
<input type="hidden" id="sem" value="<?php echo $sem; ?>" >
<input type="hidden" id="sec" value="<?php echo $sec; ?>" >
<input type="hidden" id="degree" value="<?php echo $degree; ?>" >

<div class="container-fluid" >
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
                        <tr><th>01</th><td>Book Bank facility</td>
                            <td class="select" align="left"> <div id="lq1">        
                           </div> </td>
                <th>01</th>
                <td>Rating of the Office</td>
                <td class="select" align="left"> <div id="ads1">        
                           </div> </td>
                <td class="select" align="left"> <div id="exs1">        
                           </div> </td>
                 <td class="select" align="left"> <div id="acs1">        
                           </div> </td>
                 <td class="select" align="left"> <div id="css1">        
                           </div> </td>
                        </tr>
                <tr><th>02</th><td>Reference Books</td>
                    <td class="select" align="left"> <div id="lq2">        
                           </div> </td>
                <th>02</th>
                <td>Interaction with Students</td>
                 <td class="select" align="left"> <div id="ads2">        
                           </div> </td>
                <td class="select" align="left"> <div id="exs2">        
                           </div> </td>
                 <td class="select" align="left"> <div id="acs2">        
                           </div> </td>
                 <td class="select" align="left"> <div id="css2">        
                           </div> </td>
                <tr><th>03</th><td>Journals & e- Journals</td>
                    <td class="select" align="left"> <div id="lq3">        
                           </div> </td>
                <th>03</th>
                <td>Availability of Staff in Woking Hours</td>
                 <td class="select" align="left"> <div id="ads3">        
                           </div> </td>
                <td class="select" align="left"> <div id="exs3">        
                           </div> </td>
                 <td class="select" align="left"> <div id="acs3">        
                           </div> </td>
                 <td class="select" align="left"> <div id="css3">        
                           </div> </td>
                <tr><th>04</th><td>News papers & Magazines</td>
                    <td class="select" align="left"> <div id="lq4">        
                           </div> </td>
                    <th>04</th>
                    <td>Behavior of Staff with Students</td>
                <td class="select" align="left"> <div id="ads4">        
                           </div> </td>
                <td class="select" align="left"> <div id="exs4">        
                           </div> </td>
                 <td class="select" align="left"> <div id="acs4">        
                           </div> </td>
                 <td class="select" align="left"> <div id="css4">        
                           </div> </td>
                <tr><th>05</th><td>Availability News papers & Magazines</td>
                    <td class="select" align="left"> <div id="lq5">        
                           </div> </td>
                           <td colspan="2" style="text-align: left">Total Marks</td><td id="litm2"></td><td id="litm3"></td><td id="litm4"></td><td id="litm5"></td></tr>
                <tr><th>06</th><td>Interaction with Students</td>
                    <td class="select" align="left"> <div id="lq6">        
                           </div> </td>
                <th colspan="2" style="text-align: left">Average Marks=Total Marks/4</th><th id="liam2"></th><th id="liam3"></th><th id="liam4"></th><th id="liam5"></th></tr>
                <tr><td colspan="2" style="text-align: left">Total Marks</td><td id="litm1"></td><!-- <td rowspan="2" colspan="6"><textarea id="sugg" rows="3" cols="100" placeholder="Suggestions"></textarea>--></td></tr>
                <tr><th colspan="2" style="text-align: left">Average Marks=Total Marks/6</th><th id="liam1"></the></tr>
    </table>

       
<script>
    $(document).ready(function () {
  var ayear = $("#ayear").val();
        var sem = $("#sem").val();
        var sec = $("#sec").val();
        var degree = $("#degree").val();
        var dept = $("#dept").val();

        var url = "getgen2.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree;
        $.get(url, function (mydata, status) {
            
            var data = JSON.parse(mydata)
            $("#q1").html(data.q1.toFixed(2));
            $("#q2").html(data.q2.toFixed(2));
            $("#q3").html(data.q3.toFixed(2));
            $("#q4").html(data.q4.toFixed(2));
            $("#q5").html(data.q5.toFixed(2));
            $("#q6").html(data.q6.toFixed(2));
            $("#q7").html(data.q7.toFixed(2));
            $("#q8").html(data.q8.toFixed(2));
            $("#q9").html(data.q9.toFixed(2));
            $("#q10").html(data.q10.toFixed(2));
            
         
           
           var adtm = parseFloat($("#q1").html()) + parseFloat($("#q2").html()) + parseFloat($("#q3").html()) + parseFloat($("#q4").html()) + parseFloat($("#q5").html()) + parseFloat($("#q6").html())+ parseFloat($("#q7").html())+ parseFloat($("#q8").html())+ parseFloat($("#q9").html())+ parseFloat($("#q10").html()) ;
            $("#adtm").html(adtm.toFixed(2));
            $("#adam").html((adtm / 10).toFixed(2));

          
            
            

        });
    });

</script>
<?php

?>


<div class="container-fluid" >

    <br><div class="text-center h2">GENERAL FEEDBACK FORM</div>

    



   
    <div class="text-center h3">ADMIN</div>

    <table class="table table-bordered">
        <tr><th>SN</th><th>General</th><th>Marks</th><th>SN</th><th>General</th><th>Marks</th><th>SN</th><th>General</th><th>Marks</th></tr>
        <tr>
            <th>01</th><td>Interaction with the Principal</td>
            <td class="select" align="left"> <div id="q1">        
                </div> </td>
            <th>04</th><td>Extra Curricular Activities</td>
            <td class="select" align="left"> <div id="q4">        
                </div> </td>
            <th>07</th><td>House Keeping College campus</td>
            <td class="select" align="left"> <div id="q7">        
                </div> </td>
        </tr>
        <tr>
            <th>02</th><td>Interaction with HODs</td>
            <td class="select" align="left"> <div id="q2">        
                </div> </td>
            <th>05</th><td>Discipline in Campus</td>
            <td class="select" align="left"> <div id="q5">        
                </div> </td>
            <th>08</th><td>Drinking Water Facility</td>
            <td class="select" align="left"> <div id="q8">        
                </div> </td>
        </tr>
        <tr>
            <th>03</th><td>Response at the Reception</td>
            <td class="select" align="left"> <div id="q3">        
                </div> </td>
            <th>06</th><td>Internet Facility at Internet Center</td>
            <td class="select" align="left"> <div id="q6">        
                </div> </td>
            <th>09</th><td>Sports Activities</td>
            <td class="select" align="left"> <div id="q9">        
                </div> </td>
        </tr>
        <tr><td colspan="2" style="text-align: left">Total Marks </td><td id="adtm" colspan="4"></td>
            <th>10</th>
            <td>Proctoring System</td>

            <td class="select" align="left"> <div id="q10">        
                </div> </td>
        </tr>
        <tr><th colspan="2" style="text-align: left">Average Marks  =<br>
                Total Points/10;
            </th>
            <th colspan="7" id="adam"></th></tr>
    </table>
    