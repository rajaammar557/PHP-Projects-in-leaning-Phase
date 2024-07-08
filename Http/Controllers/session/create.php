<?php

use Core\Session;

view('session/create.view.php', [
    'heading' => 'Login to get more acess.',
    'errors' => Session::get('errors'),
]);
