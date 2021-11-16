<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<?php
session_start();
$name =$_POST['name'];
$password =$_POST['password'];

$con = mysqli_connect('localhost','root','','form_reg');
	
	$q = "SELECT * FROM `admin` WHERE name='$name' && password='$password'";

	$result = mysqli_query($con,$q);

	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		echo "Welcome";
		header('location:admin_profile.php');	
	}
	else 
	{
		echo "Unvalide Username / Password";
		?>
		<div class="form-group">
			<a href="admin_login.php">Back to login</a>
		</div>
		<?php

	}
?>