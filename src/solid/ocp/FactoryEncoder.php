<?php
namespace src\solid\ocp;

class FactoryEncoder implements IEncoderFactory, IEncoderFactoryConfig
{

    private $factories = [];

    public function addFactory(string $format, callable $factory): void
    {
        $this->factories[$format] = $factory;
    }

    public function createEncoder($format): IEncoder
    {
        if (!isset($this->factories[$format])) {
            throw new \InvalidArgumentException('error ');
        }
        return $this->factories[$format];
    }

}
