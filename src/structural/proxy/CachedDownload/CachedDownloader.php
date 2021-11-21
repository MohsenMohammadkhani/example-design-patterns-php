<?php
namespace src\structural\proxy\CachedDownload;

class CachedDownloader implements Downloader
{

    private $downloader;

    public function __construct(Downloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $url)
    {
        $fileName = basename($url);
        if (!file_exists(__DIR__ . 'storage' . DIRECTORY_SEPARATOR . $fileName)) {
            $downloadFile = $this->downloader->download($url);
            file_put_contents($fileName, $downloadFile);
        }
        return env('APP_URL') . '/public/storage' . $fileName;

    }
}
