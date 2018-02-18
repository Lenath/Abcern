<!-- OBSŁUGA SESJI / SPRAWDZANIE CZY UŻYTKOWNIK JEST ZALOGOWANY -->
<?php include ("session.php"); ?>
<!-- POŁĄCZENIE Z BAZĄ -->
<?php include("connect.php"); ?>
<!-- POBIERANIE DANYCH Z BAZY -->
<?php $res = get_page("*", "main", $conn); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include("head.php"); ?>
<body>
<div class="dropdown" style="padding-top: 50px; width: 700px">
	<form action="f_index.php" method="post">
	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width: 100vw">Metadane
		<span class="caret"></span></button>
	<ul class="dropdown-menu" style="width: 100vw">
		<li>
				<div class="form-group col-xs-8  col-xs-offset-2 col-md-12  col-md-offset-4">
					Tytuł strony:<input type="text" class="form-control" name="title" value="<?php echo $res["title"]; ?>">
				</div>
				<div class="form-group col-xs-8  col-xs-offset-2 col-md-12  col-md-offset-4">
					Opis strony:<input type="text" class="form-control" name="description" value="<?php echo $res["description"]; ?>">
				</div>
				<div class="form-group col-xs-8  col-xs-offset-2 col-md-12  col-md-offset-4">
					Słowa kluczowe <input type="text" class="form-control" name="keywords" value="<?php echo $res["keywords"]; ?>">
				</div>
				<div class="centered">
					<button type="submit">
						Submit
					</button>
				</div>
		</li>
	</ul>
</div>
<!-- ZAŁĄCZENIE PASKA NAWIGACYJNEGO -->
<?php include("navbar.php"); ?>
	<div id="home" class="bgimg-1">
		<div>
			<div style="display: table; height: 94vh; overflow: hidden;">
				<div style="display: table-cell; vertical-align: middle; padding-left: 50px;">
					<!--NAZWA FIRMY-->
					<div class="form-group col-xs-8  col-xs-offset-2 col-md-12  col-md-offset-4">
						<input type="text" class="form-control" name="c_name" value="<?php echo $res["c_name"]; ?>">
					</div>
					  <!--MOTTO FIRMY-->
	                <div class="text-motto">
						<div class="form-group col-xs-8 col-xs-offset-2 col-md-12  col-md-offset-4">
							<input type="text" class="form-control" name="c_motto" value="<?php echo $res["c_motto"]; ?>">
						</div>
	                </div>
				</div>
			</div>
		</div>
		<div>
			<center>
				<a href="#about" id="top">
					<i class="btn fa fa-toggle-down fa-2x icon"></i>
				</a>
			</center>
		</div>
	</div>
	<section id="about">
		<div class="container space">
			<h1>O NAS</h1>
			<hr>
			<!--OPIS FIRMY-->
			<div>
				<textarea type="text" class="form-control" name="c_description" rows="10"><?php echo $res["c_description"]; ?></textarea>
			</div>
		</div>
		<!-- SUBMIT -->
		<div class="centered">
			<button type="submit">
				Submit
			</button>
		</div>
		<!-- ZAMKNIĘCIE FORMULARZA -->
</form>


		<div class="bgimg-2">
			<div class="container space">
				<h1 class="h-light">NASZ ZESPÓŁ</h1>
				<hr color="white">
				<div class="responsive" style="margin: 0px 15px;">
					<?php
					$res = get_all($conn, "staff");
					for ($i = 0; $i<$res->num_rows; $i++) {
						$row = $res->fetch_assoc();
						echo 	"<div class=\"wizytowka\">".
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
			<!--
			<div class="wizytowka">
				<img src="img/staff/avatar.png" class="team-img">
				<div>
					<b></b>
					<hr>
					<br>
					<br>
				</div>
			</div>
			-->
			</div>
		</div>
		</section>
		<!-- ZAŁĄCZENIE STOPKI I SKRYPTÓW -->
		<?php include("footer.php"); ?>
		<!-- przewijanie się strony-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script>
		    $(document).ready(function() {
		       $('a[href^="#"]').on('click', function(event) {
	
		var target = $( $(this).attr('href') );
	
			if( target.length ) {
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
			}
		}); 	    
		    });
		</script>
		<!-- ZAMKNIĘCIE POŁĄCZENIA Z BAZĄ -->
		<?php mysqli_close($conn); ?>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<script type="text/javascript">	
			$(document).ready(function(){
			  $('.responsive').slick({
				  dots: true,
				  infinite: false,
				  speed: 300,
				  slidesToShow: 3,
				  slidesToScroll: 1,
				  responsive: [
				    {
				      breakpoint: 1024,
				      settings: {
				        slidesToShow: 3,
				        slidesToScroll: 3,
				        infinite: true,
				        dots: true
				      }
				    },
				    {
				      breakpoint: 600,
				      settings: {
				        slidesToShow: 2,
				        slidesToScroll: 2
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        slidesToShow: 1,
				        slidesToScroll: 1
				      }
				    }
				    // You can unslick at a given breakpoint now by adding:
				    // settings: "unslick"
				    // instead of a settings object
				  ]
				});
			});
		</script>
</body>
</html>