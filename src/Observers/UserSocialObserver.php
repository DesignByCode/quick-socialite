<?php

namespace DesignByCode\QuickSocialite\Observers;

use DesignByCode\QuickSocialite\Models\UserSocial;

class UserSocialObserver
{
    /**
     * @param UserSocial $userSocial
     */
    public function created(UserSocial $userSocial)
    {
       $this->handleRegisterEvent('created', $userSocial);
    }

    /**
     * @param string $event
     * @param UserSocial $userSocial
     */
    private function handleRegisterEvent(string $event, UserSocial $userSocial)
    {
        $class = config("social.events.{$userSocial->service}.{$event}", null);

        if($class === null) {
            return ;
        }
        event(new $class($userSocial->user()->first()));
    }
}
