<?php
	include("kintamieji.php");
	echo $kintamasis
	$del = "DELETE vartotojas, duomenys FROM vartotojas, duomenys WHERE vartotojas.vardas='$kintamasis' AND duomenys.vardas='$kintamasis';";
	mysqli_query($con, $del);
	
	
?>