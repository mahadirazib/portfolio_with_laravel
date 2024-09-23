<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailFromViewer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $send_from = null;
     public $subject = null;
     public $content = null;

    public function __construct($data)
    {
        $this->send_from = $data['email'];
        $this->subject = $data['subject'];
        $this->content = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contact-mail')
                    ->with(['content' => $this->content, 'mail_from' => $this->send_from])
                    ->from($this->send_from)
                    ->subject($this->subject);
                    
    }
}
