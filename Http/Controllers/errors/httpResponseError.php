<?php

use Core\Response;

view('errors/http-response-error.view.php', [
    'code' => $code,
    'errorMessage' => Response::errors($code)
]);
