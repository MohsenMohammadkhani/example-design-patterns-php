<?php
namespace src\behaviour\visitor\fileSystem;

class SizeVisitor implements Visitor
{
    public function visitFile(File $file)
    {
        return $file->getSize();
    }

    public function visitDirectory(Directory $directory)
    {
        $totalSize = 0;
        foreach ($directory->files() as $file) {
            $totalSize += $this->visitFile($file);
        }
        return $totalSize;
    }
}
