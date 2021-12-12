<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CampaignImpression
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $video;
    public $campaign;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $video, $campaign)
    {
        $this->user = $user;
        $this->video = $video;
        $this->campaign = $campaign;
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
