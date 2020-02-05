<?php


namespace Src;


class RomanNumeral
{

    public function getRomanNumber($number)
    {
        $letter = '';

        if($number == 1) {
            $letter = "i";
        }

        return $letter;
    }

}