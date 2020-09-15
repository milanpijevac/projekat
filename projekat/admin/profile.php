<?php
  require_once('../core/start.php');
  $user = new User();
  $user->checkLogin();

  if(!$user->isLoggedIn()) {
    Redirect::to('../public/index.php');
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>

</body>
</html>
