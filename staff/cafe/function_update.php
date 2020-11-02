<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "tapau_delivery");
	

	if(isset($_POST['update'])){
		
		
			
			$id = $_POST['id'];
			$evidenceName= addslashes($_FILES["evidence"]["name"]);

		
			if (($_FILES["evidence"]["name"])){
			$evidenceName= addslashes($_FILES["evidence"]["name"]);
			$evidenceData= addslashes(file_get_contents($_FILES["evidence"]["tmp_name"]));


					$update1=mysqli_query($connect, "UPDATE application SET support_evidence = '$evidenceData' where application_id = '$id';");

					if($update1){
						echo '<script language="javascript">';
						echo 'alert("Update Success");';
						echo 'window.location.href="app_status.php";';
						echo '</script>';
					}else{
						echo '<script language="javascript">';
						echo 'alert("Update Fail");';
						echo 'window.location.href="view_update.php";';
						echo '</script>';
					}
				}

		
					mysqli_close($connect);
				}
			?>