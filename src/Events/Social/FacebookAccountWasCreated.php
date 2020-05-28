<?php

namespace DesignByCode\QuickSocialite\Events\Social;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FacebookAccountWasCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var User
     */
    public $user;

    /**
     * Create a new event instance.
     * @param User $user
     */
    public function __construct(User $user)
    {

        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }


}
