<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationAccountMail;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailVerification
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if($event->user->email_verified_at == null){
            // Mail::to($event->user->email)->send(new VerificationAccountMail($event->user));
            $event->user->notify(new VerifyEmail);
        }
    }
}
