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

}