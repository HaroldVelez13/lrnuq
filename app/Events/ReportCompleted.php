<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ReportCompleted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     * @param $report
     * @param $user
     *
     * @return void
     */
    public $report;
    public $user;

    public function __construct($report,$user)
    {
        //
        $this->report = $report;
        $this->user = $user;
    }

    /**
    * Get the channels the event should broadcast on.
    *
    * @return \Illuminate\Broadcasting\Channel|array
    */

    public function broadcastOn()
    {
        return new Channel('reportCompleted');
    }

    public function broadcastAs(){
        return 'report-completed';
    }

    public function broadcastWith()
    {
        return ['user' => $this->user,'report'=>$this->report];
    }
}
