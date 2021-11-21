<?php

namespace src\creational\AbstractFactory\DocumentFactory\PDFDocument;

use src\creational\AbstractFactory\DocumentFactory\DocumentFooter;

class PDFDocumentFooter implements DocumentFooter  {

    public function generate() {
       echo "this is generate PDFDocumentFooter";
    }
}
