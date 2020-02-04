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
        $this->setUpWithStub();
    }

    public function setUpWithStub() : void
    {
//        $databaseStub = new class() {
//            function initConnection() {}
//            function getStringWhenThreeNumber() {}
//        };

        $stubDB = $this->createStub(DatabaseFake::class);
        $stubDB->method('getStringWhenThreeNumber')->willReturn('Fizz');

        $this->fizzbuzz = new FizzBuzz($stubDB);
    }

    public function setUpWithFake() : void
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

    /** @test */
    public function pruebas()
    {
        $subject = new FizzBuzzWrapper(new DatabaseFake());

        $observer = $this->prophesize(DatabaseFake::class);

        $observer->getStringWhenThreeNumber()->shouldBeCalled();

        $subject->attach($observer->reveal());

        $subject->exposeDatabaseFakeProperty()->getStringWhenThreeNumber();
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