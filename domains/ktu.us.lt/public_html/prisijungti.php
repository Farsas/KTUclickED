<?php
$uname = $_POST['uname'];
$ip_adresas= $_SERVER['REMOTE_ADDR'];

$conn= new mysqli('localhost','ktu_click','Slaptazodis123','ktu_click');
if($conn->connect_error){
	die('Prisijungimas negalimas: '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into vartotojas(vardas,ip_adresas) 
		values('$uname',INET_ATON('$ip_adresas'))");
	$stmt->bind_param("si",$uname,$ip);
	$stmt->execute();
	echo "Viskas ok";
	$stmt->close();
	$conn->close();
        header("Location: zaidimas.html");
        exit;
}
?>