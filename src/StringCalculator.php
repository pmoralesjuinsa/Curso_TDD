<?php


namespace Src;


class StringCalculator
{
    public function sum($numbers)
    {
        $total = 0;

        if(empty($numbers)) {
            $numbers = 0;
        }

        $numbersArray = explode(",", $numbers);

        if(!empty($numbersArray)) {

            foreach($numbersArray as $number) {
                $total += $number;
            }

        }

        return $total;
    }
}