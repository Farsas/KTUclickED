<?php
	session_start();
	include 'kintamieji.php';
	$apie = "SELECT * from leader WHERE a1>0 ORDER BY a2 limit 10";
	$duom = mysqli_query($con, $apie);
?>
<HTML>
	<body class="pabaiga">
		<div class="leftAlone">
		<!--<p><div class="diplomas"><h2>Diplomas</h2>
		Tegul kazkas sukuria diploma <?php echo $informacija['vardas'];?>, nes jis,<br>
		<h2>BAIGE UNIVERSITETA!!!!<h2>
		</div></p>-->
		
		<div>
		</div>
		<div style="background-color:red;position: relative;text-align: center;color: rgba(76,73,57,1);font-size:25px;">
		<p style="z-index:3;position: absolute;top: 45%;left: 50%;transform: translate(-50%, -50%);"><?php echo $informacija['vardas'];?></p>
		<img style="position:absolute;width:auto;height:70%;top: 50%;left: 50%;transform: translate(-50%, -50%);" src="foto/_notes/diplomas.png"></img>
		<canvas id="canvas"></canvas>
		</div>
		</div>
		<div class="right">
			<a href="index.php"><img src="<?php echo $logo?>"><br></a>
			<p class="meniu">Meniu</p>
			<div class="btn-group-vertical btn-group-lg baton-grup">
					<a class="<?php echo $btn1?>" href="zaidimas.php">Žaidimas</a>
					<a class="<?php echo $btn1?>" href="apie.php">Apie <?php echo $_SESSION['VARDAS']; ?></a>
					<a class="<?php echo $btn1?>" href="atsijungti.php">Atsijungti</a>
			</div>
			<div class="highlightas">Žaidėjų Skaičius:<br>
			<?php
				print $kiek;
			?>
			</div>
		</div>
	<script scr="script.js"></script>
	</body>
</HTML>
