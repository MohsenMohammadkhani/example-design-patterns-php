<?php

namespace src\solid\srp;

interface ITranslator
{
    public function translate(string $text): string;
}
