<?php


namespace Src;


class RomanNumeral
{

    protected $romans = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    );

    protected $numerals = array(
        1000 	=> 	'M',
        900 	=> 	'CM',
        500		=>	'D',
        400		=>	'CD',
        100		=>	'C',
        90		=>	'XC',
        50		=>	'L',
        40		=>	'XL',
        10		=>	'X',
        9		=>	'IX',
        5		=>	'V',
        4		=>	'IV',
        1		=>	'I'
    );


    public function getRomanFromNumber($number)
    {
        if (!is_int($number) || $number <= 0 || $number >= 4000)
        {
            return null;
        }

        $result = "";

        foreach ($this->numerals as $key => $value) {
            while ($number >= $key) {
                $result .= $value;
                $number = $number - $key;
            }
        }

        return $result;
    }

    public function getNumberFromRoman($roman)
    {
        $result = 0;

        foreach ($this->romans as $key => $value) {
            while (strpos($roman, $key) === 0) {
                $result += $value;
                $roman = substr($roman, strlen($key));
            }
        }

        return $result;
    }

}