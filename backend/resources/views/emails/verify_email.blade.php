@component('mail::message')
    Пожалуйста, подтвердите ваш email, кликнув на ссылку ниже:

    {!! $verifyLink !!}

    С уважением, {{ config('app.name') }}
@endcomponent
