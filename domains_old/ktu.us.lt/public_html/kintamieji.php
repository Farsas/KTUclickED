<?php
session_start();
$kintamasis = $_SESSION['VARDAS'];

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

?>