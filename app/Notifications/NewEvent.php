<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewEvent extends Notification
{
    use Queueable;

    public $event;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $eventDate = Carbon::parse($this->event->startDate)->isoFormat('MMM Do, YY');
        return (new MailMessage)
                    ->greeting('Dear ' . $notifiable->name)
                    ->subject($this->event->title . ' event at the temple')
                    ->line(' ')
                    ->line('Welcome to Mataji Temple')
                    ->line(' ')
                    ->line('Forthcoming event at the temple is ' . $this->event->title . ', it is on ' 
                            . $eventDate)
                    ->line('For more details:')
                    ->action('Events', url('/events'))
                    ->line(' ')
                    ->line('Thank you for your visit!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
