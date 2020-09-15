<?php
  require_once('../core/start.php');
  $user = new User();
  $user->checkLogin();

  if(!$user->isLoggedIn()) {
    Session::set('error', 'You need to login!');
    Redirect::to('../public/login.php');
  }

  $db = Database::connect();
 
  $posts = $db->query("SELECT * FROM posts WHERE user_id = ?", [$user->data()->id])->results();
  



?><!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('./includes/metatags.php');?>
  	<title></title>
  </head>

  	<?php include('./includes/link.php'); ?>
    <script src="https://kit.fontawesome.com/70f0cc61c8.js" crossorigin="anonymous"></script>

  <body>
      <!-- Header -->
      <?php include('includes/nav-bar.php'); ?>
      <!-- Kraj Headera -->




      <main>
      	<!-- Sidebar -->
        <?php include('includes/sidebar.php'); ?>
        <!-- Kraj Sidebar -->

        <section>
          <div class="h2">
            <h2><a href="#">Dashboard</a>  /  New Post</h2>
          </div>

          <div class="container">
              <div class="wrapper">
                <h1>Moje objave</h1>
              </div>
              
                

          <?php 

					if(isset($posts)) {
					  foreach ($posts as $post) {

					   $img = (isset($post->img)) ? '../public/img/uploads/'.$post->img : 'https://via.placeholder.com/150';

					  $html = "";
					  $html .=  '<div class="row">';
					  $html .= '<div class="col">';
					  $html .= '<div class="card">';
					  $html .= '<img src="'. $img .'" class="card-img" alt="Nije pronadjena">';
					  $html .= '<div class="card-body">';
					  $html .= '<h5 class="card-title">'.$post->title .'</h5>';
					  $html .= '<p class="card-text">'.$post->body.'</p>';
					  $html .= '<a href="edit.php?post='.(int)$post->id.'" class="btn ">Edit</a>';
					  $html .= '<a href="delete.php?post='.(int)$post->id.'" class="btn1">Delete</a>';   
					  $html .= '</div></div></div></div><hr>';       
					        
					   echo $html;



					    
					  }
					}



					     

					?>
            
          </div>


        <!-- Footer -->
        <?php include('includes/footer.php'); ?>
        <!-- Kraj Footer -->

        </section>
      </main>




      <script
            src="https://code.jquery.com/jquery-3.5.0.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
            crossorigin="anonymous">
          </script>
        <script type="text/javascript" src="./js/main.js"></script> 

  </body>
</html>
