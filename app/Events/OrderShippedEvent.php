<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderShippedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $orderSent;

    public $orderIdSent;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($order, $orderIdSent)
    {
        //
        $this->orderSent = $order;
        $this->orderIdSent = $orderIdSent;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
