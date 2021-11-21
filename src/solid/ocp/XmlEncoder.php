<?php
namespace src\solid\ocp;

class XmlEncoder implements IEncoder
{
    public function __construct()
    {}

    public function encode($data): string
    {
        return "xml encode";
    }
}
