<?php

namespace DesignByCode\QuickSocialite\Listeners\Social;

use DesignByCode\QuickSocialite\Events\Social\TwitterAccountWasCreated;
use DesignByCode\QuickSocialite\Mail\Social\TwitterWelcomeEmail;
use Illuminate\Support\Facades\Mail;


class TwitterLinkEmail
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
     * @param  TwitterAccountWasCreated  $event
     * @return void
     */
    public function handle(TwitterAccountWasCreated $event)
    {
        Mail::to($event->user)->send(new TwitterWelcoeEmail($event->user));
    }
}
