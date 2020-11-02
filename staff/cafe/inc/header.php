<?php 
include 'session.php';
 ?>

<html>
<head>
<title>Admin | Tapau's Delivery System</title>
<link rel="stylesheet" type="text/css" href="../css/styles.css" />
<script src="js/canvasjs.min.js"></script>

</head>
<body>

  <div id="header">
		<div id="img">
		  <a href="lestari.php"><img src="img/logos.png" alt="Tapau's"></a>
		</div>
		<div class="logout">
		Welcome,  <?php echo $_SESSION['emp_name'];?> 
		<a href='logout.php'>Logout</a>
		</div>	
  </div>

  <div id="navigation">
	  <ul>
		<li><a href="order.php"><span>ORDERS</span></a></li>
		<li><a href="delivery.php"><span>DELIVERY</span></a></li>
		<li><a href="foods.php"><span>F&B </span></a></li>
		<li><a href="user.php"><span>USERS</span></a></li>
		<li><a href="new_application.php"><span>GUIDELINES</span></a></li>
		<li><a href="report.php"><span>REPORT</span></a></li>			
		</ul>
		<div style="float:right">
		<?php
		echo date('d/m/Y');
		date_default_timezone_set("Asia/Kuala_Lumpur");
		echo  " " . date("h:i:sA");
		?>
		</div>
  </div>