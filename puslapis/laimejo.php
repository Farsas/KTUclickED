<?php
	include("kintamieji.php");
	$sec=$_COOKIE["sec"];
	$min=$_COOKIE["min"];
	$hour=$_COOKIE["hour"];

	if(empty($sec)){
		$sec=0;
	}
	if(empty($min)){
		$min=0;
	}
	if(empty($hour)){
		$hour=0;
	}

	$laikassec=$hour*3600+$min*60+$sec;
	$datasql="$hour:$min:$sec";
	$upas = "UPDATE vartotojas SET data1='1',data11='$laikassec',data111='$datasql' WHERE vardas='$kintamasis' limit 1";
	mysqli_query($con, $upas);
?>