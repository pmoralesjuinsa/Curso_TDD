<?php


namespace Src;


class TaskList
{
    protected $database;

    function __construct()
    {

        $this->database = new \SQLite3("src/Db/DbSqlLite.db");
    }

    public function getListCollection()
    {
        $listCollection = $this->database->query('SELECT * FROM lists');

        return $listCollection->fetchArray();
    }
}