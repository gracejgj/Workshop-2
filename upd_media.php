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
         <?php
            $p_id = $_GET['pid'];
            $sql = "select * from customer_review where customer_review = '$p_id'";
            $result = mysqli_query($conn,$sql);
            $rows = mysqli_fetch_array($result);

            ?>

<br>
<br>         
 <div class="col-sm-12" align="center"> <h2>UPDATE CUSTOMER REVIEW</h2></div>
          
           <form action="upd_media2.php?pid=<?php echo $p_id; ?>" method="post" enctype="multipart/form-data" >
            
<table border="0" style='width:40%;float:left;margin-left:30%'>
     <tr>
              <td >Video:</td>
              <td >
               <input type="file"  name="file" />
              </td>
            </tr>
         <tr>
              <td >Video Name:</td>
              <td >
                 <input type="text" name="name" class="single-input-primary" value="<?php echo $rows['name']; ?>" required/>
              </td>
              </tr>
        <tr>
          <td>Description:</tD>
          <td><textarea name="description" value="<?php echo $rows['description']; ?>"></textarea></td>
        </tR>
              
<br>
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