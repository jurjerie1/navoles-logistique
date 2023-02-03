<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Mailer\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->markdown('emails.orders.shipped');
    // }
    private $create_compte;
    private $entreprise;

    public function __construct($create_compte, $entreprise){
        $this->create_compte = $create_compte;
        $this->entreprise = $entreprise;
    }

    // public function envelope()
    // {
    //     return new Envelope(
    //         subject: 'Navoles Logistique: Vous avez été inviter à rejoindre une entreprise',
    //     );
    // }
    // public function content()
    // {
    //     return new Content(
                        
    //         markdown: 'emails.RegisterRequest',
    //         with: [
    //             'user' => $this->user,
    //         ],
    //     );
    // }

    public function build()
    {
        return $this->markdown('emails.RegisterRequest')
                    ->subject('Navoles Logistique: Vous avez été inviter à rejoindre une entreprise')
                    ->with(['entreprise' =>$this->entreprise, 'create_compte' => $this->create_compte]);
        
        
        
        view('emails.RegisterRequest');
                    // ->text('emails.registered_user_text');
    }
}
