	<?php
	session_start();
	include('pagination.php');
	
	?>
	
	<!-- ============================================== HEADER ============================================== -->
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Tapau's Delivery System</title>
	<link rel="stylesheet" type="text/css" href="css/products.css">
	</head>
	<body>
	<!-----------------------CONTENT--------------------------------------->
	<div id="container"> 
		<div class="main_content">
			<?php include 'inc/header.php';?>
	<!-----------------------Border--------------------------------------->
	<hr></hr>	
	<!-- Recording -------------------------------->
	<?php include 'index.html';?>
	<hr></hr>	
	<!--------------END OF Recording------------>
	<?php

	require 'inc/config.php';
	$conn = Connect();
	
	if(isset($_POST['Submit']))
	{
	$file_name = $_FILES['audio_file']['name'];
	$tempname =$_FILES['audio_file']['tmp_name'];
	
	if($_FILES['audio_file']['type']=='audio/mpeg' || $_FILES['audio_file']['type']=='audio/mpeg3' || $_FILES['audio_file']['type']=='audio/x-mpeg3' || $_FILES['audio_file']['type']=='audio/mp3' || $_FILES['audio_file']['type']=='audio/x-wav' || $_FILES['audio_file']['type']=='audio/wav')
	{ 
	 $new_file_name=$_FILES['audio_file']['name'];

	 // Where the file is going to be placed
	 $target_file = "audio/".$new_file_name;
	 
	 //target path where u want to store file.

	 //following function will move uploaded file to audios folder. 
	if(move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_file)) {

	 //insert query if u want to insert file
	  $query = "INSERT INTO audio (name,location) VALUES('".$file_name."','".$target_file."')";
	
	mysqli_query($conn,$query);
	echo "Upload successfully.";
  
	}
	else{
          echo "Invalid file extension.";
	}
	}
	}
	
	?>
	<!--------------Uploading------------>
	<form name="audio_form" id="audio_form" action="" method="post" enctype="multipart/form-data">
	<fieldset>
	<label>Upload your orders here:</label>
	<input name="audio_file" id="audio_file" type="file"/>
	</br>
	<input type="submit" name="Submit" id="Submit" value="Submit"/>
	</fieldset>
	</form>
	<hr></hr>	
	<!--------------END OF Uploading------------>

	
	<div style="clear:both"></div>
	<br />	
	<!------------------------------------------- Start of Pagination ----------------------------------------------------------->
	
	<!----------------------------------------------------- End of Pagination ------------------------------------>

		<br>
		
			<hr></hr>
			
	<!----------------------------------------------------- Start of Page Footer --------------------------------->
	<?php include 'inc/footer.php';?>
	<!-- --------------------------------------------------End of Page Footer ------------------------------------>			
		</div>

		<script type="text/JavaScript">
		//Script courtesy of BoogieJack.com
		var message="NoRightClicking";
		function defeatIE() {if (document.all) {(message);return false;}}
		function defeatNS(e) {if 
		(document.layers||(document.getElementById&&!document.all)) {
		if (e.which==2||e.which==3) {(message);return false;}}}
		if (document.layers) 
		{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;}
		else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;}
		document.oncontextmenu=new Function("return false")
	</script>
	</body>
	</html>