<?php

namespace App\Listeners;

use App\Events\apointmentSubmitted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class apointmentSubmittedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(apointmentSubmitted $event): void
    {
        //
    }
}
