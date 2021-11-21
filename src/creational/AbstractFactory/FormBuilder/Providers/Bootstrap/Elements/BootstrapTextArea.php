<?php

namespace src\creational\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use src\creational\AbstractFactory\FormBuilder\Elements\TextArea;

class BootstrapTextArea implements TextArea {

    public function render() {
       echo "<textarea>textarea</textarea>";
    }
}
