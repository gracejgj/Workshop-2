<?php

include('config.php');
session_start();

	$msg ="";

		$target="img/foods/".basename($_FILES["image"]["name"]);
 
		$image=$_FILES['image']['name'];

		$name = $_POST['menu_name'];
		$mc = $_POST['mc_id'];
		$cafe = $_POST['cafe_id'];
		$fees = $_POST['price'];
	  	
		
		$sql = mysqli_query( $connect, "INSERT INTO menu ( menu_name, mc_id, cafe_id, price, image) VALUES ('$name','$mc', '$cafe','$fees','$image')");
		mysqli_query($connect,$sql);
		
	if (move_uploaded_file($_FILES['image']['tmp_name'], "img/foods/".$_FILES['image']['name']))
		{
			echo "<meta http-equiv=\"refresh\" content=\"3;URL=menu_add.php\">";
		}
	else
		{
			echo "Error: " .$sql . "<br> " . $connect->error;
		}



?>