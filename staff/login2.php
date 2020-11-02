<?php

$connect = mysqli_connect("localhost", "root", "", "tapau_delivery");
if (isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

$sql = "select * from employee where username = '$username' and password = '$password'";
$result = mysqli_query($connect, $sql);
$rows = mysqli_fetch_array($result);
	
	if(isset($rows['emp_name']))
	{
	if($rows['emp_id'] == "1")
	{
		session_start();
		$_SESSION['emp_name'] = $rows['emp_name'];
		?>
		<script>
			alert("Welcome back, admin!");
			window.location.href = "cafe/cs1.php";
		</script>
		<?php
	}
	else if($rows['emp_id'] == "2")
	{
		session_start();
		$_SESSION['emp_name'] = $rows['emp_name'];
		?>
		<script>
			alert("Login as Cafe Satria 2");
			window.location.href = "C2/cs2.php";
		</script>
		<?php
	}
	else if($rows['emp_id'] == "1")
	{
		session_start();
		$_SESSION['emp_name'] = $rows['emp_name'];
		?>
		<script>
			alert("Welcome back, ADMIN!");
			window.location.href = "C3/lestari.php";
		</script>
		<?php
	}
}
else
{
	?>
	<script>
		alert("Please try again.");
		window.location.href = "login.php";
	</script>
	<?php
}
}
?>