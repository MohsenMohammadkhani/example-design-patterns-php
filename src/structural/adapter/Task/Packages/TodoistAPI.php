<?php

namespace src\structural\adapter\Task\Packages;

class TodoistAPI {

    private $token;

    /**
     * @param $token
     */
    public function __construct($token) { $this->token = $token; }

    /**
     * @return mixed
     */
    public function getToken() {
        return $this->token;
    }

    public function fetchTask(int $category, int $count): array {
        return [];
    }


}
