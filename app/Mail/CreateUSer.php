<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateUSer extends Mailable
{
    use Queueable, SerializesModels;

    public $template;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($template, $data)
    {
        //
        $this->data = $data;
        $this->template = $template;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.notifications.'.$this->template)->with([
            'data' => $this->data
        ]);;
    }
}
