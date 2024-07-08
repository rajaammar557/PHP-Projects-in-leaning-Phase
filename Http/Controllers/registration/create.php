<?php

use Core\Session;
view('registration/create.view.php',[
    'heading' => 'Register for a new account.',
    'errors' => Session::get('errors'),
]);
