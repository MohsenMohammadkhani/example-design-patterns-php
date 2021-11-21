<?php
namespace src\behaviour\command\task;

use Illuminate\Http\Request;

class TaskController
{
    public function add(Request $request): void
    {
        $addTaskHandler = new AddTaskHandler();
        $addTaskCommand = new AddTaskCommand(
            $request->get('title'),
            $request->get('content'),
            $addTaskHandler,
        );
        $addTaskCommand->execute();
    }
}
