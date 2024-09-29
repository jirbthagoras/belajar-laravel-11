<?php

namespace App\Helper;

use Illuminate\Support\Facades\Log;

class MathHelper
{
    /**
     * Create a new class instance.
     */
        static function add(int $a, int $b): int
        {
            return once(function () use ($a, $b) {
               Log::info("Adding $a and $b");
                return $a + $b;
            });
        }
}
