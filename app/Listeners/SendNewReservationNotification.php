<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\NewReservationSent;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\NewOrderNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewReservationNotification;

class SendNewReservationNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewReservationSent  $event
     * @return void
     */
    public function handle(NewReservationSent $event)
    {
        info("order was sent successfully ");


        $admins = User::where('role','admin')->get();

        Notification::send($admins, new NewReservationNotification($event->order));
    }
}
