<?php
	session_start();
	include 'kintamieji.php';
	if(empty($kintamasis)){
		header("Location: index.php");
	}
?>
<HTML>
	<body>
	
		<?php if($informacija['kursas']==1){ ?>
			<div class="leftAlone">
			<p><div class="loginas"><h2>Baigti 1 kursui reikia:</h2>
				&#8226;Paspaudimų:<?php echo $duom['tc'];?>/<?php echo $reikalavimai['1kpasp'];?><br>
				&#8226;Kompetencijų:<?php echo $duom['score'];?>/<?php echo $reikalavimai['1kkomp'];?><br>
					<?php 
						if($duom['tc']>=$reikalavimai['1kpasp'] && $duom['score']>=$reikalavimai['1kkomp']) { ?>
							<a class="btn btn-success btn-primary btn-lg active" href="tikrinti.php">Baigti kursą</a>
						<?php } else {?>
							<a class="btn btn-danger btn-primary btn-lg disabled" href="">Baigti kursą</a>
						<?php } ?>
			</div></p>
		</div><?php } ?>
		
		<?php if($informacija['kursas']==2){ ?>
			<div class="leftAlone">
			<p><div class="loginas"><h2>Baigti 2 kursui reikia:</h2>
				&#8226;Paspaudimų:<?php echo $duom['tc'];?>/<?php echo $reikalavimai['2kpasp'];?><br>
				&#8226;Kompetencijų:<?php echo $duom['score'];?>/<?php echo $reikalavimai['2kkomp'];?><br>
					<?php 
						if($duom['tc']>=$reikalavimai['2kpasp'] && $duom['score']>=$reikalavimai['2kkomp']) { ?>
							<a class="btn btn-success btn-primary btn-lg active" href="tikrinti.php">Baigti kursą</a>
						<?php } else {?>
							<a class="btn btn-danger btn-primary btn-lg disabled" href="">Baigti kursą</a>
						<?php } ?>
			</div></p>
		</div><?php } ?>
		
		<?php if($informacija['kursas']==3){ ?>
			<div class="leftAlone">
			<p><div class="loginas"><h2>Baigti 3 kursui reikia:</h2>
				&#8226;Paspaudimų:<?php echo $duom['tc'];?>/<?php echo $reikalavimai['3kpasp'];?><br>
				&#8226;Kompetencijų:<?php echo $duom['score'];?>/<?php echo $reikalavimai['3kkomp'];?><br>
					<?php 
						if($duom['tc']>=$reikalavimai['3kpasp'] && $duom['score']>=$reikalavimai['3kkomp']) { ?>
							<a class="btn btn-success btn-primary btn-lg active" href="tikrinti.php">Baigti kursą</a>
						<?php } else {?>
							<a class="btn btn-danger btn-primary btn-lg disabled" href="">Baigti kursą</a>
						<?php } ?>
			</div></p>
		</div><?php } ?>
		
		<?php if($informacija['kursas']==4){ ?>
			<div class="leftAlone">
			<p><div class="loginas"><h2>Baigti universitetui reikia:</h2>
				&#8226;Paspaudimų:<?php echo $duom['tc'];?>/<?php echo $reikalavimai['4kpasp'];?><br>
				&#8226;Kompetencijų:<?php echo $duom['score'];?>/<?php echo $reikalavimai['4kkomp'];?><br>
				&#8226;Gauti apdovanojimų:<?php echo $ach['turi'];?>/<?php echo $ach['kiekis'];?><br>
				<?php 
					if($duom['tc']>=$reikalavimai['4kpasp'] && $duom['score']>=$reikalavimai['4kkomp'] && $ach['turi']==$ach['kiekis']) { ?>
						<a class="btn btn-success btn-primary btn-lg active" href="tikrinti.php">Baigti kursą</a>
					<?php } else {?>
						<a class="btn btn-danger btn-primary btn-lg disabled" href="">Baigti kursą</a>
					<?php } ?>
			</div></p>
		</div><?php } ?>
		
			<?php if($informacija['kursas']==5){ ?>
			<div class="leftAlone">
			<p><div class="loginas"><h2>Tu jau baigęs universitetą!</h2>
				<a class="btn btn-success btn-primary btn-lg active" href="zaidimas.php">Atgal į žaidimą</a>
			</div></p>
		</div><?php } ?>
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
	</body>
</HTML>