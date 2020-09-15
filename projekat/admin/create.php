<?php
  require_once('../core/start.php');
  $user = new User(); 
  $user->checkLogin();

  if(!$user->isLoggedIn()) {
    Session::set('error', 'You need to login!');
    Redirect::to('../public/login.php');
  }

  $db = Database::connect();
  $categories = $db->query("SELECT * FROM categories")->results();
  

  if(Input::exists('post')) {

    // validacija podataka


    // upload fajla
    $target_dir = PUBLIC_DIR . '/img/uploads/';
    $img_name = time() . "-" . basename($_FILES["img"]["name"]);
    $target_file = $target_dir . $img_name;
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

    // pripremanje areja za ubacivanje

    $fields = [
      null,
      Input::get('title'),
      Input::get('body'),
      $img_name,
      (int)Input::get('category'),
      $user->data()->id,
      date('Y-m-d H:i:s'), // created_at
      date('Y-m-d H:i:s')  // updated_at
    ];

    // insert
    if($db->insert('posts', $fields)) {
      Session::set('success', 'New post created!');
    } else {
      Session::set('error', 'Something went wrong!');
    }

    // redirekt
    Redirect::to('index.php');
  }
?>


<!DOCTYPE html>
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
                <h1>Kreiraj novi post</h1>
              </div>
          </div>

          <div class="container">
              <form action="create.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="title">Naslov</label>
                      <input type="text" class="form-control" id="title" name="title">
                      <small class="form-text text-muted">Post title.</small>
                    </div>
                    
                    <div class="form-group">
                      <label for="body">Tekst</label>
                      <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                    </div>

                     <div class="form-group">
                        <label for="image">Postavi sliku</label>
                        <input type="file" class="form-control-file" name="img">
                     </div>

                     <div class="form-group">
                      <label for="category">Izaberi kategoriju</label>
                      <select class="form-control" name="category" >
                        <?php

                          if(isset($categories)) {
                            foreach ($categories as $category) {
                              echo "<option value=\"{$category->id}\">{$category->title}</option>";
                            }
                          }
                        ?>
                       
                      </select>
                    </div>

                    <button type="submit" class="btn-2">Submit</button>
                  </form>
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