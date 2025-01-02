<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TeamInvitation extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $role;
    public $link;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $link, $role)
    {
        $this->user = $user;
        $this->link = $link;
        $this->role = $role;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('invitation');
    }
}
