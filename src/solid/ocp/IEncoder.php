<?php
namespace src\solid\ocp;

interface IEncoder
{
    public function encode($data): string;
}
