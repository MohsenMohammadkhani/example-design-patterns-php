<?php

namespace src\creational\AbstractFactory\FormBuilder;

use src\creational\AbstractFactory\FormBuilder\Elements\Button;
use src\creational\AbstractFactory\FormBuilder\Elements\RadioButton;
use src\creational\AbstractFactory\FormBuilder\Elements\TextArea;
use src\creational\AbstractFactory\FormBuilder\Elements\TextInput;

interface FormUIBuilder {
    public function createButton():Button;
    public function createRadioButton():RadioButton;
    public function createTextArea():TextArea;
    public function createTextInput():TextInput;
}
