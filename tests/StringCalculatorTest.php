<?php

namespace TDD\Tests;


use Src\StringCalculator;

class StringCalculatorTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function send_string_numbers_separated_commas_and_return_their_sum()
    {
        $calculator = new StringCalculator();
        $result = $calculator->sum("1,2");

        $this->assertEquals(3, $result);
    }

    /** @test */
    public function send_empty_string_and_return_zero()
    {
        $calculator = new StringCalculator();
        $result = $calculator->sum("");

        $this->assertEquals(0, $result);
    }

    /** @test */
    public function send_string_two_return_two()
    {
        $calculator = new StringCalculator();
        $result = $calculator->sum("2");

        $this->assertEquals(2, $result);
    }

    /** @test */
    public function send_one_two_four_ten_return_seventeen()
    {
        $calculator = new StringCalculator();
        $result = $calculator->sum("1,2,4,10");

        $this->assertEquals(17, $result);
    }

}


