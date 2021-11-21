<?php

namespace src\structural\composite\ProjectManagement;

interface ProjectComponent {
    public function done();
    public function duplicate();
    public function move();
    public function delete();
}
