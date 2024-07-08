<?php

namespace Http\Validations;

use Core\Validator;
use Http\Validations\Validation;

class RegisterationValidation extends Validation
{

    protected $errors = [];

    public function __construct(public array $attributes)
    {
        $this->errors['name'] =
            Validator::required($attributes['name'], 'name') ??
            Validator::min($attributes['name'], 3, 'name') ??
            Validator::max($attributes['name'], 55, 'name') ??
            false;

        if ($this->errors['name'] == false) {
            unset($this->errors['name']);
        }

        $this->errors['email'] =
            Validator::required($attributes['email'], 'email') ??
            Validator::email($attributes['email']) ??
            false;

        if ($this->errors['email'] == false) {
            unset($this->errors['email']);
        }

        $this->errors['password'] =
            Validator::required($attributes['password'], 'password') ??
            false;

        if ($this->errors['password'] == false) {
            unset($this->errors['password']);
        }
    }
}
