 <?php

  require_once('../core/start.php');
  $db = Database::connect();


  // dodati Post klasu

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
		<!-- Kraj headera -->


		<!-- Strani jezici -->
		<div class="container-2">
			<div class="lang">
				
				<h2>O nama</h2>
			</div>


			<div class="lang-box-wrapper">
				<div class="lang-box">

				<p><?php include('../includes/messagesarray.php');?></p>
				
			</div>
		</div>


		<div class="nav-lang">
			<ul>
				<li><a href="vodic.php?lang=en"><span>English</span>(Engleski)</a></li>
				<li><a href="vodic.php?lang=sr"><span>Serbian</span>(Srspki)</a></li>
				<li><a href="vodic.php?lang=hu"><span>Germany</span>(Nemacki)</a></li>
				<li><a href="vodic.php?lang=ru"><span>Russia</span>(Ruski)</a></li>
				<li><a href="vodic.php?lang=sp"><span>Spain</span>(Spanski)</a></li>
			</ul>
		</div>		
		</div>

			<!-- Pocetak footera -->
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