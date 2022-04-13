<?php
	include("kintamieji.php");

	$del = "DELETE vartotojas, duomenys FROM vartotojas, duomenys WHERE vartotojas.vardas='$kintamasis' AND duomenys.vardas='$kintamasis';";
	mysqli_query($con, $del);
	
	header('Location: atsijungti.php');
?>