<?php


namespace TDD\Tests;


use PHPUnit\Framework\TestCase;
use Src\FizzBuzz;
use Src\DatabaseFake;

class FizzBuzzTest extends TestCase
{

    protected $fizzbuzz;

    public function setUp() : void
    {
        $this->setUpDefault();
    }

    public function setUpWithStub() : void
    {

        $stubDB = $this->createStub(DatabaseFake::class);
        $stubDB->method('getStringWhenThreeNumber')->willReturn('Fizz');

        $this->fizzbuzz = new FizzBuzz($stubDB);
    }

    public function setUpWithFake() : void
    {
        $databaseStub = new class() {
            function initConnection() {}
            function getStringWhenThreeNumber() { return "Fizz"; }
            function getStringWhenFiveNumber() { return "Buzz"; }
        };

        $this->fizzbuzz = new FizzBuzz($databaseStub);
    }

    public function setUpDefault() : void
    {
        $this->fizzbuzz = new FizzBuzz(new DatabaseFake());
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

    /** @test */
    public function send_three_return_fish_with_spy()
    {
        $stub = $this->createMock(DatabaseFake::class);

        $stub->method('getStringWhenThreeNumber')
            ->willReturn('Fizz');

        $result = $this->fizzbuzz->passNumber(3);

        $this->assertSame($result, $stub->getStringWhenThreeNumber());

    }

//    /** @test */
//    public function pruebas()
//    {
////        $databaseStub = new class() {
////            function initConnection() {}
////            function getStringWhenThreeNumber() {}
////        };
//
//        $subject = new FizzBuzzWrapper(new DatabaseFake());
//
//        $result = $subject->passNumber(3);
//
//        $observer = $this->prophesize(DatabaseFake::class);
//
//        $result = $subject->passNumber(3);
//
//        $observer->getStringWhenThreeNumber()->shouldBeCalled();
//
//        $result = $subject->passNumber(3);
//
//        $subject->attach($observer->reveal());
//
//        $result = $subject->passNumber(3);
//
//        $subject->exposeDatabaseFakeProperty()->getStringWhenThreeNumber();
//
//        $result = $subject->passNumber(3);
//    }

    /** @test */
    public function send_five_return_buzz()
    {
        $result = $this->fizzbuzz->passNumber(5);

        $this->assertSame('Buzz', $result);
    }

    /** @test */
    public function send_fiveteen_return_fizzbuzz()
    {
        $result = $this->fizzbuzz->passNumber(15);

        $this->assertSame('FizzBuzz', $result);
    }

}

class FizzBuzzWrapper extends FizzBuzz
{
    protected $observers = [];

    public function attach(DatabaseFake $observer)
    {
        $this->observers[] = $observer;
    }

    public function exposeDatabaseFakeProperty()
    {
        return $this->databaseFake;
    }
}