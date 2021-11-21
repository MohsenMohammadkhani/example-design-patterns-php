<?php

namespace src\creational\AbstractFactory\FormBuilder\Providers\Tailwind;

use src\creational\AbstractFactory\FormBuilder\Elements\Button;
use src\creational\AbstractFactory\FormBuilder\Elements\RadioButton;
use src\creational\AbstractFactory\FormBuilder\Elements\TextArea;
use src\creational\AbstractFactory\FormBuilder\Elements\TextInput;
use src\creational\AbstractFactory\FormBuilder\FormUIBuilder;
use src\creational\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TailwindRadioButton;
use src\creational\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TailwindTextArea;
use src\creational\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TailwindTextInput;
use src\creational\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TailwindButton;

class TailwindFormUIFactory implements FormUIBuilder {

    public function createButton(): Button {
       return new TailwindButton();
    }

    public function createRadioButton(): RadioButton {
        return new TailwindRadioButton();
    }

    public function createTextArea(): TextArea {
      return  new TailwindTextArea();
    }

    public function createTextInput(): TextInput {
        return  new TailwindTextInput();
    }
}
