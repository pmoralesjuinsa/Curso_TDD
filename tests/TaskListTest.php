<?php


namespace TDD\Tests;


use PHPUnit\Framework\TestCase;
use Src\TaskList;

class TaskListTest extends TestCase
{
    protected $taskList;

    public function setUp() : void
    {
        $this->taskList = new TaskList();
    }

    /** @test */
    public function get_empty_listcollection_from_sqlite_file()
    {
        $listCollection = $this->taskList->getListCollection();

        $this->assertIsArray($listCollection);
    }

    /** @test */
    public function get_list_by_name_param()
    {
        $result['name'] = "Cosas";

        $list = $this->taskList->getListByName($result['name']);

        $this->assertSame($result['name'], $list['name']);
    }

}