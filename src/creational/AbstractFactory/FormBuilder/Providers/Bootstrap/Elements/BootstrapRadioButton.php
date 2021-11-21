<?php

namespace src\creational\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use src\creational\AbstractFactory\FormBuilder\Elements\RadioButton;

class BootstrapRadioButton implements RadioButton {

    public function render() {
        echo  "<input type='radio' />";
    }
}
