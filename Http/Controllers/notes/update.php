<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Http\Validations\Notes;

$db = App::resolve(Database::class);

$currentUserId = $_SESSION['user']['id'];

$note = $db->query(
    "SELECT * FROM notes where id = :id and user_id = :user_id",
    [
        'id' => $_POST['id'],
        'user_id' => $currentUserId
    ]
)->findOrFail();

$errors = [];

$form = Notes::validate($attributes = [
    'body' => $_POST['body'],
]);

authorize($note['user_id'] === $currentUserId);

$db->query("UPDATE notes SET body = :body WHERE id = :id", [
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);

redirect("/note?id={$_POST['id']}");

