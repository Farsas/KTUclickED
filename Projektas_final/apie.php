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
		Kursas:<?php
		if($informacija['kursas']!=5)
		{
			echo $informacija['kursas'];
		} else{
			echo "Baigęs universitetą";
		}
		?><br>
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
		Kompetencijos: <?php echo $duom['score']; ?><br>	
		Paspaudimų: <?php echo $duom['tc']; ?><br>
		Dark mode: 
		<label class="switch">
			<input type="checkbox" id="stilius" onclick="isChecked()">
			<span class="slider round"></span>
		</label>
		</div></p>
		</div>
		
		<div class="right">
			<a href="index.php">
			 <img src="<?php echo $logo?>"><br></a>
			<p class="meniu">Meniu</p>
			<div class="btn-group-vertical btn-group-lg baton-grup">
				<?php if($tinka==true){ ?>
				<a class="<?php echo $btn1?>" href="admin.php">Admin Puslapis</a>
				<?php } ?>
				<a class="<?php echo $btn1?>" href="zaidimas.php">Žaidimas</a>
				<?php if($informacija['kursas']!=5){ ?>
				<a class="<?php echo $btn1?>" href="universitetas.php">Egzaminai</a>
				<?php } else { ?>
				<a class="<?php echo $btn1?>" href="diplomas.php">Diplomas</a>
				<?php }?>
				<a class="<?php echo $btn1?>" href="atsijungti.php">Atsijungti</a>
				<button class="btn btn-danger" onclick="resetGame()">Ištrinti vartotoją</button> 
			</div>
			<div class="highlightas">Žaidėjų Skaičius:<br>
			<?php print $kiek;?>
			</div>
		</div>	
		<script>
			let darkas=1;
			
			window.onload = function() {
				darkas = <?php echo $informacija['stilius'];?>;
				if(darkas==1){
					document.getElementById("stilius").checked = true;
				} else{
					document.getElementById("stilius").checked = false;
				}
			}
			
			function isChecked() {
				var expires = "";
				var date = new Date();
				date.setTime(date.getTime() + 1000);
				expires = "; expires=" + date.toUTCString();
				if(document.getElementById("stilius").checked){
					document.cookie = "dark=1"  + expires + "; path=/";
				} else{
					document.cookie = "dark="  + expires + "; path=/";
				}
				$.ajax({
					type: "POST",
					url: "dark.php",
				});
				window.location.reload();
			}
			
			function sleep(ms) {
				return new Promise(resolve => setTimeout(resolve, ms));
			}
		
			function resetGame() {
				Swal.fire({
					  title: 'Ar jūs tikri?',
					  text: "Negalėsite sugrįžti atgal",
					  icon: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  confirmButtonText: 'Taip, ištrinkite!',
					  cancelButtonText: 'Atšaukti'
					}).then((result) => {
						if (result.isConfirmed) {							
							$.ajax({
							type: "POST",
							url: "delete.php",
							});
							//sleep(10000);
							//location.reload();
										setInterval(function() {
							window.location.href = "atsijungti.php";
							}	, 1000);
					}
				})
			}

		</script>
	</body>
</HTML>
