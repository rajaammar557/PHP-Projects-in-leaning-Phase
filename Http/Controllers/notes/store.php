<?php

use Core\App;
use Core\Database;
use Http\Validations\NotesValidation;

$db = App::resolve(Database::class);

$errors = [];


$form = NotesValidation::validate($attributes = [
    'body' => $_POST['body'],
    'title' => $_POST['title'],
]);


$db->query(
    "INSERT INTO notes(user_id, body, title) VALUES (:user_id, :body, :title)",
    [
        'user_id' => $_SESSION['user']['id'],
        'body' => $_POST['body'],
        'title' => $_POST['title']
    ]
);
redirect('/notes');
