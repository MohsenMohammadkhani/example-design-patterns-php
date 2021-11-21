<?php

namespace src\structural\Decorator\ReportGenerator;

class ReportWithHeader extends ReportDecorator {

    public function generate(): string {
        return 'this is ReportWithHeader';
    }

}
