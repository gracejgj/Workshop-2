	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Tapau's Delivery System</title>
	</head>
	<body>
	<!-----------------------CONTENT-------------------------------------------->
	<div id="container"> 
	</br> <!--Border-->
		<div class="main_content">
			<?php include 'inc/header.php';?>
	<!-----------------------Border--------------------------------------------->
	<hr></hr>	
	
	<!-----------------------Start of REGISTRATION FORM----------------------------->		
	<form action="register2.php" method="post"  align="center">  
	<center><table border="0" width="40%" >
	<tr>
        <td colspan="5" align="center"><h1>Register</h1></td>
	</tr>
	<tr>
		<td colspan="5">&nbsp;</td>
	</tr>
	<tr>
		<td width="40%" align="right">Username: </td>
		<td width="70%" align="center">
		<input type="text" name="uname" placeholder="Your Username" pattern="[A-Za-z0-9]+" required />
		</td>
	</tr>
	<tr>
		<td width="40%" align="right">First Name: </td>
		<td width="70%" align="center">
		<input type="text" name="f_name" placeholder="First Name" pattern="^[a-zA-Z]+$" title="Must contains only characters" required />
		</td>
	</tr> 
	<tr>
		<td width="40%" align="right">Last Name: </td>
		<td width="70%" align="center">
		<input type="text" name="l_name" placeholder="Last Name" pattern="^[a-zA-Z]+$" title="Must contains only characters" required />
		</td>
	</tr> 	
	<tr>
		<td width="40%" align="right">Email: </td>
		<td width="70%" align="center">
		<input type="text" name="email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Abc123@gmail.com" required />
		</td>
	</tr> 	
	<tr>
		<td width="40%" align="right">Phone Number: </td>
		<td width="70%" align="center">
		<input type="text" name="phone" placeholder="Phone" required />
		</td>
	</tr>
	<tr>
		<td width="40%" align="right">Password: </td>
		<td width="70%" align="center">
		<input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
		</td>
	</tr>
	<tr>
        <td width="40%" align="right">Block: </td>
        <td width="70%" align="center">
         <select name="address"  placeholder="Select address" required />
			<option value="-------"> </option>
			<option value="Satria Lekiu">  Lekiu  </option>
			<option value="Satria Lekiu">  Lekir  </option>
			<option value="Satria Lekiu">  Jebat  </option>
			<option value="Satria Lekiu">  Tuah  </option>
			<option value="Satria Lekiu">  Kasturi  </option>
			<option value="Satria Lekiu">  Lestari  </option>  
			</select>
        </td>
    </tr> 
	<tr>
		<td colspan="5">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="5" align="center">
		<input type="submit" class="w3-button w3-white w3-border w3-round-large" value="Register" name="submit" />
		<input type="reset" class="w3-button w3-white w3-border w3-round-large" value="Clear" name="reset" />
		</td>
	</tr>
	<tr>
		<td colspan="5">&nbsp;</td>
	</tr>
	<tr>
        <td colspan="2" align="center">
        <a href="index.php" class="w3-button w3-white w3-border w3-round-large">Back to login page</a>
        </td>
    </tr>
	</table></center>		
    </form>
	<!----------------------------------------------------- END of Registration FORM --------------------------------->
	<div style="clear:both"></div>
	<br>
	<hr></hr>
		
	<!--------------------------------------------- Start of Page Footer ----------------------------->
	<?php include 'inc/footer.php';?>
	<!------------------------------------------------ End of Page Footer --------------------------------->
			
	</div>
	</body>
	</html>