<?php 

namespace Http\Validations;

use Core\Validator;
use Core\ValidationException;

class Validation
{
    
	protected $errors = [];


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
