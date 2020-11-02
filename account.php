	<?php 
	include 'inc/session.php';
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title> ACCOUNT | Tapau's Delivery System </title>
	</head>
	
	<body>
	<div id="container"> <!--CONTENT-->
	<div class="main_content">
	<?php include 'inc/header.php';?>
	<hr></hr> <!--Border-->	
	
	
	<?php 
	$c_id = $_SESSION['c_id'];
	$sql = "select * from customer WHERE c_id ='".$c_id."' ";
	$result = mysqli_query($connect,$sql);
	$rows = mysqli_fetch_array($result);

	?>
	
		<center><table border="0" width="40%">
			<tr>
				<td colspan="2" align="center"><h2>Account Details</h2></td>
			</tr>
		<tr>
            <td colspan="2">&nbsp;</td>
        </tr>
		 <tr>
            <td width="30%" align="right">Registration ID</td>
            <td width="70%" align="center"><?php echo $rows['c_id']; ?>
            </td>
			
        </tr>
        <tr>
            <td width="30%" align="right">First Name </td>
            <td width="70%" align="center"><?php echo $rows['f_name']; ?>
            </td>
        </tr>
        <tr>
            <td width="30%" align="right">Last Name </td>
            <td width="70%" align="center"><?php echo $rows['l_name']; ?>
            </td>
        </tr>
        <tr>
            <td width="30%" align="right">Email </td>
            <td width="70%" align="center"><?php echo $rows['email']; ?>
            </td>
        </tr>
		
		<tr>
            <td width="30%" align="right">Phone </td>
            <td width="70%" align="center"><?php echo $rows['phone']; ?>
            </td>
        </tr>
		
		<tr>
            <td width="30%" align="right">Address </td>
            <td width="70%" align="center"><?php echo $rows['address']; ?> 

            </td>
        </tr>
		<tr>
            <td width="30%" align="right">Password </td>
            <td width="70%" align="center"><?php echo $rows['password']; ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
				<a href="accountupdate.php?tid=<?php echo $rows['c_id']; ?>">
				<input type="submit" class="w3-button w3-white w3-border w3-round-large"  value="Update" /></a>
            </td>
        </tr>
    </table></center>
</form>	

	</div>
	<hr></hr>
		
	<!-- Start of Page Footer -->
	<?php include 'inc/footer.php';?>
	<!-- End of Page Footer -->
			
		
	</div>
</body>
</html>