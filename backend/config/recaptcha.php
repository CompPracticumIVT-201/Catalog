<?php

return [
    'enabled' => env('RECAPTCHA_ENABLED', true),
    'key'     => env('RECAPTCHA_TOKEN'),
    'secret'  => env('RECAPTCHA_SECRET_TOKEN'),
];
