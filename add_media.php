	<?php
	session_start();
	include('pagination.php');
	?>
	<!-- ============================================== HEADER ============================================== -->
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Tapau's Delivery System</title>
	<link rel="stylesheet" type="text/css" href="css/products.css">
	</head>
	<body>
	<!-----------------------CONTENT--------------------------------------->
	<div id="container"> 
		<div class="main_content">
			<?php include 'inc/header.php';?>
	<!-----------------------Border--------------------------------------->
	<hr></hr>

<?php 
require 'inc/config.php';
	$conn = Connect();
?>

<body>
  <br>
  <br>
          <center><div class="col-sm-12"> <h2>CUSTOMER REVIEW</h2></div></center>
       
            <form action="add_media2.php" method="post" enctype="multipart/form-data">
            <table border="0" style='width:40%;float:left;margin-left:30%'>
     <tr>
              <td >Video:</td>
              <td >
                <input type="file" class="single-input-primary" name="file" required />
              </td>
            </tr>
        
        <tr>
          <td>Description:</tD>
          <td><textarea name="description"></textarea></td>
        </tR>
        
          <tr>
            <td></tD>
              <td colspan="2" align="left">
                <input type="submit" value="Save" class="genric-btn primary" name="submit" />
                <input type="reset" value="Reset" class="genric-btn primary" name="reset" />
              
               
              </td>
              </tr>
      </table>
    </form>
 <br>
	</div>
	<hr></hr>
	<!-- Start of Page Footer -->
	<?php include 'inc/footer.php';?>
	<!-- End of Page Footer -->	
		
	</div>
	<!-- End of Main Container -->		
	<script type="text/JavaScript">
		//Script courtesy of BoogieJack.com
		var message="NoRightClicking";
		function defeatIE() {if (document.all) {(message);return false;}}
		function defeatNS(e) {if 
		(document.layers||(document.getElementById&&!document.all)) {
		if (e.which==2||e.which==3) {(message);return false;}}}
		if (document.layers) 
		{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;}
		else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;}
		document.oncontextmenu=new Function("return false")
		</script>
	</body>
</html>

             

              