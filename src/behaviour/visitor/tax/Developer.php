<?php
namespace src\behaviour\visitor\tax;

class Developer implements Employee
{
    public function salary(): float
    {
        return 500;
    }
    public function accept(Visitor $visitor)
    {
        return $visitor->visitLowRange($this);
    }
}
