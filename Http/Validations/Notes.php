<?php

namespace Http\Validations;

use Core\ValidationException;
use Core\Validator;

class Notes extends Validation
{

	public function __construct(public array $attributes)
	{
		$this->errors['body'] =
			Validator::required($attributes['body'], 'body') ??
			Validator::max($attributes['body'], 999, 'body') ??
			false;
		if ($this->errors['body'] == false) {
			unset($this->errors['body']);
		}
	}
}
