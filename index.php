<!-- POŁĄCZENIE Z BAZĄ -->
<?php include("connect.php"); ?>
<!-- POBIERANIE DANYCH Z BAZY -->
<?php $res = get_page("*", "main", $conn); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include("head.php"); ?>

	<body>
		<?php include("navbar.php"); ?>
		
		<div id="home" class="bgimg-1">
			<div>
				<div style="display: table; height: 600px; overflow: hidden;">
	              <div style="display: table-cell; vertical-align: middle; padding-left: 50px;">
	                <div class="text-logo">
	                  <b>Polcern Sp. z o.o.</b>
	                </div>
	                <div class="text-motto">
	                  tutaj będzie motto firmy
	                </div>
	             </div>
	          </div>
			</div>
		</div>
		<section id="about">
			<div class="container space">
				<h1>O NAS</h1>
				<hr>
				<div>
					Firma Polcern Sp. z o. o. powstała w 1991 roku (...) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="bgimg-2">
				<div class="container space">
				<h1 class="h-light">NASZ ZESPÓŁ</h1>
				<hr color="white">
					<div class="row">
						<div class="col team">
							<img src="img/avatar.png" class="team-img">
							<div>
								<b>Jan Kowalski</b>
								<hr>
								CEO<br>
								tel. 999 888 777<br>
								e-mail jankowalski@polcern.pl

							</div>
						</div>
						<div class="col team">
							<img src="img/avatar.png" class="team-img">
							<div>
								<b>Andrzej Kowalski</b>
								<hr>
								CFO<br>
								tel. 888 777 666<br>
								e-mail andrzejkowalski@polcern.pl

							</div>
						</div>
						<div class="col team">
							<img src="img/avatar.png" class="team-img">
							<div>
								<b>Anna Kowalska</b>
								<hr>
								CIO<br>
								tel. 777 666 555<br>
								e-mail annakowalska@polcern.pl

							</div>
						</div>
						
					</div>
				</div>
			</div>
			
		</section>
		<!-- ZAŁĄCZENIE STOPKI I SKRYPTÓW -->
		<?php include("footer.php"); ?>
		<!-- ZAMKNIĘCIE POŁĄCZENIA Z BAZĄ -->
		<?php mysqli_close($conn); ?>
	</body>
</html>