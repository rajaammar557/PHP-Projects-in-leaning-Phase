<?php

use Core\Session;

view("url_shortner/create.view.php", [
    'heading' => 'Create Short Link',
    'errors' => Session::get('errors'),
    'button' => 'Create'

]);

