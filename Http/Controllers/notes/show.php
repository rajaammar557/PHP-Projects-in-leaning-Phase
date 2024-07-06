<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = $_SESSION['user']['id'];

if (!isset($_GET['id'])) {

    abort();
}

$note = $db->query(
    "SELECT * FROM notes where id = :id",
    [
        'id' => $_GET['id']
    ]
)->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    'heading' => 'My notes',
    'note' => $note
]);
