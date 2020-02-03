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

        $delimiterAndNumbersArray = $this->getDelimiterAndNumbersArray($numbers);
        $numbersArray = $this->getNumbers($delimiterAndNumbersArray['numbers'], $delimiterAndNumbersArray['delimiter']);

        foreach($numbersArray as $number) {
            if($number < 0) {
                throw new \Exception('negatives not allowed');
            }
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

    /**
     * @param $numbers
     * @return array
     */
    public function getDelimiterAndNumbersArray($numbers)
    {
        if(preg_match('#^\/\/(.)(\\n)([0-9].*)#i', $numbers, $matches)) {
            $result['numbers'] = $matches[3];
            $result['delimiter'] = $matches[1];
        } else {
            $result['numbers'] = $numbers;
            $result['delimiter'] = ",";
        }

        return $result;
    }

}