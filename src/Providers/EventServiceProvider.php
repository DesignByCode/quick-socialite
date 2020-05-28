<?php

namespace DesignByCode\QuickSocialite\Providers;


use DesignByCode\QuickSocialite\Events\Social\BitbucketAccountWasCreated;
use DesignByCode\QuickSocialite\Events\Social\FacebookAccountWasCreated;
use DesignByCode\QuickSocialite\Events\Social\GithubAccountWasCreated;
use DesignByCode\QuickSocialite\Events\Social\GitlabAccountWasCreated;
use DesignByCode\QuickSocialite\Events\Social\GoogleAccountWasCreated;
use DesignByCode\QuickSocialite\Events\Social\LinkedInAccountWasCreated;
use DesignByCode\QuickSocialite\Events\Social\TwitterAccountWasCreated;
use DesignByCode\QuickSocialite\Listeners\Social\BitbucketLinkEmail;
use DesignByCode\QuickSocialite\Listeners\Social\FacebookLinkEmail;
use DesignByCode\QuickSocialite\Listeners\Social\GithubLinkEmail;
use DesignByCode\QuickSocialite\Listeners\Social\GitlabLinkEmail;
use DesignByCode\QuickSocialite\Listeners\Social\GoogleLinkEmail;
use DesignByCode\QuickSocialite\Listeners\Social\LinkedInLinkEmail;
use DesignByCode\QuickSocialite\Listeners\Social\TwitterLinkEmail;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{


    /*
     * The event listener mappings for application
     * @var array
     */
    protected $listen = [
        BitbucketAccountWasCreated::class => [
            BitbucketLinkEmail::class
        ],
        FacebookAccountWasCreated::class => [
            FacebookLinkEmail::class
        ],
        GithubAccountWasCreated::class => [
            GithubLinkEmail::class
        ],
        GitlabAccountWasCreated::class => [
            GitlabLinkEmail::class
        ],
        GoogleAccountWasCreated::class => [
            GoogleLinkEmail::class
        ],
        LinkedInAccountWasCreated::class => [
            LinkedInLinkEmail::class
        ],
        TwitterAccountWasCreated::class => [
            TwitterLinkEmail::class
        ],
    ];

    /**
     * Register Events for package
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

}
