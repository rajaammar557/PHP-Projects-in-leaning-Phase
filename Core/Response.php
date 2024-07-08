<?php

namespace Core;

class Response
{
    const NOT_FOUND = 404;
    const FORBIDEN = 403;

    public static function errors($code)
    {
        $errors = [
            404 => 'Sorry Page not found',

            403 => 'Unauthorized',
        ];

        return $errors[$code];
    }
}
