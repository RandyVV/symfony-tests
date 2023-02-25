<?php

namespace App\Tests\Service;

use App\Service\Calculator;
use Error;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CalculatorTest extends KernelTestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = self::getContainer()->get(Calculator::class);
    }

    public function test_it_should_return_the_sum_of_two_numbers(): void
    {
        $a = 10;
        $b = 5;

        $sum = $this->calculator->sum($a, $b);

        $this->assertEquals(15, $sum);
    }

    public function test_it_should_throw_an_error_when_given_two_texts(): void
    {
        $this->expectException(Error::class);

        $a = "chat";
        $b = "chien";

        $this->calculator->sum($a, $b);
    }

    public function test_it_should_return_the_diff_of_two_numbers(): void
    {
        $a = 10;
        $b = 5;

        $diff = $this->calculator->diff($a, $b);

        $this->assertEquals($a - $b, $diff);
    }

    public function test_it_should_return_the_product_of_two_numbers(): void
    {
        $a = 33;
        $b = 94;

        $product = $this->calculator->product($a, $b);

        $this->assertEquals($a * $b, $product);
    }

    public function test_it_should_return_the_quotient_of_two_numbers(): void
    {
        $a = 33;
        $b = 94;

        $quotient = $this->calculator->quotient($a, $b);

        $this->assertEquals($a / $b, $quotient);
    }
}
