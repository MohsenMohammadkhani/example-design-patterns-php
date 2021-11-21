<?php

namespace src\creational\AbstractFactory\DocumentFactory\HTMLDocument;

use src\creational\AbstractFactory\DocumentFactory\DocumentHeader;

class HTMLDocumentHeader implements DocumentHeader  {

    public function generate() {
       echo "this is generate HTMLDocumentHeader";
    }
}
