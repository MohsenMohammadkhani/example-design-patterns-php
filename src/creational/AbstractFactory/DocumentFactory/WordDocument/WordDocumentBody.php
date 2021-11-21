<?php

namespace src\creational\AbstractFactory\DocumentFactory\WordDocument;

use src\creational\AbstractFactory\DocumentFactory\DocumentBody;

class WordDocumentBody implements DocumentBody  {

    public function generate() {
       echo "this is generate WordDocumentBody";
    }
}
