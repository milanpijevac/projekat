<?php  
require_once('../core/start.php');

if(Input::exists('post')) {
  $email = Input::get('email');
  $password = Input::get('password');
  
  // validacija - dodati
  $user = new User();
  if($user->login($email, $password)) {
    Session::set('success', 'You are logged in now, welcome back!');
    Redirect::to('../admin/index.php');
  } else {
    Session::set('error', 'Login failed!');
  }
} 

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="./css/login.css">
	</head>
	<body>
		<form  method="POST" action="login.php" enctype="multipart/form-data">
			<div class="login-box">
				<h1>Login</h1>
			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="email" placeholder="Email" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="password" placeholder="Password" value="">
			</div>
			
			<button class="btn">Login</button>
			</div>
		</form>
	</body>
</html>