<?php

use Core\Session;

view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => Session::get('errors'),

]);

