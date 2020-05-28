<?php

namespace DesignByCode\QuickSocialite\Listeners\Social;

use App\User;
use DesignByCode\QuickSocialite\Events\Social\BitbucketAccountWasCreated;
use DesignByCode\QuickSocialite\Mail\Social\BitbucketWelcomeEmail;
use Illuminate\Support\Facades\Mail;


class BitbucketLinkEmail
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
     * @param  BitbucketAccountWasCreated  $event
     * @return void
     */
    public function handle(BitbucketAccountWasCreated $event)
    {
        Mail::to($event->user)->send(new BitbucketWelcomeEmail($event->user));
    }
}
