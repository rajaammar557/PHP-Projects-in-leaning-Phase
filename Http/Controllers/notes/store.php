<?php

use Core\App;
use Core\Database;
use Http\Validations\Notes;

$db = App::resolve(Database::class);

$errors = [];


$form = Notes::validate($attributes = [
    'body' => $_POST['body'],
]);


$db->query(
    "INSERT INTO notes(user_id, body) VALUES (:user_id, :body)",
    [
        'user_id' => $_SESSION['user']['id'],
        'body' => $_POST['body']
    ]
);
redirect('/notes');
