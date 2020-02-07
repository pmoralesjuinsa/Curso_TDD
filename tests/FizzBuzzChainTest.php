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

    /** @test */
    public function send_five_return_buzz()
    {
        $result = $this->fizzBuzzChain->passNumber(5);

        $this->assertEquals("Buzz", $result);
    }

    /** @test */
    public function send_fiveteen_return_fizzbuzz()
    {
        $result = $this->fizzBuzzChain->passNumber(15);

        $this->assertEquals("FizzBuzz", $result);
    }

    /** @test */
    public function send_six_return_fizz()
    {
        $result = $this->fizzBuzzChain->passNumber(6);

        $this->assertEquals("Fizz", $result);
    }

    /** @test */
    public function send_ten_return_buzz()
    {
        $result = $this->fizzBuzzChain->passNumber(10);

        $this->assertEquals("Buzz", $result);
    }

    /** @test */
    public function send_thirty_return_buzz()
    {
        $result = $this->fizzBuzzChain->passNumber(30);

        $this->assertEquals("FizzBuzz", $result);
    }

}