
<?php 
include ('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	include ('config.php');

	$target="img/foods/".basename($_FILES["image"]["name"]);
 
	$image = $_FILES['image']['name'];
	$p_id = $_GET['pid'];
	$pname = $_POST['menu_name'];
	$price = $_POST['price'];
	
	$sql = "UPDATE menu set menu_name = '".$pname."' , price = '".$price."', image = '".$image."' WHERE menu_id = '".$p_id."'"
	 or die ("Error inserting data into table");
	$result = $connect->query($sql);
	
		if (move_uploaded_file($_FILES['image']['tmp_name'], "img/foods/".$_FILES['image']['name']))
		{
			echo "Menu $p_id Had Been Updated!";
			echo "<meta http-equiv=\"refresh\" content=\"3;URL=beverages.php\">";
		}
	else
		{
			echo "Error: " .$sql . "<br> " . $connect->error;
		}
		

		//Closes specified connection
		 $connect->close();
	?>
