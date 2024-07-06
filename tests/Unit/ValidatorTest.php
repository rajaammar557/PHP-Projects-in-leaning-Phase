<?php

use Core\Validator;

it('validates a required', function () {
    $result = Validator::email('raj@example.com');
    expect($result)->toBeTrue();
});

