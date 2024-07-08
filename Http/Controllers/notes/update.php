<?php

use Core\App;
use Core\Database;
use Http\Validations\NotesValidation;

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

$form = NotesValidation::validate($attributes = [
    'body' => $_POST['body'],
    'title' => $_POST['title'],
]);

authorize($note['user_id'] === $currentUserId);

$db->query("UPDATE notes SET body = :body, title = :title WHERE id = :id", [
    'body' => $_POST['body'],
    'title' => $_POST['title'],
    'id' => $_POST['id']
]);

redirect("/note?id={$_POST['id']}");

