<?php

namespace src\structural\Facade\downloader;

class MediaDownloader {

    private $fileDownloader;
    private $fileEncoder;

    /**
     * @param $fileDownloader
     * @param $fileEncoder
     */
    public function __construct(FileDownloader $fileDownloader, FileEncoder $fileEncoder) {
        $this->fileDownloader = $fileDownloader;
        $this->fileEncoder = $fileEncoder;
    }


    public function downloadMP3(string $url) {
        $downloadedFile = $this->fileDownloader->download($url, 'sample-mp3');
        $encodedFile = $this->fileEncoder->encodeToMP3($downloadedFile);
    }
}
