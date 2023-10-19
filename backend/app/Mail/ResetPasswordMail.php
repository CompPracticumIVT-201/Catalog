<?php

namespace App\Mail;
use Illuminate\Mail\Mailable;

class ResetPasswordMail extends Mailable
{
    public string $resetLink;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): static
    {
        return $this->subject('Восстановление пароля')
            ->markdown('emails.reset_password');
    }

    /**
     * Create a new message instance.
     *
     * @param string $token
     */
    public function __construct(string $email, string $token )
    {
        $this->resetLink = config('app.mail_scheme') . config('app.url') . config('app.forgot_password') . '?email=' . $email . '&token=' . $token;
    }
}
