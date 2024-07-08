<?php

use Core\App;
use Core\Database;
use Http\Validations\UrlShortnerValidation;

$db = App::resolve(Database::class);

$errors = [];

$form = UrlShortnerValidation::validate($attributes = [
    'description' => $_POST['description'],
    'shortUrl' => $_POST['shortUrl'],
    'fullUrl' => $_POST['fullUrl'],
]);

$user = $db->query(
    "SELECT * FROM url_shortner WHERE shortUrl = :shortUrl",
    ['shortUrl' => $_POST['shortUrl']]
)->find();

if ($user) {
    $form
        ->error(
            'shortUrl',
            'The link is not available. Try another.'
        )
        ->throw();
}

$db->query(
    "INSERT INTO url_shortner(user_id, description, shortUrl, fullUrl) VALUES (:user_id, :description, :shortUrl, :fullUrl)",
    [
        'user_id' => $_SESSION['user']['id'],
        'description' => $_POST['description'],
        'shortUrl' => $_POST['shortUrl'],
        'fullUrl' => $_POST['fullUrl'],
    ]
);
redirect('/shortner');
