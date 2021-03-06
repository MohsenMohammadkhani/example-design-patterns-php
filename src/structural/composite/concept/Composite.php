<?php

namespace src\structural\composite\concept;

class Composite implements Component {

    private $components = [];

    public function addComponent(Component $component) {
        $this->components[] = $component;
    }

    public function operation() {
        foreach ($this->components as $component) {
            $component->operation();
        }
    }
}
