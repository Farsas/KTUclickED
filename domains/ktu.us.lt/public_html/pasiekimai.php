<?php
	include("kintamieji.php");
	
	$pasiekimas=$_COOKIE["pasiekimas"];
		
	if($pasiekimas==1){
		$up = "UPDATE apdovanojimai SET 1='1' WHERE vardas='$kintamasis'";
	}

	mysqli_query($con, $up);
?>