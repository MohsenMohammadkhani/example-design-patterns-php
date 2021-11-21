<?php

namespace src\creational\AbstractFactory\DocumentFactory\WordDocument;

use src\creational\AbstractFactory\DocumentFactory\DocumentFooter;

class WordDocumentFooter implements DocumentFooter  {

    public function generate() {
       echo "this is generate WordDocumentFooter";
    }
}
