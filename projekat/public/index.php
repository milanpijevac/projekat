<?php

  require_once('../core/start.php');
  $db = Database::connect();


  $categories = $db->query("SELECT * FROM categories")->results();

  // dodati Post klasu
  $blogs = $db->query("SELECT * FROM posts WHERE category_id = 2 ORDER BY created_at DESC LIMIT 2")->results();
  $events = $db->query("SELECT * FROM posts WHERE category_id = 1 ORDER BY created_at LIMIT 3")->results();

  $user = new User();
  $user->checkLogin();

		 
 ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Moj prvi projekat</title>
		<link rel="stylesheet" type="text/css" href="./css/main.css">
		<link rel="stylesheet" type="text/css" href="./css/animation.css">
		<link href="https://fonts.googleapis.com/css2?family=Lemonada&display=swap" rel="stylesheet">

	</head>
	<body>
			<!-- Header -->
			 <?php include('../includes/navbar.php'); ?>


			<!-- Pocetak bannera -->
			<div class="banner">
					<div class="main-banner">	
						<p>
						<?php
						 include('../includes/functions.php');
						 echo trenutniSat();		
						  ?>,Dobro dosli kod Gruje	
						</p>
					</div>	
			</div>
			<!-- kraj bannera -->

			<!-- pocetak section -->
			<section class="section">
				<div class="div container">
					<h2>Upoznajte nas bolje</h2>
				</div>
				<div class="container">
				
					<div class="boxes">
				
						      <?php 

						        if(isset($events)) {

						        foreach ($events as $event) {
						       
						        $img = './img/uploads/' . $event->img;
						        $box = '<div class="box">
						          <img src="'.$img.'" alt="" class="event-img">
						          <h2>
						            <a href="posts.php?post='.$event->id.' ">' . $event->title .              
						            '</a>
						          </h2>
						          
						          <p>'.get_first_sentence($event->body).'</p>
						        </div>';
						        echo $box;

						          }
						        }

						      ?>
						
<!-- 
						<div class="box">
							<img src="./img/pictures/batak.jpg">
							<h2>priprema <br>neposredno pre sluzenja</h2>
							<a href="#sidra">Svakog dana rucno pripremamo piletinu,planiramo da je i pecemo,i tako svaki komad od pocetka do kraja-zato ima tako savrsen ukus</a>
						</div>
					
					
						<div class="box">
							<img src="./img/pictures/salata.jpg">
							<h2>priprema <br>neposredno pre sluzenja</h2>
							<a href="#sidra1">Svakog dana rucno pripremamo piletinu,planiramo da je i pecemo,i tako svaki komad od pocetka do kraja-zato ima tako savrsen ukus</a>
						</div>
				
					
						<div class="box">
							<img src="./img/pictures/burger.jpg">
							<h2>priprema <br>neposredno pre sluzenja</h2>
							<a href="#sidra2">Svakog dana rucno pripremamo piletinu,planiramo da je i pecemo,i tako svaki komad od pocetka do kraja-zato ima tako savrsen ukus</a>
						</div> -->
					</div>
				</div>
			</section>

			<!-- kraj sectiona -->

			<div class="container">
				<div class="slider-wrapper">
					<div class="slider-inner-wrapper">
						<ul class="slides">
							<li><img src="./img/pictures/batak.jpg"></li>
							<li><img src="./img/slider.jpg"></li>
							<li><img src="./img/pictures/salata.jpg"></li>
							<li><img src="./img/piza.jpg"></li>
							<li><img src="./img/virsla.jpg"></li>
							<li><img src="./img/fries.jpg"></li>
							<li><img src="./img/obrok.jpg"></li>
							<li><img src="./img/pictures/batak.jpg"></li>
							
							
						</ul>
					</div>
				</div>
				
			</div>

			<div class="box-wrapper blog">

				<div class="boxes2">
					
					<img src="./img/flex1.jpg" id="sidra">
					<?php  ?>
				</div>

				<div class="boxes2">
					<div class="blog2">
						<h2>priprema neposredno pre sluzenja</h2>
						<p>
						Svakog dana rucno prpremamo hranu,paniramo je i pecemo i tako svaki komad od pocetka do kraja - zato ima tako ssavrsen ukus.
						<br></p><p><b>MESO U GRUJINOJ:</b></p>

						<ul>
							<li>samo celi komadi pileceg mesa</li>
							<li>nije mleveno</li>
							<li>rucno pripremano pred samo sluzenje</li>
						</ul>
					</div>
				</div>

				<div class="boxes2">
					<div class="blog2">
						<h2>svezina iznad svega</h2>
						<p>Sigurni smo da ne postoji dobra hrana bez svežih sastojaka. Zbog toga se sastojci isporučuju u naše restorane nekoliko puta nedeljno.
						
						<br></p><p><b>NABAVKA U GRUJINOJ:</b></p>

						<ul>
							<li>2-3 PUTA NEDELJNO</li>
							<li>SAMO SA LOLAKLIH FARMI</li>
							
						</ul>
					</div>
				</div>
				
				<div class="boxes2">
					<img src="./img/flex3.jpg" id="sidra1">
				</div>
				
				<div class="boxes2">
					
					<img src="./img/pizaa.jpg" id="sidra2">
				</div>
				
				<div class="boxes2">
					<div class="blog2">
						<h2>domace je najbolje</h2>
						<p>
						Svakog dana rucno prpremamo hranu,paniramo je i pecemo i tako svaki komad od pocetka do kraja - zato ima tako ssavrsen ukus.
						<br></p><p><b>KVALITET U GRUJINOJ:</b></p>

						<ul>
							<li>SAMO DOMACI PROIZVODI</li>
							<li>ODABRANE NAJBOLJE FARME</li>
							<li>ISKLJUCIVO PROVERENI PRIRODNI PROIZVODI</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="button">
					<span><a href="#click" class="click" id="click">Klikom do posla</a></span>
				</div>
			</div>
			<div class="hide">
				<p>Prijavite se za posao samo posaljite podatke i uskoro cemo vas kontaktirati.</p>

				
					<div class="form">
						<div class="prijava">


							<div class="input">
						<form method="POST" action="prijava.php">
								<h2>Prijava</h2>
								<div class="control">
									<input type="text" name="name"  placeholder="Name">
								</div>

								<div class="control">

									<input type="text" name="surname"  placeholder="Surname">	
								</div>

								<div class="control">
									<input type="email" name="email" id="prijava"  placeholder="email">
								</div>

								<div class="control">
									<input type="text" name="grad"  placeholder="city">
									
								</div>
								<div class="control">
									<input type="text" name="broj"  placeholder="broj">
								</div>

								<div class="control">
									<input type="text" name="jmbg"  placeholder="jmbg">
								</div>

							
								<div class="control">
									<input type="submit" name="prijava" value="Posalji prijavu">	
								</div>
							
							
						</form>
	          				</div>
						  <?php 
					            if(Session::exists('message')) {
					              echo Session::msg('message');
					            }
	          				?>
					</div>
				</div>
			
			</div>
			
			

			<!-- Pocetak footera -->
			
			<?php include('../includes/footer.php') ?>


				<script
			      src="https://code.jquery.com/jquery-3.5.0.min.js"
			      integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
			      crossorigin="anonymous">
			    </script>
			    
				 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

				<script type="text/javascript" src="./js/main.js"></script>	
				
	</body>
</html>