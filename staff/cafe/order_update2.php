<?php

include 'session.php';

if(isset($_POST['submit']))
{
	$p_id = $_GET['pid'];
	$stat = $_POST['status'];
	
	
	$sql = "update order_menu set status = '$stat' where order_id = '$p_id'";
	$result = mysqli_query($connect,$sql);
	
	if($result)
	{
		?>
		<script>
			alert("Product has been updated.");
			window.location.href = "order.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Fail to update.");
			window.location.href = "order_update.php?pid=<?php echo $p_id; ?>";
		</script>
		<?php
	}
}
?>