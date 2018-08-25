<?php

namespace App;

use App\Dollar;
use App\Franc;

abstract class Money
{
    protected $amount;
    protected $currency;

    /**
     * @param integer $amount
     * @return Money
     */
    public static function dollar(int $amount): Money
    {
        return new Dollar($amount);
    }

    /**
     * @param integer $amount
     * @return Money
     */
    public static function franc(int $amount): Money
    {
        return new Franc($amount);
    }

    /**
     * @param integer $multiplier
     * @return Money
     */
    abstract public function times(int $multiplier): Money;

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }

    /**
     * @return integer
     */
    public function amount(): int
    {
        return $this->amount;
    }

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money): bool
    {
        return $this instanceof $money
            && $this->amount === $money->amount;
    }
}
