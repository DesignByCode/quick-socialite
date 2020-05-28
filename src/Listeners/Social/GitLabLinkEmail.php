<?php

namespace DesignByCode\QuickSocialite\Listeners\Social;

use App\User;
use DesignByCode\QuickSocialite\Events\Social\GitlabAccountWasCreated;
use DesignByCode\QuickSocialite\Mail\Social\GitlabWelcomeEmail;
use Illuminate\Support\Facades\Mail;


class GitlabLinkEmail
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
     * @param  GitlabAccountWasCreated  $event
     * @return void
     */
    public function handle(GitlabAccountWasCreated $event)
    {
        Mail::to($event->user)->send(new GitlabWelcomeEmail($event->user));
    }
}
