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

			<div class="graph-container">
					
					
              <table align="center" border="1" width="100%" cellpadding="5" cellspacing="0" style=" overflow-y:scroll; height:500px; display:block;">
                <tr>
				  <td width="3%" style="background-color:#F04F4F;"><font color="white">ID</font></td>
                  <td width="3%" style="background-color:#F04F4F;"><font color="white">AUDIO</font></td>
                  <td width="10%" colspan="3" style="background-color: #F04F4F;"><font color="white">ACTION</font></td>
                </tr>

                  <?php 
				  
                  $select = "SELECT * FROM application group by application_id desc";
                  $result = mysqli_query($connect, $select);
                
                    while($row = mysqli_fetch_array($result)) 
                    {
                  ?> 
                   
                 <!-- <a href="functiondownloadfile.php?application_id=<?php echo $row['application_id']; ?>" onclick="return confirm('Are you sure to download this document?')" />Print --></td>
				 <td><?php echo $row['application_id'];?> </td>
				 <td style="border-bottom: 1px solid #b3b3b3;" align="center"><video width="300px" height="50px" controls>

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
	<br>
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