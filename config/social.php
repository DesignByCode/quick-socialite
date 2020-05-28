<?php

return [


    'services' => [

        'bitbucket' => [
            'name' => 'Bitbucket'
        ],


        'facebook' => [
            'name' => 'Facebook'
        ],


        'github' => [
            'name' => 'Github'
        ],


        'gitlab' => [
            'name' => 'Gitlab'
        ],


        'google' => [
            'name' => 'Google'
        ],


        'linkedin' => [
            'name' => 'LinkedIn'
        ],


        'twitter' => [
            'name' => 'Twitter'
        ],

    ],

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
