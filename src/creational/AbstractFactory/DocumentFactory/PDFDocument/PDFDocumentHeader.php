<?php

namespace src\creational\AbstractFactory\DocumentFactory\PDFDocument;

use src\creational\AbstractFactory\DocumentFactory\DocumentHeader;

class PDFDocumentHeader implements DocumentHeader  {

    public function generate() {
       echo "this is generate PDFDocumentHeader";
    }
}
