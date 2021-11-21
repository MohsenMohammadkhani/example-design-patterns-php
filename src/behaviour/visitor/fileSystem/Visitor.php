<?php

namespace src\behaviour\visitor\fileSystem;

interface Visitor
{
    public function visitFile(File $file);
    public function visitDirectory(Directory $directory);
}
