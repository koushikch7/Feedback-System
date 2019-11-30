<?php
require 'dhead.php';

$dept = $_SESSION['dept'];
?>

<script>
    $(document).ready(function () {

        $("#assignsubject").hide();
        $("#assignlab").hide();

        $("#year").on("change", function () {
            if ($(this).val() == "1st") {
                $("#sem").html("<option>1</option><option>2</option>");
            } else if ($(this).val() == "2nd") {
                $("#sem").html("<option>3</option><option>4</option>");
            } else if ($(this).val() == "3rd") {
                $("#sem").html("<option>5</option><option>6</option>");
            } else if ($(this).val() == "4th") {
                $("#sem").html("<option>7</option><option>8</option>");
            }
        });

        $("#select").on("click", function () {
            var ayear = $("#ayear").val();
            var year = $("#year").val();
            var degree = $("#degree").val();
            var dept = $("#dept").val();
            var sem = $("#sem").val();
            var sec = $("#sec").val();
            var theory = $("#theory").val();
            var lab = $("#lab").val();

            if (ayear == "" || year == "" || degree == "" || dept == "" || sem == "" || sec == "" || theory == "" || lab == "")
            {
                alert("fill all the details");
            } else {
                var url = "addsem1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab;
                $.get(url, function (data, status) {

                    $("#year").prop('disabled', true);
                    $("#ayear").prop('disabled', true);
                    $("#degree").prop('disabled', true);
                    $("#dept").prop('disabled', true);
                    $("#sem").prop('disabled', true);
                    $("#sec").prop('disabled', true);
                    $("#theory").prop('disabled', true);
                    $("#lab").prop('disabled', true);

                    if (data === "Semister Added Successfully") {
                        alert("Semester added successfully");
                        var url2 = "getfac.php?dept=" + $("#dept").val();

                        $.get(url2, function (data1, status1) {
                            if (status1 == "success") {

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
                                $("#fid11").html(data1);
                                $("#fid12").html(data1);
                                $("#fid13").html(data1);
                                $("#fid14").html(data1);
                                
                                $("#assignsubject").show();
                                $("#select").attr("disabled", "disabled");

                                if ($("#theory").val() === '4 Subjects')
                                {
                                    $("#row5").hide();
                                    $("#row6").hide();
                                    $("#row7").hide();
                                    $("#row8").hide();
                                } else if ($("#theory").val() === '5 Subjects')
                                {
                                    $("#row6").hide();
                                    $("#row7").hide();
                                    $("#row8").hide();
                                } else if ($("#theory").val() === '6 Subjects')
                                {
                                    $("#row7").hide();
                                    $("#row8").hide();
                                } else if ($("#theory").val() === '7 Subjects')
                                {
                                    $("#row8").hide();
                                } else if ($("#theory").val() === '8 Subjects')
                                {

                                }


                            }
                        });
                    } else
                    {

                        var ayear = $("#ayear").val();
                        var year = $("#year").val();
                        var degree = $("#degree").val();
                        var dept = $("#dept").val();
                        var sem = $("#sem").val();
                        var sec = $("#sec").val();
                        var theory = $("#theory").val();
                        var lab = $("#lab").val();

                        var url11 = "getsub4.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree;
                        $.get(url11, function (data1, status)
                        {
                            var mydata22 = JSON.parse(data1);
                            $("#theory").val(mydata22.scount + " Subjects");
                            $("#lab").val(((mydata22.lcount) / 2) + " Labs");
                        });
                        var url2 = "getsub3.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree;

                        $.get(url2, function (data1, status1) {
                            var mydata = JSON.parse(data1);
                         
                          var url22 = "getfac.php?dept=" + $("#dept").val();

                        $.get(url22, function (data22, status1) {
                          
                                $("#fid1").html(data22);
                                $("#fid2").html(data22);
                                $("#fid3").html(data22);
                                $("#fid4").html(data22);
                                $("#fid5").html(data22);
                                $("#fid6").html(data22);
                                $("#fid7").html(data22);
                                $("#fid8").html(data22);
                                $("#fid9").html(data22);
                                $("#fid10").html(data22);
                                $("#fid11").html(data22);
                                $("#fid12").html(data22);
                                $("#fid13").html(data22);
                                $("#fid14").html(data22);
                                
                                $("#row5").hide();
                                $("#row6").hide();
                                $("#row7").hide();
                                $("#row8").hide();
                                
                            for (var i = 0; i < mydata.length; i++)
                            {
                                var scode = "#scode" + (i + 1);
                                var sname = "#sname" + (i + 1);
                                var fid = "#fid" + (i + 1);
                                var row="#row"+ (i + 1);
                                $(row).show();
                                $(scode).val(mydata[i].scode);
                                $(sname).val(mydata[i].sname);
                                $(fid).val(mydata[i].fid);
                              
                            }

                            $("#assignsubject").show();
                            
                            var url11 = "getlab4.php?dept=" + dept + "&ayear=" + ayear + "&sem=" + sem + "&sec=" + sec + "&degree=" + degree;
                        $.get(url11, function (data1, status)
                        {   
                            var mydata = JSON.parse(data1);
                                $("#roww3").hide();
                                $("#roww3").hide();
                                
                                
                            for (var i = 0; i < mydata.length; i++)
                            {
                                var lid = "#lid" + (i + 1);
                                var lname = "#lname" + (i + 1);
                                var fid = "#fid" + (i + 9);
                                if(i>=4)
                                {
                                    var row="#roww"+ (i + 1);
                                      $(row).show();
                                }
      
                                $(lid).val(mydata[i].lid);
                                $(lname).val(mydata[i].lname);
                                $(fid).val(mydata[i].fid);
                              
                            }
                            
                        });
                        
                        
                            
                            });
                              
                        });


                    }

                });
            }

        });

        $("#submit").on("click", function () {
            var ayear = $("#ayear").val();
            
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
            var scode7 = $("#scode7").val();
            var sname7 = $("#sname7").val();
            var fid7 = $("#fid7").val();
            var scode8 = $("#scode8").val();
            var sname8 = $("#sname8").val();
            var fid8 = $("#fid8").val();
            if ($("#theory").val() == '4 Subjects' && (scode1 == "" || sname1 == "" || fid1 == "" || scode2 == "" || sname2 == "" || fid2 == "" || scode3 == "" || sname3 == "" || fid3 == "" || scode4 == "" || sname4 == "" || fid4 == ""))
            {
                alert("fill all the details");
            }
			else if($("#theory").val() == '5 Subjects' && ( scode1 == "" || sname1 == "" || fid1 == "" || scode2 == "" || sname2 == "" || fid2 == "" || scode3 == "" || sname3 == "" || fid3 == "" || scode4 == "" || sname4 == "" || fid4 == ""|| scode5 == "" || sname5 == "" || fid5 == "")){
                 alert("fill all the details");
            }
			else if($("#theory").val() == '6 Subjects' && ( scode1 == "" || sname1 == "" || fid1 == "" || scode2 == "" || sname2 == "" || fid2 == "" || scode3 == "" || sname3 == "" || fid3 == "" || scode4 == "" || sname4 == "" || fid4 == ""|| scode5 == "" || sname5 == "" || fid5 == "" || scode6 == "" || sname6 == "" || fid6 == "")){
                 alert("fill all the details");
            }
            else if($("#theory").val() == '7 Subjects' && ( scode1 == "" || sname1 == "" || fid1 == "" || scode2 == "" || sname2 == "" || fid2 == "" || scode3 == "" || sname3 == "" || fid3 == "" || scode4 == "" || sname4 == "" || fid4 == ""|| scode5 == "" || sname5 == "" || fid5 == "" || scode6 == "" || sname6 == "" || fid6 == "" || scode7 == "" || sname7 == "" || fid7 == "")){
                 alert("fill all the details");
            }
            else if($("#theory").val() == '8 Subjects' && ( scode1 == "" || sname1 == "" || fid1 == "" || scode2 == "" || sname2 == "" || fid2 == "" || scode3 == "" || sname3 == "" || fid3 == "" || scode4 == "" || sname4 == "" || fid4 == ""|| scode5 == "" || sname5 == "" || fid5 == "" || scode6 == "" || sname6 == "" || fid6 == "" || scode7 == "" || sname7 == "" || fid7 == "" || scode8 == "" || sname8 == "" || fid8 == "")){
                 alert("fill all the details");
            }
            else {
                var url3 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode1 + "&sname=" + sname1 + "&fid=" + fid1;
                var url4 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode2 + "&sname=" + sname2 + "&fid=" + fid2;
                var url5 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode3 + "&sname=" + sname3 + "&fid=" + fid3;
                var url6 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode4 + "&sname=" + sname4 + "&fid=" + fid4;

                alert(url3)
                $.get(url3, function (data2, status2) {
                   
                });
                $.get(url4, function (data2, status2) {
                });
                $.get(url5, function (data2, status2) {
                });
                $.get(url6, function (data2, status2) {
                });





                if ($("#theory").val() == '4 Subjects')
                {

                } else if ($("#theory").val() == '5 Subjects')
                {
                    var url7 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode5 + "&sname=" + sname5 + "&fid=" + fid5;
                    $.get(url7, function (data2, status2) {
                    });
				}else if ($("#theory").val() == '6 Subjects')
                {
                    var url7 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode5 + "&sname=" + sname5 + "&fid=" + fid5;
                    var url8 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode6 + "&sname=" + sname6 + "&fid=" + fid6;
                    $.get(url7, function (data2, status2) {
                    });
                    $.get(url8, function (data2, status2) {
                    });
                } else if ($("#theory").val() === '7 Subjects')
                {
                    var url7 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode5 + "&sname=" + sname5 + "&fid=" + fid5;
                    var url8 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode6 + "&sname=" + sname6 + "&fid=" + fid6;
                    var url9 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode7 + "&sname=" + sname7 + "&fid=" + fid7;
                    $.get(url7, function (data2, status2) {
                    });
                    $.get(url8, function (data2, status2) {
                    });
                    $.get(url9, function (data2, status2) {
                    });
                } else if ($("#theory").val() === '8 Subjects')
                {


                    var url7 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode5 + "&sname=" + sname5 + "&fid=" + fid5;
                    var url8 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode6 + "&sname=" + sname6 + "&fid=" + fid6;
                    var url9 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode7 + "&sname=" + sname7 + "&fid=" + fid7;
                    var url10 = "getfac1.php?ayear=" + ayear + "&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&scode=" + scode8 + "&sname=" + sname8 + "&fid=" + fid8;
                    $.get(url7, function (data2, status2) {
                    });
                    $.get(url8, function (data2, status2) {
                    });
                    $.get(url9, function (data2, status2) {
                    });
                    $.get(url10, function (data2, status2) {
                    });
                }


                $("#assignsubject").hide();
                $("#assignlab").show();
                if ($("#lab").val() == '2 Labs')
                {
                    $(".roww3").hide();
                } else {

                }
            }
        });

        $("#submit1").on("click", function () {
            var year = $("#year").val();
            var ayear = $("#ayear").val();
            var degree = $("#degree").val();
            var dept = $("#dept").val();
            var sem = $("#sem").val();
            var sec = $("#sec").val();
            var theory = $("#theory").val();
            var lab = $("#lab").val();
            var lid1 = $("#lid1").val();
            var lname1 = $("#lname1").val();
            var fid9 = $("#fid9").val();
            var lid2 = $("#lid2").val();
            var lname2 = $("#lname2").val();
            var fid10 = $("#fid10").val();
            var lid3 = $("#lid3").val();
            var lname3 = $("#lname3").val();
            var fid11 = $("#fid11").val();
            var lid4 = $("#lid4").val();
            var lname4 = $("#lname4").val();
            var fid12 = $("#fid12").val();
            var lid5 = $("#lid5").val();
            var lname5 = $("#lname5").val();
            var fid13 = $("#fid13").val();
            var lid6 = $("#lid6").val();
            var lname6 = $("#lname6").val();
            var fid14 = $("#fid14").val();
            if ($("#lab").val() == '2 Labs' && (lid1 == "" || lname1 == "" || fid9 == "" || lid2 == "" || lname2 == "" || fid10 == "" || lid3 == "" || lname3 == "" || fid11 == "" || lid4 == "" || lname4 == "" || fid12 == ""))
            {
                alert("fill all the details");
            } else if($("#lab").val() == '3 Labs' && (lid1 == "" || lname1 == "" || fid9 == "" || lid2 == "" || lname2 == "" || fid10 == "" || lid3 == "" || lname3 == "" || fid11 == "" || lid4 == "" || lname4 == "" || fid12 == "" || lid5 == "" || lname5 == "" || fid13 == "" || lid6 == "" || lname6 == "" || fid14 == "")){
                alert("fill all the details");
            }else {
                var url9 = "getfac2.php?ayear=" + ayear + "+&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&lid=" + lid1 + "&lname=" + lname1 + "&fid=" + fid9;
                var url10 = "getfac2.php?ayear=" + ayear + "+&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&lid=" + lid2 + "&lname=" + lname2 + "&fid=" + fid10;
                var url11 = "getfac2.php?ayear=" + ayear + "+&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&lid=" + lid3 + "&lname=" + lname3 + "&fid=" + fid11;
                var url12 = "getfac2.php?ayear=" + ayear + "+&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&lid=" + lid4 + "&lname=" + lname4 + "&fid=" + fid12;

                $.get(url9, function (data3, status3) {
                });
                $.get(url10, function (data3, status3) {
                });
                $.get(url11, function (data3, status3) {
                });
                $.get(url12, function (data3, status3) {
                    alert("Lab Details Added Successfully");
                    $("#assignlab").hide();
                });
            }

            if ($("#lab").val() == '2 Labs')
            {

            } else
            {
                var url11 = "getfac2.php?ayear=" + ayear + "+&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&lid=" + lid5 + "&lname=" + lname5 + "&fid=" + fid13;
                var url12 = "getfac2.php?ayear=" + ayear + "+&year=" + year + "&degree=" + degree + "&dept=" + dept + "&sem=" + sem + "&sec=" + sec + "&theory=" + theory + "&lab=" + lab + "&lid=" + lid6 + "&lname=" + lname6 + "&fid=" + fid14;
                $.get(url11, function (data3, status3) {
                });
                $.get(url12, function (data3, status3) {
                });
            }
        });





    });
