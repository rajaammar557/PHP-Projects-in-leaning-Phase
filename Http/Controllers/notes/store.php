<?php

use Core\App;
use Core\Database;
use Http\Validations\Notes;

$db = App::resolve(Database::class);

$errors = [];

// $errors['body'] =
//     Validator::required($_POST['body'], 'body') ??
//     Validator::max($_POST['body'], 999, 'body') ??
//     false;
// if ($errors['body'] == false) {
//     unset($errors['body']);
// }

$form = Notes::validate($attributes = [
    'body' => $_POST['body'],
]);

// if (!empty($errors)) {

//     return view("notes/create.view.php", [
//         'heading' => 'Create Note',
//         'errors' => $errors
//     ]);
// }
$db->query(
    "INSERT INTO notes(user_id, body) VALUES (:user_id, :body)",
    [
        'user_id' => $_SESSION['user']['id'],
        'body' => $_POST['body']
    ]
);
header('location: /notes');
