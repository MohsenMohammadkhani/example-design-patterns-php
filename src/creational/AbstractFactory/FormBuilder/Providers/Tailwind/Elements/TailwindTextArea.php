<?php

namespace src\creational\AbstractFactory\FormBuilder\Providers\Tailwind\Elements;

use src\creational\AbstractFactory\FormBuilder\Elements\TextArea;

class TailwindTextArea implements TextArea {

    public function render() {
       echo "<textarea>textarea</textarea>";
    }
}
