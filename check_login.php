<link rel="stylesheet" type="text/css" href="css/boostrap.css">
<?php
session_start();
header('location:loging.php');
$mobile =$_POST['mobile'];
$password =$_POST['password'];

$con = mysqli_connect('localhost','root','','form_reg');
	
	$q = "SELECT * FROM `inst_reg` WHERE mobile='$mobile' && password='$password'";
	$result = mysqli_query($con,$q);

	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		$_SESSION['mobile']=$mobile;
		header('location:profile.php');
	}
	else 
	{
		echo "Unvalide Username / Password";
		?>
		<div class="form-group">
		<a href="login.php">Back to Login</a>
		</div>
		<?php
	}
?>