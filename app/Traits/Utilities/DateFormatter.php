<?php

namespace App\Traits\Utilities;

use Carbon\Carbon;

trait DateFormatter
{
    /**
     * Convert a date to a simple format
     *
     * @param $date
     * @return string
     */
    public function simpleDate($date): string
    {
        return Carbon::parse($date) -> format('d-m-Y H:i:s');
    }

    /**
     * Convert a date to a timestamp
     *
     * @param $date
     * @return int
     */
    public function timestamp($date): int
    {
        return Carbon::parse($date) -> timestamp;
    }
}