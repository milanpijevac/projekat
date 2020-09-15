<!-- <-- Header --> 
		<header class="header-wrapper">
			<div class="container">
				<div class="header">
					
						<img src="./img/logo.png" class="logo" alt="slika nije ucitana">
					<button class="burger">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hamburger" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-hamburger fa-w-16 fa-3x"><path fill="currentColor" d="M464 256H48a48 48 0 0 0 0 96h416a48 48 0 0 0 0-96zm16 128H32a16 16 0 0 0-16 16v16a64 64 0 0 0 64 64h352a64 64 0 0 0 64-64v-16a16 16 0 0 0-16-16zM58.64 224h394.72c34.57 0 54.62-43.9 34.82-75.88C448 83.2 359.55 32.1 256 32c-103.54.1-192 51.2-232.18 116.11C4 180.09 24.07 224 58.64 224zM384 112a16 16 0 1 1-16 16 16 16 0 0 1 16-16zM256 80a16 16 0 1 1-16 16 16 16 0 0 1 16-16zm-128 32a16 16 0 1 1-16 16 16 16 0 0 1 16-16z" class=""></path></svg>
          </button>
          
					<nav class="nav">
						<ul class="nav1">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About </a></a></li>
							<li><a href="event.php">Events</a></li>
							<li><a href="vodic.php">Vodic</a></li>
							<li><a href="meni.php">Meni</a></li>
							<!-- <li><a href="register.php">Register</a></li>
							<li><a href="login.php">Login</a></li> -->
							<?php 

							if(!isset($user) || !$user->isLoggedIn()) {
               echo '<li>
                      <a href="login.php">
                        Login
                      </a>
                    </li>
                    <li>
                      <a href="register.php">
                        Register
                      </a>
                    </li>';
                } else {
                echo '<li class="dropdown-wrapper">
                    <a href="../admin/index.php">' . $user->data()->username .                    
                    '</a>
                    <ul class="dropdown">
                      <li>
                        <a href="../admin/profile.php">
                          Profile
                        </a>
                      </li>
      
                      <li>
                        <a href="../admin/create.php">
                          New post
                        </a>
                      </li>
      
                      <li>
                        <a href="logout.php">
                          Logout
                        </a>
                      </li>
                    </ul>
                  </li>';


                }

                          ?>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- Kraj headera