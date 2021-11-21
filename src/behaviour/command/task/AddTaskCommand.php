<?php

namespace src\behaviour\command\task;

class AddTaskCommand implements Command
{

    private $title;
    private $content;
    private $addTaskHandler;

    public function __construct($title, $content, AddTaskHandler $addTaskHandler)
    {
        $this->title = $title;
        $this->content = $content;
        $this->addTaskHandler = $addTaskHandler;
    }

    public function execute()
    {
        $this->addTaskHandler->execute($this);
    }
}
