<?php


namespace Src;


class DatabaseFake
{
    public function initConnection() {}

    public function getStringWhenThreeNumber()
    {
        return "Fizz";
    }
}