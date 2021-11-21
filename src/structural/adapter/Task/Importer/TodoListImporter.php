<?php

namespace src\structural\adapter\Task\Importer;

use src\structural\adapter\Task\Packages\TodoistAPI;
use src\structural\adapter\Task\Packages\TodoistTask;
use src\structural\adapter\Task\Task;
use src\structural\adapter\Task\TaskImporter;
use src\structural\adapter\Task\TaskStatus;

class TodoListImporter implements TaskImporter {

    private $todoistApi;

    /**
     * @param $todoistApi
     */
    public function __construct(TodoistAPI $todoistApi) { $this->todoistApi = $todoistApi; }


    public function import(): array {
        $tasks = $this->todoistApi->fetchTask(0, 0);
        return collect($tasks)->map(function (TodoistTask $todoistTask) {
            return new Task($todoistTask->getName(), "", TaskStatus::INIT);
        })->toArray();
    }
}
