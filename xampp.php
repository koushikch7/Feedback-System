<meta http-equiv="refresh" content="3000;" url='logout.php;' />
<link rel="shortcut icon" href="images/BITM.ico" />
<href="images/kk.jpg" type="image/jpg" sizes="16x16">
<?php require 'links.php';?>
<style>
.avatar {
    vertical-align: middle;
    width: 100px;
    height: 50px;
    border-radius: 80%;
.alignleft {
	float: left;
}
.alignright {
	float: right;
}
}
table {
	overflow-y: auto;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td,th {
    border: 1px solid #ddd;
    padding: 0px;
}
tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #00aeef;	
    color: white;

}
</style>
	<script type="text/javascript">
		$(document).ready(function (){
			$('input[placeholder]').placeholderLabel();
		})
	</script>
	<script type="text/javascript">
		$(document).ready(function (){
			$('input[placeholder]').placeholderLabel({
					placeholderColor: "#898989", // Color placeholder
					labelColor: "#4AA2CC", // Color label (after the focus)
					labelSize: "14px" // Size of label (after the focus)
					useBorderColor: true, // If true a border input is altered after focus
					inInput: true, // If true the label is actually in half vertically
					timeMove: 200 // Time effect move after focus
				});
		})
	</script>
	<script type="text/javascript">
		function RestrictSpace()
		{
			if (event.keyCode == 32)
			{
				return false;
			}
		}
	</script>
	<script language="javascript">
			//DISABLE RIGHT CLICK
			document.addEventListener('contextmenu', event=> event.preventDefault());
		</script>
		
		<script language="javascript">
			//disable ctrlKey shiftKeys
			document.onkeydown = function(e) {
				if(event.keyCode == 123) {
					return false;
				}
				
  				//DISABLE CTRL+SHIFT+I KEY shiftKeys
  				if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0))
  				{
  					return false;
  				}
  				
  				//DISABLE CTRL+SHIFT+J KEY shiftKeys
  				if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0))
  				{
  					return false;
  				}
  				
  				//DISABLE CTRL+U KEY shiftKeys
  				if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))
  				{
  					return false;
  				}
  			};
  		</script>
<div class="card" style="background-color: #00aeef;">
    <div class="card-body" style="padding:1px; color: white;">
        <div class="row">
            <div class="col-md-1"><a href="/"><img src="images/kk.jpg"   class="avatar"  > </a></div>
            </th><th><div  class="col-md-11" style="font-size: 130%; margin-top:0px; font-weight: bold; font-family: helvetica neue;"> 
       <div style="display: inline-block; ">Ballari Institute Of Technology & Management </div>
        <div style="font-size: 75%;">  	BITM Industry Institute Relations and Entrepreneurship Development</div>
		</div>        
    </div>
    </div>
</div>