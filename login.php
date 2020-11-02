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

	<!-----------------------Start of LOGIN FORM---------------------------->			 
	<form action="login2.php" method="post">  
	<center><table width="40%" border="0">
	<tr>
        <td colspan="8" align="center"><h2>Login</h2></td>
	</tr>
	<tr>
		<td width="40%" align="right">Username: </td>
		<td width="70%" align="center">
		<input type="text" name="uname" placeholder="Your Username" required />
		</td>
	</tr>
		<br>
	<tr>
		<td width="40%" align="right">Password: </td>
		<td width="70%" align="center">
		<input type="password" name="password" placeholder="Password" required />
		</td>
	</tr>
	<tr>
		<td colspan="5">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="5" align="center">
		<input type="submit" class="w3-button w3-white w3-border w3-round-large" value="Login" name="submit" />
		<input type="reset" class="w3-button w3-white w3-border w3-round-large" value="Clear" name="reset" />
		</td>
	</tr>
	<tr>
		<td colspan="5">&nbsp;</td>
	</tr>
	<tr>
        <td colspan="2" align="center">
        <a href="index.php" class="w3-button w3-white w3-border w3-round-large">Back to homepage</a>
        </td>
     </tr>
	<table></center>			
    </form>		
				
	<div style="clear:both"></div>
	<br>
	<hr></hr>
			
	<!----------------------------------------------------- Start of Page Footer --------------------------------->
	<?php include 'inc/footer.php';?>
	<!-- --------------------------------------------------End of Page Footer ------------------------------------>			
		</div>
	</div>
	</body>
	</html>