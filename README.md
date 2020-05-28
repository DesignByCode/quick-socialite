
# Quick Socialite 

The package will allow you to setup Social Authentication super fast by using **Laravel-Socialite**.


## Installation

Create new __Laravel__ project with laravel-cli or composer create command.
Now in install ```laravel/ui``` or ```designbycode/lunaui```.
Once  authentication is setup run the following command to install __QuickSocialte__.

```
$ composer require designbycode/quick-socialite
```
### Preparing Assets
After installation is complete you need to publish some config files. Do this by running the following command.


```php
php artisan vendor:publish --provider="DesignByCode\QuickSocialite\Providers\QuickSocialiteServiceProvider" --tag="quick-socialite-config"
```

### Config Settings 

Now that the config file are published, open the social.php file and mark the services you want to **use** to true

```php

    'services' => [

        'bitbucket' => [
            'name' => 'Bitbucket',
            'use' => false
        ],


        'facebook' => [
            'name' => 'Facebook',
            'use' => true
        ],


        'github' => [
            'name' => 'Github',
            'use' => true
        ],


```


### Setting up migrations

Now it is time to run the migration command to setup all the necessary fields for avatar and linking social accounts.

```php
php artisan migrate
```

### Environment Variables

You need to add all the necessary variables for the social network you want to use. 

> **Only use the variables for the social network you want to use.**

```php

BITBUCKET_CLIENT_ID=
BITBUCKET_CLIENT_SECRET=
BITBUCKET_CALLBACK=

FACEBOOK_CLIENT_ID=
FACEBOOK_CLIENT_SECRET=
FACEBOOK_CALLBACK=

GITHUB_CLIENT_ID=
GITHUB_CLIENT_SECRET=
GITHUB_CALLBACK=

GITLAB_CLIENT_ID=
GITLAB_CLIENT_SECRET=
GITLAB_CALLBACK=

GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_CALLBACK=

LINKEDIN_CLIENT_ID=
LINKEDIN_CLIENT_SECRET=
LINKEDIN_CALLBACK=

TWITTER_CLIENT_ID=
TWITTER_CLIENT_SECRET=
TWITTER_CALLBACK=

```

### Setting up OAuth App
When setting up the app on the service you want to use you need to give a callback like follow.

```text
https://your-website.com/login/facebook/callback
``` 


