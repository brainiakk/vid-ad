<?php

namespace App\Listeners;

use App\Events\CampaignImpression;
use App\Models\Campaign;
use App\Models\Impression;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ImpressionListener
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
     * @param  CampaignImpression  $event
     * @return void
     */
    public function handle(CampaignImpression $event)
    {
        $chk = Impression::whereUser_id($event->user->id)->whereCampaign_id($event->campaign->id)->first();
        if ($chk) {
            return false;
        }else{
            Impression::create([
                'user_id' => $event->user->id,
                'video_id' => $event->video->id,
                'campaign_id' => $event->campaign->id,
                'viewed' => 1,
                'started' => now(),
                'ended' => Carbon::now()->addSeconds(5),
                'ip_address' => $_SERVER['REMOTE_ADDR'],
            ]);
        }
    }
}
