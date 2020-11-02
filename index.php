<?php
session_start();
$connect = mysqli_connect("localhost", "root", "Jgracej9306__", "tapau_delivery");
?>

<!DOCTYPE html>
<html lang="en">
<body>
	
	<div id="container"> <!--CONTENT-->
	<?php include 'inc/header.php';?>
	<hr></hr> <!--Border-->
	
	<!-- Start of Main Content Area -->
	<div class="main_content">
	<div class="w3-content w3-section" style="max-width:1280px" >
	  <img class="mySlides" src="img/gallery/3.jpg" onContextMenu="return false;" style="width:100%; height:100%">
	  <img class="mySlides" src="img/gallery/1.jpg" onContextMenu="return false;" style="width:100%; height:100%">  
	  <img class="mySlides" src="img/gallery/2.jpg" onContextMenu="return false;" style="width:100%; height:100%">
	  <img class="mySlides" src="img/gallery/5.jpg" onContextMenu="return false;" style="width:100%; height:100%">
	  <img class="mySlides" src="img/gallery/1.png" onContextMenu="return false;" style="width:100%; height:100%">
	  <img class="mySlides" src="img/gallery/4.jfif" onContextMenu="return false;" style="width:100%; height:100%">
	</div>	
	</div>
	
	<div class="h_divider">&nbsp;</div>   
	<div class="sub_contents">
	<div class="sub_local">
	<center> <img src="img/3.webp" alt="Tapau's" class="center" style="width:20%; height:10%;">
	<h2>Feeling Hungry?</h2></center><br> 
	<center><a class="w3-button w3-white w3-border w3-round-large" href="foodzone.php" role="button" > Order Now </a></center>	
		<center>
	<br>
	<!-- Start of Audio Area -->
	<audio id="myAudio" controls autoplay hidden="true">
 <source src="audio/POPPYHILL.mp3" type="audio/mpeg" >
              </audio>
	
	
	<p id="demo"></p>

	<script>
	function myFunction() {
	  var x = document.getElementById("myAudio").autoplay;
	  document.getElementById("demo").innerHTML = x;
	}
	</script>
	</center>
	</div>
			<div class="clearthis">&nbsp;</div>	
		<br>
			<div class="sub_local">

				<!-- <h1>CREATED BY LOCAL ARTISAN FLORISTS</h1> -->
				<br>
				<p align="center"> Cafeteria in UTeM celebrates the rich and varied culinary traditions of the Malaysian cuisine by offering delicious dishes for all. There are three cafeterias in Main Campus, two which are dedicated for the students and a café for staffs. 
				Have a casual, local dining experience as you savor roti canai, nasi lemak and sandwiches for breakfast and get the best of nasi campur during lunchtime.</p>
				<br>
				<img src="img/abc.webp" alt="ABC">
				<img src="img/bandung.webp" alt="bandung">
				<img src="img/nasi-lemak-ikan.webp" alt="Nasi Lemak">
				<img src="img/limau.webp" alt="limau">
				<img src="img/roti-canai.webp" alt="Roti Canai">
				<img src="img/ikat-semua.webp" alt="ikat-semua">
				<img src="img/curry-pup.webp" alt="Curry Pup">
				<img src="img/teh-tarik.webp" alt="teh-tarik">
				
			</div>
			<div class="clearthis">&nbsp;</div>
		</div>
	<hr></hr	
	<!-- Start of Page Footer -->
	<?php include 'inc/footer.php';?>
	<!-- End of Page Footer -->			
	</div>
	
<script>
	var myIndex = 0;
	carousel();

	function carousel() {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";  
	  }
	  myIndex++;
	  if (myIndex > x.length) {myIndex = 1}    
	  x[myIndex-1].style.display = "block";  
	  setTimeout(carousel, 5000); // Change image every 2 seconds
	}
	</script>
	
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