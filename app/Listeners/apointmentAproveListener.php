<?php

namespace App\Listeners;

use App\Events\apointmentAproveEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class apointmentAproveListener
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
    public function handle(apointmentAproveEvent $event): void
    {
        dd("apointment aproved");
    }
}
