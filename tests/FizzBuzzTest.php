<?php


namespace TDD\Tests;


use Src\FizzBuzz;

class FizzBuzzTest
{

    /** @test */
    public function send_one_return_one()
    {
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->passNumber(1);

        $this->assertEquals(1, $result);

    }

}