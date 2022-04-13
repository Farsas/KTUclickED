<?php
	include("kintamieji.php");

	$del1 = "DELETE vartotojas FROM vartotojas WHERE vardas='$kintamasis'";
	$del2 = "DELETE duomenys FROM duomenys WHERE vardas='$kintamasis'";
	$del3 = "DELETE apdovanojimai FROM apdovanojimai WHERE vardas='$kintamasis'";
	mysqli_query($con, $del1);
	mysqli_query($con, $del2);
	mysqli_query($con, $del3);
	
	header('Location: atsijungti.php');
?>