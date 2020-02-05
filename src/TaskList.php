<?php


namespace Src;


class TaskList
{
    protected $database;

    function __construct($databaseFile)
    {
        $this->database = new \SQLite3($databaseFile);
    }

    public function getListCollection()
    {

    }
}