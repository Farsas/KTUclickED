<?php
	include("kintamieji.php");
	
	$pasiekimas=$_COOKIE["pasiekimas"];
		
	if($pasiekimas==1){
		$up = "UPDATE apdovanojimai SET 1='1' WHERE vardas='$kintamasis'";
	}
	if($pasiekimas==2){
		$up = "UPDATE apdovanojimai SET 2='1' WHERE vardas='$kintamasis'";
	}
	if($pasiekimas==2){
		$up = "UPDATE apdovanojimai SET 2='1' WHERE vardas='$kintamasis'";
	}
	if($pasiekimas==3){
		$up = "UPDATE apdovanojimai SET 3='1' WHERE vardas='$kintamasis'";
	}
	if($pasiekimas==4){
		$up = "UPDATE apdovanojimai SET 4='1' WHERE vardas='$kintamasis'";
	}
	if($pasiekimas==5){
		$up = "UPDATE apdovanojimai SET 5='1' WHERE vardas='$kintamasis'";
	}
	if($pasiekimas==6){
		$up = "UPDATE apdovanojimai SET 6='1' WHERE vardas='$kintamasis'";
	}

	mysqli_query($con, $up);
?>