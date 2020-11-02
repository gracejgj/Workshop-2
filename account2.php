<?php

include 'inc/session.php';

if(isset($_POST['submit']))
{
	$p_id = $_GET['tid'];
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	
	
	$sql = "update customer set f_name = '$f_name', l_name = '$l_name', email = '$email', phone = '$phone', address = '$address', password = '$password' where c_id = '$p_id'";
	$result = mysqli_query($connect,$sql);
	
	if($result)
	{
		?>
		<script>
			alert("Account has been updated.");
			window.location.href = "account.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Fail to update.");
			window.location.href = "account.php?tid=<?php echo $p_id; ?>";
		</script>
		<?php
	}
}
?>