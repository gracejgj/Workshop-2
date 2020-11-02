	<?php
	session_start();
	require 'inc/config.php';
	$conn = Connect();
	unset($_SESSION["cart"]);
	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>CART | Tapau's Delivery System</title>
	<link rel="stylesheet" type="text/css" href="css/products.css">
	</head>

	<body>
	<!-- End of Page Menu -->
	<div id="container"> <!--CONTENT-->
	</br> <!--Border-->
	<div class="main_content">
	<?php include 'inc/header.php';?>
	<hr></hr> <!--Border-->
	<br>

    <div class="container">
    <h1 align="center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
    <br>
	<center><img src="img/1.webp" alt="ABC" style="width:20%; height:20%;"></center>
	<h2 align="center"> Thank you for shopping at Tapau's! The ordering process is now complete.</h2>


	<div class="container" >
	<h5 align="center"">Please read the following information about your order.</h5>
	<div class="box">
    <div class="col-md-10" style="float: none; margin: 0 auto; text-align: center;">
      <h3 style="color: orange;">Your order has been received and placed into out order processing system.</h3>
      <h3 style="color: orange;">Your Shopping Cart Has Been Emptied</h3>
      <br>
      <h4>The foods you purchased have been removed from your cart.</h4>

    </div>
	</div>
 
	</div>
	<br>
	<hr></hr>
	<!-- Start of Page Footer -->
	<?php include 'inc/footer.php';?>
	<!-- End of Page Footer -->			
		</div>
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