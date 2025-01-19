<?php

namespace App\Listeners;

use App\Events\apointmentSubmitted;
use App\Notifications\apointmentCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class apointmentSubmittedNotification
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
    public function handle(apointmentSubmitted $event): void
    {
        $user = $event->user_information;
        $doctor = $event->doctor_information;
        $apointment = $event->apointment_information;
        $user->notify(new apointmentCreated($apointment));

        
        // Notification::send($user,new apointmentCreated($apointment));

    }
}
