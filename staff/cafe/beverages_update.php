<!DOCTYPE html>

<?php
	include 'session.php';
	
	$p_id = $_GET['pid'];
	$sql = "select * from menu where menu_id = '$p_id'";
	$result = mysqli_query($connect,$sql);
	$rows = mysqli_fetch_array($result);
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
		echo date('d/m/Y  H:i:s');
		?>
		</div>
  </div>
  
	<br><br>
	<div id="content">
	<br><br>
	<h3 style="text-align:center">UPDATE MENU BEVERAGE</h3>
	<form action="beverages_update2.php?pid=<?php echo $p_id; ?>" method="post" enctype="multipart/form-data">
		<table border="0" width="40%" align="center">

		<tr><td>Menu Name</td>
		<td><input type="text" name="menu_name" value="<?php echo $rows['menu_name']; ?>" />
		</td></tr>
		
		<tr><td>Price</td><td>
		<input type="text" name="price" value="<?php echo $rows['price']; ?>" />
		</td></tr>

		<tr><td>Image</td><td>
		<input type="file" name="image" id="image" required />
		</td></tr>

		  <tr>
			<td colspan="2" align="center">
				<input type="submit" value="Confirm" name="submit" /><!-- 
				<input type="reset" value="Clear" name="reset" /> -->
			</td>
		</tr>
	</table>
	</form>

	</div>

<div id="footer">Copyright <a href="dashboard.php">Tapau's Delivery System</a>. All Rights Reserved. </div>
</div>
</body>
</html>						