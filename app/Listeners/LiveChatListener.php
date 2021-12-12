<?php

namespace App\Listeners;

use App\Events\LiveChatEvent;
use App\Models\Chats;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LiveChatListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LiveChat  $event
     * @return void
     */
    public function handle(LiveChatEvent $event)
    {
        $send = Chats::create([
            'user_id'=> $event->user->id,
            'video_id'=> $event->video->id,
            'message'=> $event->message,
        ]);
        if ($send){
            return response()->json('sent', 200);
        }else{
            return response()->json('not sent', 422);
        }
    }
}
