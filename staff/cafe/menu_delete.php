<?php
$connect = mysqli_connect("localhost", "root", "", "tapau_delivery");

if(isset($_GET['pid']))
{
	$pro_id = $_GET['pid'];
	
	$sql = "delete from menu where menu_id = '$pro_id'";
	$result = mysqli_query($connect,$sql);
	
	if($result)
	{
		?>
		<script>
			alert("Menu has been deleted.");
			window.location.href = "foods.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Failed to delete.");
			window.location.href = "foods.php";
		</script>
		<?php
	}
}
?>