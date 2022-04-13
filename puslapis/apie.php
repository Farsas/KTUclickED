<?php
session_start();
include("kintamieji.php");
if(empty($kintamasis)){
    header("Location: index.php");
}
?>
<HTML>
	<body>
		<div class="leftAlone">
		<p><div class="loginas"><h3>Informacija apie <?php echo $informacija['vardas']; ?>:</h3>
		Prisijungta: <?php echo $informacija['data']; ?><br>
		Pražaista laiko: 
		<?php 
		//VALANDOS
		if($informacija['hour']<10){
		echo "0";
		}
		echo $informacija['hour']; 
		?>:
		<?php 
		//MINUTES
		if($informacija['min']<10){
		echo "0";
		}
		echo $informacija['min']; 
		?>:
		<?php
		//SEKUNDES
		if($informacija['sec']<10){
		echo "0";
		}
		echo $informacija['sec']; ?><br>
		Kompetencijos: <?php echo $duom['score']; 
		?><br>			
		</div></p>
		</div>
		
		<div class="right">
			<a href="index.php">
			 <img src="foto/logo.png"><br></a>
			<p class="meniu">Meniu</p>
			<div class="btn-group-vertical btn-group-lg baton-grup">
				<?php if($tinka==true){ ?>
				<a class="btn btn-outline-dark" href="admin.php">Admin Puslapis</a>
				<?php } ?>
				<a class="btn btn-outline-dark" href="zaidimas.php">Žaidimas</a>
				<a class="btn btn-outline-dark" href="atsijungti.php">Atsijungti</a>
				<button class="btn btn-outline-dark" onclick="resetGame()">Ištrinti vartotoja</button> 
			</div>
			<!--<div class="highlightas">Žaidėjų Skaičius:<br>
			<?php //print $kiek;?>
			</div>-->
		</div>	
		<script>
			function resetGame() {
				if (confirm("Ar tikrai norite restartuoi žaidimą?")){
					$.ajax({
					type: "POST",
					url: "delete.php",
					});
					window.location.href = "atsijungti.php";
				}
			}
		</script>
	</body>
</HTML>
