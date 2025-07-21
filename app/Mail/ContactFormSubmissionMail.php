<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactFormSubmission; 

class ContactFormSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * The form submission instance.
     */
    public ContactFormSubmission $contactFormSubmission;

    /**
     * Create a new message instance.
     */
    public function __construct(ContactFormSubmission $contactFormSubmission)
    {
        $this->contactFormSubmission = $contactFormSubmission;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Form Submission Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
             view: 'mail.contact-form-submission',
        );
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
