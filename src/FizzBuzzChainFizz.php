<?php


namespace Src;


use Core\FizzBuzzAbstract;

class FizzBuzzChainFizz extends FizzBuzzAbstract
{
    public function handle($number)
    {
        if($number % 3 === 0) {
            return "Fizz";
        }

        return null;
    }
}