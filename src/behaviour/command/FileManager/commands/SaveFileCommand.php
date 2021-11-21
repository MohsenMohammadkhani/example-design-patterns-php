<?php
namespace src\behaviour\command\FileManager\commands;

use src\behaviour\command\FileManager\FileCommand;
use src\behaviour\command\FileManager\FileManager;

class SaveFileCommand implements FileCommand
{
    private $fileManager;
    private $file;

    public function __construct(FileManager $fileManager, $file)
    {
        $this->fileManager = $fileManager;
        $this->file = $file;
    }

    public function execute()
    {
        $this->fileManager->save($this);
    }
}
