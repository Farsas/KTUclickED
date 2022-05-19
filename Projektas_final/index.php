<?php
	session_start();
	include("kintamieji.php");
	if(empty($kintamasis)){
	}else{
		header("Location: zaidimas.php");
	}
?>
<HTML>
	<body>
        <div class="leftAlone">
        <p><div class="loginas"><h3>Sveiki Atvykę!!!</h3>
        <form action="prisijungti.php" method="post">
		<label for="uname"><b>Slapyvardis</b></label>
		<input type="text" placeholder="Įveskite slapyvardį" name="uname" required>
		<button type="submit">Prisijungti</button>
		</form>
		</div></p>
		</div>
		
		<div class="right">
			<img src="foto/logo.png" /><br>
			<p class="meniu">Meniu</p>
			<div class="btn-group-vertical btn-group-lg baton-grup">                   
				<a class="<?php echo $btn1?>" href="lentele.php">Lentele</a>
			</div>
            <div class="highlightas">Žaidėjų Skaičius:<br>
            <?php
				print $kiek;
            ?>
            </div>
		</div>	
	</body>
</HTML>