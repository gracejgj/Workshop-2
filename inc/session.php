<?php
	include 'conn.php';
	session_start();
	if (!isset($_SESSION['c_id']))
	{
		?>
        <script>
			alert("You have not login yet");
			window.location.href = "index.php";
		</script>
        <?php
	}
?>