<?php
	include("kintamieji.php");
	if($tinka==false){
		header("Location: index.php");
	}else{
	if($_POST['input'] == "123456789" && $tinka == true) {
		$delvart = "TRUNCATE vartotojas";
		$delduom = "TRUNCATE duomenys";
		$delapdo = "TRUNCATE apdovanojimai";
		$delead = "TRUNCATE leader";
		mysqli_query($con, $delvart);
		mysqli_query($con, $delduom);
		mysqli_query($con, $delapdo);
		mysqli_query($con, $delead);
		header("Location: atsijungti.php");
	}
?>
<html>
<body>
	<div class="leftAlone">
		<p><div class="loginas">
		<h3>Patvirtinimui</h3>
		<h3>Iveskite Nuo 1 iki 9</h3>
			<div class="btn-group-vertical btn-group-lg baton-grup">
				<form method="POST">
				<input type="text" name="input" />
				<input type="submit" value="Patvirtinti" />
				</form>
				<a class="btn btn-outline-dark" href="admin.php">Atgal</a>
			</div>
		</div></p>
	</div>
	<div class="right">
		<a href="index.php">
		<img src="foto/logo.png"><br></a>
		<p class="meniu">Meniu</p>
		<div class="btn-group-vertical btn-group-lg baton-grup">
			<a class="btn btn-outline-dark" href="apie.php">Apie <?php echo $_SESSION['VARDAS']; ?></a>
			<a class="btn btn-outline-dark" href="zaidimas.php">Žaidimas</a>
			<a class="btn btn-outline-dark" href="atsijungti.php">Atsijungti</a>
		</div>
	</div>	
	
	<script>
	
	</script>
</body>
</html>
<?php	
}
?>