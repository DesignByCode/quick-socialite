<?php

namespace DesignByCode\QuickSocialite\Listeners\Social;


use DesignByCode\QuickSocialite\Events\Social\LinkedInAccountWasCreated;
use DesignByCode\QuickSocialite\Events\Social\TwitterAccountWasCreated;
use DesignByCode\QuickSocialite\Mail\Social\TwitterWelcomeEmail;
use Illuminate\Support\Facades\Mail;


class LinkedInLinkEmail
{

    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {

    }


    /**
     * @param LinkedInAccountWasCreated $event
     */
    public function handle(LinkedInAccountWasCreated $event)
    {
        Mail::to($event->user)->send(new LinkedInLinkEmail($event->user));
    }
}
