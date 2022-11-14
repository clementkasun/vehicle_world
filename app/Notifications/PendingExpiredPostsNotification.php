<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PendingExpiredPostsNotification extends Notification
{

    private $to;
    private $pending_exp_date;
    private $post_title;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user, $exp_date, $post_title)
    {
        $this->user = $user;
        $this->post_title = $post_title;
        $this->exp_date = $exp_date;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hi!')
            ->line('Your post with titled as ' . $this->post_title . ' will be deleted at ' . $this->exp_date . ' please renew it!')
            ->action('Renew Now', url('./user_profile'))
            ->line('Thank you for using vehiauto.com!');
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
            'user_id' => $this->user->id,
            'user_name' => $this->user->user_name,
            'email' => $this->user->email,
            'action' => 'Your post with titled as ' . $this->post_title . ' will be deleted at ' . $this->exp_date . ' please renew it!'
        ];
    }
}
