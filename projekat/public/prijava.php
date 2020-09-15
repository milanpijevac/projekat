<?php

require_once('../core/start.php');

if(Input::exists()) {
	
	$db = Database::connect();
	$email = Input::get('email');
	$name = Input::get('name');
	$surname = Input::get('surname');
	$grad = Input::get('grad');
	$broj = Input::get('broj');
	$jmbg = Input::get('jmbg');
	
	if( $db->insert('prijava', [null, $email, $name ,$surname, $grad, $broj, $jmbg,  date('Y-m-d H:i:s')]) ) {
		Session::set('message', 'You have subscribed to our blog...');
	} else {
		Session::set('message', 'There was an error, please try again later.');
	}
	
}

Redirect::to('index.php#prijava');