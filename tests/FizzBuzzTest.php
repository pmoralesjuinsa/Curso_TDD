<?php


namespace TDD\Tests;


use PHPUnit\Framework\TestCase;
use Src\FizzBuzz;

class FizzBuzzTest extends TestCase
{

    protected $fizzbuzz;

    public function setUp() : void
    {
        $this->fizzbuzz = new FizzBuzz();
    }

    /** @test */
    public function send_one_return_one()
    {
        $result = $this->fizzbuzz->passNumber(1);

        $this->assertEquals(1, $result);

    }

    /** @test */
    public function send_a_and_throw_exception()
    {
        $this->expectExceptionMessage("el valor no es un entero");

        $this->fizzbuzz->passNumber("a");

    }

    /** @test */
    public function send_three_return_fish()
    {
        $result = $this->fizzbuzz->passNumber(3);

        $this->assertEquals("Fizz", $result);

    }

}