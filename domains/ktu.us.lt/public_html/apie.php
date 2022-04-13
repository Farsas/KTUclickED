<?php
session_start();
include("kintamieji.php");
if(empty($kintamasis)){
    header("Location: index.php");
}
?>
<HTML>
	<head>
		<title>KTUclickED</title>
		<link rel="stylesheet" href="mystyle.css">
                <link rel="icon" href="foto/logoicon.png">
                <meta charset="UTF-8">
	</head>
	
	<body>
                <div class="leftAlone">
                <p><div class="loginas"><h3>Informacija apie <?php echo $informacija['vardas']; ?>:</h3>
                Prisijungta: <?php echo $informacija['data']; ?><br>
				Kompetencijos: <?php echo $duom['score']; ?><br>			
                </div></p>
                </div>
		
		<div class="right">
                <a href="index.php">
	             <img src="foto/logo.png"><br></a>
                <p id="meniu"> 
                Meniu
                </p>
                <ul>
                     <li><a href="zaidimas.php">Žaidimas</a></li>
                     <li><a href="atsijungti.php">Atsijungti</a></li>
					 <li><a class="btn btn-outline-dark" href="delete.php">Ištrinti vartotoją</a></li>
                </ul>  
                <!--<div class="highlightas">Žaidėjų Skaičius:<br>
                <?php //print $kiek;?>
                </div>-->
				<div class="highlightas">Laikas:<br>
					<span id="hourNulis"></span><span id="hour">00</span>:
					<span id="minNulis"></span><span id="min">00</span>:
					<span id="secNulis"></span><span id="sec">00</span><br>
                </div>
		</div>	

		<script>
			var sec = 0;
			var min = 0;
			var hour = 0;
			
			var secNulis = "0";
			var minNulis = "0";
			var hourNulis = "0";
			
			var zaidzia = true;
			
			setInterval(function() {
				if (zaidzia){
					sec = sec + 1;
					if (sec < 10){
						secNulis = "0";
					}else
						secNulis = "";
					if (sec == 60){
						min = min + 1;
						sec = 0;
						if (min < 10){
							minNulis = "0";
						}else
							minNulis = "";
						secNulis = "0";
					}
					if (min == 60){
						hour = hour + 1;
						min = 0;
						if (min < 10){
							hourNulis = "0";
						}else
							hourNulis = "";
						minNulis = "0";
					}
					document.getElementById("sec").innerHTML = sec;
					document.getElementById("min").innerHTML = min;
					document.getElementById("hour").innerHTML = hour;
					
					document.getElementById("secNulis").innerHTML = secNulis;
					document.getElementById("minNulis").innerHTML = minNulis;
					document.getElementById("hourNulis").innerHTML = hourNulis;
				}
				}, 1000);
		</script>

	</body>
</HTML>
