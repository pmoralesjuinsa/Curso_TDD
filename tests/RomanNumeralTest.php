<?php


namespace TDD\Tests;


use PHPUnit\Framework\TestCase;
use Src\RomanNumeral;

class RomanNumeralTest extends TestCase
{

    protected $romanNumeral;

    function setUp() : void
    {
        $this->romanNumeral = new RomanNumeral();
    }

    /** @test */
    public function send_one_return_i()
    {
        $convertedNumber = $this->romanNumeral->getRomanNumber(1);

        $this->assertSame("I", $convertedNumber);
    }

    /** @test */
    public function send_five_return_v()
    {
        $convertedNumber = $this->romanNumeral->getRomanNumber(5);

        $this->assertSame("V", $convertedNumber);
    }

    /** @test */
    public function send_two_return_ii()
    {
        $convertedNumber = $this->romanNumeral->getRomanNumber(2);

        $this->assertSame("II", $convertedNumber);
    }

    /** @test */
    public function send_three_return_iii()
    {
        $convertedNumber = $this->romanNumeral->getRomanNumber(3);

        $this->assertSame("III", $convertedNumber);
    }


}