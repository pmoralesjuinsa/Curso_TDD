<?php


namespace Src;


class TaskList
{
    protected $database;

    function __construct()
    {

        $this->database = new \SQLite3(__DIR__."/Db/DbSqlLite.db");
    }

    public function getListCollection()
    {
        $listCollection = $this->database->query('SELECT * FROM lists');

        return $listCollection->fetchArray(\PDO::FETCH_OBJ);
    }

    public function getListByName($name)
    {
        $listCollection = $this->database->query("SELECT * FROM lists WHERE name = '$name'");

        return $listCollection->fetchArray(\PDO::FETCH_OBJ);
    }

    public function deleteListByName($name)
    {
        return $this->database->exec("DELETE FROM lists WHERE name = '$name'");
    }
}