<?php


namespace Src;


class RomanNumeral
{

    protected $restNumber;

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
        $this->restNumber = $number;


        $letter = $this->assignLetter($number, $letter);


        return $letter;
    }

    /**
     * @param $i
     * @param string $letter
     * @return string
     */
    public function assignLetter($number, $letter): string
    {
        if ($this->restNumber % 5 === 0 AND $this->restNumber > 0) {
            $this->restNumber -= $number;
            $letter .= "V";
            $this->assignLetter($this->restNumber, $letter);
        }

        if ($this->restNumber % 1 === 0 AND $this->restNumber > 0) {
            $this->restNumber -= $number;
            $letter .= "I";
            $this->assignLetter($this->restNumber, $letter);
        }

        return $letter;
    }

}