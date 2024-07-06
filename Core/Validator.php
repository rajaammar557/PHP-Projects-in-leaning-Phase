<?php

namespace Core;

class Validator
{

    public static function required($value, $fieldName = null)
    {
        if (strlen(trim($value)) === 0) {
            return "The {$fieldName} is required.";
        }
    }

    public static function min($value, int $minlength, $fieldName = null)
    {
        if (strlen(trim($value)) > 0 && strlen(trim($value)) < $minlength) {
            return "The {$fieldName} cannot be less than {$minlength} characters";
        }
    }

    public static function max($value, int $maxlength, $fieldName = null)
    {
        if (strlen(trim($value)) > $maxlength) {
            return "The {$fieldName} cannot be more than {$maxlength} characters";
        }
    }


    public static function email($value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return "Please enter a valid email address";
        }
    }

}
