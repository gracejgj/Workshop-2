	<?php
	session_start();
	require 'inc/config.php';
	$conn = Connect();
	
	
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title> CART | Tapau's Delivery System </title>
	<link rel="stylesheet" type="text/css" href="css/products.css">

	</head>

	<body>
	<!-- End of Page Menu -->
	<div id="container"> <!--CONTENT-->
	<div class="main_content">
	<?php include 'inc/header.php';?>
	<hr></hr> <!--Border-->
	<?php
	if(!empty($_SESSION["cart"]))
	{
	?>

	
	<h3 align="center">Order Details</h3> <br>
	<div class="table-responsive">
	<table class="table table-bordered">
	<tr>
	<th width="30%" align="left">Menu Name</th>
	<th width="20%" align="left">Price</th>
	<th width="20%" align="left">Quantity</th>
	<th width="20%" align="left">Total</th>
	<th width="5%" align="left">Action</th>
	</tr>
	
	<?php
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
		?>
		<tr>
			<td align="left"><?php echo $values["menu_name"]; ?></td>
			<td>RM <?php echo $values["price"]; ?></td>
			<td><?php echo $values["m_quantity"]; ?></td>
			<td>RM <?php echo number_format($values["m_quantity"] * $values["price"], 2);?></td>
			<td><a href="cart.php?action=delete&id=<?php echo $values["menu_id"]; ?>"><span class="text-danger">Remove</span></a></td>
		</tr>
		</br>
	<?php
		$total = $total + ($values["m_quantity"] * $values["price"]);
		}
		?>
	<tr>
	<td colspan="3.7" align="right">Total</td>
	<td align="right">RM <?php echo number_format($total, 2); ?></td>
	<td></td>
	</tr>
	</table>
	
	<br><br><br>
	<?php
	if(isset($_SESSION['c_id'])) {
	echo '<td><a href="cart.php?action=empty"><button class="w3-button w3-white w3-border w3-round-large">Empty Cart</button></a>&nbsp;<a href="foodzone.php"><button class="w3-button w3-white w3-border w3-round-large">Continue Shopping</button></a>&nbsp<a href="payment.php"><button class="w3-button w3-white w3-border w3-round-large" style="float:right;">Check Out</button></a>';	
	}
	else {
	echo '<a href="login.php" style="float:right"><button class="w3-button w3-white w3-border w3-round-large">Login</button></a>';
	}
	?>
	</div>
	<br>

	<?php
	}
	if(empty($_SESSION["cart"]))
	{
	?>
	<br>
	<div class="sub_local">
    <h3 align="center">Your Shopping Cart</h3>
    <p align="center">Oops! We can't smell any food here. Go back and <a href="foodzone.php">order now</a></p>   
	</div>
    <?php
	}
	?>	
	
	<?php
	if(isset($_POST["add"]))
	{
	if(isset($_SESSION["cart"]))
	{
	$item_array_id = array_column($_SESSION["cart"], "menu_id");
	if(!in_array($_GET["id"], $item_array_id))
	{
	$count = count($_SESSION["cart"]);

	$item_array = array(
	'menu_id' => $_GET["id"],
	'menu_name' => $_POST["hidden_name"],
	'price' => $_POST["hidden_price"],
	'cafe_id' => $_POST["hidden_cid"],
	'cafe_name' => $_POST["hidden_cname"],
	'm_quantity' => $_POST["quantity"],

	);
	$_SESSION["cart"][$count] = $item_array;
	echo '<script>window.location="cart.php"</script>';
	}
	else
	{
	echo '<script>alert("Products already added to cart")</script>';
	echo '<script>window.location="cart.php"</script>';
	}
	}
	else
	{
	$item_array = array(
	'menu_id' => $_GET["id"],
	'menu_name' => $_POST["hidden_name"],
	'price' => $_POST["hidden_price"],
	'cafe_id' => $_POST["hidden_cid"],
	'cafe_name' => $_POST["hidden_cname"],
	'm_quantity' => $_POST["quantity"],
	'm_quantity' => $_POST["quantity"],
	
	);
	$_SESSION["cart"][0] = $item_array;
	}
	}
	if(isset($_GET["action"]))
	{
	if($_GET["action"] == "delete")
	{
	foreach($_SESSION["cart"] as $keys => $values)
	{
	if($values["menu_id"] == $_GET["id"])
	{
	unset($_SESSION["cart"][$keys]);
	echo '<script>alert("Food has been removed")</script>';
	echo '<script>window.location="cart.php"</script>';
				}	
			}
		}
	}

	if(isset($_GET["action"]))
	{
	if($_GET["action"] == "empty")
	{
	foreach($_SESSION["cart"] as $keys => $values)
	{

	unset($_SESSION["cart"]);
	echo '<script>alert("Cart is made empty!")</script>';
	echo '<script>window.location="cart.php"</script>';
			}
		}
	}
	?>
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