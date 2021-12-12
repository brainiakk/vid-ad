<?php

namespace App\Providers;

use App\Events\CampaignImpression;
use App\Events\LiveChatEvent;
use App\Events\UserTypingEvent;
use App\Listeners\ImpressionListener;
use App\Listeners\LiveChatListener;
use App\Listeners\UserTypingListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        CampaignImpression::class => [
            ImpressionListener::class,
        ],
        LiveChatEvent::class => [
            LiveChatListener::class,
        ],
        UserTypingEvent::class => [
            UserTypingListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
