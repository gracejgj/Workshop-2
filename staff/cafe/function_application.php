<!DOCTYPE html>

<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "tapau_delivery");
	

	

	if(isset($_POST['submit'])){

	
		
			$evidenceName= addslashes($_FILES["evidence"]["name"]);


			$applydate =  date("y-m-d");

			if (($_FILES["evidence"]["name"]) != NULL){
			$v3 =  date("y-m-d");
			
			
			$evidenceData= addslashes(file_get_contents($_FILES["evidence"]["tmp_name"]));

			// $docname=$_FILES["document"]["name"];
			// $docdata="../document/".$v3.$docname;
			// move_uploaded_file($_FILES["document"]["tmp_name"],$docdata);

			// $docdata = addslashes(file_get_contents($_FILES["document"]["tmp_name"])); 

			

			$insert = mysqli_query($connect, "INSERT INTO application (support_evidence) VALUES ('$evidenceData')");

			if($insert){
				echo '<script language="javascript">';
				echo 'alert("Insert Success");';
				echo 'window.location.href="app_status.php";';
				echo '</script>';
			}else{
				echo '<script language="javascript">';
				echo 'alert("Insert Fail");';
				echo 'window.location.href="new_application.php";';
				echo '</script>';
			}
}


			mysqli_close($connect);
		}


?>
