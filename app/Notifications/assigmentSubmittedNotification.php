<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class assigmentSubmittedNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $assigment_information,$lecture_information,$user_information;
    public function __construct($lecture,$assigment,$user)
    {


        $this->lecture_information=$lecture;
        $this->assigment_information=$assigment;
        $this->user_information=$user;


    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
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
            // "name"=>$this->user_information->name,
            "message"=>"New assigment submitted",
            "assigment_title"=>$this->assigment_information->title,
            "file"=>$this->assigment_information->file,
            "user"=>$this->user_information
        ];
    }
}
