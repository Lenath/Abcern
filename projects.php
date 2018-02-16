<!-- POŁĄCZENIE Z BAZĄ -->
<?php include("connect.php"); ?>
<!-- POBIERANIE DANYCH Z BAZY -->
<?php $res = get_page("*", "main", $conn); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include("head.php"); ?>

	<body>
		<?php include("navbar.php"); ?>
		
		<div class="container space">
				<h1>PROJEKTY</h1>
				<hr>
			<div class="row">
					<div class="col col-p thumbnail">
						<a href="#" alt=""><img src="img/p1.jpg" class="project-img"></a>
						<div class="description">		
							Turystyka travelSafety
						</div>
					</div>
					<div class="col col-p">
						<a href="#" alt=""><img src="img/p2.jpg" class="project-img"></a>
					</div>
						
			</div>
			<div class="row">
					<div class="col col-p">
						<a href="#" alt=""><img src="img/p3.jpg" class="project-img"></a>
					</div>
					<div class="col col-p">
						<a href="#" alt=""><img src="img/p4.jpg" class="project-img"></a>
					</div>
						
			</div>
			<div class="row">
					<div class="col col-p">
						<a href="#" alt=""><img src="img/p5.jpg" class="project-img"></a>
					</div>
					<div class="col col-p">
						<a href="#" alt=""><img src="img/p6.jpg" class="project-img"></a>
					</div>
						
			</div>
		</div>

		<!-- ZAŁĄCZENIE STOPKI I SKRYPTÓW -->
		<?php include("footer.php"); ?>
		<!-- ZAMKNIĘCIE POŁĄCZENIA Z BAZĄ -->
		<?php mysqli_close($conn); ?>
	</body>
</html>