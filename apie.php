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
                     <ul><li><a href="zaidimas.php">Žaidimas</a></li>
                     <li><a href="atsijungti.php">Atsijungti</a></li>
                </ul>  
                <!--<div class="highlightas">Žaidėjų Skaičius:<br>
                <?php //print $kiek;?>
                </div>-->
		</div>	


	</body>
</HTML>
