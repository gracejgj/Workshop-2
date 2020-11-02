	<?php
	session_start();
	require 'inc/config.php';
	$conn = Connect();
	?>

	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>CART | Tapau's Delivery System</title>
	<link rel="stylesheet" type="text/css" href="css/products.css">	
	</head>

	<body>
	<!-- End of Page Menu -->
	<div id="container"> <!--CONTENT-->
	<div class="main_content">
	<?php include 'inc/header.php';?>
	<hr></hr> <!--Border-->
	<br>
	
	<?php
	$gtotal = 0;
	 foreach($_SESSION["cart"] as $keys => $values)
	{
	
	$cafe_id = $values["cafe_id"];
	$cafe_name = $values["cafe_name"];
    $menu_id = $values["menu_id"];
    $menu_name = $values["menu_name"];
    $quantity = $values["m_quantity"];
    $price =  $values["price"];
	$total = ($values["m_quantity"] * $values["price"]);
	$customer = $_SESSION["c_id"];
	
	
    $gtotal = $gtotal + $total;

    $query = "INSERT INTO order_menu (cafe_id, cafe_name, menu_id, menu_name, quantity, total, c_id, payment, status) 
              VALUES ('" . $cafe_id . "', '" . $cafe_name . "', '" . $menu_id . "','" . $menu_name . "','" . $quantity . "','" . $total . "', '" . $customer . "', 'COD', 'PENDING' )";
             
            $success = $conn->query($query);         
			  
    if(!$success)
    {
    ?>
    <h1>Something went wrong!</h1>
    <p>Try again later.</p>
    <?php
    }    
	}
    ?>
    
	<center><img src="img/11.webp" alt="ABC" style="width:15%; height:15%;"></center>
   
	<h2 align="center">Grand Total: RM <?php echo "$gtotal"; ?></h2>
	<h6 align="center">Including all service charges. (no delivery charges applied)</h6>
	<br>
	 <h3 align="center">Payment by <h3>
	<h4 align="center">
	  <a href="cart.php"><button class="w3-button w3-white w3-border w3-round-large"> Go back to cart</button></a>
	<!--<a href="onlinepay.php"><button class="w3-button w3-white w3-border w3-round-large"> Pay Online</button></a>-->
	  <a href="COD.php"><button class="w3-button w3-white w3-border w3-round-large"> Cash On Delivery</button></a>
	</h4>

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