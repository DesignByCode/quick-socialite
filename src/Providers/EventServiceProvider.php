<?php

namespace DesignByCode\QuickSocialite\Providers;


use DesignByCode\QuickSocialite\Events\Social\GithubAccountWasCreated;
use DesignByCode\QuickSocialite\Listeners\Social\GithubLinkEmail;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{


    /*
     * The event listener mappings for application
     * @var array
     */
    protected $listen = [
        GithubAccountWasCreated::class => [
            GithubLinkEmail::class
        ]
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
