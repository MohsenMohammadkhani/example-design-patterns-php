<?php
namespace src\behaviour\visitor\fileSystem;

interface FileSystem
{
    public function accept(Visitor $visitor);
}
