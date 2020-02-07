<?php


namespace TDD\Tests;


use PHPUnit\Framework\TestCase;
use Src\FizzBuzzChain;


class FizzBuzzChainTest extends TestCase
{

    /** @test */
    public function send_one_return_one()
    {
        $fizzBuzzChain = new FizzBuzzChain();

        $result = $fizzBuzzChain->passNumber(1);

        $this->assertEquals(1, $result);

    }

    /** @test */
    public function send_a_return_exception()
    {
        $fizzBuzzChain = new FizzBuzzChain();

        $number = "a";

        $this->expectExceptionMessage("$number no es un número");

        $fizzBuzzChain->passNumber($number);

    }

}