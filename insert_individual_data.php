<?php
session_start();
$name =$_POST['name'];
$mobile =$_POST['mobile'];
$email =$_POST['email'];
$teach =$_POST['teach'];
$background = $_POST['background'];
$class_offer =$_POST['class_offer'];
$address =$_POST['address'];
$city =$_POST['city'];
$class_offer =$_POST['class_offer'];
$password =$_POST['password'];

$con = mysqli_connect('localhost','root','','form_reg');

	$q = "select * from ind_reg where name='$name'";

	$result = mysqli_query($con,$q);

	$num= mysqli_num_rows($result);

	if($num ==1)
	{
		echo "Faculty Name Already Registared";
		
		?>
		<h4>Choose Another Name of Institute<h4>
		<a href="institute_form.php">Back to form</a>
		<?php
	}
	else
	{
	$query = "INSERT INTO `ind_reg`(`name`, `mobile`, `email`, `teach`, `background`, `address`, `city`, `class_offer`, `password`) VALUES ('$name','$mobile','$email','$teach','$background','$address','$city','$class_offer','$password')";
		
	$run = mysqli_query($con, $query); ?>
	<html>
			<body>
	<div class="main">
		<div class="name">
			<img src="img/contact-png.png">
			<?php echo $_POST['name']; ?><br><br>
		</div>

			<div class="form-group">
				<a href="home.php">Back</a>
			</div>

		
		<div class="contact">
			<lable>contact:</lable>
			<?php echo $_POST['mobile']; ?>
			<?php echo $_POST['email']; ?><br><br>
		</div>


		<div class="Teach">
			<lable>Teaching Categories:</lable>
			<?php echo $_POST['teach']; ?><br><br>
		</div>


		<div class="background">
			<lable>institute Overview:</lable>
			<?php echo $_POST['background']; ?><br><br>
		</div>

		<div class="courses">
			<lable>Available courses:</lable>
			<?php echo $_POST['class_offer']; ?><br><br>
		</div>

		<div class="add">
			<lable>Address:</lable>
			<?php echo $_POST['address']; ?><br><br>
		</div>

		<div class="city">
			<lable>City:</lable>
			<?php echo $_POST['city']; ?><br><br>
		</div>

	</div>

</body>
	</html>
	<?php
}
?>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>
lable
{
	color: red;
	margin-left: 20px;
}
.main
{
	height: 100%;
	width: 100%;
	font-size: 30px;
	border: 5px solid black;
	background-color: gray;
	height: auto;
	background-color: #ccccb3;
}
.name
{
	font-size: 50px;
	text-align: center;
	
}
.name img
{
	height: 180px;
	
}
.form-group
{
	background-color:#3333ff;
	margin-right: 1250px;
	margin-left: 20px;
	color: white;
} 
</style>
