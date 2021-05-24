<?php

namespace App\Listeners;

use App\Mail\invoiceMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class sendInvoiceMailListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //

        Mail::to($event->data['email'])->send(new invoiceMail($event->data['email'],$event->order,$event->receiving_branch,$event->delivery_branch,$event->reciving_date,$event->delivery_date));

    }
}
