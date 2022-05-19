<?php
	include("kintamieji.php");
	$true = "true";
	
	$pasiekimas=$_COOKIE["pasiekimas"];
	
	if($pasiekimas==0){
		$up = "UPDATE apdovanojimai SET a0='$true',turi=turi+1 WHERE vardas='$kintamasis'";
	}
	if($pasiekimas==1){
		$up = "UPDATE apdovanojimai SET a1='$true',turi=turi+1 WHERE vardas='$kintamasis'";
	}
	if($pasiekimas==2){
		$up = "UPDATE apdovanojimai SET a2='$true',turi=turi+1 WHERE vardas='$kintamasis'";
	}
	if($pasiekimas==3){
		$up = "UPDATE apdovanojimai SET a3='$true',turi=turi+1 WHERE vardas='$kintamasis'";
	}
	if($pasiekimas==4){
		$up = "UPDATE apdovanojimai SET a4='$true',turi=turi+1 WHERE vardas='$kintamasis'";
	}
	if($pasiekimas==5){
		$up = "UPDATE apdovanojimai SET a5='$true',turi=turi+1 WHERE vardas='$kintamasis'";
	}
	mysqli_query($con, $up);
?>