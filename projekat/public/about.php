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
		<link rel="stylesheet" type="text/css" href="./css/responsive.css">
		<link rel="stylesheet" type="text/css" href="./css/animation.css">
		<link href="https://fonts.googleapis.com/css2?family=Lemonada&display=swap" rel="stylesheet">

	</head>

	<body>
		<!-- pocetak header -->
		 <?php include('../includes/navbar.php');?>

			<!-- Pocetak about -->

		 	<div class="about">

					<div class="box-wrap">
						<div class="box-3">
						<img src="./img/milan.jpg">
						</div>
					</div>	

					<div class="box-wrap">
						<div class="box-3 box-4">
						<h2>Pozdrav,hvala ti sto si posetio moj sajt</h2>
						<p>Са више од једног десетљећа искуства у развоју у бројним индустријама схватио сам да је типичан процес стварања производа између клијената и програмера недостатак. Пречесто програмери ретко комуницирају са клијентима током фазе развоја, што резултира коначним производом који не успева да достигне циљ који тражи купац и крајњи корисник.

						Из тог разлога сам одлучио да користим потпуно другачији образац развоја који је фокусиран на високо фокусирану комуникацију и транспарентне шеме дизајна. Када преузимам на пројекту не само да радим на креирању апликације према спецификацијама креирањлијента, свакодневно ажурирам како бих осигурао да се пројекат правилно усклађује са клијентовим циљевима. Крајњи резултат је прави производ, испоручен на време и на буџет.</p>
						<p class="paragraph">Milan Pijevac</p>
						</div>
					</div>	
			</div>

			<!-- Pocetak footera -->

			<?php include('../includes/footer.php'); ?>
				
				
				<script
			      src="https://code.jquery.com/jquery-3.5.0.min.js"
			      integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
			      crossorigin="anonymous">
			    </script>
			    
				 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

				<script type="text/javascript" src="./js/main.js"></script>	
				
	</body>
</html>