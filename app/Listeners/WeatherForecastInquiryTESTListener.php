<?php

namespace App\Listeners;

use App\Events\WeatherForecastInquiryTESTEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WeatherForecastInquiryTESTListener
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
     * @param  \App\Events\WeatherForecastInquiryTESTEvent  $event
     * @return void
     */
    public function handle(WeatherForecastInquiryTESTEvent $event)
    {
        //
    }
}
