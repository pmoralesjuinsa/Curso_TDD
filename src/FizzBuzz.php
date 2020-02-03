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

        if($number%self::FIZZ_NUMBER === 0) {
            return "Fizz";
        }

        return $number;
    }
}