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


  if(Input::exists('get')) {

    $post_id = Input::get('post'); // odnosi se na vrednost dobijenu iz linka putem GET metoda
    $post = $db->find('posts', 'id', $post_id)->first();

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
                <h1>Izmeni postt</h1>
              </div>
          </div>

          <div class="container">
              <form action="create.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="title">Naslov</label>
                      <input type="text" class="form-control" value="<?php echo $post->title; ?>" id="title" name="title">
                      <small class="form-text text-muted">Post title.</small>
                    </div>
                    
                    <div class="form-group">
                      <label for="body">Tekst</label>
                      <textarea class="form-control" id="body" name="body" rows="3"><?php echo $post->body; ?></textarea>
                    </div>
                    <?php 
                if(!$post->img) {

                  echo '<div class="form-group">
                        <label for="image">Postavi sliku</label>
                        <input type="file" class="form-control-file" name="img">
                        </div>';
                }
              ?>

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
                    <input type="hidden" value="<?php echo $post_id ?>" name="id">

                    <button type="submit" class="btn-2">Submit</button>
                  </form>
            </div>

              <?php 
              if($post->img) {
            ?>

              <form method="POST" action="removeimg.php">

              <div class="form-group">
                <?php  $img = (isset($post->img)) ? '../public/img/uploads/'.$post->img : 'https://via.placeholder.com/150'; ?>
                  <img src="<?php echo $img; ?>" style="height:200px;width:250px;">
              </div>

              <input type="hidden" name="id" value="<?php echo $post_id ?>">
              <button type="submit" class="btn btn-danger">Remove</button>
              

            </form>

            <?php 
              }
            ?>
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