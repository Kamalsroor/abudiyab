<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class sendInvoiceMailEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $data;
    public $order;
    public $receiving_branch;
    public $delivery_branch;
    public $reciving_date;
    public $delivery_date;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($data,$order,$receiving_branch,$delivery_branch,$reciving_date,$delivery_date)
    {
        //
        $this->data=$data;
        $this->order=$order;
        $this->receiving_branch=$receiving_branch;
        $this->delivery_branch=$delivery_branch;
        $this->reciving_date=$reciving_date;
        $this->delivery_date=$delivery_date;
    }

}
