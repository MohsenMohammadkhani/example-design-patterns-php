<?php

namespace src\structural\adapter\Task;

class Task {

    private $title;
    private $description;
    private $status;

    /**
     * @param string $title
     * @param string $description
     * @param int $status
     */
    public function __construct(string $title, string $description, int $status) {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getStatus() {
        return $this->status;
    }

}
