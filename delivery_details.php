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
    	<th width="15%">Delivery Id</th>
		<th width="10%">Delivery Status</th>
    </tr>
	<br><br>
		<?php
	$connect = mysqli_connect("localhost", "root", "", "tapau_delivery");
		$sql = "select * from delivery";
		$result = mysqli_query($connect,$sql);
		
		while($rows = mysqli_fetch_array($result))
		{
			?>
				<form action="payment.php" method="post">
				<tr>
                    <td align="center" width="10%"><?php echo $rows['delivery_id']; ?></td>
					<td align="center" width="10%"><?php echo $rows['del_status']; ?></td>
				
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