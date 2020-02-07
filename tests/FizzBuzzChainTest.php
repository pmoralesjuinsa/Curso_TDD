<?php


namespace TDD\Tests;


use PHPUnit\Framework\TestCase;
use Src\FizzBuzzChain;


class FizzBuzzChainTest extends TestCase
{

    protected $fizzBuzzChain;

    function setUp(): void
    {
        $this->fizzBuzzChain = new FizzBuzzChain();
    }

    /** @test */
    public function send_one_return_one()
    {
        $result = $this->fizzBuzzChain->passNumber(1);

        $this->assertEquals(1, $result);

    }

    /** @test */
    public function send_a_return_exception()
    {
        $number = "a";

        $this->expectExceptionMessage("$number no es un número");

        $this->fizzBuzzChain->passNumber($number);

    }

    /** @test */
    public function send_three_return_fizz()
    {
        $result = $this->fizzBuzzChain->passNumber(3);

        $this->assertEquals("Fizz", $result);

    }

//    /** @test */
//    public function send_five_return_buzz()
//    {
//
//    }

}