<?php

namespace src\creational\AbstractFactory\DocumentFactory\WordDocument;

use src\creational\AbstractFactory\DocumentFactory\DocumentHeader;

class WordDocumentHeader implements DocumentHeader  {

    public function generate() {
       echo "this is generate WordDocumentHeader";
    }
}
