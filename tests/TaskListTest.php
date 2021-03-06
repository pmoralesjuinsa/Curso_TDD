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
    public function send_false_to_list_check_get_exception_message()
    {
        $this->expectExceptionMessage("Lista no encontrada");
        $this->taskList->getExceptionIfListDoesntExists(false);
    }

    /** @test */
    public function get_exception_list_getting_list_no_existing()
    {
        $this->expectExceptionMessage("Lista no encontrada");

        $this->taskList->addTaskToList($this->nameTask, "No existe");
    }

    /** @test */
    public function add_task_to_list_by_name_param_mitarea()
    {
        $added = $this->taskList->addTaskToList($this->nameTask, $this->nameList);

        $this->assertTrue($added);
    }

    /** @test */
    public function delete_task_list_by_name_param()
    {
        $deletedTask = $this->taskList->deleteTaskListByName($this->nameTask, $this->nameList);

        $this->assertTrue($deletedTask);
    }

    /** @test */
    public function delete_list_by_name_param_cosas()
    {
        $deleted = $this->taskList->deleteListByName($this->nameList);

        $this->assertTrue($deleted);
    }

//    /** @test */
//    public function trace_function_add_task_to_list_by_name_param_mitarea()
//    {
//        //PROFECIA
////        $taskListMock = $this->prophesize(TaskList::class);
////        $taskListMock->getListByName()->shouldBeCalled();
////        $taskListMock->reveal();
////
////        $taskListMock->addTaskToList($this->nameTask, $this->nameList);
//
//        //STUB
////        $taskListStub = $this->createStub(TaskList::class);
////        $taskListStub->expects($this->once())->method('getListByName');
////
////        $taskListStub->addTaskToList($this->nameTask, $this->nameList);
//
//        //MOCK
//        $taskListMock = $this->getMockBuilder(TaskList::class)->getMock();
//        $taskListMock->expects($this->once())->method('getListByName')->willReturn(false);
//
//        $taskListMock->addTaskToList($this->nameTask, $this->nameList);
//    }

}