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
    public function get_lists()
    {
        $lists = $this->taskList->getLists();

        $this->assertSame(array(), $lists);
    }

}