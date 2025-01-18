<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class apointmentSubmitted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user_information;
    public $doctor_information;
    public $apointment_information;

    /**
     * Create a new event instance.
     */
    public function __construct($user,$doctor,$apointment)
    {
        $this->user_information = $user;
        $this->doctor_information=$doctor;
        $this->apointment_information = $apointment;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
