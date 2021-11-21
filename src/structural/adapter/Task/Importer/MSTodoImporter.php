<?php

namespace src\structural\adapter\Task\Importer;

use src\structural\adapter\Task\Packages\MSTodoApi;
use src\structural\adapter\Task\TaskImporter;

class MSTodoImporter implements TaskImporter {
{

    private $MSTodoImporter;

    /**
     * @param $MSTodoImporter
     */
    public function __construct(MSTodoApi $MSTodoImporter) { $this->MSTodoImporter = $MSTodoImporter; }


    public function import(): array {
        return [];
    }
}
