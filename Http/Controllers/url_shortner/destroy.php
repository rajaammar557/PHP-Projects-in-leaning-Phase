<?php


use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = $_SESSION['user']['id'];
$note = $db->query(
    "SELECT * FROM url_shortner where id = :id",
    [
        'id' => $_POST['id']
    ]
)->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query("DELETE FROM url_shortner WHERE id = :id", ['id' => $_POST['id']]);

redirect('/shortner');
