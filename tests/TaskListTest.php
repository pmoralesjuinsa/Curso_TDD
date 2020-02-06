<?php


namespace TDD\Tests;


use PHPUnit\Framework\TestCase;
use Src\TaskList;

class TaskListTest extends TestCase
{
    protected $taskList;
    protected $nameList = "Cosas";
    protected $nameTask = "mitarea";

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
    public function add_list_by_name_param_cosas()
    {
        $added = $this->taskList->addListByName($this->nameList);

        $this->assertTrue($added);
    }

    /** @test */
    public function get_list_by_name_param()
    {
        $result['name'] = $this->nameList;

        $list = $this->taskList->getListByName($result['name']);

        $this->assertSame($result['name'], $list['name']);
    }

    /** @test */
    public function add_task_to_list_by_name_param_mitarea()
    {
        $added = $this->taskList->addTaskToList($this->nameTask, $this->nameList);

        $this->assertTrue($added);
    }

    /** @test */
    public function delete_list_by_name_param_cosas()
    {
        $deleted = $this->taskList->deleteListByName($this->nameList);

        $this->assertTrue($deleted);
    }

}