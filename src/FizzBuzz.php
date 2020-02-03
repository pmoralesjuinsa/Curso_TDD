<?php


namespace Src;


class FizzBuzz
{
    public function passNumber($number)
    {
        if(!is_int($number)) {
            throw new \Exception("el valor no es un entero");
        }

        return $number;
    }
}