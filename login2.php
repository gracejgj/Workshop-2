<?php

$connect = mysqli_connect('localhost','root','Jgracej9306__','tapau_delivery');

if(isset($_POST['submit']))
{
	$uname = $_POST['uname'];
	$password = $_POST['password'];

$sql = "select * from customer where uname = '$uname' and password = '$password'";
$result = mysqli_query($connect, $sql);
$rows = mysqli_fetch_array($result);
	
	if (isset($rows['c_id']))

	{
	session_start();
	$_SESSION['c_id'] = $rows ['c_id'];
	
			?>
			<script>
			alert('Success');
			window.location.href = "index.php";
			</script>
			<?php  
}

	else
	{
	?>
			<script>
			alert('Failed to login');
			window.location.href = "login.php";
			</script>
			<?php	
	}
}
?>