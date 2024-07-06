<?php

namespace Core\Middleware;

class Guest
{
    public static function handle()
    {
        if ($_SESSION['user'] ?? false) {
            header('Location: /');
            exit();
        }
    }
}
