<?php


namespace Src;

class FizzBuzzChain
{

    public function passNumber($number)
    {
        if (!is_int($number)) {
            throw new \Exception("$number no es un número");
        }

        $fizzBuzzChainFizz = new FizzBuzzChainFizz();

        $result = $fizzBuzzChainFizz->handle($number);

        if (!is_null($result)) {
            return $result;
        }

        $fizzBuzzChainNormal = new FizzBuzzChainNormal();

        return $fizzBuzzChainNormal->handle($number);
    }

}