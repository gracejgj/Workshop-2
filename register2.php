<?php

include 'inc/conn.php';

if (isset($_POST['submit']))
{
$uname = $_POST['uname'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$address = $_POST['address'];


$sql2 = "select * from customer where uname ='$uname'"; //dia tak kasi redundant
$result2 = mysqli_query($connect, $sql2);
$rows = mysqli_fetch_array($result2);


if (isset($rows['uname']))
{
?>
<script>
alert('Please insert correctly.');
window.location.href =  "register.php";
</script>
<?php
}
else
{
$sql = "insert into customer(uname,f_name, l_name, email, phone, password, address) values ('$uname','$f_name','$l_name','$email','$phone','$password','$address')";

};

$result = mysqli_query($connect, $sql);

if($result)
	{
?>
	<script>
	alert('Account has been created')
	window.location.href =  "login.php";
	</script>
<?php
	}
else
	{
?>
	<script>
	alert('Account failed to created');
	window.location.href =  "register.php";
	</script>
<?php
	}
} 
?>

