<!DOCTYPE html>

<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "tapau_delivery");
	

	$application_id = $_GET["application_id"];

	$sql = "DELETE FROM application WHERE application_id = '".$application_id."'";
	$result = mysqli_query($connect, $sql);

	if($result == TRUE){
				echo '<script language="javascript">';
				echo 'alert("delete Success");';
				echo 'window.location.href="app_status.php";';
				echo '</script>';
			}else{
				echo '<script language="javascript">';
				echo 'alert("delete Fail");';
				echo 'window.location.href="app_status.php";';
				echo '</script>';
			}

			mysqli_close($connect);
		
?>