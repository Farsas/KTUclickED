<?php
session_start();
$kintamasis = $_SESSION['VARDAS'];
$ip = $_SESSION['IP'];

include("connection.php");

$apie = "SELECT * from vartotojas WHERE vardas='$kintamasis' limit 1";
$duome = mysqli_query($con, $apie);
$informacija = mysqli_fetch_assoc($duome);

$sql = "SELECT * from vartotojas";
$query = mysqli_query($con, $sql);
$kiek = mysqli_num_rows($query);

$duomm = "SELECT * from duomenys WHERE vardas='$kintamasis' limit 1";
$duomq = mysqli_query($con, $duomm);
$duom = mysqli_fetch_assoc($duomq);

$tinka=false;
if($kintamasis=="Motiejus" && $ip=="7a572de1910ab01a63ce48cd69cab171"){
$tinka=true;
}

?>
<html>
<head>
		<title>KTUclickED</title>
		<link rel="stylesheet" href="mystyle.css">
		<link rel="icon" href="foto/logoicon.png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<meta charset="UTF-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="script.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
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