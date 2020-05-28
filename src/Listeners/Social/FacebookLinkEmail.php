<?php

namespace DesignByCode\QuickSocialite\Listeners\Social;

use DesignByCode\QuickSocialite\Events\Social\FacebookAccountWasCreated;
use DesignByCode\QuickSocialite\Mail\Social\FacebookWelcomeEmail;
use Illuminate\Support\Facades\Mail;


class FacebookLinkEmail
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
     * @param  FacebookAccountWasCreated  $event
     * @return void
     */
    public function handle(FacebookAccountWasCreated $event)
    {
        Mail::to($event->user)->send(new FacebookWelcomeEmail($event->user));
    }
}
