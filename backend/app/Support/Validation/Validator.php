<?php

namespace App\Support\Validation;

class Validator
{
    public static function email(string $value): ?string
    {
        return filter_var(filter_var($value, FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL) ?: null;
    }

    /**
     * @param string $value
     * @return string|null +70000000000
     */
    public static function phone(string $value): ?string
    {
        $value = preg_replace("/\D/", '', $value);

        if (strlen($value) !== 11) {
            return null;
        }

        if ($value[0] === '8') {
            $value = '7' . substr($value, 1);
        }

        if ($value[0] === '7') {
            return '+' . $value;
        }

        return null;
    }

    public static function inn(string $value): ?string
    {
        return preg_match('/^(?:\d{10}|\d{12})$/', $value) ? $value : null;
    }
}
