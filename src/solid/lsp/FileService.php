<?php
namespace src\solid\lsp;

class FileService implements FileServiceInterface
{
    private $file;

    public function __construct(FileService $file)
    {
        $this->file = $file;
    }

    public function encode(FileService $fileService): void
    {

    }
}
