<?php

namespace src\behaviour\visitor\fileSystem;

class Directory implements FileSystem
{

    private $files = [];

    public function files(): array
    {
        return $this->files;
    }

    public function accept(Visitor $visitor)
    {
        $visitor->visitDirectory($this);
    }

}
