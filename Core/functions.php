<?php

use Core\Session;
use Core\Response;

function dd($value)
{

    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}
function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);

    require base_path("Http/Controllers/errors/httpResponseError.php");

    die();
}

function authorize($condition, $status = Response::FORBIDEN)
{

    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $data = [])
{

    extract($data);

    require base_path('Views/' . $path);
}

function login($user)
{
    $_SESSION['user'] = [
        'name' => $user['name'],
        'email' => $user['email']
    ];

    session_regenerate_id(true);
}
function redirect($path)
{

    header("Location: $path");
    die();
}

function old($key, $default = null)
{
    return Session::get('old')[$key] ?? $default;
}
