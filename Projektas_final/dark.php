<?php
	include("kintamieji.php");


	$dark=$_COOKIE["dark"];
	if($dark==0){
		$up = "UPDATE vartotojas SET stilius='0' WHERE vardas='$kintamasis'";
	}
	else if($dark==1){
		$up = "UPDATE vartotojas SET stilius='1' WHERE vardas='$kintamasis'";
	}
	mysqli_query($con, $up);
?>