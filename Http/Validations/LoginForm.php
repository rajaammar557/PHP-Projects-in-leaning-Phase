<?php

namespace Http\Validations;

use Core\Auth;
use Core\ValidationException;
use Core\Validator;

class LoginForm extends Validation
{


	public function __construct(public array $attributes)
	{

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
