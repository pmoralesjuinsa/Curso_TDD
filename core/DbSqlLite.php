<?php


namespace Core;


class DbSqlLite extends \SQLite3
{


    public function openConnection($file)
    {
        $handle = new \SQLite3($file);

        return $handle;
    }

    function __construct($filename, $flags = null, $encryption_key = null)
    {
        parent::__construct($filename, $flags, $encryption_key);
    }

    public function executeQuery($dbhandle,$query)
    {
        $array['dbhandle'] = $dbhandle;
        $array['query'] = $query;
        $result = $dbhandle->query($query);

        return $result;
    }
}