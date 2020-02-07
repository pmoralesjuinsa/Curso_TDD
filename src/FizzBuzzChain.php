<?php


namespace Src;

class FizzBuzzChain
{

    public function passNumber($number)
    {
        if (!is_int($number)) {
            throw new \Exception("$number no es un número");
        }

        return $number;
    }

}