<?php

namespace src\creational\AbstractFactory\DocumentFactory\HTMLDocument;

use src\creational\AbstractFactory\DocumentFactory\DocumentBody;
use src\creational\AbstractFactory\DocumentFactory\DocumentFactory;
use src\creational\AbstractFactory\DocumentFactory\DocumentFooter;
use src\creational\AbstractFactory\DocumentFactory\DocumentHeader;

class HTMLDocumentFactory implements DocumentFactory  {

    public function createHeader(): DocumentHeader {
        return  new HTMLDocumentHeader();
    }

    public function createBody(): DocumentBody {
        return  new HTMLDocumentBody();
    }

    public function createFooter(): DocumentFooter {
        return  new HTMLDocumentFooter();
    }
}
