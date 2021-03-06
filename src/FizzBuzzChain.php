<?php


namespace Src;

class FizzBuzzChain
{

    public function passNumber($number)
    {
        if (!is_int($number)) {
            throw new \Exception("$number no es un número");
        }

        $fizzBuzzChains = new FizzBuzzChainFizzBuzz(new FizzBuzzChainBuzz(new FizzBuzzChainFizz(new FizzBuzzChainNormal())));

        return $fizzBuzzChains->runHandlers($number);
    }

}