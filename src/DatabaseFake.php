<?php


namespace Src;


class DatabaseFake
{
    public static function initConnection() {}

    public static function getStringWhenThreeNumber()
    {
        return "Fizz";
    }
}