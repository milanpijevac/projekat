<?php
require_once('../core/start.php');

$username = '';
$email = '';

if(Input::exists('post')) {
    // validacija podataka
    $validate = new Validate();
    $rules = [
      'username' => [
          'required'  => true,
          'min'       => 2,
          'max'       => 60
      ],

      'password' => [
        'required' => true,
        'min'      => 6
      ],

      'retype' => [
        'required' => true,
        'matches' => 'password'

      ],

      'email' => [
            'required' => true,
            'email'    => true,
      ]

    ];
    $validation = $validate->check($_POST, $rules);

    if($validation->passed()) {
      // registracija korisnika
      $user = new User();

      $fields = [
          NULL,   // id
          Input::get('username'),
          Input::get('email'),      
          Hash::make( Input::get('password') ), // hashovanje password-a
          'user',
          date('Y-m-d H:i:s'), // created_at
          date('Y-m-d H:i:s')  // updated_at
      ];

      // kreiranje korisnika
      $user->create($fields);
      // redirekt
      Session::set('success', 'You have been registered successfuly and can now login!');
      Redirect::to('login.php');    

  } else { // u slucaju da validacija nije prosla
    // setovanje gresaka --> Session
    Session::set('errors', $validation->errors());
    Session::set('data', $_POST);

    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    
  }

} // if Input::exists

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Register</title>
	</head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/register.css">
	<body>
    <?php 
        include('../includes/messages.php');
      ?>
		<form method="POST"  action="register.php">
			<div class="register-box">
				<header>
					<h3>Register an Accaount</h3>
				</header>
				<div class="form-control">
					<label>Username</label>
					<input type="text" name="username" id="username" value="<?php echo $username; ?>"  required>
				</div>
				<div class="form-control">
					<label>Email</label>
					<input type="email" name="email" value="<?php echo $email; ?>" id="inputEmail" placeholder="" required>
				</div>
				<div class="form-control">
					<label>Password</label>
					<input type="password" name="password" id="inputPassword" placeholder="" required>
				</div>
				<div class="form-control">
					<label>Re-Type Password</label>
					<input type="password" name="retype" id="confirmPassword" placeholder="" required>
				</div>
				
				<button class="btn">Register</button>
			</div>
					
		</form>
	</body>
</html>