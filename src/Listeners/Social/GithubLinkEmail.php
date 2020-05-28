<?php

namespace DesignByCode\QuickSocialite\Listeners\Social;

use App\User;
use DesignByCode\QuickSocialite\Events\Social\GithubAccountWasCreated;
use DesignByCode\QuickSocialite\Mail\Social\GithubWelcomeEmail;
use Illuminate\Support\Facades\Mail;


class GithubLinkEmail
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
     * @param  GithubAccountWasCreated  $event
     * @return void
     */
    public function handle(GithubAccountWasCreated $event)
    {
        Mail::to($event->user)->send(new GithubWelcomeEmail($event->user));
    }
}
