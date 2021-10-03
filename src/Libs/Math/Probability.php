<?php

namespace Tragedy\Mutherfocker\Libs\Math;


class Probability
{
    protected static ?Probability $instance = null;


    public static function getInstance(): Probability
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }


    /**
     * @param int $true 希望为真次数
     * @param int $base 总次数
     * @return bool
     */
    public function getTrue(int $true, int $base): bool
    {
        if (mt_rand(0, $base) < $true) {
            return true;
        }
        return false;
    }
}