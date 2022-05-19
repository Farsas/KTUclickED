<?php
session_start();
$kintamasis = $_SESSION['VARDAS'];
$ip = $_SESSION['IP'];

include("connection.php");

//------Pasiiemimas is MYSQL----------------------------------------

$apie = "SELECT * from vartotojas WHERE vardas='$kintamasis' limit 1";
$duome = mysqli_query($con, $apie);
$informacija = mysqli_fetch_assoc($duome);

$duomm = "SELECT * from duomenys WHERE vardas='$kintamasis' limit 1";
$duomq = mysqli_query($con, $duomm);
$duom = mysqli_fetch_assoc($duomq);

$leader3 = "SELECT * from leader WHERE vardas='$kintamasis' limit 1";
$leader2 = mysqli_query($con, $leader3);
$leader = mysqli_fetch_assoc($leader2);

$ach3 = "SELECT * from apdovanojimai WHERE vardas='$kintamasis' limit 1";
$ach2 = mysqli_query($con, $ach3);
$ach = mysqli_fetch_assoc($ach2);

$reikal1 = "SELECT * from reikalavimai limit 1";
$reikal2 = mysqli_query($con, $reikal1);
$reikalavimai = mysqli_fetch_assoc($reikal2);
//-----------------------------------------------------------------------
$sql = "SELECT * from vartotojas";
$query = mysqli_query($con, $sql);
$kiek = mysqli_num_rows($query);

$tinka=false;
if($kintamasis=="Motiejus" && $ip=="7a572de1910ab01a63ce48cd69cab171"){
$tinka=true;
}

if($kintamasis=="Farsas" && $ip=="6e3cf3dbc19a1edc16185b0fd8d58cd6"){
$tinka=true;
}

if($kintamasis=="admin"){
$tinka=true;
}
//--------------STILIUS----------------------------------------------
$stilius = $informacija['stilius'];
if($informacija['stilius'] == 0){
	
	$btn1 = "btn btn-outline-dark";
	$clickMygtukas = "foto/ktumygtukas.png";
	$logo = "foto/logo.png";
	
} else if($informacija['stilius'] == 1){
	
	$btn1 = "btn btn-dark btn-outline-light";
	$clickMygtukas = "foto/ktuovalas.png";
	$logo = "foto/clicked2.png";
	
}
//-------------------------------------------------------------------
?>
<html>
<head>
		<title>KTUclickED</title>
		<link rel="icon" href="foto/logoicon.png">
		<?php
			if($informacija['stilius'] == 0){ 
		?>
				<link rel="stylesheet" href="mystyle.css">
		<?php
			} elseif($informacija['stilius'] == 1){
		?>
				<link rel="stylesheet" href="dark.css">
		<?php
			}
		?>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<meta charset="UTF-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="script.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<link href="tutorial.css" rel="stylesheet">
		<script src="tutorial.js"></script>
	</head>
	<body>
	<script>
				(function ($) {
			$.fn.disableSelection = function () {
				return this.each(function () {
					if (typeof this.onselectstart != 'undefined') {
						this.onselectstart = function() { return false; };
					} else if (typeof this.style.MozUserSelect != 'undefined') {
						this.style.MozUserSelect = 'none';
					} else {
						this.onmousedown = function() { return false; };
					}
				});
			};
			})(jQuery);
			$(document).ready(function() {
				$('*').disableSelection();
			});
	</script>
	</body>
</html>