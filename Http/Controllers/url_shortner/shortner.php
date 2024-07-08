<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$url = $db->query(
    "SELECT * FROM url_shortner where shortUrl = :shortUrl",
    [
        'shortUrl' => substr($_SERVER['REQUEST_URI'], 1)
    ]
)->find();

if ($url) {
    redirect($url['fullUrl']);
}
