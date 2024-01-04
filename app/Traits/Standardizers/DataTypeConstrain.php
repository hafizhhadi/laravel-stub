<?php

namespace App\Traits\Standardizers;

trait DataTypeConstrain
{
    /**
     * Make sure the value is a string bool
     *
     * @param bool $value
     * @return bool
     */
    public function boolean(bool $value): bool
    {
        return $value == 0 ? false : true;
    }
}
