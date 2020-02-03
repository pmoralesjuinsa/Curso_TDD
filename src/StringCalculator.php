<?php


namespace Src;


class StringCalculator
{
    public function Add($numbers)
    {
        $total = 0;
        $numbersArray = explode(",", $numbers);
        if(!empty($numbersArray)) {
            foreach($numbersArray as $number) {
                $total += $number;
            }
        }
        return $numbers;
    }
}