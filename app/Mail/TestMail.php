<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    private $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        //
        $this->data =  $data;
    }

    public function build()
    {
        return $this->subject('Mail From Amrendar')->view('mail')->from('ramjiamrendrapratap@gmail.com','Amrendra P Singh')->with(['data'=>$this->data]);
    }
}
