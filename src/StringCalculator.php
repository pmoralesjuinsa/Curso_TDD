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

        $numbersArray = $this->getNumbers($numbers);

        foreach($numbersArray as $number) {
            $total += $number;
        }

        return $total;
    }

    /**
     * @param $numbers
     * @return array
     */
    public function getNumbers($numbers)
    {
        $numbersCleaned = str_replace("\n", ",", $numbers);
        $numbersArray = explode(",", $numbersCleaned);

        return array_filter($numbersArray);
    }
}