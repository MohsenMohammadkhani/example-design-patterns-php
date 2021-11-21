<?php

namespace src\structural\Decorator\ReportGenerator;

class ReportWithFooter extends ReportDecorator {

    public function generate(): string {
        return 'this is ReportWithFooter';
    }
}
