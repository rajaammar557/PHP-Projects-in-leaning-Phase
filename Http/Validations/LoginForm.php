<?php

namespace Http\Validations;

use Core\Auth;
use Core\ValidationException;
use Core\Validator;

class LoginForm
{

	protected $errors = [];

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

	public static function validate($attributes)
	{
		$instance = new static($attributes);

		return $instance->failed() ? $instance->throw() : $instance;
	}

	public function throw()
	{
		ValidationException::throw($this->errors(), $this->attributes);
	}

	public function failed()
	{

		return empty(!$this->errors);
	}

	public function errors()
	{
		return $this->errors;
	}

	public function error($field, $error)
	{
		$this->errors[$field] = $error;
		return $this;
	}
}
