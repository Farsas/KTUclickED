<?php
	session_start();
	include 'kintamieji.php';
	$apie1 = "SELECT * from leader WHERE a1>0 ORDER BY a2 limit 5";
	$duomlentele1 = mysqli_query($con, $apie1);
	$apie2 = "SELECT * from duomenys ORDER BY tc DESC limit 5";
	$duomlentele2 = mysqli_query($con, $apie2);
	$apie3 = "SELECT * from duomenys ORDER BY score DESC limit 5";
	$duomlentele3 = mysqli_query($con, $apie3);
?>
<HTML>
	<body>
		<div class="leftAlone">
			<p><div class="loginas"><h2>Lyderių lentelė pagal laiką:</h2>
			<table class="lentele">
				<tr>
				<?php if (mysqli_num_rows($duomlentele1) != 0){ ?>
					<th>Vieta</th>
					<th>Vardas</th>
					<th>Laikas</th>
				<?php } ?>
				</tr>
					<?php
						$nr=1;
						if (mysqli_num_rows($duomlentele1) > 0) {
							while($row = mysqli_fetch_assoc($duomlentele1)) {
								?><tr><td><?php 
									if($nr==1){?>
										<img src="foto/gold.png" alt="Gold"/><?php
									} 
									elseif($nr==2){?>
										<img src="foto/silver.png" alt="Silver"/><?php
									} 
									elseif($nr==3){?>
										<img src="foto/bronze.png" alt="Bronze"/><?php
									} 
									else{
										echo "$nr. ";
									}
								?> </td>
								<td><?php echo $row['vardas'];?></td>
								<td><?php echo $row['a3'];?></td>
								</tr><?php
								$nr++;
							}
						} else {
						  echo "Duomenų nėra";
						}
					?>
				</tr>
			</table>
			</div></p>
			
			<p><div class="loginas"><h2>Lyderių lentelė pagal paspaudimus:</h2>
			<table class="lentele">
				<tr>
					<?php if (mysqli_num_rows($duomlentele1) != 0){ ?>
					<th>Vieta</th>
					<th>Vardas</th>
					<th>Laikas</th>
				<?php } ?>
				</tr>
					<?php
						$nr=1;
						if (mysqli_num_rows($duomlentele2) > 0) {
							while($row = mysqli_fetch_assoc($duomlentele2)) {
								?><tr><td><?php 
									if($nr==1){?>
										<img src="foto/gold.png" alt="Gold"/><?php
									} 
									elseif($nr==2){?>
										<img src="foto/silver.png" alt="Silver"/><?php
									} 
									elseif($nr==3){?>
										<img src="foto/bronze.png" alt="Bronze"/><?php
									} 
									else{
										echo "$nr. ";
									}
								?> </td>
								<td><?php echo $row['vardas'];?></td>
								<td><?php echo $row['tc'];?></td>
								</tr><?php
								$nr++;
							}
						} else {
						  echo "Duomenų nėra";
						}
					?>
				</tr>
			</table>
			</div></p>

			<p><div class="loginas"><h2>Lyderių lentelė pagal kompetencijas:</h2>
			<table class="lentele">
				<tr>
					<?php if (mysqli_num_rows($duomlentele1) != 0){ ?>
					<th>Vieta</th>
					<th>Vardas</th>
					<th>Laikas</th>
				<?php } ?>
				</tr>
					<?php
						$nr=1;
						if (mysqli_num_rows($duomlentele3) > 0) {
							while($row = mysqli_fetch_assoc($duomlentele3)) {
								?><tr><td><?php 
									if($nr==1){?>
										<img src="foto/gold.png" alt="Gold"/><?php
									} 
									elseif($nr==2){?>
										<img src="foto/silver.png" alt="Silver"/><?php
									} 
									elseif($nr==3){?>
										<img src="foto/bronze.png" alt="Bronze"/><?php
									} 
									else{
										echo "$nr. ";
									}
								?> </td>
								<td><?php echo $row['vardas'];?></td>
								<td><?php echo $row['score'];?></td>
								</tr><?php
								$nr++;
							}
						} else {
						  echo "Duomenų nėra";
						}
					?>
				</tr>
			</table>
			</div></p>
		</div>
		<div class="right">
			<a href="index.php"><img src="<?php echo $logo?>"><br></a>
			<p class="meniu">Meniu</p>
			<div class="btn-group-vertical btn-group-lg baton-grup">
				<?php if(empty($kintamasis)){ ?>
					<a class="<?php echo $btn1?>" href="index.php">Prisijungti</a>
					<!--<a class="btn btn-outline-dark" href="informacija.php">Informacija</a>-->
				<?php } else {?>
					<a class="<?php echo $btn1?>" href="zaidimas.php">Žaidimas</a>
					<a class="<?php echo $btn1?>" href="apie.php">Apie <?php echo $_SESSION['VARDAS']; ?></a>
					<a class="<?php echo $btn1?>" href="atsijungti.php">Atsijungti</a>
				<?php }?>
			</div>
			<div class="highlightas">Žaidėjų Skaičius:<br>
			<?php
				print $kiek;
			?>
			</div>
		</div>
	</body>
</HTML>
