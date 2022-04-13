<?php
	session_start();
	include 'kintamieji.php';
	$apie = "SELECT * from vartotojas WHERE data1 IS NOT NULL ORDER BY data11 limit 10";
	$duom = mysqli_query($con, $apie);
?>
<HTML>
	<body>
		<div class="leftAlone">
		<p><div class="loginas"><h3>Lyderių lentelė</h3>
			<?php
				$nr=1;
				if (mysqli_num_rows($duom) > 0) {
					while($row = mysqli_fetch_assoc($duom)) {
						echo "$nr. " . $row["vardas"]. " - " . $row["data111"]. "<br>";
						$nr++;
					}
				} else {
				  echo "Nieko nera";
				}
			?>
		</div></p>
		</div>
		<div class="right">
			<a href="index.php"><img src="foto/logo.png"><br></a>
			<p class="meniu">Meniu</p>
			<div class="btn-group-vertical btn-group-lg baton-grup">
				<?php if(empty($kintamasis)){ ?>
					<a class="btn btn-outline-dark" href="index.php">Prisijungti</a>
					<!--<a class="btn btn-outline-dark" href="informacija.php">Informacija</a>-->
				<?php } else {?>
					<a class="btn btn-outline-dark" href="zaidimas.php">Žaidimas</a>
					<a class="btn btn-outline-dark" href="apie.php">Apie <?php echo $_SESSION['VARDAS']; ?></a>
					<a class="btn btn-outline-dark" href="atsijungti.php">Atsijungti</a>
				<?php }?>
			</div>
			<!--<div class="highlightas">Žaidėjų Skaičius:<br>
			<?php
				//include("connection.php");
				//print $kiek;
			?>
			</div>-->
		</div>
	</body>
</HTML>
