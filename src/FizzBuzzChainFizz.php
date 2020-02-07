<?php


namespace Src;


use Core\FizzBuzzAbstract;

class FizzBuzzChainFizz extends FizzBuzzAbstract
{
    public function handle($number)
    {
        if($number == 3) {
            return "Fizz";
        }

        return null;
    }
}