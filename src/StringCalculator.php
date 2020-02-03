<?php


namespace Src;


class StringCalculator
{
    public function sum($numbers, $delimiter = ",")
    {
        $total = 0;

        if(empty($numbers)) {
            $numbers = 0;
        }

        $numbersArray = $this->getNumbers($numbers, $delimiter);

        foreach($numbersArray as $number) {
            $total += $number;
        }

        return $total;
    }

    /**
     * @param $numbers
     * @return array
     */
    public function getNumbers($numbers, $delimiter)
    {
        $numbersCleaned = str_replace("\n", $delimiter, $numbers);
        $numbersArray = explode($delimiter, $numbersCleaned);

        return array_filter($numbersArray);
    }

}