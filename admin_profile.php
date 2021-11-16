
<style>
.mynav
{
  position: fixed;
  width: 100%;
  color:white;
  background-color:#3399ff;
  border:3px solid black;
  box-shadow: 15px 13px 14px black;  
}
.msg
{
	margin-left: 20px;
	font-size: 35px;
}
.main
{
	background-color:#ccccb3;
	margin:50px;
}
.heading
{
	width:auto;
	font-size:40px;
	height: 60px;
	font-family: Arial;
	margin-bottom: 30px;
	color:white;
	background-color:#990000;
  box-shadow:5px 1px 4px 2px black;
}
.heading img
{
	height: 50px;
}
.add
{
	margin-top: 5px;
	font-size: 20px;
	padding: 5px;
	color: white;
	background-color:gray;
	margin-bottom: 50px;
  box-shadow: 15px 13px 14px black;
}
.add img
{
	height: 20px;
}
.course_offer
{
	margin-left: 20px;
	padding-left: 5px;
}
.course_offer img
{
	height: 15px;
}
.owerview
{
 margin-left: 400px; 
}
.contact
{
	margin-left: 400px;
}
.contact img
{
	height: 20px;
	float: left;
}
.mybtn
{
	width: 40px;
	margin-left: 725px;
}

</style>
<div class="mynav">
		<div class="msg">
			DASHBOARD
			<a class="btn btn-danger" href="home.php">Logout</a>
		</div>
</div> <br><br><br><br><br><br><br><br>
<?php
	
	$con = mysqli_connect('localhost','root','','form_reg');

	function showData()
	{
		global $con;

		$query = "SELECT * FROM inst_reg "; 

		$run = mysqli_query($con,$query); 
		?>

		
		<table>
		<?php 
		if ($run == true) 
		{
			while ($data = mysqli_fetch_assoc($run))
			{?>
				
			<?php				 
				?>
					<tr>
						<div class="main">

							<div class="heading">
								<img src="img/institute2.png">
								<?php echo $data['institutename']; ?>
								<div class="mybtn">
								<div>
									<button class="btn btn-danger" ><a href="delete.php?id=<?php echo $data['id']; ?>"class="text-white">Delete</a></button>
								</div><br>
								<div>
									<button class="btn btn-primary"><a href="#"class="text-white">Update</a></button>
								</div>
							</div>
				
								</div>

							
								<div class="course_offer">
									<h3>-Available Courses</h3>
									<img src="img/courses2.png">
									<?php echo $data['class_offer'];?>	
								</div>

								<div class="owerview">
								<h3>Institute Overview</h3>
								<?php echo $data['owerview']; ?>
								</div>
						
								<div class="contact">
								<img src="img/contact-png.png">
								<h3>Contact</h3>
								<img src="img/email.png">
								<?php echo $data['email']; ?>
								<br>
								<img src="img/mobile-png.png">
								<?php echo $data['mobile']; ?>
								</div>

								<div class="add">
								<img src="img/location-pin.png">
								<?php echo $data['address']; ?>
							</div>
					</div>
					</tr>
				<?php
			}
			?></table><?php
		}
		else
		{
				echo "Error";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
		<?php 
		showData();
		 ?>
</body>
</html>