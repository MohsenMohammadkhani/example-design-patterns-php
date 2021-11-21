<?php

namespace src\creational\AbstractFactory\DocumentFactory\PDFDocument;

use src\creational\AbstractFactory\DocumentFactory\DocumentBody;

class PDFDocumentBody implements DocumentBody  {

    public function generate() {
       echo "this is generate PDFDocumentBody";
    }
}
