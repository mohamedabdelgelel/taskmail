<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use EpalSolutions\Settings\Models\Setting;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $message)
    {
        $this->title = $title;
        $this->message = $message;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['msg'] = $this->message;
        $data['title'] = $this->title;

        return $this->from('info@task.com')->view('templates.mail')->with($data)->subject($this->title);
    }
}
