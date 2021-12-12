<?php

namespace App\Listeners;

use App\Events\UserTypingEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserTypingListener
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
     * @param  UserTypingEvent  $event
     * @return void
     */
    public function handle(UserTypingEvent $event)
    {
        //
    }
}
