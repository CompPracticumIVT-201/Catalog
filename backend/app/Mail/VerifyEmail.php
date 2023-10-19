<?php

namespace App\Mail;
use Illuminate\Mail\Mailable;

class VerifyEmail extends Mailable
{
    public string $verifyLink;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): static
    {
        return $this->subject('Подтверждение электронной почты')
            ->markdown('emails.verify_email');
    }

    /**
     * Create a new message instance.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->verifyLink = config('app.mail_scheme') . config('app.url') . config('app.confirm_email')   . $token;
    }
}
