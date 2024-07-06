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
authorize($note['user_id'] === $currentUserId);

// if (!empty($errors)) {
//     return view('notes/edit.view.php', [
//         'heading' => 'Edit Note',
//         'errors' => $errors,
//         'note' => $note
//     ]);
// }

$db->query("UPDATE notes SET body = :body WHERE id = :id", [
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);

header("location: /note?id={$_POST['id']}");

die();
