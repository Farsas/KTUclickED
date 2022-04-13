<HTML>
	<head>
		<title>KTUclickED</title>
		<link rel="stylesheet" href="mystyle.css">
                <link rel="icon" href="foto/logoicon.png">
                <meta charset="UTF-8">




	</head>
	
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
                                
                                <a class="btn btn-outline-dark" href="apie.php">Apie <?php echo $_SESSION['VARDAS']; ?></a>
                                <a class="btn btn-outline-dark" href="atsijungti.php">Atsijungti</a>
								
                                
		</div>
                <div class="highlightas">Žaidėjų Skaičius:<br>
                <?php
			include("connection.php");
			print $kiek;
                ?>
                </div>
		</div>	


	</body>
</HTML>