<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $email;
    protected $name;
    protected $link;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $link)
    {
        //
        $this->email = $user->email;
        $this->name = $user->name;
        $this->link = $link;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emailverify')->with([
            'name' => $this->name,
            'email' => $this->email,
            'link' => $this->link
        ]);
    }
}
