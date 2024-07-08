<?php

namespace Http\Validations;

use Core\Validator;

class UrlShortnerValidation extends Validation
{

	public function __construct(public array $attributes)
	{
		$this->errors['shortUrl'] =
			Validator::required($attributes['shortUrl'], 'Short Url') ??
			Validator::charChecker($attributes['shortUrl'], ' ', 'Short Url') ??
			Validator::min($attributes['shortUrl'], 3, 'Short Url') ??
			Validator::max($attributes['shortUrl'], 55, 'Short Url') ??

			false;
		if ($this->errors['shortUrl'] == false) {
			unset($this->errors['shortUrl']);
		}

		$this->errors['fullUrl'] =
			Validator::required($attributes['fullUrl'], 'Full Url') ??
			Validator::url($attributes['fullUrl']) ??
			Validator::max($attributes['fullUrl'], 999, 'Full Url') ??
			false;
		if ($this->errors['fullUrl'] == false) {
			unset($this->errors['fullUrl']);
		}


		$this->errors['description'] =
			Validator::required($attributes['description'], 'description') ??
			Validator::min($attributes['description'], 3, 'description') ??
			Validator::max($attributes['description'], 999, 'description') ??
			false;
		if ($this->errors['description'] == false) {
			unset($this->errors['description']);
		}
	}
}
