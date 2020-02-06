<?php


namespace Src;


class RomanNumeral
{

    protected $restNumber;
    protected $romanLetters = ["V", "I"];
    protected $modNumbers = [5, 1];

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

        if($this->restNumber > 0) {
            $result = $this->restNumber % 5;
            if ($result === 0) {
                $this->restNumber -= $number;
                $letter .= "V";
                $letter = $this->assignLetter($this->restNumber, $letter);
            } elseif($result <= $number) {
                $letter .= "I";
                $this->restNumber -= 1;
                $letter = $this->assignLetter($this->restNumber, $letter);
            }
        }

        return $letter;
    }

}