<?php
namespace src\solid\lsp;

interface FileInterface
{
    public function move();
    public function copy();
    public function rename();
}
