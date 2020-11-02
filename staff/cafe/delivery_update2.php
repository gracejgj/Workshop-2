<?php

include 'session.php';

if(isset($_POST['submit']))
{
	$du_id = $_GET['duid'];
	$stat = $_POST['action'];
	
	
	$sql = "update delivery set action = '$stat' where delivery_id = '$du_id'";
	$result = mysqli_query($connect,$sql);
	
	if($result)
	{
		?>
		<script>
			alert("Delivery status has been updated.");
			window.location.href = "delivery.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Fail to update.");
			window.location.href = "delivery_update.php?duid=<?php echo $du_id; ?>";
		</script>
		<?php
	}
}
?>