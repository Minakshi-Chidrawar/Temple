<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeNewSubsciberMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.new-subscriber')
                    ->subject('Welcome to the Adhya Shakti Mataji Temple')
                    ->from('matajitemple@noreply.com', 'Adhya Shakti Mataji Temple')
                    ->with([
                        'name' => $this->user->name,
                    ]);
    }
}
