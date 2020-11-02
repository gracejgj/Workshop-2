<!DOCTYPE html>

<?php
	include 'session.php';
	
	$p_id = $_GET['pid'];
	$sql = "select * from order_menu where order_id = '$p_id'";
	$result = mysqli_query($connect,$sql);
	$rows = mysqli_fetch_array($result);
	//current URL of the Page. cart_update.php redirects back to this URL
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<html>
<head>
<title>Employee | Tapau's Delivery System</title>
<link rel="stylesheet" type="text/css" href="../css/styles.css" />
<script src="canvasjs.min.js"></script>
</head>
	
<body>
<div id="wrapper">
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
		<div style="float:right">
		<?php
		echo date('d/m/Y');
		date_default_timezone_set("Asia/Kuala_Lumpur");
		echo  " " . date("h:i:sA");
		?>
		</div>
  </div>
	
	<div id="content">
	<br><br><br>
	<form action="order_update2.php?pid=<?php echo $p_id; ?>" method="post" align="center">
	<br><br>
	<h2>UPDATE ORDER STATUS</h2>
	<br><br>
	<select name="status" class="button button4" align="center">
	<option value="status"><?php echo $rows['status']; ?></option>
	<option value="  "></option> 
	<option value="PENDING">PENDING</option> 
	<option value="ORDER RECEIVED">ORDER RECEIVED</option>				
	</select>
	
	<br><br>
	
	<td colspan="2" align="center">
	<input type="submit" class="button button4" value="Confirm" name="submit" />
	<input type="reset" class="button button4" value="Clear" name="reset" />
	</td><br><br>

	</form>
	</div>

<div id="footer">Copyright <a href="lestari.php">Tapau's Delivery System</a>. All Rights Reserved. </div>
</div>
</body>
</html>						