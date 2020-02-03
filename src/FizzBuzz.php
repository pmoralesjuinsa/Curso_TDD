<?php


namespace Src;

class FizzBuzz
{
    CONST FIZZ_NUMBER = 3;

    public function passNumber($number)
    {
        if(!is_int($number)) {
            throw new \Exception("el valor no es un entero");
        }

        return $this->checkFizzNumber($number);

    }

    public function checkFizzNumber($number)
    {
        $result = $number;

        if($number%self::FIZZ_NUMBER === 0) {
            $result = DatabaseFake::getStringWhenThreeNumber();
        }

        return $result;
    }
}