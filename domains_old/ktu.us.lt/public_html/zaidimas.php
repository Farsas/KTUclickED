<?php
session_start();
include("kintamieji.php");
if(empty($kintamasis)){
    header("Location: index.php");
}
$uname=$_SESSION['VARDAS'];
$sqlass = "SELECT * from vartotojas WHERE vardas='$uname' limit 1";
$queryass = mysqli_query($con, $sqlass);
$info = mysqli_fetch_assoc($queryass);

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
	
		<div class="left">
			<p class="upgradeNames">Patobulinimai</p>
			<div class="shop-box container">
			<div class="row">
			<table class="shop col" onclick="buyUpgradeActive1()">
				<tr>
					<td class="image" ><img draggable="false" src="foto/vape.png" /></td>
					<td class="nameAndCost">
						<p>Veipas</p>
						<p><span id="upgradeActiveCost1">10</span> Kompetencij┼│</p>
					</td>
					<td class="amount"><span id="upgradesActive1">0</span></td>
				</tr>
			</table>
			
			<table class="shop col" onclick="buyUpgradeActive2()">
				<tr>
					<td class="image"><img draggable="false" src="foto/energy.png" /></td>
					<td class="nameAndCost">
						<p>RedBull</p>
						<p><span id="upgradeActiveCost2">100</span> Kompetencij┼│</p>
					</td>
					<td class="amount"><span id="upgradesActive2">0</span></td>
				</tr>
			</table>
			
			<table class="shop col" onclick="buyUpgradeActive3()">
				<tr>
					<td class="image"><img draggable="false" src="foto/kebab.png" /></td>
					<td class="nameAndCost">
						<p>Kebabas</p>
						<p><span id="upgradeActiveCost3">1000</span> Kompetencij┼│</p>
					</td>
					<td class="amount"><span id="upgradesActive3">0</span></td>
				</tr>
			</table>
				</div>
			</div>
			<p class="upgradeNames">Automatiniai kompetencij┼│ generatoriai</p>
			<div class="container shop-box ">
			<div class="row">
			<table class="shop col" onclick="buyUpgradePassive1()">
				<tr>
					<td class="image"><img draggable="false" src="foto/mentorius.png" /></td>
					<td class="nameAndCost">
						<p>Mentorius</p>
						<p><span id="upgradePassiveCost1">20</span> Kompetencij┼│</p>
					</td>
					<td class="amount"><span id="upgradesPassive1">0</span></td>
				</tr>
			</table>
			
			<table class="shop col" onclick="buyUpgradePassive2()">
				<tr>
					<td class="image"><img draggable="false" src="foto/tutorius.png" /></td>
					<td class="nameAndCost">
						<p>Tutorius</p>
						<p><span id="upgradePassiveCost2">200</span> Kompetencij┼│</p>
					</td>
					<td class="amount"><span id="upgradesPassive2">0</span></td>
				</tr>
			</table>
			
			<table class="shop col" onclick="buyUpgradePassive3()">
				<tr>
					<td class="image"><img draggable="false" src="foto/infosa.png" /></td>
					<td class="nameAndCost">
						<p>Atstovyb─Ś</p>
						<p><span id="upgradePassiveCost3">2000</span> Kompetencij┼│</p>
					</td>
					<td class="amount"><span id="upgradesPassive3">0</span></td>
				</tr>
			</table>
			</div>
			</div>
		</div>
		
		<div class="right">
			<img src="foto/logo.png" /><br>
			<p class="meniu">Meniu</p>
		    <div class="btn-group-vertical btn-group-lg baton-grup">
			<a class="btn btn-outline-dark" href="apie.php">Apie <?php echo $_SESSION['VARDAS']; ?></a>
			<a class="btn btn-outline-dark" href="atsijungti.php">Atsijungti</a>
			<button class="btn btn-outline-dark" onclick="saveGame()">Saugoti</button>                 
			</div>
			
			<div class="highlightas">Laikas:<br>
				<span id="hourNulis"></span><span id="hour">00</span>:
				<span id="minNulis"></span><span id="min">00</span>:
				<span id="secNulis"></span><span id="sec">00</span><br>
            </div>
			
			<!--<div class="highlightas">┼Żaid─Śj┼│ Skai─Źius:<br>
			<?php
				//include("connection.php");
				//print $kiek;
			?>
			</div>-->
		</div>	
			<div id="parallax" class="middle">
				<div class="scoreContainer">
					<span id="score">0</span><br>
					<span id="auto">0</span>/sec.
				</div>
					<div id="clicker"></div>
			</div>
		
									
		<script type= "text/javascript">
			var score = 0;
			var clickingPower = 1;
			var auto = 0;
			var totalClicks = 0;
			
			var upgradeActiveCost1 = 10;
			var upgradesActive1 = 0;
			var upgradeActiveCost2 = 100;
			var upgradesActive2 = 0;
			var upgradeActiveCost3 = 1000;
			var upgradesActive3 = 0;
			var upgradePassiveCost1 = 20;
			var upgradesPassive1 = 0;
			var upgradePassiveCost2 = 200;
			var upgradesPassive2 = 0;
			var upgradePassiveCost3 = 2000;
			var upgradesPassive3 = 0;

			var sec = 0;
			var min = 0;
			var hour = 0;
			
			var secNulis = "0";
			var minNulis = "0";
			var hourNulis = "0";
			
			var zaidzia = true;

			var achievement = {
				name: [
					"Stone fingers",
					"A Humble start",
					"Firgertastic"
				],
				description: [
					"Nupirkti 1 vape",
					"Surinkti 10 kompetencij┼│",
					"Spausti pagrindin─» mygtuk─ů 10 kart┼│"
				],
				image: [
					"vape.png",
					"comp.png",
					"ktumygtukas.png"
				],
				requirement: [
					1,
					10,
					10
				],
				awarded: [false, false, false],
				
				earn: function(index) {
					this.awarded[index] = true;
				}
			};

			
			function buyUpgradeActive1(){
				if (score >= upgradeActiveCost1){
					score = score - upgradeActiveCost1;
					upgradesActive1 = upgradesActive1 + 1;
					if(upgradesActive1 == achievement.requirement[0]) {
						achievement.earn[0];
                                            alert("veikia");
                                        }
					
					upgradeActiveCost1 = Math.round(upgradeActiveCost1 * 1.2);
					clickingPower = clickingPower + 1;
					
					document.getElementById("score").innerHTML = score;
					document.getElementById("upgradeActiveCost1").innerHTML = upgradeActiveCost1;
					document.getElementById("upgradesActive1").innerHTML = upgradesActive1;
				}
			}
			
			function buyUpgradeActive2(){
				if (score >= upgradeActiveCost2){
					score = score - upgradeActiveCost2;
					upgradesActive2 = upgradesActive2 + 1;
					upgradeActiveCost2 = Math.round(upgradeActiveCost2 * 1.2);
					clickingPower = clickingPower + 10;
					
					document.getElementById("score").innerHTML = score;
					document.getElementById("upgradeActiveCost2").innerHTML = upgradeActiveCost2;
					document.getElementById("upgradesActive2").innerHTML = upgradesActive2;
				}
			}
			
			function buyUpgradeActive3(){
				if (score >= upgradeActiveCost3){
					score = score - upgradeActiveCost3;
					upgradesActive3 = upgradesActive3 + 1;
					upgradeActiveCost3 = Math.round(upgradeActiveCost3 * 1.2);
					clickingPower = clickingPower + 10;
					
					document.getElementById("score").innerHTML = score;
					document.getElementById("upgradeActiveCost3").innerHTML = upgradeActiveCost3;
					document.getElementById("upgradesActive3").innerHTML = upgradesActive3;
				}
			}
			
			function buyUpgradePassive1(){
				if (score >= upgradePassiveCost1){
					score = score - upgradePassiveCost1;
					upgradesPassive1 = upgradesPassive1 + 1;
					auto = auto + 1;
					upgradePassiveCost1 = Math.round(upgradePassiveCost1 * 1.2);
					
					document.getElementById("score").innerHTML = score;
					document.getElementById("upgradePassiveCost1").innerHTML = upgradePassiveCost1;
					document.getElementById("upgradesPassive1").innerHTML = upgradesPassive1;
					document.getElementById("auto").innerHTML = auto;
				}
			}
			
			function buyUpgradePassive2(){
				if (score >= upgradePassiveCost2){
					score = score - upgradePassiveCost2;
					upgradesPassive2 = upgradesPassive2 + 1;
					auto = auto + 10;
					upgradePassiveCost2 = Math.round(upgradePassiveCost2 * 1.2);
					
					document.getElementById("score").innerHTML = score;
					document.getElementById("upgradePassiveCost2").innerHTML = upgradePassiveCost2;
					document.getElementById("upgradesPassive2").innerHTML = upgradesPassive2;
					document.getElementById("auto").innerHTML = auto;
				}
			}
			
			function buyUpgradePassive3(){
				if (score >= upgradePassiveCost3){
					score = score - upgradePassiveCost3;
					upgradesPassive3= upgradesPassive3 + 1;
					auto = auto + 100;
					upgradePassiveCost3 = Math.round(upgradePassiveCost3 * 1.2);
					
					document.getElementById("score").innerHTML = score;
					document.getElementById("upgradePassiveCost3").innerHTML = upgradePassiveCost3;
					document.getElementById("upgradesPassive3").innerHTML = upgradesPassive3;
					document.getElementById("auto").innerHTML = auto;
				}
			}
			
			function addToScore(amount){
				score = score + amount;
				document.getElementById("score").innerHTML = score;
			}

			setInterval(function() {
				score = score + auto;
				
				document.getElementById("score").innerHTML = score;
				
				if(totalClicks >= achievement.requirement[2]){
					achievement.earn[2];
				}
				if(score >= achievement.requirement[1]){
					achievement.earn[1];
				}
				
				if (zaidzia){
					sec = sec + 1;
					if (sec < 10){
						secNulis = "0";
					}else
						secNulis = "";
					if (sec == 60){
						min = min + 1;
						sec = 0;
						if (min < 10){
							minNulis = "0";
						}else
							minNulis = "";
						secNulis = "0";
					}
					if (min == 60){
						hour = hour + 1;
						min = 0;
						if (min < 10){
							hourNulis = "0";
						}else
							hourNulis = "";
						minNulis = "0";
					}
					document.getElementById("sec").innerHTML = sec;
					document.getElementById("min").innerHTML = min;
					document.getElementById("hour").innerHTML = hour;
					
					document.getElementById("secNulis").innerHTML = secNulis;
					document.getElementById("minNulis").innerHTML = minNulis;
					document.getElementById("hourNulis").innerHTML = hourNulis;
				}
			}, 1000);
			
			function loadGame() {
				score = <?php echo $duom['score'];?>;
				auto = <?php echo $duom['auto'];?>;
				clickingPower = <?php echo $duom['clickingPower'];?>;
				upgradeActiveCost1 = <?php echo $duom['upActiveC1'];?>;
				upgradesActive1 = <?php echo $duom['upActive1'];?>;
				upgradeActiveCost2 = <?php echo $duom['upActiveC2'];?>;
				upgradesActive2 = <?php echo $duom['upActive2'];?>;
				upgradeActiveCost3 = <?php echo $duom['upActiveC3'];?>;
				upgradesActive3 = <?php echo $duom['upActive3'];?>;
				upgradePassiveCost1 = <?php echo $duom['upPassiveC1'];?>;
				upgradesPassive1 = <?php echo $duom['upPassive1'];?>;
				upgradePassiveCost2 = <?php echo $duom['upPassiveC2'];?>;
				upgradesPassive2 = <?php echo $duom['upPassive2'];?>;
				upgradePassiveCost3 = <?php echo $duom['upPassiveC3'];?>;
				upgradesPassive3 = <?php echo $duom['upPassive3'];?>;
				sec = <?php echo $informacija['sec'];?>;
				min = <?php echo $informacija['min'];?>;
				hour = <?php echo $informacija['hour'];?>;
			}
			
			function check(){
				var perejo1 = <?php echo json_encode($informacija['data1']);?>;
				if(score >= 1000000 && perejo1==null){
					sendWin1();
				}
			}
			
			function saveGame() {
				check();
				cookies();
				$.ajax({
					type: "POST",
					url: "saugoti.php",
				});
			}
			function sendWin1() {
				$.ajax({
					type: "POST",
					url: "laimejo.php",
				});
			}
			
			function resetGame() {
				if (confirm("Ar tikrai norite restartuoi ┼żaidim─ů?")){
					$.ajax({
					type: "POST",
					url: "delete.php",
					});
				}
			}

			function randomNumber(min, max) {
				return Math.round(Math.random() * (max - min) + min);
			}
			
			function fadeOut(element, duration, finalOpacity, callback) {
				let opacity = 1;
				
				let elementFadingInterval = window.setInterval(function() {
					opacity -= 50 / duration;
					
					if (opacity <= finalOpacity) {
						clearInterval(elementFadingInterval);
						callback();
					}
					
					element.style.opacity = opacity;
				}, 50);
			}
			
			function createNumberOnClicker(event) {
				// Grab the clicker
				let clicker = document.getElementById("clicker");
				
				//Grab the position on where the clicker was clicked
				let clickerOffset = clicker.getBoundingClientRect();
				let position = {
					x: event.pageX - clickerOffset.left + randomNumber(-10, 10),
					y: event.pageY - clickerOffset.top
				};
				
				// Create the number
				let element = document.createElement("div");
				element.textContent = "+" + clickingPower;
				element.classList.add("number", "unselectable");
				element.style.left = position.x + "px";
				element.style.top = position.y + "px";
				
				// Add the number to the clicker
				clicker.appendChild(element);
				
				// Slowly rise the element
				let movementInterval = window.setInterval(function() {
					if (typeof element == "undefined" && element == null) clearInterval(movementInterval);
				
					position.y--;
					element.style.top = position.y + "px";
				}, 10);
				
				// Slowly fade out
				fadeOut(element, 3000, 0.5, function() {
					element.remove();
				});
			}
			
			document.getElementById("clicker").addEventListener("click", function(event) {
				totalClicks++;
				addToScore(clickingPower);
				
				createNumberOnClicker(event);
			}, false);
			
			window.onload = function() {
				loadGame();
				document.getElementById("score").innerHTML = score;
				document.getElementById("upgradeActiveCost1").innerHTML = upgradeActiveCost1;
				document.getElementById("upgradesActive1").innerHTML = upgradesActive1;
				document.getElementById("upgradeActiveCost2").innerHTML = upgradeActiveCost2;
				document.getElementById("upgradesActive2").innerHTML = upgradesActive2;
				document.getElementById("upgradeActiveCost3").innerHTML = upgradeActiveCost3;
				document.getElementById("upgradesActive3").innerHTML = upgradesActive3;
				document.getElementById("upgradePassiveCost1").innerHTML = upgradePassiveCost1;
				document.getElementById("upgradesPassive1").innerHTML = upgradesPassive1;
				document.getElementById("upgradePassiveCost2").innerHTML = upgradePassiveCost2;
				document.getElementById("upgradesPassive2").innerHTML = upgradesPassive2;
				document.getElementById("upgradePassiveCost3").innerHTML = upgradePassiveCost3;
				document.getElementById("upgradesPassive3").innerHTML = upgradesPassive3;
				document.getElementById("auto").innerHTML = auto;
			};
			
			function setCookie(name,value) {
				var expires = "";
					var date = new Date();
					date.setTime(date.getTime() + 10000);
					expires = "; expires=" + date.toUTCString();
				document.cookie = name + "=" + (value || "")  + expires + "; path=/";
			}
			
			function cookies(){
				setCookie("vardas","<?php echo $kintamasis;?>");
				setCookie("score",score);
				setCookie("auto",auto);
				setCookie("CP",clickingPower);
				setCookie("upgradesActive1",upgradesActive1);
				setCookie("upgradesActive2",upgradesActive2);
				setCookie("upgradesActive3",upgradesActive3);
				setCookie("upgradeActiveCost1",upgradeActiveCost1);
				setCookie("upgradeActiveCost2",upgradeActiveCost2);
				setCookie("upgradeActiveCost3",upgradeActiveCost3);
				setCookie("upgradesPassive1",upgradesPassive1);
				setCookie("upgradesPassive2",upgradesPassive2);
				setCookie("upgradesPassive3",upgradesPassive3);
				setCookie("upgradePassiveCost1",upgradePassiveCost1);
				setCookie("upgradePassiveCost2",upgradePassiveCost2);
				setCookie("upgradePassiveCost3",upgradePassiveCost3);
				setCookie("sec",sec);
				setCookie("min",min);
				setCookie("hour",hour);
			}
			
			//setInterval(function() {
			//}, 1000);
			
			document.addEventListener("keydown", function(event) {
				if (event.ctrlKey && event.which == 83) {
					event.preventDefault();	
					saveGame();
				}
			}, false);
			
			document.addEventListener("keydown", function(event) {
				if (event.which == 49) {
					buyUpgradeActive1();
				}
			}, false);
			
			document.addEventListener("keydown", function(event) {
				if (event.which == 50) {
					buyUpgradeActive2();
				}
			}, false);
			
			document.addEventListener("keydown", function(event) {
				if (event.which == 51) {
					buyUpgradeActive3();
				}
			}, false);
			
			document.addEventListener("keydown", function(event) {
				if (event.which == 52) {
					buyUpgradePassive1();
				}
			}, false);
			
			document.addEventListener("keydown", function(event) {
				if (event.which == 53) {
					buyUpgradePassive2();
				}
			}, false);
			
			document.addEventListener("keydown", function(event) {
				if (event.which == 54) {
					buyUpgradePassive3();
				}
			}, false);
				
			
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
