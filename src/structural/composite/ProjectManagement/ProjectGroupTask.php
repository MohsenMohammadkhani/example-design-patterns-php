<?php

namespace src\structural\composite\ProjectManagement;

class ProjectGroupTask implements ProjectComponent {

    private $task = [];

    public function add(ProjectTask $projectTask) {
        $this->task[] = $projectTask;
    }

    public function done() {
        foreach ($this->task as $task) {
            $task->done();
        }
    }

    public function duplicate() {
        // TODO: Implement duplicate() method.
    }

    public function move() {
        // TODO: Implement move() method.
    }

    public function delete() {
        // TODO: Implement delete() method.
    }
}
