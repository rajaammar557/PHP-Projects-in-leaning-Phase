<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$links = $db->query(
    "SELECT * FROM url_shortner where user_id = :user_id order by id desc",
    ['user_id' => $_SESSION['user']['id']]
)->get();

view("url_shortner/index.view.php", [
    'heading' => 'My Short Links',
    'links' => $links
]);
