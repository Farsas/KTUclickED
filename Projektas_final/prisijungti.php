<?php
session_start();
include("connection.php");
$uname = $_POST['uname'];
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$iplongas = ip2long($ip);
$ipmd= MD5($iplongas);

$sqlasss = "SELECT * from vartotojas WHERE vardas='$uname' limit 1";
$queryasss = mysqli_query($con, $sqlasss);
$kiekasss = mysqli_num_rows($queryasss);

if($kiekasss>0){
	$dar = mysqli_fetch_assoc($queryasss);
	$tikrinimas = $dar['ip_adresas'];
	if($tikrinimas == $ipmd){
		header("Location: zaidimas.php");
		$_SESSION["VARDAS"] = $dar['vardas'];
		$_SESSION["IP"] = $dar['ip_adresas'];
	}else{
		echo"Vardas uzimtas";
		header("Refresh: 3;url=index.php");
	}
}else{
    $data = date("Y-m-d H:i:s",time());
	$irasytiA = "INSERT INTO vartotojas (vardas,ip_adresas,data) VALUES ('$uname','$ipmd','$data')";
	$irasytiB = "INSERT INTO duomenys (vardas) VALUES ('$uname')";
	$irasytiC = "INSERT INTO apdovanojimai (vardas) VALUES ('$uname')";
	$irasytiD = "INSERT INTO leader (vardas) VALUES ('$uname')";
	mysqli_query($con,$irasytiA);
	mysqli_query($con,$irasytiB);
	mysqli_query($con,$irasytiC);
	mysqli_query($con,$irasytiD);
    $_SESSION["VARDAS"] = "$uname";
	$_SESSION["IP"] = "$ipmd";
	header("Location: zaidimas.php");
}
?>