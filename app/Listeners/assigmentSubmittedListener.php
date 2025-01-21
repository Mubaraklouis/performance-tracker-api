<?php

namespace App\Listeners;

use App\Events\assigmentSubmittedEvent;
use App\Notifications\assigmentSubmittedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class assigmentSubmittedListener
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
    public function handle(assigmentSubmittedEvent $event): void
    {
        $users= $event->lecture_information;
        // $users->notify(new apointmentSubmittedNotification());
        $assigment = $event->assigment_information;
        $lecture = $event->lecture_information;

        Notification::send($users, new assigmentSubmittedNotification($lecture,$assigment));
    }
}
