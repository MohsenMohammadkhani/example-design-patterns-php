<?php

namespace src\creational\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use src\creational\AbstractFactory\FormBuilder\Elements\TextInput;

class BootstrapTextInput implements TextInput {

    public function render() {
      echo  "<input type='text' />";
    }
}
