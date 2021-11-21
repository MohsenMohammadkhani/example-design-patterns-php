<?php
namespace src\behaviour\command\FileManager\commands;

use src\behaviour\command\FileManager\FileCommand;
use src\behaviour\command\FileManager\FileManager;

class RemoveFileCommand implements FileCommand
{
    private $fileManager;
    private $fileID;

    public function __construct(FileManager $fileManager, $fileID)
    {
        $this->fileManager = $fileManager;
        $this->file = $fileID;
    }

    public function execute()
    {
        $this->fileManager->remove($this);
    }
}
