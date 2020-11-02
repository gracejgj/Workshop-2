
<?php
require 'inc/config.php';
	$conn = Connect();

if(isset($_GET['pid']))
{
	$p_id = $_GET['pid'];
	
	$sql = "delete from customer_review where customer_review = '".$p_id."'";
	
	$result = mysqli_query($conn,$sql);
	
	if($result)
	{
		?>
		<script>
			alert("Media has been deleted.");
			window.location.href = "media.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Fail to delete.");
			window.location.href = "media.php";
		</script>
		<?php
	}
}
?>