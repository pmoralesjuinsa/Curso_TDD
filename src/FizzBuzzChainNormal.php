<?php


namespace Src;


use Core\FizzBuzzAbstract;

class FizzBuzzChainNormal extends FizzBuzzAbstract
{
    public function handle($number)
    {
        return $number;
    }
}