<?php

namespace src\creational\AbstractFactory\DocumentFactory\PDFDocument;

use src\creational\AbstractFactory\DocumentFactory\DocumentBody;
use src\creational\AbstractFactory\DocumentFactory\DocumentFactory;
use src\creational\AbstractFactory\DocumentFactory\DocumentFooter;
use src\creational\AbstractFactory\DocumentFactory\DocumentHeader;

class PDFDocumentFactory implements DocumentFactory  {

    public function createHeader(): DocumentHeader {
        return  new PDFDocumentHeader();
    }

    public function createBody(): DocumentBody {
        return  new PDFDocumentBody();
    }

    public function createFooter(): DocumentFooter {
        return  new PDFDocumentFooter();
    }
}
