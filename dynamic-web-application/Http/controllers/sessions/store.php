<?php

use core\Authenticator;
use core\Session;
use Http\Forms\LoginForm;
var_dump('I am posting');
$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    if ((new Authenticator)->attempt($email, $password)) {
        redirect('');
    }

    $form->error('email', 'No matching account found for that email address and password.');
}

Session::flash('errors', $form->errors());

return redirect('/login');