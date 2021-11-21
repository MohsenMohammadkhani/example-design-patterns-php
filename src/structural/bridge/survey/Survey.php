<?php

namespace src\structural\bridge\survey;

abstract class Survey {
    protected $mode;

    /**
     * @param $mode
     */
    public function __construct(SurveyMode $mode) { $this->mode = $mode; }

    abstract public function display();

}
