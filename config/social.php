<?php

return [

    /*
     * Set the services you want to use to true or false.
     * Middleware will prevent the service to be accessed if 'NOT' true
     */

    'services' => [

        'bitbucket' => [
            'name' => 'Bitbucket',
            'use' => false
        ],


        'facebook' => [
            'name' => 'Facebook',
            'use' => false
        ],


        'github' => [
            'name' => 'Github',
            'use' => false
        ],


        'gitlab' => [
            'name' => 'Gitlab',
            'use' => false
        ],


        'google' => [
            'name' => 'Google',
            'use' => false
        ],


        'linkedin' => [
            'name' => 'LinkedIn',
            'use' => false
        ],


        'twitter' => [
            'name' => 'Twitter',
            'use' => false
        ],

    ],

    /*
     * Custom event can be triggered event section.
     */

    'events' => [

        'bitbucket' => [
            'created' => DesignByCode\QuickSocialite\Events\Social\BitbucketAccountWasCreated::class
        ],

        'facebook' => [
            'created' => DesignByCode\QuickSocialite\Events\Social\FacebookAccountWasCreated::class
        ],


        'github' => [
            'created' => DesignByCode\QuickSocialite\Events\Social\GithubAccountWasCreated::class
        ],


        'gitlab' => [
            'created' => DesignByCode\QuickSocialite\Events\Social\GitlabAccountWasCreated::class
        ],


        'google' => [
            'created' => DesignByCode\QuickSocialite\Events\Social\GoogleAccountWasCreated::class
        ],


        'linkedin' => [
            'created' => DesignByCode\QuickSocialite\Events\Social\LinkedInAccountWasCreated::class
        ],


        'twitter' => [
            'created' => DesignByCode\QuickSocialite\Events\Social\TwitterAccountWasCreated::class
        ],

    ]



];
