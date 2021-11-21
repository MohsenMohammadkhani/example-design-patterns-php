<?php

namespace src\creational\AbstractFactory\FormBuilder\Providers\Tailwind\Elements;

use src\creational\AbstractFactory\FormBuilder\Elements\RadioButton;

class TailwindRadioButton implements RadioButton {

    public function render() {
        echo  "<input type='radio' />";
    }
}
