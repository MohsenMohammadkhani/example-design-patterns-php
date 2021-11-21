<?php

namespace src\creational\AbstractFactory\DocumentFactory\HTMLDocument;

use src\creational\AbstractFactory\DocumentFactory\DocumentBody;

class HTMLDocumentBody implements DocumentBody  {

    public function generate() {
       echo "this is generate HTMLDocumentBody";
    }
}
