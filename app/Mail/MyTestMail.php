<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $promo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($promo)
    {
        $this->promo = $promo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('fvckingdude@gmail.com', 'Sinema Untan')
                    ->with(['message' => $this])
                    ->subject('Promo '.$this->promo->judul)
                    ->view('admin.email.myTestMail');
    }
}