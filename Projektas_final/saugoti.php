<?php
	include("kintamieji.php");
	$score=$_COOKIE["score"];
	$totalClicks=$_COOKIE["totalClicks"];
	$auto=$_COOKIE["auto"];
	$CP=$_COOKIE["CP"];
	$upgradesActive1=$_COOKIE["upgradesActive1"];
	$upgradesActive2=$_COOKIE["upgradesActive2"];
	$upgradesActive3=$_COOKIE["upgradesActive3"];
	$upgradeActiveCost1=$_COOKIE["upgradeActiveCost1"];
	$upgradeActiveCost2=$_COOKIE["upgradeActiveCost2"];
	$upgradeActiveCost3=$_COOKIE["upgradeActiveCost3"];
	$upgradesPassive1=$_COOKIE["upgradesPassive1"];
	$upgradesPassive2=$_COOKIE["upgradesPassive2"];
	$upgradesPassive3=$_COOKIE["upgradesPassive3"];
	$upgradePassiveCost1=$_COOKIE["upgradePassiveCost1"];
	$upgradePassiveCost2=$_COOKIE["upgradePassiveCost2"];
	$upgradePassiveCost3=$_COOKIE["upgradePassiveCost3"];
	
	$sec=$_COOKIE["sec"];
	$min=$_COOKIE["min"];
	$hour=$_COOKIE["hour"];
	
	$up = "UPDATE duomenys SET score='$score',
							   auto='$auto',
							   tc='$totalClicks',
							   clickingPower='$CP',
							   upPassive1='$upgradesPassive1',
							   upPassive2='$upgradesPassive2',
							   upPassive3='$upgradesPassive3',
							   upPassiveC1='$upgradePassiveCost1',
							   upPassiveC2='$upgradePassiveCost2',
							   upPassiveC3='$upgradePassiveCost3',
							   upActive1='$upgradesActive1',
							   upActive2='$upgradesActive2',
							   upActive3='$upgradesActive3',
							   upActiveC1='$upgradeActiveCost1',
							   upActiveC2='$upgradeActiveCost2',
							   upActiveC3='$upgradeActiveCost3'
			WHERE vardas='$kintamasis'";
			
	$upvart="UPDATE vartotojas SET  sec='$sec',
									min='$min',
									hour='$hour'
			WHERE vardas='$kintamasis'";
	mysqli_query($con, $up);
	mysqli_query($con, $upvart);
?>