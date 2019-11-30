$(document).ready(function () {
    $("#dr").show();
    $("#fr").hide();
    $("#sr").hide();
    $("#drbtn").on("click", function () {
        $("#dr").show();
        $("#fr").hide();
        $("#sr").hide();
        $("#factavg").hide();
    });
    $("#frbtn").on("click", function () {
        $("#dr").hide();
        $("#fr").show();
        $("#sr").hide();
         $("#factavg").hide();
    });
    $("#srbtn").on("click", function () {
        $("#dr").hide();
        $("#fr").hide();
        $("#sr").show();
         $("#factavg").hide();
    });
    
     var ayear=$("#ayear").val();
        var degree=$("#degree").val();
        var dept=$("#dept").val();
      
        var url="getdr.php?ayear="+ayear+"&degree="+degree+"&dept="+dept;
        $.get(url, function (data, status) {
         
            var mydata=JSON.parse(data)
            $("#9to10").html(mydata.c9to10);
            $("#8to9").html(mydata.c8to9);
            $("#7to8").html(mydata.c7to8);
            $("#below7").html(mydata.cblow7);
             
                });
             
                
    $("#ayear,#degree,#dept").on("change",function () {
        var ayear=$("#ayear").val();
        var degree=$("#degree").val();
        var dept=$("#dept").val();
        
       var url="getdr.php?ayear="+ayear+"&degree="+degree+"&dept="+dept;
      
        $.get(url, function (data, status) {
            
            var mydata=JSON.parse(data)
            $("#9to10").html(mydata.c9to10);
            $("#8to9").html(mydata.c8to9);
            $("#7to8").html(mydata.c7to8);
            $("#below7").html(mydata.cblow7);
             $("#factavg").hide();
                });
    });
    
    $("#a9to10").on("click",function(){ 
        
     var ayear=$("#ayear").val();
        var degree=$("#degree").val();
        var dept=$("#dept").val();
      var url="getdr2.php?ayear="+ayear+"&degree="+degree+"&dept="+dept;
      $.get(url, function (data, status) {
           
           var mydata=JSON.parse(data);
            
           var myhtml="<br><br><div class='h5 text-center'>9-10 Rating Faculty</div><table class='table table-bordered table-stripped'>";
           for(var i=0;i<mydata.length;i++)
           {
               myhtml=myhtml+"<tr><td>"+mydata[i].name+"</td><td>"+mydata[i].avg.toFixed(2)+"</td></tr>";
           }
           myhtml=myhtml+"</table>";
           $("#factavg").html(myhtml);
            $("#factavg").show();
                });
    });
    
     $("#a8to9").on("click",function(){ 
        
     var ayear=$("#ayear").val();
        var degree=$("#degree").val();
        var dept=$("#dept").val();
      var url="getdr3.php?ayear="+ayear+"&degree="+degree+"&dept="+dept;
      $.get(url, function (data, status) {
           
           var mydata=JSON.parse(data);
            
           var myhtml="<br><br><div class='h5 text-center'>8-9 Rating Faculty</div><table class='table table-bordered table-stripped'>";
           for(var i=0;i<mydata.length;i++)
           {
               myhtml=myhtml+"<tr><td>"+mydata[i].name+"</td><td>"+mydata[i].avg.toFixed(2)+"</td></tr>";
           }
           myhtml=myhtml+"</table>";
           $("#factavg").html(myhtml);
            $("#factavg").show();
                });
    });
    
    $("#a7to8").on("click",function(){ 
        
     var ayear=$("#ayear").val();
        var degree=$("#degree").val();
        var dept=$("#dept").val();
      var url="getdr4.php?ayear="+ayear+"&degree="+degree+"&dept="+dept;
      $.get(url, function (data, status) {
           
           var mydata=JSON.parse(data);
            
           var myhtml="<br><br><div class='h5 text-center'>7-8 Rating Faculty</div><table class='table table-bordered table-stripped'>";
           for(var i=0;i<mydata.length;i++)
           {
               myhtml=myhtml+"<tr><td>"+mydata[i].name+"</td><td>"+mydata[i].avg.toFixed(2)+"</td></tr>";
           }
           myhtml=myhtml+"</table>";
           $("#factavg").html(myhtml);
            $("#factavg").show();
                });
    });
    
     $("#abelow7").on("click",function(){ 
        
     var ayear=$("#ayear").val();
        var degree=$("#degree").val();
        var dept=$("#dept").val();
      var url="getdr5.php?ayear="+ayear+"&degree="+degree+"&dept="+dept;
      $.get(url, function (data, status) {
           
           var mydata=JSON.parse(data);
            
           var myhtml="<br><br><div class='h5 text-center'>Below 7 Rating Faculty</div><table class='table table-bordered table-stripped'>";
           for(var i=0;i<mydata.length;i++)
           {
               myhtml=myhtml+"<tr><td>"+mydata[i].name+"</td><td>"+mydata[i].avg.toFixed(2)+"</td></tr>";
           }
           myhtml=myhtml+"</table>";
           $("#factavg").html(myhtml);
            $("#factavg").show();
                });
    });
    
    $("#frbtn").on("click",function (){
         var frfname=$("#frfname").val();
        var frdegree=$("#frdegree").val();
        var frdept=$("#frdept").val();
        
         var url2="getfr.php?frfname="+frfname+"&frdegree="+frdegree+"&frdept="+frdept;
        $.get(url2, function (data, status) {
        
           // var mydata=JSON.parse(data)
//           
             
                });  
    });
          
     $("#frfname,#frdegree,#frdept").on("change",function () {
          var frfname=$("#frfname").val();
        var frdegree=$("#frdegree").val();
        var frdept=$("#frdept").val();
        var myhtml="<tr ><th>Batch</th><th>Semester</th><th>Section</th><th>Rating</th></tr>";
       var url3="getfr.php?frfname="+frfname+"&frdegree="+frdegree+"&frdept="+frdept;
        $.get(url3, function (data, status) {
            
         var mydata=JSON.parse(data);
         for(var i=0;i<mydata.length;i++)
           {
               myhtml=myhtml+"<tr><td>"+mydata[i].batch+"</td><td>"+mydata[i].sem+"</td><td>"+mydata[i].sec+"</td><td>"+mydata[i].avg.toFixed(2)+"</td></tr>";
           }
           $("#frtable").html(myhtml);
    });
    });
         
    
});