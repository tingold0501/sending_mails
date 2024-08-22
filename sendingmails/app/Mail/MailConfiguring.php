<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailConfiguring extends Mailable
{
    use Queueable, SerializesModels;
    public $mail_configuring_data;
    /**
     * Create a new message instance.
     */
    public function __construct($mail_configuring_data)
    {
        $this->mail_configuring_data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mail Configuring',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content()
    {
        // return new Content(
        //     view: 'mail.mail_configuring',
        // );
        return $this->view('mail.mail_configuring')->with('mail_configuring_data', $this->mail_configuring_data);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
