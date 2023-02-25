<?php

namespace App\Service;

class Calculator
{
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function diff($a, $b)
    {
        return $a - $b;
    }

    public function product($a, $b)
    {
        return $a * $b;
    }

    public function quotient($a, $b)
    {
        return $a / $b;
    }
}
