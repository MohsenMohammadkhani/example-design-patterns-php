<?php

namespace App\Http\Controllers\AbstractFactory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use src\creational\AbstractFactory\DocumentFactory\DocumentFactory;

class DocumentController extends Controller {
    private $documentFactory;

    /**
     *
     */
    public function __construct() {
        $this->documentFactory = resolve(DocumentFactory::class);
    }

    public function output() {

        $header = $this->documentFactory->createHeader();
        $body = $this->documentFactory->createBody();
        $footer = $this->documentFactory->createFooter();
        $header->generate();
        $body->generate();
        $footer->generate();
    }

}
