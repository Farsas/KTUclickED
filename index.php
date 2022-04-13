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
                <a href="index.php">
	             <img src="foto/logo.png"><br></a>
                <p id="meniu"> 
                <b>Meniu</b>
                </p>
                <ul>
                     <li><a href="index.php">Prisijungti</a></li>
                     <li><a href="informacija.php">Informacija</a></li>
                     <li><a href="lentele.php">Lyderiu Lentelė</a></li>
                </ul> 
                <!--<div class="highlightas">Žaidėjų Skaičius:<br>
                <?php
			//include("kintamieji.php");
			//print $kiek;
                ?>
                </div>-->
		</div>		


	</body>
</HTML>