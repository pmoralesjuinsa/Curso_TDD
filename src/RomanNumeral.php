<?php


namespace Src;


class RomanNumeral
{

    public function getRomanNumber($number)
    {
        $letter = $this->convertNumberToLetter($number);

        return $letter;
    }

    /**
     * @param $number
     * @return string
     */
    public function convertNumberToLetter($number): string
    {
        $letter = '';

        if ($number % 1 === 0) {
            $letter = "I";
        }

        if ($number % 2 === 0) {
            $letter = "II";
        }

        if($number % 5 === 0) {
            $letter = "V";
        }

        return $letter;
    }

}