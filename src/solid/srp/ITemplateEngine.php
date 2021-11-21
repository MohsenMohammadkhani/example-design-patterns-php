<?php

namespace src\solid\srp;

interface ITemplateEngine
{
    public function render(string $template, array $params): string;
}
