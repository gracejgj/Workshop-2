<!DOCTYPE html>
<html>

<script type="text/javascript">
	function checkoutFunction(){	
		
		alert("New Menu Added!");
		window.location.assign("foods.php");

	}
</script>
<style type="text/css">
	.menu-dropdown {
	
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 42%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}

</style>
<body>
	<div id="wrapper">
	<?php include 'inc/header.php';?>
	<div id="content">
	<br><br><br><br>
	<h2 style="text-align:center">NEW MENU</h2>
	<br><br>
	<form name="form" method="post" action="menu_add2.php" align="center" enctype="multipart/form-data"> 
	
		<input type="hidden" name="new" value="1" />
		
		<p><input type="text" name="menu_name" placeholder="Name" required /></p>
		<br>
		<?php
		
			include ('config.php');
			$sql = "SELECT * FROM menu_category ";
			$result = $connect->query($sql);
			$resultSet= $connect->query("SELECT * FROM menu_category");
			if ($result->num_rows > 0) {
			//output data of each row
			if ($row = $result->fetch_assoc()) {  ?>

			<p><select name="mc_id" class="menu-dropdown" required>
			<?php 
				while($rows = $resultSet->fetch_assoc())
				{
					$mc_id = $rows['mc_id'];
					$mc_category = $rows['mc_category'];
					
					echo "<option value ='$mc_id'>$mc_category</option>";
				}
				?></select>
				</p>
				<?php
			}
			}
							
			else {
				echo "0 results";
			}
		?>
		<br>
		<p><input type="text" name="cafe_id" placeholder="Cafe ID is 1" required /></p>
		<br>
		<p><input type="text" name="price" placeholder="Price" required /></p>
		<br>
		<p><span>Menu Image &nbsp &nbsp</span><input type="file" name="image" id="image" placeholder="Image" required /></p>
		
		<!--<p><form onsubmit="submitForm(event);">
		<input type="file" name="image" id="image-selecter" accept="image/*">
		<input type="submit" name="submit" value="Upload Image"></form></p>-->
		<br>

	<p style="flex-direction:column">
	 <input type="reset" class="button button4" value="RESET" />
	<input type="submit" onclick="checkoutFunction();" class="button button4" value="SUBMIT" />
	</p></br>

	</form>
	
	<br />
	</div>

	<div id="footer">Copyright <a href="dashboard.php">Tapau's Delivery System</a>. All Rights Reserved.</div>
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
	</div>
	</body>
	</html>