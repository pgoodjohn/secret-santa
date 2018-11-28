<?php

namespace App\Mail;

use App\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendSecretSanta extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Person
     */
    private $santa;
    /**
     * @var Person
     */
    private $santee;

    /**
     * Create a new message instance.
     *
     * @param Person $santa
     * @param Person $santee
     */
    public function __construct(Participant $santa, Participant $santee)
    {
        $this->santa = $santa;
        $this->santee = $santee;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.santa')->with(['santa' => $this->santa->name, 'santee' => $this->santee->name])->subject("I Cagnacci #SecretSanta");
    }
}
