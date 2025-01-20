<?php

namespace App\Listeners;

use App\Events\assigmentSubmittedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
        $user->notify(new apointmentSubmittedNotification());
    }
}
