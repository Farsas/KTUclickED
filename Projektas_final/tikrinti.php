<?php
	session_start();
	include 'kintamieji.php';
	if(empty($kintamasis)){
		header("Location: index.php");
	}
	
	if($informacija['kursas']==1){ 
		if($duom['tc']>=$reikalavimai['1kpasp'] && $duom['score']>=$reikalavimai['1kkomp']){
			$score = $duom['score']-$reikalavimai['1kkomp'];
			$up1="UPDATE duomenys SET  score='$score' WHERE vardas='$kintamasis'";
			$up2="UPDATE vartotojas SET  kursas='2' WHERE vardas='$kintamasis'";
			mysqli_query($con, $up1);
			mysqli_query($con, $up2);
		}
	}
	if($informacija['kursas']==2){ 
		if($duom['tc']>=$reikalavimai['2kpasp'] && $duom['score']>=$reikalavimai['2kkomp']){
			$score = $duom['score']-$reikalavimai['2kkomp'];
			$up1="UPDATE duomenys SET  score='$score' WHERE vardas='$kintamasis'";
			$up2="UPDATE vartotojas SET  kursas='3' WHERE vardas='$kintamasis'";
			mysqli_query($con, $up1);
			mysqli_query($con, $up2);
		}
	}
	if($informacija['kursas']==3){ 
		if($duom['tc']>=$reikalavimai['3kpasp'] && $duom['score']>=$reikalavimai['3kkomp']){
			$score = $duom['score']-$reikalavimai['3kkomp'];
			$up1="UPDATE duomenys SET  score='$score' WHERE vardas='$kintamasis'";
			$up2="UPDATE vartotojas SET  kursas='4' WHERE vardas='$kintamasis'";
			mysqli_query($con, $up1);
			mysqli_query($con, $up2);
		}
	}
	if($informacija['kursas']==4){ 
		if($duom['tc']>=$reikalavimai['4kpasp'] && $duom['score']>=$reikalavimai['4kkomp'] && $ach['turi']==$ach['kiekis']){
			$score = $duom['score']-$reikalavimai['4kkomp'];
			$up1="UPDATE duomenys SET  score='$score' WHERE vardas='$kintamasis'";
			$up2="UPDATE vartotojas SET  kursas='5' WHERE vardas='$kintamasis'";
			mysqli_query($con, $up1);
			mysqli_query($con, $up2);
			header("Location: diplomas.php");
		}
	}
	
	header("Location: zaidimas.php");
?>