<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ModifMissionUser extends Mailable
{
    use Queueable, SerializesModels;

    private $mission;
    private $user;
    private $justification;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mission)
    {
        $this->mission = $mission;
        $this->user = $mission->user->pseudo;
        // dd($this->user);

        // $this->justification = $justification;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.ModifMissionUser')
                    ->subject('Navoles Logistique: Votre Mission doit être modifié')
                    ->with(['mission' =>$this->mission, 'user' => $this->user]);
    }
}
