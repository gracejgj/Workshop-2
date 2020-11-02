
	<!DOCTYPE html>
	<html>

	<head>
	<title>Admin | Tapau's Delivery System</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css" />
	</head>

	<body>
	<div id="wrapper">
	<?php include 'inc/header.php';?>
	<div id="content">
	<br><br><br><br>
		<div class="h_divider">&nbsp;</div>   
		<div class="graph-container">
		<table align="center" border="1" width="100%" cellpadding="5" style=" overflow-y:scroll; height:500px; display:block;">		
		<form class="form-horizontal" method="post" action="function_application.php" enctype="multipart/form-data">
		<div class="form-group">
		<label for="exampleInputFile">Support Audio</label>
		<input type="file" id="exampleInputFile" id="document"  name="evidence">
		</div>
		<br>
		<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
		<button class="btn-primary btn" type="submit" name="submit">Submit</button>
		<button class="btn-inverse btn" type="Reset">Reset</button>
		</div>
		</div>
	
		</form>
	
		<thead>
		<tr align="center">
		<td width="3%" style="background-color:#F04F4F;"><font color="white">AUDIO</font></td>
		<td width="10%" colspan="3" style="background-color: #F04F4F;"><font color="white">ACTION</font></td>
		</tr>
		</thead>
		
			<?php 
		$connect = mysqli_connect("localhost", "root", "", "tapau_delivery");
		$select = "SELECT * FROM application";
		$result = mysqli_query($connect, $select);

		while($row = mysqli_fetch_array($result)) 
		{
		?> 

		<!-- <a href="functiondownloadfile.php?application_id=<?php echo $row['application_id']; ?>" onclick="return confirm('Are you sure to download this document?')" />Print --></td>
		<td style="border-bottom: 1px solid #b3b3b3;" align="center"><video width="250px" height="50px" controls>

		<?php 

		echo '<source src="data:video;base64,'.base64_encode($row['support_evidence'] ).'" type="video/mp4" />';
		?>
		</video></td>
		<td style="border-bottom: 1px solid #b3b3b3;" align="center"><a href="view_update.php?application_id=<?php echo $row['application_id']; ?>" />VIEW</td>

		<td style="border-bottom: 1px solid #b3b3b3;" align="center" "><a href="deleteinformation.php?application_id=<?php echo $row['application_id']; ?>" onclick="return confirm('Are you sure to delete this record?')" />DELETE</td>
		</tr>

		<?php
		}
		?>  
  
  
	</table>

	</div>
	</div>
	
	<div id="footer">Copyright <a href="cs1.php">Tapau's Delivery System</a>. All Rights Reserved. </div>

	</div>
	</body>
	</html>