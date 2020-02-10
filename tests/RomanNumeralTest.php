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
        $convertedNumber = $this->romanNumeral->getRomanFromNumber(1);

        $this->assertSame("I", $convertedNumber);
    }

    /** @test */
    public function send_three_return_iii()
    {
        $convertedNumber = $this->romanNumeral->getRomanFromNumber(3);

        $this->assertSame("III", $convertedNumber);
    }

    /** @test */
    public function send_four_return_iv()
    {
        $convertedNumber = $this->romanNumeral->getRomanFromNumber(4);

        $this->assertSame("IV", $convertedNumber);
    }


    /** @test */
    public function send_ninety_return_xcix()
    {
        $convertedNumber = $this->romanNumeral->getRomanFromNumber(99);

        $this->assertSame("XCIX", $convertedNumber);
    }


    /** @test */
    public function send_nine_hundred_and_fifty_return_cml()
    {
        $convertedNumber = $this->romanNumeral->getRomanFromNumber(950);

        $this->assertSame("CML", $convertedNumber);
    }

    /** @test */
    public function send_ix__return_nine()
    {
        $convertedNumber = $this->romanNumeral->getNumberFromRoman("IX");

        $this->assertSame(9, $convertedNumber);
    }

    /** @test */
    public function send_dxxi__return_521()
    {
        $convertedNumber = $this->romanNumeral->getNumberFromRoman("DXXI");

        $this->assertSame(521, $convertedNumber);
    }

    /** @test */
    public function send_mmmcmliv__return_3954()
    {
        $convertedNumber = $this->romanNumeral->getNumberFromRoman("MMMCMLIV");

        $this->assertSame(3954, $convertedNumber);
    }

}