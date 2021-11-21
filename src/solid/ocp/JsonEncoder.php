<?php
namespace src\solid\ocp;

class JsonEncoder implements IEncoder
{
    public function __construct()
    {}

    public function encode($data): string
    {
        return "json encode";
    }
}
