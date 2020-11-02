	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>Tapau's Delivery System</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript" src="js/slider.js"></script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<SCRIPT type="text/javascript"> <!-- no backwards -->
	window.history.forward();
	function noBack() { window.history.forward(); }
	</SCRIPT>
	<BODY onload="noBack();" 
	onpageshow="if (event.persisted) noBack();" onunload="">
	</head>

	<div id="page_header">
	</br>
		<div id="img">
		  <a href="index.php"><img src="img/tapau.png" alt="Tapau's" style="width:60%; height:35%;"></a>
		</div>
		<div id="page_headerlinks">
		  <ul id="menu">
		  
			 <?php
			  if(isset($_SESSION['c_id'])){
				?>
				<li><i class="fa fa-book"></i><a href="userguide.php"></i>Order Guideline</a></li>
				<li><i class="fa fa-coffee"></i><a href="foodlist.php"></i>Foodies</a></li>
				<li><i class="fa fa-coffee"></i><a href="foodzone.php"></i>Foodszone</a></li>
				<li><a href="cart.php"><i class="fas fa-shopping-cart"></i>Cart
				(<?php
				if(isset($_SESSION["cart"])){
				$count = count($_SESSION["cart"]); 
				echo "$count"; 
				}
				else
                echo "0";
				?>)
				</a></li>			
				<li><a href="order.php"><i class="fas fa-shipping-fast"></i> Order </a></li>
				<li><i class="fa fa-coffee"></i><a href="media.php"></i>Review</a></li>
				<li><a href="account.php"><i class="fas fa-user"></i> Account </a></li>
				<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> LogOut </a></li>
				
			 <?php 
			 }
			else { 
			 ?>
				 <li><i class="fa fa-coffee"></i><a href="foodzone.php"></i> Foodszone </a></li>

				 <li><i class="fas fa-sign-in-alt"></i><a href="login.php"></i> USER </a></li>
				 <ul class="dropdown-menu">
			
				 <li><i class="fas fa-sign-in-alt"></i><a href="staff/login.php">ADMIN </a></li>
                 </ul>
				 <li><i class="fa fa-user-plus"></i><a href="register.php"></i>SignUp</a></li>
				   
		  </ul>
		  
			<?php
			}
			?>
			
		</div>
	<!-- <div id="header-search">
	<input type="text" id="search"  placeholder=" Search me " name="search"><i class="fas fa-search"></i>
	<br>
	<div id="display"></div>
	</div>-->
	</div>

	<!-- End of Page Header -->

	<!-- Start of Page Menu 
	<div id="page_menu">
	<nav class="menu-navigation">
	<a href="l1.php">FOODS ZONE</a>
	</nav>	 
	</div>
	<!-- End of Page Menu -->
	
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
