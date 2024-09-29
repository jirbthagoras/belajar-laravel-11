<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\DiagnosingHealth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

class RedisCheckEventListener
{

    /**
     * Handle the event.
     */
    public function handle(DiagnosingHealth $event): void
    {

    }
}
