<?php
	include("kintamieji.php");
	$column_count = mysql_num_rows(mysql_query("describe apdovanojimai"));
	$apd="SELECT * FROM apdovanojimai WHERE vardas='$kintamasis' limit 1";
	$apdo = mysqli_query($con, $apd);
	$kiekis= mysql_num_fields($apdo);
	echo $column_count;
	/*$sql = "SELECT * from vartotojas";
	$query = mysqli_query($con, $sql);
	$kiek = mysqli_num_rows($query);*/
?>
