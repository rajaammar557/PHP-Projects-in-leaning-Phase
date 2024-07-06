<?php

namespace Core\Middleware;

use Core\Response;

class Auth
{
    public static function handle()
    {
        if (!isset($_SESSION['user']) ?? false) {
            abort(Response::FORBIDEN);
            exit();
        }
    }
}
