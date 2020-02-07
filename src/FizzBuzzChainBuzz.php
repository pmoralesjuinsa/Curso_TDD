<?php


namespace Src;


use Core\FizzBuzzAbstract;

class FizzBuzzChainBuzz extends FizzBuzzAbstract
{
    public function handle($number)
    {
        if($number == 5) {
            return "Buzz";
        }

        return null;
    }
}