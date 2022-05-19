<?php
session_start();
include("kintamieji.php");

if($tinka==false){
    header("Location: index.php");
}else{
?>	
<html>
<body>
	<div class="leftAlone">
		<p><div class="loginas"><h3>Admin puslapis:</h3>
			<div class="btn-group-vertical btn-group-lg baton-grup">
				<a class="<?php echo $btn1?>" href="delall.php">Ištrinti visus vartotojus</a>
			</div>
		</div></p>
	</div>
	<div class="right">
		<a href="index.php">
		<img src="foto/logo.png"><br></a>
		<p class="meniu">Meniu</p>
		<div class="btn-group-vertical btn-group-lg baton-grup">
			<a class="<?php echo $btn1?>" href="apie.php">Apie <?php echo $_SESSION['VARDAS']; ?></a>
			<a class="<?php echo $btn1?>" href="zaidimas.php">Žaidimas</a>
			<a class="<?php echo $btn1?>" href="atsijungti.php">Atsijungti</a>
		</div>
	</div>	
	
	<script>
	</script>
</body>
</html>
<?php	
}
?>