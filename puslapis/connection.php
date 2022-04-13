<?php
session_start();
$dbhost = "localhost";
$dbuser = "click_game";
$dbpass = "Slaptazodis123";
$dbname = "click_game";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Neveikia duomenu bazes!");
}
?>
