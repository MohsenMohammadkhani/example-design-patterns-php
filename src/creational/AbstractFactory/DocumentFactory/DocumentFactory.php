<?php

namespace src\creational\AbstractFactory\DocumentFactory;

interface DocumentFactory {
    public function createHeader():DocumentHeader;
    public function createBody():DocumentBody;
    public function createFooter():DocumentFooter;
}
