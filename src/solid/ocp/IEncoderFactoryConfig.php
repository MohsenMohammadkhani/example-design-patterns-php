<?php
namespace src\solid\ocp;

interface IEncoderFactoryConfig
{
    public function addFactory(string $format, callable $factory): void;
}
