<?php

namespace App\Listeners;

use App\Events\SendEmailCreateUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Models\Setting;
use App\Mail\CreateUser;

class SendEmailCreateUserNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SendEmailCreateUser  $event
     * @return void
     */
    public function handle(SendEmailCreateUser $event)
    {
        $template = 'client';
        $email = $event->data[1]->email;
        if($event->data[0]){
          //consulta email admin
          $config = Setting::first();
          $template = 'admin';
          $email = $config->email_admin;
        }
        Mail::to($email)->send(new CreateUser($template, $event->data[1]));

    }
}
