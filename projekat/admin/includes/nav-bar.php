 <header class="header-wrapper">
        <div class="header">
          
            <h3>GrujinaKoliba Admin <a href="#" id="java" ><i class="fas fa-align-justify"></i></a></h3>
         
            <ul class="drop-down">
              <li><a href="../public/index.php">Website<i class="fas fa-house-user"></i></a></li>
              <li class="dropdown">
                <a href=""><?php echo $user->data()->username; ?><i class="fas fa-user"></i></a>
                <ul class="drop-down2" >
                  <li><a href="">Profile</a></li>
                  <li><a href="../public/logout.php">Log out</a></li>
                </ul>
              </li>
            </ul>
          
        </div>
      </header>