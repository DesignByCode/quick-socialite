<?php

namespace DesignByCode\QuickSocialite\Listeners\Social;

use DesignByCode\QuickSocialite\Events\Social\GoogleAccountWasCreated;
use DesignByCode\QuickSocialite\Mail\Social\GoogleWelcomeEmail;
use Illuminate\Support\Facades\Mail;


class GoogleLinkEmail
{

    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  GoogleAccountWasCreated  $event
     * @return void
     */
    public function handle(GoogleAccountWasCreated $event)
    {
        Mail::to($event->user)->send(new GoogleWelcomeEmail($event->user));
    }
}
