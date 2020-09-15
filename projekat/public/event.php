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


      

      <!-- pocetak section -->
      <section class="section">
        <div class="div container">
          <h2>Blogovi</h2>
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
            
          </div>
        </div>
      </section>
      <!-- kraj sectiona -->


      <div class="box-wrapper blog">

       
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