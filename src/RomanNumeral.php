<?php


namespace Src;


class RomanNumeral
{

    public function getRomanNumber($number)
    {
        $letter = '';

        if($number == 1) {
            $letter = "I";
        }

        if($number == 5) {
            $letter = "V";
        }

        return $letter;
    }

}