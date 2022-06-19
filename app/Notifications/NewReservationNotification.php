<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Broadcasting\PrivateChannel;
use Auth;

class NewReservationNotification extends Notification
{
    use Queueable;
    public $reservation;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            "name" => $this->reservation->user->nom." ".$this->reservation->user->prenom,
            "email" => $this->reservation->user->email,
            "link" => route(Auth::user()->prefix().'reservations.index', ['reservation' => $this->reservation->id]),
            "reservationId" => $this->reservation->id,
        ];
    }

    public function toBroadcast($notifiable){
        return new BroadcastMessage([
            "body" => view('components.reservation_notif', [
                'name' => $this->reservation->user->firstName." ".$this->reservation->user->lastName,
                'email' => $this->reservation->user->email,
                'reservationId' => $this->reservation->id,
                'created_at' => date_format($this->reservation->created_at,"Y/m/d H:i:s")
            ])->render(),
            "animated_notif" => view('components.notif_block_reservation', [
                'name' => $this->reservation->user->firstName." ".$this->reservation->user->lastName,
                'email' => $this->reservation->user->email,
                'reservationId' => $this->reservation->id,
                'created_at' => date_format($this->reservation->created_at,"Y/m/d H:i:s")
            ])->render() 
        ]);
    }

    public function broadcastOn()
    {
        return new PrivateChannel('reservations');
        // return new PrivateChannel('App.Models.User.'.$this->user->id);
    }
}
