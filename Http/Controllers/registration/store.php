<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

$errors['name'] =
    Validator::required($name, 'name') ??
    Validator::min($name, 3, 'name') ??
    Validator::max($name, 55, 'name') ??
    false;
if ($errors['name'] == false) {
    unset($errors['name']);
}

$errors['email'] =
    Validator::required($email, 'email') ??
    Validator::email($email) ??
    false;
if ($errors['email'] == false) {
    unset($errors['email']);
}

$errors['password'] =
    Validator::required($password, 'password') ??
    Validator::min($password, 6, 'password') ??
    Validator::max($password, 255, 'password') ??
    false;
if ($errors['password'] == false) {
    unset($errors['password']);
}

if (!empty($errors)) {
    return view("registration/create.view.php", [
        'errors' => $errors
    ]);
}

$user = $db->query(
    "SELECT * FROM users WHERE email = :email",
    ['email' => $email]
)->find();

if ($user) {
    return view("registration/create.view.php", [
        'errors' => ['emailExists' => 'Email already exists. Go to login Page']
    ]);
}

$db->query("INSERT INTO users(name, email, password) VALUES(:name, :email, :password)", [
    'name' => $name,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT),
]);

login([
    'name' => $name,
    'email' => $email
]);

header('Location: /');
die();
