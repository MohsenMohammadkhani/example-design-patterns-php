<?php

namespace src\behaviour\visitor\tax;

interface Employee
{
    public function accept(Visitor $visitor);
}
