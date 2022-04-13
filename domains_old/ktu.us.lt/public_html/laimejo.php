<?php
	include("kintamieji.php");
	$D=0;
	$H=0;
	$M=0;
	$data2 = time();
	$data1 = strtotime($informacija['data']);
	$data = $data2- $data1;
	$dataInt = $data;
	while ($data >= 60*60*24){
		if ($data >= 60*60*24){
			$D = $D + 1;
			$data = $data - 60*60*24;
		}
	}
	
	while ($data >= 60*60){
		if ($data >= 60*60){
			$H = $H + 1;
			$data = $data - 60*60;
		}
	}
	
	while ($data >= 60){
		if ($data >= 60){
			$M = $M + 1;
			$data = $data - 60;
		}
	}
	
	
	$datasql="$D $H:$M:$data";
	$upas = "UPDATE vartotojas SET data1='$dataInt',data11='$datasql' WHERE vardas='$kintamasis' limit 1";
	mysqli_query($con, $upas);
?>