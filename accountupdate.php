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
	
	$p_id = $_GET['tid'];
	$sql = "select * from customer where c_id = '$p_id'";
	$result = mysqli_query($connect,$sql);
	$rows = mysqli_fetch_array($result);

	?>
	<form action="account2.php?tid=<?php echo $p_id; ?>" method="post">
	<center><table border="0" width="50%">
	<tr>
		<td colspan="2" align="center"><h2>Account Details</h2></td>
	</tr>
	<br>
    <tr>
        <td width="30%" align="right">First Name </td>
        <td width="70%" align="center">
        <input type="text" name="f_name" value="<?php echo $rows['f_name']; ?>" required />
        </td>
    </tr>
    <tr>
        <td width="30%" align="right">Last Name </td>
        <td width="70%" align="center">
        <input type="text" name="l_name" value="<?php echo $rows['l_name']; ?>" required />
        </td>
	</tr>
    <tr>
        <td width="30%" align="right">Email </td>
        <td width="70%" align="center">
        <input type="text" name="email" value="<?php echo $rows['email']; ?>" required />
        </td>
    </tr>
	<tr>
        <td width="30%" align="right">Phone </td>
        <td width="70%" align="center">
        <input type="number" name="phone" value="<?php echo $rows['phone']; ?>" required />
        </td>
    </tr>
	<tr>
        <td width="30%" align="right">Address </td>
        <td width="70%" align="center">
        <select name="address" value="<?php echo $rows['address']; ?> " readonly required />
			<option value="-------"> </option>
			<option value="Satria Lekiu">Lekiu</option>
			<option value="Satria Lekir">Lekir</option>
			<option value="Satria Jebat">Jebat</option>
			<option value="Satria Tuah">Tuah</option>
			<option value="Satria Kasturi">Kasturi</option>
			<option value="Lestari">Lestari</option>  
			</select>
        </td>
    </tr>
	<tr>
		<td width="30%" align="right">Password </td>
        <td width="70%" align="center">
        <input type="text" name="password" value="<?php echo $rows['password']; ?>" required />
        </td>
    </tr>
    <tr>
		<td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <input type="submit" class="w3-button w3-white w3-border w3-round-large"  value="Confirm" name="submit" />
        <input type="reset" class="w3-button w3-white w3-border w3-round-large"  value="Clear" name="reset" />
        </td>
        </tr>
    </table></center>
	</form>	
	<!--------------------------------------------------- End of UPDATE -------------------------->
	
	</div>
	<hr></hr>	
	<!-- Start of Page Footer -->
	<?php include 'inc/footer.php';?>
	<!-- End of Page Footer -->	
	</div>
	</body>
	</html>