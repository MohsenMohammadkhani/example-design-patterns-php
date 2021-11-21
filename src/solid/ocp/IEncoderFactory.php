<?php
namespace src\solid\ocp;

interface IEncoderFactory
{
    public function createEncoder($format): IEncoder;
}
