<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class apointmentDeclineNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $doctor_information;
    public $apointment_information;
    public function __construct($doctor,$apointment)
    {
        $this->doctor_information=$doctor;
        $this->apointment_information=$apointment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['doctor'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            "message"=>"Sorry Your apointment is being declined try after after sometime",
            "apointment"=>$this->apointment_information,
            "doctor"=>$this->doctor_information

        ];
    }
}
