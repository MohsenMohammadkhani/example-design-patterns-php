<?php

namespace src\structural\Decorator\ReportGenerator;

abstract class ReportDecorator implements ReportGenerator {

    protected $reportGenerator;

    /**
     * @param ReportGenerator $reportGenerator
     */
    public function __construct(ReportGenerator $reportGenerator) {
        $this->reportGenerator = $reportGenerator;
    }

}
