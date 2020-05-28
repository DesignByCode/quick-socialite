<?php

namespace DesignByCode\QuickSocialite\RouteMethods;

class SocialRoutes
{

    /**
     * Route for Social authentication
     * @return \Closure
     */
    public function social()
    {
        return function() {
            $this->get('login/{service}', 'DesignByCode\QuickSocialite\Http\Controllers\SocialController@redirect');
            $this->get('login/{service}/callback', 'DesignByCode\QuickSocialite\Http\Controllers\SocialController@callback');
        };
    }

}
