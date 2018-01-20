<?php

namespace App;


class Dollar
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Dollar
    {
        $this->amount *= $multiplier;
        return null;
    }

}
