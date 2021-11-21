<?php

namespace src\structural\composite\concept;

class Client {

    private $component;

    /**
     * @param Component $component
     */
    public function __construct(Component $component ) {
       $this->component=$component;
    }
}
