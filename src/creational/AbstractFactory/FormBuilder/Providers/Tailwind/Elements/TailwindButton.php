<?php

namespace src\creational\AbstractFactory\FormBuilder\Providers\Tailwind\Elements;

use src\creational\AbstractFactory\FormBuilder\Elements\Button;

class TailwindButton implements Button {

    public function render() {
        echo  "<button>button</button>";
    }
}
