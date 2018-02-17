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
						<a href="#" alt=""><img src="img/project/p1.jpg" class="project-img"></a>
						<div class="description">
							<table style="height: 100%; width: 100%;">
							  <tbody>
							    <tr> 
							      <td class="align-middle" style="text-align: center;">Turystyka travelSafety</td>
							    </tr>
							  </tbody>
							</table>		
						</div>
					</div>
					<div class="col col-p thumbnail">
						<a href="#" alt=""><img src="img/project/p2.jpg" class="project-img"></a>
						<div class="description">
							<table style="height: 100%; width: 100%;">
							  <tbody>
							    <tr> 
							      <td class="align-middle" style="text-align: center;">Aranżacje wnętrz Nova</td>
							    </tr>
							  </tbody>
							</table>		
						</div>
					</div>
						
			</div>
			<div class="row">
					<div class="col col-p thumbnail">
						<a href="#" alt=""><img src="img/project/p3.jpg" class="project-img"></a>
						<div class="description">
							<table style="height: 100%; width: 100%;">
							  <tbody>
							    <tr> 
							      <td class="align-middle" style="text-align: center;">Kowalevski blog osobisty</td>
							    </tr>
							  </tbody>
							</table>		
						</div>
					</div>
					<div class="col col-p thumbnail">
						<a href="#" alt=""><img src="img/project/p4.jpg" class="project-img"></a>
						<div class="description">
							<table style="height: 100%; width: 100%;">
							  <tbody>
							    <tr> 
							      <td class="align-middle" style="text-align: center;">Kursy programowania dla dzieci</td>
							    </tr>
							  </tbody>
							</table>		
						</div>
					</div>
						
			</div>
			<div class="row">
					<div class="col col-p thumbnail">
						<a href="#" alt=""><img src="img/project/p5.jpg" class="project-img"></a>
						<div class="description">
							<table style="height: 100%; width: 100%;">
							  <tbody>
							    <tr> 
							      <td class="align-middle" style="text-align: center;">Kultura i sztuka Kraków</td>
							    </tr>
							  </tbody>
							</table>		
						</div>
					</div>
					<div class="col col-p thumbnail">
						<a href="#" alt=""><img src="img/project/p6.jpg" class="project-img"></a>
						<div class="description">
							<table style="height: 100%; width: 100%;">
							  <tbody>
							    <tr> 
							      <td class="align-middle" style="text-align: center;">Projektowanie stron WWW</td>
							    </tr>
							  </tbody>
							</table>		
						</div>
					</div>
						
			</div>
		</div>

		<!-- ZAŁĄCZENIE STOPKI I SKRYPTÓW -->
		<?php include("footer.php"); ?>
		<!-- ZAMKNIĘCIE POŁĄCZENIA Z BAZĄ -->
		<?php mysqli_close($conn); ?>
	</body>
</html>