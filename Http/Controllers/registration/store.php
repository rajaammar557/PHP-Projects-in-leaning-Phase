<?php

use Core\App;
use Core\Auth;
use Core\Database;
use Http\Validations\RegisterationValidation;

$db = App::resolve(Database::class);

$errors = [];

$form = RegisterationValidation::validate($attributes = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);


$user = $db->query(
    "SELECT * FROM users WHERE email = :email",
    ['email' => $_POST['email']]
)->find();

if ($user) {

    $form
        ->error(
            'emailExists',
            'Email already exists. Go to login Page'
        )
        ->throw();
}

$db->query("INSERT INTO users(name, email, password) VALUES(:name, :email, :password)", [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
]);

(new Auth)
    ->attempt(
        $attributes['email'],
        $attributes['password']
    );

redirect('/');