</script>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            <div>SEMESTER DETAILS</div><br>
            <div id="addsubject">
                <div class="form-group input-group-sm">
                    <label>Academic Year</label>
                    <select id="ayear" class="form-control" required="">
                        <option value=""><--select year--></option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>  
                </div>
                <div class="form-group input-group-sm">
                    <label>YEAR</label>
                    <select id="year" class="form-control" required="">
                        <option value=""><--select year--></option>
                        <option value="1st">1</option>
                        <option value="2nd">2</option>
                        <option value="3rd">3</option>
                        <option value="4th">4</option>
                    </select>  
                </div>
                <div class="form-group input-group-sm">
                    <label>DEGREE</label>
                    <select id="degree" class="form-control" required="">
                        <option value=""><--select degree--></option>
                        <option value="BE">BE</option>
                    </select>
                </div>
                <div class="form-group input-group-sm">
                    <label>DEPARTMENT</label>
                    <input type="text" id="dept" class="form-control" name="dept" readonly="" value="<?php echo $dept; ?>"  /> 
                </div>
                <div class="form-group input-group-sm">
                    <label>SEMESTER</label>
                    <select id="sem" class="form-control" required="">
                        <option value=""><--select semester--></option>

                    </select> 

                </div>         
                <div class="form-group input-group-sm">
                    <label>SECTION</label>
                    <select id="sec" class="form-control" required="">
                        <option value=""><--select section--></option>
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
                <div class="form-group input-group-sm">
                    <label>THEORY CLASSES</label>
                    <select id="theory" class="form-control" required="">
                        <option value=""><--select theory classes--></option>
                        <option value="4 Subjects">4</option>
                        <option value="5 Subjects">5</option>
                        <option value="6 Subjects">6</option>
                        <option value="7 Subjects">7</option>
                        <option value="8 Subjects">8</option>
                    </select>  
                </div>
                <div class="form-group input-group-sm">
                    <label>LABORATORIES</label>
                    <select id="lab" class="form-control" required="">
                        <option value=""><--select labs--></option>
                    
                        <option value="2 Labs">2</option>
                        <option value="3 Labs">3</option>
                        
                    </select>  
                </div>
                <input id="select" class="btn btn-primary btn-block btn-sm" type="submit" value="SELECT"/>
            </div>
        </div>
        <div class="col-md-8">
            <div id="assignsubject">

                <div>SUBJECT ASSIGNMENT DETAILS</div><br>

                <div class="form-group">
                    <table class="table table-bordered"><tr>
                            <th>SUBJECT CODE</th>
                            <th>SUBJECT NAME</th>
                            <th>FACULTY NAME</th>
                        </tr>
                        <tr id="row1"><td><input id="scode1" class="form-control" type="text" name="scode1"/></td>
                            <td><input id="sname1" class="form-control" type="text" name="sname1"/></td>
                            <td><select id="fid1" class="form-control" required="">
                                    <option value=""><--select faculty--></option>
                                </select> </td></tr>
                        <tr id="row2"><td><input id="scode2" class="form-control" type="text" name="scode2"/></td>
                            <td><input id="sname2" class="form-control" type="text" name="sname2"/></td>
                            <td><select id="fid2" class="form-control" required="">
                                    <option value=""><--select faculty--></option>
                                </select> </td></tr>
                        <tr id="row3"><td><input id="scode3" class="form-control" type="text" name="scode3"/></td>
                            <td><input id="sname3" class="form-control" type="text" name="sname3"/></td>
                            <td><select id="fid3" class="form-control" required="">
                                    <option value=""><--select faculty--></option>
                                </select> </td></tr>
                        <tr id="row4"><td><input id="scode4" class="form-control" type="text" name="scode4"/></td>
                            <td><input id="sname4" class="form-control" type="text" name="sname4"/></td>
                            <td><select id="fid4" class="form-control" required="">
                                    <option value=""><--select faculty--></option>
                                </select> </td></tr>
                        <tr id="row5"><td><input id="scode5" class="form-control" type="text" name="scode5"/></td>
                            <td><input id="sname5" class="form-control" type="text" name="sname5"/></td>
                            <td><select id="fid5" class="form-control" required="">
                                    <option value=""><--select faculty--></option>
                                </select> </td></tr>
                        <tr id="row6"><td><input id="scode6" class="form-control" type="text" name="scode6"/></td>
                            <td><input id="sname6" class="form-control" type="text" name="sname6"/></td>
                            <td><select id="fid6" class="form-control" required="">
                                    <option value=""><--select faculty--></option>
                                </select> </td></tr>
                        <tr id="row7"><td><input id="scode7" class="form-control" type="text" name="scode7"/></td>
                            <td><input id="sname7" class="form-control" type="text" name="sname7"/></td>
                            <td><select id="fid7" class="form-control" required="">
                                    <option value=""><--select faculty--></option>
                                </select> </td></tr>
                        <tr id="row8"><td><input id="scode8" class="form-control" type="text" name="scode8"/></td>
                            <td><input id="sname8" class="form-control" type="text" name="sname8"/></td>
                            <td><select id="fid8" class="form-control" required="">
                                    <option value=""><--select faculty--></option>
                                </select> </td></tr>
                    </table>
                    <input id="submit" class="btn btn-primary btn-block btn-sm" type="submit" value="SUBMIT"/>
                </div>
            </div>

            <div id="assignlab">
                <div>
                    <div>LAB ASSIGNMENT DETAILS</div><br>

                    <div class="form-group">
                        <table class="table table-bordered"><tr>
                                <th>LAB ID</th>
                                <th>LAB NAME</th>
                                <th>FACULTY NAME</th>
                            </tr>
                            <tr class="roww1"><td><input id="lid1" class="form-control" type="text" name="lid1"/></td>
                                <td><input id="lname1" class="form-control" type="text" name="lname1"/></td>
                                <td><select id="fid9" class="form-control" required="">
                                        <option value=""><--select faculty--></option>
                                    </select> </td></tr>
                            <tr class="roww1"><td><input id="lid2" class="form-control" type="text" name="lid2"/></td>
                                <td><input id="lname2" class="form-control" type="text" name="lname2"/></td>
                                <td><select id="fid10" class="form-control" required="">
                                        <option value=""><--select faculty--></option>
                                    </select> </td></tr>
                            <tr class="roww2"><td><input id="lid3" class="form-control" type="text" name="lid3"/></td>
                                <td><input id="lname3" class="form-control" type="text" name="lname3"/></td>
                                <td><select id="fid11" class="form-control" required="">
                                        <option value=""><--select faculty--></option>
                                    </select> </td></tr>
                            <tr class="roww2"><td><input id="lid4" class="form-control" type="text" name="lid4"/></td>
                                <td><input id="lname4" class="form-control" type="text" name="lname4"/></td>
                                <td><select id="fid12" class="form-control" required="">
                                        <option value=""><--select faculty--></option>
                                    </select> </td></tr>
                            <tr class="roww3"><td><input id="lid5" class="form-control" type="text" name="lid4"/></td>
                                <td><input id="lname5" class="form-control" type="text" name="lname5"/></td>
                                <td><select id="fid13" class="form-control" required="">
                                        <option value=""><--select faculty--></option>
                                    </select> </td></tr>
                            <tr class="roww3"><td><input id="lid6" class="form-control" type="text" name="lid4"/></td>
                                <td><input id="lname6" class="form-control" type="text" name="lname6"/></td>
                                <td><select id="fid14" class="form-control" required="">
                                        <option value=""><--select faculty--></option>
                                    </select> </td></tr>
                        </table>
                        <input id="submit1" class="btn btn-primary btn-block" type="submit" value="SUBMIT"/>
                    </div>
                </div>
            </div>
        </div>
    </div>