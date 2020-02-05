<?php


namespace TDD\Tests;


use PHPUnit\Framework\TestCase;
use Src\TaskList;

class TaskListTest extends TestCase
{
    protected $taskList;

    public function setUp() : void
    {
        $this->taskList = new TaskList("src/Db/DbSqlLite.db");
    }

    /** @test */
    public function get_empty_listcollection_with_stub()
    {
        $taskListStub = $this->createStub(TaskList::class);
        $taskListStub->method('getListCollection')->willReturn([]);

        $listCollection = $taskListStub->getListCollection();

        $this->assertSame(array(), $listCollection);
    }

    /** @test */
    public function get_empty_listcollection_from_sqlite_file()
    {
        $listCollection = $this->taskList->getListCollection();

        $this->assertIsArray($listCollection);
    }

}