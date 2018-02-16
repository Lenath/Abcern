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

		<div class="container" id="contact" name="contact">
			<div class="row">
				<br>
				<!-- MAPKA GOOGLA -->
				<div id="map"></div>
			</div>
		</div>

		<!-- ZAŁĄCZENIE STOPKI I SKRYPTÓW -->
		<?php include("footer.php"); ?>
		<script>
			function initMap() {
				var uluru = {lat: 50.0550132, lng: 19.9076992};
				var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 14,
					center: uluru
				});
				var marker = new google.maps.Marker({
					position: uluru,
					map: map
				});
			}
		</script>
		<script async defer
				src="https://maps.googleapis.com/maps/api/js?key= AIzaSyB-ijRGhGramaD76XH5bAhBVfjxlWmkCto&callback=initMap">
		</script>
		<!-- ZAMKNIĘCIE POŁĄCZENIA Z BAZĄ -->
		<?php mysqli_close($conn); ?>
	</body>
</html>