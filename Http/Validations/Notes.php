<?php

namespace Http\Validations;

use Core\ValidationException;
use Core\Validator;

class Notes
{

	protected $errors = [];

	public function __construct(public array $attributes)
	{
		$this->errors['body'] =
			Validator::required($attributes['body'], 'body') ??
			Validator::max($attributes['body'], 9, 'body') ??
			false;
		if ($this->errors['body'] == false) {
			unset($this->errors['body']);
		}
		if ($attributes['hifi'] ?? false) {
			$this->errors['hifi'] =
				Validator::required($attributes['hifi'], 'hifi') ??
				Validator::max($attributes['hifi'], 9, 'hifi') ??
				false;
			if ($this->errors['hifi'] == false) {
				unset($this->errors['hifi']);
			}
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
