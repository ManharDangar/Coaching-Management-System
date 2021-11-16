<?php
error_reporting(0);
include 'admin_profile.php';

$con = mysqli_connect('localhost','root','','form_reg');

$id = $_GET['id'];

	$q = "DELETE FROM `inst_reg` WHERE id = $id ";

	mysqli_query($con, $q);
	header('location:admin_profile.php')

?>