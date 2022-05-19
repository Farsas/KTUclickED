<?php
session_start();
include("kintamieji.php");
if(empty($kintamasis)){
    header("Location: index.php");
}
$uname=$_SESSION['VARDAS'];
?>
<html>
	<body>
	
		<div class="left">
			<p class="upgradeNamesTop">Patobulinimai</p>
			<div class="shop-box container">
			<div class="row">
			<table class="shop col" onclick="buyUpgradeActive1()">
				<tr>
					<td class="image" ><img draggable="false" src="foto/vape.png" /></td>
					<td class="nameAndCost">
						<p>Veipas</p>
						<p><span id="upgradeActiveCost1">10</span> Kompetencijų</p>
					</td>
					<td class="amount"><span id="upgradesActive1">0</span></td>
				</tr>
			</table>
			
			<table class="shop col" onclick="buyUpgradeActive2()">
				<tr>
					<td class="image"><img draggable="false" src="foto/energy.png" /></td>
					<td class="nameAndCost">
						<p>RedBull</p>
						<p><span id="upgradeActiveCost2">100</span> Kompetencijų</p>
					</td>
					<td class="amount"><span id="upgradesActive2">0</span></td>
				</tr>
			</table>
			
			<table class="shop col" onclick="buyUpgradeActive3()">
				<tr>
					<td class="image"><img draggable="false" src="foto/kebab.png" /></td>
					<td class="nameAndCost">
						<p>Kebabas</p>
						<p><span id="upgradeActiveCost3">1000</span> Kompetencijų</p>
					</td>
					<td class="amount"><span id="upgradesActive3">0</span></td>
				</tr>
			</table>
				</div>
			</div>
			<p class="upgradeNames">Automatiniai kompetencijų generatoriai</p>
			<div class="container shop-box ">
			<div class="row">
			<table class="shop col" onclick="buyUpgradePassive1()">
				<tr>
					<td class="image"><img draggable="false" src="foto/mentorius.png" /></td>
					<td class="nameAndCost">
						<p>Mentorius</p>
						<p><span id="upgradePassiveCost1">20</span> Kompetencijų</p>
					</td>
					<td class="amount"><span id="upgradesPassive1">0</span></td>
				</tr>
			</table>
			
			<table class="shop col" onclick="buyUpgradePassive2()">
				<tr>
					<td class="image"><img draggable="false" src="foto/tutorius.png" /></td>
					<td class="nameAndCost">
						<p>Tutorius</p>
						<p><span id="upgradePassiveCost2">200</span> Kompetencijų</p>
					</td>
					<td class="amount"><span id="upgradesPassive2">0</span></td>
				</tr>
			</table>
			
			<table class="shop col" onclick="buyUpgradePassive3()">
				<tr>
					<td class="image"><img draggable="false" src="foto/infosa.png" /></td>
					<td class="nameAndCost">
						<p>Atstovybė</p>
						<p><span id="upgradePassiveCost3">2000</span> Kompetencijų</p>
					</td>
					<td class="amount"><span id="upgradesPassive3">0</span></td>
				</tr>
			</table>
			</div>
			</div>
		</div>
		
		<div class="right">
			<img src="<?php echo $logo?>" /><br>
			<p class="meniu">Meniu</p>
		    <div class="btn-group-vertical btn-group-lg baton-grup">
			<a class="<?php echo $btn1?>" href="apie.php">Apie <?php echo $_SESSION['VARDAS']; ?></a>
			<a class="<?php echo $btn1?>" href="atsijungti.php">Atsijungti</a>
			<a class="<?php echo $btn1?>" href="lentele.php">Lyderių lentelė</a>             
			</div>
			
			<!-- Button trigger modal -->
			<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
			  Launch static backdrop modal
			</button> -->
			
			<div class="highlightas"><b>Laikas:</b><br>
				<span id="hourNulis"></span><span id="hour">00</span>:<span id="minNulis"></span><span id="min">00</span>:<span id="secNulis"></span><span id="sec">00</span><br>
            </div>
			
			<!--<div class="highlightas">Žaidėjų Skaičius:<br>
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
					<span id="clicker" class="clicker" >
					
					<img draggable="false" src="<?php echo $clickMygtukas?>" />
				
					</span>
			</div>
			
			
			<div class="modelDialogue">
			
			</div>

			<!-- Modal -->
			<!--<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body">
					...
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Understood</button>
				  </div>
				</div>
			  </div>
			</div>-->
		
									
		<script type= "text/javascript">
			//Duoda Uz Viena Nupirkta:
			var d1=1;
			var d2=2;
			var d3=3;
			var d4=1;
			var d5=2;
			var d6=3;
			
			//Sunkumas zaidimo(min: 1.1x)(Kuo didesnis tuo sunkiau bus)
			var sunkumas=1.2;
			
			var t1 = 0;
			var t2 = 0;
			var t3 = 0;
			var t4 = 0;
			var t5 = 0;
			var t6 = 0;

			var score;
			var clickingPower;
			var auto;
			var totalClicks = 0;
			var upgradeActiveCost1;
			var upgradesActive1;
			var upgradeActiveCost2;
			var upgradesActive2;
			var upgradeActiveCost3;
			var upgradesActive3;
			var upgradePassiveCost1;
			var upgradesPassive1;
			var upgradePassiveCost2;
			var upgradesPassive2;
			var upgradePassiveCost3;
			var upgradesPassive3;
			var sec = 0;
			var min = 0;
			var hour = 0;
			
			var secNulis = "0";
			var minNulis = "0";
			var hourNulis = "0";
			
			var zaidzia = true;

			var achievement = {
				name: [
					"Kaminas",
					"Kukli pradžia",
					"Spaudytojas"
				],
				description: [
					"Nusipirkote 10-tą vape'ą",
					"Surinkote 10 kompetencijų",
					"Paspaudėte pagrindinį mygtuką pirmą kartą"
				],
				image: [
					"vape.png",
					"comp.png",
					"ktumygtukas.png"
				],
				requirement: [
					10,
					10,
					1
				],
				awarded: [
				<?php echo $ach['a0'];?>,
				<?php echo $ach['a1'];?>, 
				<?php echo $ach['a2'];?>
				],
				
				earn: function(index) {
					this.awarded[index] = true;
					setCookie("pasiekimas",index);
					getAch();
				}
			};

			function getAch(){
				$.ajax({
					type: "POST",
					url: "pasiekimai.php",
					});
			}
			
			function buyUpgradeActive1(){
				if (score >= upgradeActiveCost1){
					score = score - upgradeActiveCost1;
					upgradesActive1 = upgradesActive1 + 1;
					if(upgradesActive1 == achievement.requirement[0] && achievement.awarded[0] == false) {
						achievement.earn(0);
						alert(achievement.description[0]);
					}
					
					upgradeActiveCost1 = Math.round(upgradeActiveCost1 * sunkumas);
					clickingPower = clickingPower + d1;
					
					document.getElementById("score").innerHTML = score;
					document.getElementById("upgradeActiveCost1").innerHTML = upgradeActiveCost1;
					document.getElementById("upgradesActive1").innerHTML = upgradesActive1;
				}
			}
			
			function buyUpgradeActive2(){
				if (score >= upgradeActiveCost2){
					score = score - upgradeActiveCost2;
					upgradesActive2 = upgradesActive2 + 1;
					upgradeActiveCost2 = Math.round(upgradeActiveCost2 * sunkumas);
					clickingPower = clickingPower + d2;
					
					document.getElementById("score").innerHTML = score;
					document.getElementById("upgradeActiveCost2").innerHTML = upgradeActiveCost2;
					document.getElementById("upgradesActive2").innerHTML = upgradesActive2;
				}
			}
			
			function buyUpgradeActive3(){
				if (score >= upgradeActiveCost3){
					score = score - upgradeActiveCost3;
					upgradesActive3 = upgradesActive3 + 1;
					upgradeActiveCost3 = Math.round(upgradeActiveCost3 * sunkumas);
					clickingPower = clickingPower + d3;
					
					document.getElementById("score").innerHTML = score;
					document.getElementById("upgradeActiveCost3").innerHTML = upgradeActiveCost3;
					document.getElementById("upgradesActive3").innerHTML = upgradesActive3;
				}
			}
			
			function buyUpgradePassive1(){
				if (score >= upgradePassiveCost1){
					score = score - upgradePassiveCost1;
					upgradesPassive1 = upgradesPassive1 + 1;
					auto = auto + d4;
					upgradePassiveCost1 = Math.round(upgradePassiveCost1 * sunkumas);
					
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
					auto = auto + d5;
					upgradePassiveCost2 = Math.round(upgradePassiveCost2 * sunkumas);
					
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
					auto = auto + d6;
					upgradePassiveCost3 = Math.round(upgradePassiveCost3 * sunkumas);
					
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
				
				saveGame();
				
				document.getElementById("score").innerHTML = score;
				
				if (zaidzia){
					sec = sec + 1;

					if (sec < 10){
						secNulis = "0";
					}else
						secNulis = "";

					if (sec == 60){
						min = min + 1;
						sec = 0;
						secNulis = "0";
					}
					if (min == 60){
						hour = hour + 1;
						min = 0;
						minNulis = "0";
					}

					if (min < 10){
						minNulis = "0";
					}else
						minNulis = "";
					
					if (min < 10){
							hourNulis = "0";
						}else
							hourNulis = "";
					
					document.getElementById("sec").innerHTML = sec;
					document.getElementById("min").innerHTML = min;
					document.getElementById("hour").innerHTML = hour;
					
					document.getElementById("secNulis").innerHTML = secNulis;
					document.getElementById("minNulis").innerHTML = minNulis;
					document.getElementById("hourNulis").innerHTML = hourNulis;
				}
			}, 1000);
			
			function loadGame() {
				totalClicks = <?php echo $duom['tc'];?>;
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
				var perejo1 = <?php echo $leader['a1'];?>;
				if(score >= 10 && perejo1==0){
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
				cookies();
				$.ajax({
					type: "POST",
					url: "laimejo.php",
				});
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
					x: event.pageX - clickerOffset.left + 200 + randomNumber(-10, 10),
					y: event.pageY - clickerOffset.top + 250
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
						
				if(score == achievement.requirement[1] && achievement.awarded[1] == false){
					achievement.earn(1);
					alert(achievement.description[1]);
				}
				
				if(totalClicks == achievement.requirement[2] && achievement.awarded[2] == false){
					achievement.earn(2);
					alert(achievement.description[2]);
				}
				
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
				setCookie("totalClicks",totalClicks);
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
				
		</script>
	</body>
</html>
