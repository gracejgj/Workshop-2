
<!DOCTYPE html>
<head>
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 30%;
  padding: 10px;
  margin-top:20px;
  margin-bottom: 20px;
  margin-left: 30px;
  text-align: center;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

</style>
</head>
	<body>
	<div id="wrapper">
	<?php include 'inc/header.php';?>
	<div id="content"> 
	<br><br>
	
	<div class="row">
		<div class="column">
			<a href="lestari.php"><img src="img/third/take-away.png"  onContextMenu="return false;" style="width:250px;height:250px;"></a>
			<br><br>
			<h3>LESTARI CAFE</h3>
		</div>
		
		<div class="column">
			<a href="order.php"><img src="img/third/chef-hat.png"  onContextMenu="return false;" style="width:250px;height:250px;"></a>
				<br><br>
			<h3>ORDERS</h3>
		</div>

		<div class="column">
			<a href="delivery.php"><img src="img/third/package.png"  onContextMenu="return false;"  style="width:250px;height:250px;"></a>
				<br><br>
			<h3>DELIVERY</h3>
		</div>
	</div>
	
	<div class="row">
	<div class="column">
		<a href="product.php"><img src="img/third/menu.png"  onContextMenu="return false;" style="width:250px;height:250px;"></a>
		<br><br>
		<h3>PRODUCTS</h3> 
	</div>
	
	<div class="column">
		<a href="app.php"><img src="img/third/waiter.png"  onContextMenu="return false;" style="width:250px;height:250px;"></a>
			<br><br>
		<h3>APPLICATION</h3> 
	</div>
	
	<div class="column">
		<a href="logout.php"><img src="img/third/logout.png"  onContextMenu="return false;" style="width:250px;height:250px;"></a>
			<br><br>
		<h3>LOGOUT</h3> 
	</div>
	</div>
	
	</div>
	
	<div id="footer">Copyright <a href="cl1.php">Tapau's Delivery System </a>| Employee. All Rights Reserved 2019 <p>
	Malacca Technical University Malaysia </p></div>
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