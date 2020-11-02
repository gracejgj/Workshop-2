	<?php
	session_start();
	include('pagination.php');
	require 'inc/config.php';
	$conn = Connect();
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

</head>
<body>
<!--<h1>ORDER GUIDE</h1> <BR>-->
	<p><center>If you have problems with ordering, <P>
	do listen on the audio on how to place your food orders. Thanks!</center></p><BR>
	
		<div class="content-top">

					
					<form action="" method="post">
						
						
              <table align="center" border="1" width="100%" cellpadding="5" cellspacing="0" style=" overflow-y:scroll; height:500px; display:block;">
                <tr align="center">
					
								
					
               <?php 
                  $select = "SELECT * FROM application";
                  $result = mysqli_query($conn, $select);
                
                    while($row = mysqli_fetch_array($result)) 
                    {
                  ?> 
                  
					
                  <td width="3%" style="background-color:#F04F4F;"><font color="white">Audio</font></td>
					
					 
                    <!-- <a href="functiondownloadfile.php?application_id=<?php echo $row['application_id']; ?>" onclick="return confirm('Are you sure to download this document?')" />Print --></td>
						
                  <td style="border-bottom: 1px solid #b3b3b3;" align="center"><video width="250px" height="100px" controls>

                  	<?php 

                  echo '<source src="data:video;base64,'.base64_encode($row['support_evidence'] ).'" type="video/mp4" />';
                  	?>
                  </video></td>
          
						   </tr>
                
                <?php
                  }
                ?>  
				
