<?php

namespace src\structural\adapter\Task\Packages;

class TodoistTask {
    private $name;
    private $createAt;

    /**
     * @param $name
     * @param $createAt
     */
    public function __construct($name, $createAt) {
        $this->name = $name;
        $this->createAt = $createAt;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCreateAt() {
        return $this->createAt;
    }


}
