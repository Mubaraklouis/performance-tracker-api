<?php

namespace App\Listeners;

use App\Events\apointmentAproveEvent;
use App\Notifications\apointmentAprovedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class apointmentAproveListener
{
    /**
     * Create the event listener.
     */

    public function __construct()
    {

    }

    /**
     * Handle the event.
     */
    public function handle(apointmentAproveEvent $event): void
    {
        $user = $event->user_information;
        $doctor = $event->doctor_information;
        $apointment = $event->apointment_information;

        $user->notify(new apointmentAprovedNotification($doctor,$apointment));


    }
}
