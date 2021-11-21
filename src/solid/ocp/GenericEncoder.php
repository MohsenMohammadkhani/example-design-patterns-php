<?php

namespace src\solid\ocp;

class GenericEncoder
{
    private $encoderEncoder;

    public function __construct(IEncoderFactory $encoderEncoder)
    {
        $this->encoderEncoder = $encoderEncoder;
    }

    public function encode($data, string $format): string
    {
        $encoder = $this->encoderEncoder->createEncoder($format);
        return $encoder->encode($data);
    }
}
