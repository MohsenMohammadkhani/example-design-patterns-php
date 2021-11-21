<?php
namespace src\structural\proxy\CachedDownload;

interface Downloader
{
    public function download(string $url);
}
