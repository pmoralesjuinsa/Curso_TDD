<?php

namespace TDD\Tests;


use Src\StringCalculator;

class StringCalculatorTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function send_string_numbers_separated_commas_and_return_their_sum()
    {
        $calculator = new StringCalculator();
        $result = $calculator->Add("1,2");

        $this->assertEquals(3, $result);
    }

    /** @test */
    public function send_empty_string_and_return_zero()
    {
        $calculator = new StringCalculator();
        $result = $calculator->Add("");

        $this->assertEquals(0, $result);
    }

}


