<?php

namespace DesignByCode\QuickSocialite\Mail\Social;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LinkedInWelcomeEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    /**
     * @var User
     */
    public $user;

    /**
     * BitbucketWelcomeEmail constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {

        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('quick-socialite::emails.social.linkedin.welcome');
    }
}
