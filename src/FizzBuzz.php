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

        if($this->isMultiple($number, self::FIZZ_NUMBER)) {
            $result = $this->databaseFake->getStringWhenThreeNumber();
        }

        if($this->isMultiple($number, self::BUZZ_NUMBER)) {
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
     * * @param $multipler
     * @return bool
     */
    public function isMultiple($number, $multipler): bool
    {
        return $number % $multipler === 0;
    }

}