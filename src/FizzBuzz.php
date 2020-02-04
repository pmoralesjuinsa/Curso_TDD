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

        return $this->checkFizzBuzzNumber($number);

    }


    protected function checkFizzBuzzNumber($number)
    {
        $result = '';

        $result = $this->filterNumberResultIfMultiple(
            $number,
            self::FIZZ_NUMBER,
            $this->databaseFake,
            'getStringWhenThreeNumber',
            $result
        );

        $result = $this->filterNumberResultIfMultiple(
            $number,
            self::BUZZ_NUMBER,
            $this->databaseFake,
            'getStringWhenFiveNumber',
            $result
        );

        return (empty($result) ? $number : $result);
    }

    /**
     * @param $number
     * @throws \Exception
     */
    protected function checkNumberIsInteger($number): void
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
    protected function isMultiple($number, $multipler): bool
    {
        return $number % $multipler === 0;
    }

    /**
     * @param $number
     * @param $multipler
     * @param $database
     * @param $funct
     * @param $result
     * @return mixed
     */
    protected function filterNumberResultIfMultiple($number, $multipler, $database, $funct, $result)
    {
        if ($this->isMultiple($number, $multipler)) {
            $result .= $database->$funct();
        }

        return $result;
    }

}