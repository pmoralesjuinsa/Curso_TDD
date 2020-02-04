<?php


namespace Src;

class FizzBuzz
{
    CONST FIZZ_NUMBER = 3;
    CONST BUZZ_NUMBER = 5;

    protected $databaseFake;

    public  function __construct($databaseFake)
    {
        $this->databaseFake = $databaseFake;
    }

    public function passNumber($number)
    {
        $this->checkNumberIsInteger($number);

        return $this->checkFizzNumber($number);

    }


    public function checkFizzNumber($number)
    {
        $result = $number;

        if($this->isMultipleOfThree($number)) {
            $result = $this->databaseFake->getStringWhenThreeNumber();
        }

        if($this->isMultipleOfFive($number)) {
            $result = "Buzz";
        }

        return $result;
    }

    /**
     * @param $number
     * @throws \Exception
     */
    public function checkNumberIsInteger($number): void
    {
        if (!is_int($number)) {
            throw new \Exception("el valor no es un entero");
        }
    }

    /**
     * @param $number
     * @return bool
     */
    public function isMultipleOfThree($number): bool
    {
        return $number % self::FIZZ_NUMBER === 0;
    }

    /**
     * @param $number
     * @return bool
     */
    public function isMultipleOfFive($number): bool
    {
        return $number % self::BUZZ_NUMBER === 0;
    }

}