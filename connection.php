<?php
session_start();
$dbhost = "localhost";
$dbuser = "ktu_click";
$dbpass = "Slaptazodis123";
$dbname = "ktu_click";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Neveikia duomenu bazes!");
}
?>
