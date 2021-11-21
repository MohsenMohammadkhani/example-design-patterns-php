<?php

namespace src\structural\adapter\Task\Packages;

use src\structural\adapter\Task\TaskStatus;

class MSTodoApi {


    public function getTasks():array {
        return  [
            new MSTodoTask('this is title','this is content',"INIT")
        ];
    }
}
