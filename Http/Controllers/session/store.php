<?php

use Core\Auth;
use Http\Validations\LoginForm;

$errors = [];

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

if (!(new Auth)
    ->attempt(
        $attributes['email'],
        $attributes['password']
    )) {

    $form
        ->error(
            'email',
            'The candidational does not match'
        )
        ->throw();
}

redirect('/');
