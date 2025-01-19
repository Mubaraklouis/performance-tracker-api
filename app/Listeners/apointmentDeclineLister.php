<?php

namespace App\Listeners;

use App\Events\apointmentDeclineEvent;
use App\Notifications\apointmentDeclineNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class apointmentDeclineLister
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
    public function handle(apointmentDeclineEvent $event): void
    {
        $user = $event->user_information;
        $apointment = $event->apointment_information;
        $doctor = $event->doctor_information;
        $user->notify(new apointmentDeclineNotification($doctor,$apointment));
    }
}
