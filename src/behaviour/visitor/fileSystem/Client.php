<?php
namespace src\behaviour\visitor\fileSystem;

class Client
{
    public function showFileSize(File $file)
    {
        # code...
        return $file->accept(new SizeVisitor());
    }
}
