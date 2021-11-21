<?php

namespace src\structural\Decorator\ReportGenerator;

class Client {
    public function getReport() {
        $report = new ReportService();
        $withHeader = new ReportWithHeader($report);
        echo $withHeader->generate();
    }
}
