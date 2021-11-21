<?php

namespace src\creational\AbstractFactory\DocumentFactory\WordDocument;

use src\creational\AbstractFactory\DocumentFactory\DocumentBody;
use src\creational\AbstractFactory\DocumentFactory\DocumentFactory;
use src\creational\AbstractFactory\DocumentFactory\DocumentFooter;
use src\creational\AbstractFactory\DocumentFactory\DocumentHeader;

class WordDocumentFactory implements DocumentFactory {

    public function createHeader(): DocumentHeader {
        return  new WordDocumentHeader();
    }

    public function createBody(): DocumentBody {
        return  new WordDocumentBody();
    }

    public function createFooter(): DocumentFooter {
        return  new WordDocumentFooter();
    }
}
