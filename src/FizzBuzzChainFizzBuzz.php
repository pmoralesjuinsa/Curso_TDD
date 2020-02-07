<?php


namespace Src;


use Core\FizzBuzzAbstract;

class FizzBuzzChainFizzBuzz extends FizzBuzzAbstract
{
    public function handle($number)
    {
        if($number == 15) {
            return "FizzBuzz";
        }

        return null;
    }
}