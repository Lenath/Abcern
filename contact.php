<!-- POŁĄCZENIE Z BAZĄ -->
<?php include("connect.php"); ?>
<!-- POBIERANIE DANYCH Z BAZY -->
<?php $res = get_page("*", "contact", $conn); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include("head.php"); ?>
<body>
<?php include("navbar.php"); ?>
	<div class="container space">
		<h1>KONTAKT</h1>
		<hr>
		<div class="row" style="padding-bottom: 15px;">
			<div class="col">
				<form role="form">
					<div class="form-group">
						<label class="sr-only" for="nameandsurname">Imię i nazwisko</label>
					    <input type="text" class="form-control" id="nameandsurname" placeholder="Imię i nazwisko">
					</div>
					<div class="form-group">
						<label class="sr-only" for="exampleInputEmail2">adres email</label>
					    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
					</div>
					<textarea class="form-control" rows="3">Wiadomość</textarea>
					<div class="checkbox">
						<label>
					      <input type="checkbox"> Nie jestem robotem
					    </label>
					  </div>
					<button type="submit" class="btn btn-default btn-primary" style="float:right;);">Wyślij</button>
				</form>
			</div>
			<div class="col">
				<p>
					<b>Siedziba główna</b><br>
					<!--<?php echo $res["c_adress1"];?><br>-->
					ul. Królowej Jadwigi 1<br>
					<!--<?php echo $res["c_adress2"];?><br>-->
					Budynek Estra, 2 piętro<br>
					<!--<?php echo $res["c_adress3"];?><br>-->
					30-109 Kraków<br>
				</p>
				<p>
					<!--tel. <?php echo $res["c_tel"];?><br>-->
					tel. +48 12 111 22 33<br>
					<!--fax. <?php echo $res["c_fax"];?><br>-->
					fax. +48 12 111 22 33<br>
				</p>
				<p class="blue-h">
					<!--<?php echo $res["c_email"];?>-->
					office@abcern.pl
				</p>
			</div>
		</div>
		<div class="container" id="contact" name="contact">
			<div class="row">
				<br>
				<!-- MAPKA GOOGLA -->
				<div id="map"></div>
			</div>
		</div>
	</div>
	<!-- ZAŁĄCZENIE STOPKI I SKRYPTÓW -->
	<?php include("footer.php"); ?>
	<script>
		function initMap() {
			/*var uluru = {lat: <?php echo $res["c_x"];?>, lng: <?php echo $res["c_y"];?>};*/
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