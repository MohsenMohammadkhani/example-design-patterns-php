<?php

namespace src\behaviour\visitor\fileSystem;

class File implements FileSystem
{
    public function getSize(): float
    {
        return 120;
    }

    public function accept(Visitor $visitor)
    {
        $visitor->visitFile($this);
    }

}
