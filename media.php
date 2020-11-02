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

<?php 
require 'inc/config.php';
	$conn = Connect();
?>
<body>
  <br>
  <br><align= "center"><a href="add_media.php">ADD REVIEW</a>
 
          <div class="col-sm-12" align="center"> <h2>LIST CUSTOMER REVIEW</h2></div>
          <table class="table" border="1" align="center" width="100%" bgcolor="#F0F3F4">
            <thead >
            <th align="center" >No</th>
            <th align="center" >Media</th>
           
            <th align="center" >Video Name</th>
            <th align="center" >Description</th>
            <th align="center" >Time</th>
            <th align="center" >Actions</th>
            </thead>

          <?php
        $count=1;
        $fetchVideos = mysqli_query($conn, "SELECT * FROM customer_review");
        while($rows = mysqli_fetch_assoc($fetchVideos)){
       $location = $rows['location'];
            ?>

              <tr>
                          <td align="center" ><?php echo $count; ?></td>
                          <td align="center" ><?php echo "<video src='".$location."' controls width='350px' height='250px' >"; ?></td>
                          <td align="center" ><?php echo $rows['name']; ?></td>
                           <td align="center" ><?php echo $rows['description']; ?></td>
                          <td align="center" ><?php echo $rows['timeIN']; ?></td>
                          <td align="center" >
                            <a href="upd_media.php?pid=<?php echo $rows['customer_review']; ?>">UPDATE</a>&nbsp;
                            <a href="del_media.php?pid=<?php echo $rows['customer_review']; ?>">DELETE</a>&nbsp;
                            <?php //echo '<a href="del_media.php?pid='.$rows['id'].'" ><DELETE</a>'; ?>
                          </td>
              </tr>         
          <?php
          $count++;
         }
          ?>
        </table>
    <br>
	</div>
	<hr></hr>
	<!-- Start of Page Footer -->
	<?php include 'inc/footer.php';?>
	<!-- End of Page Footer -->	
		
	</div>
	<!-- End of Main Container -->		
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
