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
    public function get_one_return_i()
    {
        $convertedNumber = $this->romanNumeral->getRomanNumber(1);

        $this->assertSame("i", $convertedNumber);
    }
}