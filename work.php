<!-- POŁĄCZENIE Z BAZĄ -->
<?php include("connect.php"); ?>
<!-- POBIERANIE DANYCH Z BAZY -->
<?php
	$res = get_page("*", "work", $conn);
	$res1 = get_all($conn, "job");
	$res2 = get_all($conn, "offers");
?>
<!DOCTYPE html>
<html lang="pl">
<?php include("head.php"); ?>

	<body>
		<?php include("navbar.php"); ?>
		<div class="min-height">
			<div class="container space">
					<h1>KARIERA</h1>
					<hr>
			<p>
				<!--
				<?php echo $res["w_description"]; ?>
				-->
				Chcesz zdobyć wiedzę z zakresu prowadzenia projektów w takich obszarach jak telco, finanse,
				application services oraz przy naszych flagowych produktach? <br>
				Obecnie poszukujemy osób na stanowiska:
			</p>
			<p>
				 <b>
					 <!--
					 <?php
					 for ($i = 0; $i<$res1->num_rows; $i++) {
					 $row = $res1->fetch_assoc();
						 echo "- ".$row["j_name"]." <a href=\"".$row["j_link"]."\">link</a><br>";
					 }
					 ?>
					 -->
				 - Junior HR Support <a href="#">link</a><br>
				 - Senior Business Analyst <a href="#">link</a><br>
				 - Planning Manager <a href="#">link</a><br>
				 </b>
			</p>
			</div>
			<div class="bgimg-3">
				<div class="container" style="padding-top: 60px; padding-bottom: 60px;">
					<h1>OFERUJEMY</h1>
					<hr><br>
					<div class="row advantages-block">
						<!--
						<?php
						for ($i = 0; $i<$res2->num_rows; $i++) {
						$row = $res2->fetch_assoc();
						echo "<div class=\"col\">".
							"<i class=\"fa ".$row["o_logo"]." fa-5x\"></i><br>".
							"<b>".$row["o_name"]."</b><br>".
								$row["o_description"].
							"</div>";
						}
						?>
						-->

						<div class="col">
							<i class="fa fa-briefcase fa-5x"></i><br>
							<b>Elastyczne zatrudnienie</b><br>
							Elastyczna forma zatrudnienia i ścieżka kariery dostosowana do Twoich potrzeb
						</div>
						<div class="col">
							<i class="fa fa-graduation-cap fa-5x"></i><br>
							<b>Podnosimy kompetencje</b> <br>
							Cykliczne szkolenia, wewnętrzna wymiana wiedzy i doświadczeń 

						</div>
						<div class="col">
							<i class="fa fa-heart-o fa-5x"></i><br>
							<b>Dbamy o zdrowie</b> <br>
							Karta Multisport oraz kilka pakietów prywatnej opieki medycznej
						</div>
						<div class="col">
							<i class="fa fa-globe fa-5x"></i><br>
							<b>Globalne Know-How</b> <br>
							Zdobyte dzięki wdrożeniom w Polsce i za granicą
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- ZAŁĄCZENIE STOPKI I SKRYPTÓW -->
		<?php include("footer.php"); ?>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
		<!-- ZAMKNIĘCIE POŁĄCZENIA Z BAZĄ -->
		<?php mysqli_close($conn); ?>
	</body>
</html>