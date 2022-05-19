<?php
session_start();
$dbhost = "localhost";
$dbuser = "ktu_clicked";
$dbpass = "Slaptazodis123";
$dbname = "ktu_clicked";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Neveikia duomenu bazes!");
}
?>
