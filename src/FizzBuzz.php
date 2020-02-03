<?php


namespace Src;

class FizzBuzz
{
    CONST FIZZ_NUMBER = 3;
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

        if($number%self::FIZZ_NUMBER === 0) {
            $result = $this->databaseFake->getStringWhenThreeNumber();
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
}