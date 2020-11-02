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
	<!-- Display all Food from food table -------------------------------->
	<?php
	require 'inc/config.php';
	$conn = Connect();
	$sql = "SELECT *  FROM MENU NATURAL JOIN CAFE WHERE CAFE_ID='1' LIMIT $offset, $total_records_per_page";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
	  while($row = mysqli_fetch_assoc($result)){
	?>
	<div class="card">
	<form method="post" action="cart.php?action=add&id=<?php echo $row["menu_id"]; ?>">
	<img src="staff/cafe/img/foods/<?php echo $row["image"]; ?> "style="width:50%" "height:30%" />
	<h4><?php echo $row["menu_name"]; ?></h4>
	<h4>RM <?php echo $row["price"]; ?></h4>
	<h5>Quantity: <input type="number" min="1" max="25" name="quantity" value="1" style="width: 60px;"> </h5>
	<input type="hidden" name="hidden_name" value="<?php echo $row["menu_name"]; ?>">
	<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
	<input type="hidden" name="hidden_cid" value="<?php echo $row["cafe_id"]; ?>">
	<input type="hidden" name="hidden_cname" value="<?php echo $row["cafe_name"]; ?>">
	<input type="hidden" name="hidden_add" value="<?php echo $row["address"]; ?>">
	<input type="submit" name="add" class="w3-button w3-white w3-border w3-round-large" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
	<br><br>
	</form>  
	</div>
	
	
	<?php 
	} 
	}				
	?>
				
	<div style="clear:both"></div>
	<br />

	<!------------------------------------------- Start of Pagination ----------------------------------------------------------->
	<div style='padding: 10px 20px 0px; border-top: dotted 1px; text-align:center;'>
	<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
	</div>

	<ul class="pagination">
	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>

	<?php 
	if ($total_no_of_pages <= 9){  	 
	for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
	if ($counter == $page_no) {
	echo "<li class='active'><a>$counter</a></li>";	
	}else{
	echo "<li><a href='?page_no=$counter'>$counter</a></li>";
	}
	}
	}
	elseif($total_no_of_pages > 9){

	if($page_no <= 4) {			
	for ($counter = 1; $counter < 8; $counter++){		 
	if ($counter == $page_no) {
	echo "<li class='active'><a>$counter</a></li>";	
	}else{
	echo "<li><a href='?page_no=$counter'>$counter</a></li>";
	}
	}
	echo "<li><a>...</a></li>";
	echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
	}

	elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
	echo "<li><a href='?page_no=1'>1</a></li>";
	echo "<li><a href='?page_no=2'>2</a></li>";
	echo "<li><a>...</a></li>";
	for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
	if ($counter == $page_no) {
	echo "<li class='active'><a>$counter</a></li>";	
	}else{
	echo "<li><a href='?page_no=$counter'>$counter</a></li>";
	}                  
	}
	echo "<li><a>...</a></li>";
	echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
	}

	else {
	echo "<li><a href='?page_no=1'>1</a></li>";
	echo "<li><a href='?page_no=2'>2</a></li>";
	echo "<li><a>...</a></li>";

	for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
	if ($counter == $page_no) {
	echo "<li class='active'><a>$counter</a></li>";	
	}else{
	echo "<li><a href='?page_no=$counter'>$counter</a></li>";
	}                   
	}
	}
	}
	?>

	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
	<?php if($page_no < $total_no_of_pages){
	echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
	} ?>
	</ul>
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