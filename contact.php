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
				<h1>KONTAKT</h1>
				<hr>
		</div>

		<!-- ZAŁĄCZENIE STOPKI I SKRYPTÓW -->
		<?php include("footer.php"); ?>
		<!-- ZAMKNIĘCIE POŁĄCZENIA Z BAZĄ -->
		<?php mysqli_close($conn); ?>
	</body>
</html>