<?php
	session_start(); 
	if (isset($_SESSION['emp_name']))
	{
		$_SESSION = array();
		session_destroy(); 
		header("location:../login.php");
	}
	else
	{
		?>
		<script>
			alert("You have not open session");
		</script>
		<?php
	}
?>