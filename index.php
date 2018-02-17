<!-- POŁĄCZENIE Z BAZĄ -->
<?php include("connect.php"); ?>
<!-- POBIERANIE DANYCH Z BAZY -->
<?php $res = get_page("*", "main", $conn); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include("head.php"); ?>
<body>
	<!-- ZAŁĄCZENIE PASKA NAWIGACYJNEGO -->
	<?php include("navbar.php"); ?>
	<div id="home" class="bgimg-1">
		<div>
			<div style="display: table; height: 600px; overflow: hidden;">
				<div style="display: table-cell; vertical-align: middle; padding-left: 50px;">
					<!--NAZWA FIRMY-->
					<div class="text-logo">
						<b><?php echo $res["c_name"]; ?></b>
	                </div>
					  <!--MOTTO FIRMY-->
	                <div class="text-motto">
						<?php echo $res["c_motto"]; ?>
	                </div>
				</div>
			</div>
		</div>
	</div>
	<section id="about">
		<div class="container space">
			<h1>O NAS</h1>
			<hr>
			<!--OPIS FIRMY-->
			<div>
				<?php echo $res["c_description"]; ?>
			</div>
		</div>
		<div class="bgimg-2">
			<div class="container space">
				<h1 class="h-light">NASZ ZESPÓŁ</h1>
				<hr color="white">
				<div class="row">
					<!--
					<div class="col team">
						<img src="img/avatar.png" class="team-img">
						<div>
							<b>IMIĘ I NAZWISKO</b>
							<hr>
							FUNKCJA<br>
							tel. TELEFON<br>
							e-mail EMAIL
						</div>
					</div>
					-->
					<?php
						$res = get_staff($conn);
						for ($i = 0; $i<$res->num_rows; $i++) {
							$row = $res->fetch_assoc();
							echo 	"<div class=\"col team\">".
										"<img src=\"img/staff/".$row["s_photo"]."\" class=\"team-img\">".
										"<div>".
											"<b>".$row["s_name"]."</b>".
											"<hr>".
											$row["s_function"]."<br>".
											"tel. ".$row["s_number"]."<br>".
											"e-mail ".$row["s_email"]."<br>".
										"</div>".
									"</div>";
						}
					?>
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