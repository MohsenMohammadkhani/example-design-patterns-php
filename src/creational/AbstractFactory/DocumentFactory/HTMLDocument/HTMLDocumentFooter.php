<?php

namespace src\creational\AbstractFactory\DocumentFactory\HTMLDocument;

use src\creational\AbstractFactory\DocumentFactory\DocumentFooter;

class HTMLDocumentFooter implements DocumentFooter  {

    public function generate() {
       echo "this is generate HTMLDocumentFooter";
    }
}
