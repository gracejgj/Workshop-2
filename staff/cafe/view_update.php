<?php
	$connect = mysqli_connect("localhost", "root", "", "tapau_delivery");
  ?>
<!DOCTYPE html>
<head>

</head>
	<body>
	<div id="wrapper">
	<?php include 'inc/header.php';?>
	<div id="content"> 
	<br><br>

	<div class="grid-form">

	<?php

	$application = $_GET["application_id"];
	$sql = "SELECT * FROM application where application_id = '$application'";
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($result);
	?>

	<div class="grid-form1">
	<div class="tab-content">
	<center>
	<div class="tab-pane active" id="horizontal-form">
	<form class="form-horizontal" method="post" action="function_update.php" enctype="multipart/form-data">



	<div class="form-group">
	<label for="txtarea1" class="col-sm-2 control-label"></label>
	<div class="col-sm-8">
	<video width="250px" height="100px"  controls>

	<?php 

	echo '<source src="data:video;base64,'.base64_encode($row['support_evidence'] ).'" type="video/mp4" name="evidence" />';
	?>
	</video>

	<input type="file" id="exampleInputFile" id="document"  name="evidence">
	</div>
	</div>

	<input type="hidden" class="form-control1" id="focusedinput" name="id" value="<?php echo $row['application_id']; ?>">

	</div>
	</div>


	</div>

	<br>

	<center>

	<div class="panel-footer">
	<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
	<button class="btn-primary btn" class="button button4" type="submit" name="update">Update</button>
	<button class="btn-inverse btn" class="button button4" type="Reset">Reset</button>
	</div>
	</div>
	</div>
	</center>


	</form>
	</div>
	</div>
	
	
	<div id="footer">Copyright <a href="cs1.php">Tapau's Delivery System</a>. All Rights Reserved. </div>
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