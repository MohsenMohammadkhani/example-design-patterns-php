<?php

namespace src\creational\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use src\creational\AbstractFactory\FormBuilder\Elements\Button;

class BootstrapButton implements Button {

    public function render() {
        echo  "<button>button</button>";
    }
}
