<?php

  require_once('../core/start.php');
  $db = Database::connect();


  // dodati Post klasu

  $user = new User();
  $user->checkLogin();
  $users =  $db->query("SELECT * FROM prijava ORDER BY created_at DESC LIMIT 5")->results();
     
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
                <h1 class="h1">Prijava za posao,spisak kandidata</h1>
                
                


                  <?php 
                if (isset($users)) {
                  foreach ($users as $uses) {

                  

                  ?>
                  <div class="div">
                    <table border="1" cellpadding="5" cellspacing="2" width="100%" class="container table">
                      
                      <tr>
                        <td colspan="2">Prijava</td>
                      </tr>
                      <tr>
                        <td>Ime</td>
                        <td><?php echo $uses->name; ?></td>
                      </tr>
                      <tr>
                        <td>Prezime</td>
                        <td><?php echo $uses->surname; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo $uses->email; ?></td>
                      </tr>
                      <tr>
                        <td>Grad</td>
                        <td><?php echo $uses->grad; ?></td>
                      </tr>
                        <td>Broj</td>
                        <td><?php echo $uses->broj; ?></td>
                      </tr>
                        <td>Jmbg</td>
                        <td><?php echo $uses->jmbg; ?></td>
                      </tr>
                      <tr>
                        <td>Vreme posiljke</td>
                        <td><?php echo $uses->created_at; ?></td>
                      </tr>

                    </table>
                  </div>
                 <?php
                  }
                }
                 ?>
              </div>
          </div>
          <!-- $table = '<p>'. $uses->email . '</p>';
                  $table2 = '<p>'. $uses->name . '</p>';
                  echo $table;
                  echo $table2;
                  ; -->
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