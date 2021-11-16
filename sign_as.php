<html>
<style>
body
{
	 background-color:#ffeecc; 
}
.rd 
{
	border-radius: 5px;
	margin-left: 10px;
	border:2px solid black;
	background-color:#0040ff;
	color: white;
	align-content:center;
}
.button 
{
	margin-top: 150px;
	height: 50px;
	margin-left: 50px;
}
#rdoi1
{

}
</style>
	<body>
		<form action="#">
			<div class="button">
			<input id="rdoi1" type="radio" value="0" name="rdocheck" onClick="form1()"><label class="rd">I am Run an Institute </label>
			<input id="rdoi2" type="radio" value="1" name="rdocheck" onClick="form2()"><label class="rd">I am Individual<br></label><br>
		</div>
		</form>
	</body>
	<script>
		function form1()
		{
			window.location.href="Institute_form.php";
			document.getElementById("rdoi1").checked = true;
		}
		function form2()
		{
			window.location.href="individual_form.php";
			document.getElementById("rdoi2").checked = true;
		}
	</script>
</html>