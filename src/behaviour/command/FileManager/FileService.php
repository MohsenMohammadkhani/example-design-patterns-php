<?php
namespace src\behaviour\command;

use Illuminate\Bus\Dispatcher;
use src\behaviour\command\FileManager\FileCommand;

class FileService
{

    private $command;
    private $commandBus;

    public function __construct(FileCommand $command, Dispatcher $commandBus)
    {
        $this->command = $command;
        $this->commandBus = $commandBus;
    }

    public function save()
    {
        $this->commandBus->dispatch($this->command);
    }
}
