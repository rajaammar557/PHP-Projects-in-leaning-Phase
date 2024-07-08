<?php

namespace Http\Validations;

use Core\Validator;

class NotesValidation extends Validation
{

	public function __construct(public array $attributes)
	{
		$this->errors['title'] =
			Validator::required($attributes['title'], 'title') ??
			Validator::max($attributes['title'], 55, 'title') ??
			false;
		if ($this->errors['title'] == false) {
			unset($this->errors['title']);
		}

		$this->errors['body'] =
			Validator::required($attributes['body'], 'body') ??
			Validator::max($attributes['body'], 999, 'body') ??
			false;
		if ($this->errors['body'] == false) {
			unset($this->errors['body']);
		}
	}
}
