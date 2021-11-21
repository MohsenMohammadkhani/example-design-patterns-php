<?php
namespace src\solid\lsp;

interface DownloadableFileInterface extends FileInterface
{
    public function download();
}
