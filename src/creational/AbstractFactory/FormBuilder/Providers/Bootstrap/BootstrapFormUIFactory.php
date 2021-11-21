<?php

namespace src\creational\AbstractFactory\FormBuilder\Providers\Bootstrap;

use src\creational\AbstractFactory\FormBuilder\Elements\Button;
use src\creational\AbstractFactory\FormBuilder\Elements\RadioButton;
use src\creational\AbstractFactory\FormBuilder\Elements\TextArea;
use src\creational\AbstractFactory\FormBuilder\Elements\TextInput;
use src\creational\AbstractFactory\FormBuilder\FormUIBuilder;
use src\creational\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapButton;
use src\creational\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapRadioButton;
use src\creational\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapTextArea;
use src\creational\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapTextInput;

class BootstrapFormUIFactory implements FormUIBuilder {

    public function createButton(): Button {
        return  new BootstrapButton();
    }

    public function createRadioButton(): RadioButton {
        return  new BootstrapRadioButton();
    }

    public function createTextArea(): TextArea {
        return  new BootstrapTextArea();
    }

    public function createTextInput(): TextInput {
        return  new BootstrapTextInput();
    }
}
