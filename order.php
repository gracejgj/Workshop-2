<?php
include 'inc/session.php';
include('pagination.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tapau's Delivery System</title>
	<link rel="stylesheet" type="text/css" href="css/products.css">
</head>

<body>
  <!-- End of Page Menu -->
	<div id="container"> <!--CONTENT-->
				<div class="main_content">
					<?php include 'inc/header.php';?>
						<hr></hr> <!--Border-->
					<!-- Start of Page Menu 
					<div id="page_menu"> 
					<nav class="menu-navigation">
						<a href="s1.php">SATRIA 1 CAFE </a>
						<a href="s2.php">SATRIA 2 CAFE </a>
						<a href="l1.php">LESTARI CAFE</a>		
					</nav>

				<!-- Products List Start -->
<br>
	<table id="myTable">
	<tr>
    	<th width="15%">Menu Name</th>
		<th width="10%">Quantity</th>
		<th width="10%">Total Payment</th>
		<th width="10%">Status</th>
        <th width="10%">Date</th> 
    </tr>
	
		<?php
	$connect = mysqli_connect("localhost", "root", "Jgracej9306__", "tapau_delivery");
	$c_id = $_SESSION['c_id'];
	$sql = "SELECT * FROM order_menu WHERE c_id = '".$c_id."' ";
	$result = mysqli_query($connect,$sql);
		
		while($rows = mysqli_fetch_array($result))
		{
			?>
				<form action="delivery_details.php" method="post">
				<tr>
                    <td width="10%"><?php echo $rows['menu_name']; ?></td>
                    <td align="center" width="10%"><?php echo $rows['quantity']; ?></td>
                    <td align="center" width="10%">RM <?php echo $rows['total']; ?></td>
					<td align="center" width="10%"><?php echo $rows['status']; ?></td>
					<td align="center" width="10%"><?php echo $rows['date']; ?></td>
				
					<!--<p style="flex-direction:column">
					 <td align="center" width="10%">
                    	<a href="delivery_details.php?did=<?php echo $rows['delivery_id']; ?>"><input type="submit"  class="button button4" value="Delivery Details" /></a>
                    </td>-->
				</tr>         
            <?php
		}
	?>
	</table>

		<br>
			<hr></hr>
	<!-- Start of Page Footer -->
	<?php include 'inc/footer.php';?>
	<!-- End of Page Footer -->			
		</div>
		</div>
	</body>
</html>