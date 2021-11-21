<?php

namespace src\creational\AbstractFactory\FormBuilder\Providers\Tailwind\Elements;

use src\creational\AbstractFactory\FormBuilder\Elements\TextInput;

class TailwindTextInput implements TextInput {

    public function render() {
      echo  "<input type='text' />";
    }
}
